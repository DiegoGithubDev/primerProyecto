<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Transporte',
    // preloading 'log' component
    'preload' => array('log'),
    // path aliases
     //'xupload' => realpath(__DIR__ . '/../extensions/xupload'),
    'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
        'xupload' =>'ext.xupload'
    ),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'bootstrap.helpers.TbHtml',
        'application.helpers.*'
    ),
    //mi extension
    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'generatorPaths' => array('bootstrap.gii'),
            'password' => '123',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
        
        'jbackup'=>array(
                    'path' => __DIR__.'/../_backup/', //Directory where backups are saved
                    'layout' => '//layouts/_column2', //2-column layout to display the options
                    'filter' => 'accessControl', //filter or filters to the controller
                    'bootstrap' => true, //if you want the module use bootstrap components
                    'download' => true, // if you want the option to download
                    'restore' => true, // if you want the option to restore
                    'database' => true, //whether to make backup of the database or not
                    //directory to consider for backup, must be made array key => value array ($ alias => $ directory)
                    'directoryBackup'=>array( 
                       'folder/'=> __DIR__.'/../../folder/',
                    ),
                    //directory sebe not take into account when the backup
                    'excludeDirectoryBackup'=>array(
                       __DIR__.'/../../folder/folder2/',
                    ),
                    //files sebe not take into account when the backup
                    'excludeFileBackup'=>array(
                       __DIR__.'/../../folder/folder1/cfile.png',
                    ),
                    //directory where the backup should be done default Yii::getPathOfAlias('webroot')
                    'directoryRestoreBackup'=>__DIR__.'/../../' 
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        
        'image'=>array(
            'class'=>'application.extensions.image.CImageComponent',
            'driver'=>'GD',
        ),
        // uncomment the following to enable URLs in path-format
        /*
          'urlManager'=>array(
          'urlFormat'=>'path',
          'rules'=>array(
          '<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
          ),
          ),
         */

        // database settings are configured in database.php
        'db' => require(dirname(__FILE__) . '/database.php'),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
        // componente bootstrap
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
    
    
    
   
);
