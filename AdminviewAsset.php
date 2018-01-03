<?php
namespace yiioctopus\adminview;

use yii\web\AssetBundle;

/**
 * Main yiioctopus application asset bundle.
 */
class AdminviewAsset extends AssetBundle
{
    public $sourcePath = '@vendor/yiioctopus/yii2-adminview/asset';

    public $css = [
        'stylesheets/googleapis.css',
		'bootstrap/css/bootstrap.css',
		'font-awesome/css/font-awesome.css',
		'stylesheets/theme.css',
		'stylesheets/premium.css',
    ];
    public $js = [
		'js/jquery-1.11.1.min.js',
		'bootstrap/js/bootstrap.js',
		'js/ifname-1.0.0.js',
    ];
    public $depends = [
	];
}
