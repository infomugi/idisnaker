	<?php

	// uncomment the following to define a path alias
	// Yii::setPathOfAlias('local','path/to/local-folder');

	// This is the main Web application configuration. Any writable
	// CWebApplication properties can be configured here.
	return array(
		'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name'=>'E-DISNAKER',

		// preloading 'log' component
		'preload'=>array('log'),

		// autoloading model and component classes
		'import'=>array(
			'application.models.*',
			'application.components.*',
			'application.modules.EExcelWriter.*', 
			'application.extensions.qrcode.QRCodeGenerator',
			'application.extensions.tcpdf.HTML2PDF',
			'application.extensions.crugeconnector.*',
			'ext.easyimage.EasyImage',
			),


		'modules'=>array(
			// uncomment the following to enable the Gii tool
			'gii'=>array(
				// 'generatorPaths' => array('bootstrap.gii'),
				'class'=>'system.gii.GiiModule',
				'password'=>'admin',
				// If removed, Gii defaults to localhost only. Edit carefully to taste.
				'ipFilters'=>array('127.0.0.1','::1'),
				),
			
			),

		'theme'=>'mugimaterial',
		'timeZone'=>'Asia/Jakarta',	
		'language'=>'id',
		'sourceLanguage'=>'id',

		// application components
		'components'=>array(

			'crugeconnector'=>array(
				'class'=>'ext.crugeconnector.CrugeConnector',
				'hostcontrollername'=>'site',
				'onSuccess'=>array('site/loginsuccess'),
				'onError'=>array('site/loginerror'),
				'clients'=>array(
					'facebook'=>array(
                // required by crugeconnector:
						'enabled'=>true,
						'class'=>'ext.crugeconnector.clients.Facebook',
						'callback'=>'http://localhost/project_skripsi_disnaker/app/facebook-callback.php',
                // required by remote interface:
						'client_id'=>"189361694420368",
						'client_secret'=>"c2d117ee043d2882b1f90a0f698253f6",
						'scope'=>'email, read_stream',
						),  
					'google'=>array(
                // required by crugeconnector:
						'enabled'=>true,
						'class'=>'ext.crugeconnector.clients.Google',
						'callback'=>'http://localhost/project_skripsi_disnaker/app1/google-callback.php',
                // required by remote interface:
						'hostname'=>'yoursite.com',
						'identity'=>'https://www.google.com/accounts/o8/id',
						'scope'=>array('contact/email'),
						),
					'tester'=>array(
                // required by crugeconnector:
						'enabled'=>false,
						'class'=>'ext.crugeconnector.clients.Tester',
                // required by remote interface:
						),
					),
				),			
			
			'easyImage' => array(
				'class' => 'application.extensions.easyimage.EasyImage',
		    // 'driver' => 'GD',
		    // 'quality' => 50,
		    // 'cachePath' => '/assets/easyimage/',
		    // 'cacheTime' => 2592000,
		    // 'retinaSupport' => false,
				),							

			'mail' => array(
				'class' => 'ext.yii-mail.YiiMail',
				'transportType' => 'smtp',
				'transportOptions'=>array(
					'host'=>'smtp.gmail.com',
					'encryption'=>'ssl', 
					'username'=>'infomugi.com@gmail.com',
					'password'=>'areyouhackerman?',
					'port'=>465,
					),
				'viewPath' => 'application.views.mail',
				'logging' => true,
				'dryRun' => false
				),


			'user'=>array(
				// enable cookie-based authentication
				'allowAutoLogin'=>true,
				),

			'authManager'=>array(
				'class'=>'RDbAuthManager',
				),
			
			// uncomment the following to enable URLs in path-format
			'urlManager'=>array(
				'urlFormat'=>'path',
				'rules'=>array(
					// '<controller:\w+>-<id:\d+>' || '<controller:\w+>/<id:\w+>'=>'<controller>/view',
					// '<controller:\w+>-<action:\w+>/<id:\d+>' || '<controller:\w+>/<action:\w+>/<id:\w+>'=>'<controller>/<action>',
					// '<controller:\w+>-<action:\w+>'=>'<controller>/<action>',

					'<controller:w+>/<id:d+>'=>'<controller>/view',
					'<controller:w+>/<action:w+>/<id:d+>'=>'<controller>/<action>',
					'<controller:w+>/<action:w+>'=>'<controller>/<action>',

					//Page URL Default Settings
					'login' => 'site/login',
					'logout' => 'site/logout',
					'dashboard' => 'site/dashboard',
					'index' => 'site/index', 
					'contact' => 'site/contact',

					//Page URL Activation and Reset
					'reset/<token:[a-zA-Z0-9-]+>/'=>'site/reset',
					'activation/<token:[a-zA-Z0-9-]+>/'=>'site/activation',

					 //Article Portfolio
					'portofolio' => 'article/portofolio',
					'article/<url:[a-zA-Z0-9-]+>/'=>'article/post',
					'tag/<name:[a-zA-Z0-9-]+>/'=>'article/category',

					 //Profile
					'/verify/<verify:[a-zA-Z0-9-]+>/'=>'certificate/decrypt',
					'/letter/<verify:[a-zA-Z0-9-]+>/'=>'wnaexistence/decrypt',
					'/member/<name:[a-zA-Z0-9-]+>/'=>'profile/user',
					'/profile/<view:[a-zA-Z0-9-]+>/'=>'users/profile',
					'/edit/<view:[a-zA-Z0-9-]+>/'=>'users/update',
				     // '<user:\w+>.localhost/project_startup/profile' => 'user/profile',

					),
				'showScriptName'=>false,
				'caseSensitive'=>false
				// 'urlSuffix'=>'.html',
				),

			'db'=>array(
				'connectionString' => 'mysql:host=localhost;dbname=i_disnaker',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => '',
				'charset' => 'utf8',
				),

	// 'db'=>array(
	// 	'connectionString' => 'mysql:host=localhost;dbname=u0282705_media',
	// 	'emulatePrepare' => true,
	// 	'username' => 'u0282705_media',
	// 	'password' => 'OICV(@e3Igt}',
	// 	'charset' => 'utf8',
	// 	),

			'errorHandler'=>array(
		// use 'site/error' action to display errors
				'errorAction'=>'site/error',
				),

			'log'=>array(
				'class'=>'CLogRouter',
				'routes'=>array(
					array(
						'class'=>'CFileLogRoute',
						'levels'=>'error, warning',
						),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
				),
				),
			),

						// application-level parameters that can be accessed
						// using Yii::app()->params['paramName']
	'params'=>array(
							// this is used in contact page
		'adminEmail'=>'infomugi.com@gmail.com',
		),
	);