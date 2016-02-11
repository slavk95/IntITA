<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('editable', dirname(__FILE__) . '/../extensions/x-editable');
$local_config = require(dirname(__FILE__) . '/local.php');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'INTITA',

    'sourceLanguage' => 'XS',
    'language' => 'ua',

    // preloading 'log' component
    'preload' => array(
        'log',
        'config',
        //'debug'
    ),

    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.models.accountancy.*',
        'application.models.message.*',
        'application.models.quiz.*',
        'application.models.slider.*',
        'application.components.*',
        'ext.imperavi-redactor-widget.*',
        //'ext.yii2-debug.*',
        'application.helpers.*',
        'editable.*', //easy include of editable classes
        'ext.giix-components.*', // giix components
        'application.components.Exceptions.*',
    ),

    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'generatorPaths' => array(
                'ext.giix-core', // giix generators
            ),
            'password' => 'admin',
        ),
        '_admin',
        '_teacher',
        '_accountancy',
    ),

    // application components
    'components' => array(
        'image' => array(
            'class' => 'application.extensions.image.CImageComponent',
            // GD or ImageMagick
            'driver' => 'GD',
            // ImageMagick setup path
            'params' => array('directory' => '/opt/local/bin'),
        ),

        'clientScript' => array(
            'class' => 'system.web.CClientScript',
        ),

        'cache' => array(
            'class' => 'system.caching.CFileCache',
        ),

        'messages' => array(
            'class' => 'CDbMessageSource',
            'cacheID' => 'cache',
            'cachingDuration' => !YII_DEBUG ? 3600 * 24 : 0,
            'sourceMessageTable' => 'sourcemessages',
            'translatedMessageTable' => 'translate',
        ),

        'user' => array(
            'loginUrl' => array('/site/index'),
            'allowAutoLogin' => true,
        ),

        'authManager' => array(
            'class' => 'application.components.AuthManager',
            'defaultRoles' => array('0'), // по умолчанию 0, то есть гость
        ),

        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'urlSuffix' => '/',
            'caseSensitive' => true,
            'rules' => array(
                '' => array('site/index', 'urlSuffix' => ''),
                '<action:login|logout|error|rapidReg>' => 'site/<action>',
                'courses/<selector:\w+>' => 'courses/index',
                'aboutus/<id:\d+>' => 'aboutus/index',
                'account/<courseId:\d+>' => 'payments/index',
                'cabinet' => '_teacher/cabinet/index',
                'profile/edit' => 'studentreg/edit',

                array('class' => 'CourseRule'),//rules for course page ($routes: 'course/index', 'module/index', 'lesson/index')
                '<module:\w+>/<controller:\w+>/<id:\d+>' => '<module>/<controller>/view',
                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                '<module:\w+>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<module>/<controller>/<action>',

                'profile/<idUser:\d+>' => 'studentreg/profile', /*TEMP Url for profile tabs */
                'teacher/<idTeacher:\d+>' => 'profile/index', /* Url for teacher page */
                'consultation/course_<idCourse:\d+>&lecture_<lectureId:\d+>' => 'consultationscalendar/index',

                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',

                '<controller:aajax>/<action:\w+>' => 'autoadmin/<controller>/<action>',
                '<controller:afile>/<action:\w+>' => 'autoadmin/<controller>/<action>',
                '<controller:\w+>/foreign-<key:\w+>' => 'autoadmin/<controller>/foreign<key>',
            ),
        ),

        'widgetFactory' => array(
            'enableSkin' => true,
        ),

        // database settings are configured in database.php
        'db' => $local_config['db'],
        'db2' => $local_config['db'],
        'dbForum' => $local_config['dbForum'],

        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),

        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CWebLogRoute',
                    'categories' => 'application',
                    'levels'=>'error, warning, trace, profile, info',
                    'showInFireBug' => true
                ),
            ),
        ),

        'config' => array(
            'class' => 'DConfig',
            //'cache'=>3600,
        ),

        //X-editable config
        'editable' => array(
            'class' => 'editable.EditableConfig',
            'form' => 'plain',        //form style: 'bootstrap', 'jqueryui', 'plain'
            'mode' => 'popup',            //mode: 'popup' or 'inline'
            'defaults' => array(              //default settings for all editable elements
                'emptytext' => 'Натисніть для редагування'
            )
        ),

        //'debug' => $local_config['debug'],

    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in teacher profile page
        'adminEmail' => 'Wizlightdragon@gmail.com',
        'languages' => array('en' => 'English', 'ua' => 'Ukrainian', 'ru' => 'Russian'),
    ),
);
