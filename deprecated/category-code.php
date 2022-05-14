<?php






  // # Get all categories from the wiki - starting with a given root or otherwise detect root automagically (expensive) Returns an array as in  array ( 'Name' => (int) Depth, ... )
  // NOTE: We are just keeping this function in here as concept, we are not actually using it since we are populating the tree differently (via Javascript)
  public static function getAllCategories($namespace) {
    global $wgSelectCategoryRoot;

    // Get current namespace (save duplicate call of method)
    if ($namespace >= 0 && array_key_exists($namespace, $wgSelectCategoryRoot) && $wgSelectCategoryRoot[$namespace]) {
      // Include root and step into the recursion
      $allCats = array_merge(array($wgSelectCategoryRoot[$namespace] => 0), self::getChildren($wgSelectCategoryRoot[$namespace]));
    }
    else {
      $allCats = array();  // init return value
      $dbObj = wfGetDB(DB_MASTER);  // Get a database object   // CHC: changed to DB_MASTER  for freshness
      $tblCatLink = $dbObj->tableName('categorylinks');  // Get table names to access them in SQL query
      $tblPage = $dbObj->tableName('page');

      // Automagically detect root categories
      $sql = "  SELECT tmpSelectCat1.cl_to AS title
FROM $tblCatLink AS tmpSelectCat1
LEFT JOIN $tblPage    AS tmpSelectCatPage ON (tmpSelectCat1.cl_to = tmpSelectCatPage.page_title AND tmpSelectCatPage.page_namespace = 14)
LEFT JOIN $tblCatLink AS tmpSelectCat2 ON tmpSelectCatPage.page_id = tmpSelectCat2.cl_from
WHERE tmpSelectCat2.cl_from IS NULL GROUP BY tmpSelectCat1.cl_to";

      $res = $dbObj->query($sql, __METHOD__);   // Run the query

      while ($row = $dbObj->fetchRow($res)) {
        $allCats += array($row['title'] => 0);
        $allCats += self::getChildren($row['title']);
      }
      $dbObj->freeResult($res);   // Free result object
    }
    return $allCats;
  }