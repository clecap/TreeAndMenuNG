<?php





public static function onGetPreferences( $user, &$preferences ) {       
  $preferences['tamng-cat1']   = ['section' => 'tamng-preference/catus1', 'type' => 'text',   'label' => 'Name of category'   ]; 
  $preferences['tamng-dep1']   = ['section' => 'tamng-preference/catus1', 'type' => 'text',    'label' => 'Leave empty to show name, number to show children to specified depth'   ];
  $preferences['tamng-sty1']   = ['section' => 'tamng-preference/catus1', 'type' => 'text',    'label' => 'CSS style specification for this element'   ];  
  $preferences['tamng-cat2']   = ['section' => 'tamng-preference/catus2', 'type' => 'text',  'label' => 'Name of category'   ]; 
  $preferences['tamng-dep2']   = ['section' => 'tamng-preference/catus2', 'type' => 'text',    'label' => 'Leave empty to show name, number to show children to specified depth'   ];
  $preferences['tamng-sty2']   = ['section' => 'tamng-preference/catus2', 'type' => 'text',    'label' => 'CSS style specification for this element'   ];  
  $preferences['tamng-cat3']   = ['section' => 'tamng-preference/catus3', 'type' => 'text',  'label' => 'Name of category'   ]; 
  $preferences['tamng-dep3']   = ['section' => 'tamng-preference/catus3', 'type' => 'text',    'label' => 'Leave empty to show name, number to show children to specified depth'   ];
  $preferences['tamng-sty3']   = ['section' => 'tamng-preference/catus3', 'type' => 'text',    'label' => 'CSS style specification for this element'   ];  
  $preferences['tamng-cat4']   = ['section' => 'tamng-preference/catus4', 'type' => 'text',  'label' => 'Name of category'   ]; 
  $preferences['tamng-dep4']   = ['section' => 'tamng-preference/catus4', 'type' => 'text',    'label' => 'Leave empty to show name, number to show children to specified depth'   ];
  $preferences['tamng-sty4']   = ['section' => 'tamng-preference/catus4', 'type' => 'text',    'label' => 'CSS style specification for this element'   ];  
  $preferences['tamng-cat5']   = ['section' => 'tamng-preference/catus5', 'type' => 'text',  'label' => 'Name of category'   ]; 
  $preferences['tamng-dep5']   = ['section' => 'tamng-preference/catus5', 'type' => 'text',    'label' => 'Leave empty to show name, number to show children to specified depth'   ];
  $preferences['tamng-sty5']   = ['section' => 'tamng-preference/catus5', 'type' => 'text',    'label' => 'CSS style specification for this element'   ];  
  $preferences['tamng-cat6']   = ['section' => 'tamng-preference/catus6', 'type' => 'text',  'label' => 'Name of category'   ]; 
  $preferences['tamng-dep6']   = ['section' => 'tamng-preference/catus6', 'type' => 'text',    'label' => 'Leave empty to show name, number to show children to specified depth'   ];
  $preferences['tamng-sty6']   = ['section' => 'tamng-preference/catus6', 'type' => 'text',    'label' => 'CSS style specification for this element'   ];  
  $preferences['tamng-cat7']   = ['section' => 'tamng-preference/catus7', 'type' => 'text',  'label' => 'Name of category'   ]; 
  $preferences['tamng-dep7']   = ['section' => 'tamng-preference/catus7', 'type' => 'text',    'label' => 'Leave empty to show name, number to show children to specified depth'   ];
  $preferences['tamng-sty7']   = ['section' => 'tamng-preference/catus7', 'type' => 'text',    'label' => 'CSS style specification for this element'   ];  
  $preferences['tamng-cat8']   = ['section' => 'tamng-preference/catus8', 'type' => 'text',  'label' => 'Name of category'   ]; 
  $preferences['tamng-dep8']   = ['section' => 'tamng-preference/catus8', 'type' => 'text',    'label' => 'Leave empty to show name, number to show children to specified depth'   ];
  $preferences['tamng-sty8']   = ['section' => 'tamng-preference/catus8', 'type' => 'text',    'label' => 'CSS style specification for this element'   ];  
  $preferences['tamng-cat9']   = ['section' => 'tamng-preference/catus9', 'type' => 'text',  'label' => 'Name of category'   ]; 
  $preferences['tamng-dep9']   = ['section' => 'tamng-preference/catus9', 'type' => 'text',    'label' => 'Leave empty to show name, number to show children to specified depth'   ];
  $preferences['tamng-sty9']   = ['section' => 'tamng-preference/catus9', 'type' => 'text',    'label' => 'CSS style specification for this element'   ];                  
     
}







// prepare for a pick-up of user interfaces
$user = $wgOut->getUser();  $userOptionsLookup = MediaWiki\MediaWikiServices::getInstance()->getUserOptionsLookup();  $wluOptions = $userOptionsLookup->getOptions( $user );

$cHtml = "<ul>";                    // start rendering the category tree information
$cHtml = $cHtml . self::renderHelper ($wluOptions['tamng-cat1'], $wluOptions['tamng-dep1'], $wluOptions['tamng-sty1']);
$cHtml = $cHtml . self::renderHelper ($wluOptions['tamng-cat2'], $wluOptions['tamng-dep2'], $wluOptions['tamng-sty2']);
$cHtml = $cHtml . self::renderHelper ($wluOptions['tamng-cat3'], $wluOptions['tamng-dep3'], $wluOptions['tamng-sty3']);
$cHtml = $cHtml . self::renderHelper ($wluOptions['tamng-cat4'], $wluOptions['tamng-dep4'], $wluOptions['tamng-sty4']);  
$cHtml = $cHtml . self::renderHelper ($wluOptions['tamng-cat5'], $wluOptions['tamng-dep5'], $wluOptions['tamng-sty5']);  
$cHtml = $cHtml . self::renderHelper ($wluOptions['tamng-cat6'], $wluOptions['tamng-dep6'], $wluOptions['tamng-sty6']);  
$cHtml = $cHtml . self::renderHelper ($wluOptions['tamng-cat7'], $wluOptions['tamng-dep7'], $wluOptions['tamng-sty7']);  
$cHtml = $cHtml . self::renderHelper ($wluOptions['tamng-cat8'], $wluOptions['tamng-dep8'], $wluOptions['tamng-sty8']);  
$cHtml = $cHtml . self::renderHelper ($wluOptions['tamng-cat9'], $wluOptions['tamng-dep9'], $wluOptions['tamng-sty9']);  
$cHtml = $cHtml . "</ul>";          // stop rendering the category tree information




extension.json snippet:

"DefaultUserOptions": {
    "tamng-cat1":  "",  "tamng-dep1":    "",  "tamng-sty1":    "",
    "tamng-cat2":  "",  "tamng-dep2":    "",  "tamng-sty2":    "",
    "tamng-cat3":  "",  "tamng-dep3":    "",  "tamng-sty3":    "",
    "tamng-cat4":  "",  "tamng-dep4":    "",  "tamng-sty4":    "",      
    "tamng-cat5":  "",  "tamng-dep5":    "",  "tamng-sty5":    "",      
    "tamng-cat6":  "",  "tamng-dep6":    "",  "tamng-sty6":    "",      
    "tamng-cat7":  "",  "tamng-dep7":    "",  "tamng-sty7":    "",      
    "tamng-cat8":  "",  "tamng-dep8":    "",  "tamng-sty8":    "",      
    "tamng-cat9":  "",  "tamng-dep9":    "",  "tamng-sty9":    ""
},







