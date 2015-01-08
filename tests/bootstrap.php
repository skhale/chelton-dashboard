<?php
date_default_timezone_set('America/New_York');

defined('VENDOR_HOME') or define('VENDOR_HOME', __DIR__ . '/../vendor');

require_once VENDOR_HOME . '/autoload.php';
require_once VENDOR_HOME . '/yiisoft/yii2/Yii.php';

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config));