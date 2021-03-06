<?php

define( 'THEME_PATH' ,          get_template_directory()            );
define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );

define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/dist/styles'       );
define( 'IMAGES_URL' ,          THEME_URL .    '/dist/images'       );
define( 'JS_URL' ,              THEME_URL .    '/dist/scripts'      );
define( 'FAVICONS_URL' ,        THEME_URL .    '/dist/favicon'      );
define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );


// LOADING CORE FILES
$folders = array( 'core', 'posttypes', 'functions', 'Classes' );

foreach ($folders as $folder) {
   foreach ( glob( THEME_PATH . "/inc/$folder/*.php" ) as $file ) {
      include_once $file;
   }
}
