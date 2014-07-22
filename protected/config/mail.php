<?php
return array(
    // Adding the default SMTP settings
    'Mailer' => 'smtp',  // not sure if this replacement for isSMTP() will work
    'Host' => 'mail.krethweb.org',
    'Port' => '2626',
    'SMTPAuth' => 'true',
    'Username' => 'sommelier@krethweb.org',
    'Password' => 'S0mmel!er',
    // default below here
    'viewPath' => 'application.views.mail',
    'layoutPath' => 'application.views.layouts',
    'baseDirPath' => 'webroot.images.mail',
    'savePath' => 'webroot.assets.mail',
    'testMode' => false,
    'layout' => 'mail',
    'CharSet' => 'UTF-8',
    'AltBody' => Yii::t('YiiMailer','You need an HTML capable viewer to read this message.'),
    'language' => array(
		'authenticate'         => Yii::t('YiiMailer','SMTP Error: Could not authenticate.'),
		'connect_host'         => Yii::t('YiiMailer','SMTP Error: Could not connect to SMTP host.'),
		'data_not_accepted'    => Yii::t('YiiMailer','SMTP Error: Data not accepted.'),
		'empty_message'        => Yii::t('YiiMailer','Message body empty'),
		'encoding'             => Yii::t('YiiMailer','Unknown encoding: '),
		'execute'              => Yii::t('YiiMailer','Could not execute: '),
		'file_access'          => Yii::t('YiiMailer','Could not access file: '),
		'file_open'            => Yii::t('YiiMailer','File Error: Could not open file: '),
		'from_failed'          => Yii::t('YiiMailer','The following From address failed: '),
		'instantiate'          => Yii::t('YiiMailer','Could not instantiate mail function.'),
		'invalid_address'      => Yii::t('YiiMailer','Invalid address'),
		'mailer_not_supported' => Yii::t('YiiMailer',' mailer is not supported.'),
		'provide_address'      => Yii::t('YiiMailer','You must provide at least one recipient email address.'),
		'recipients_failed'    => Yii::t('YiiMailer','SMTP Error: The following recipients failed: '),
		'signing'              => Yii::t('YiiMailer','Signing Error: '),
		'smtp_connect_failed'  => Yii::t('YiiMailer','SMTP Connect() failed.'),
		'smtp_error'           => Yii::t('YiiMailer','SMTP server error: '),
		'variable_set'         => Yii::t('YiiMailer','Cannot set or reset variable: ')
    ),
);