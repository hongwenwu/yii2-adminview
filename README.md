# yii2-adminview
Yii2 开源后台模板。使用非常简单，只需要简单几步就可完成！

安装
----

安装这个扩展的首选方法是通过 [composer](http://getcomposer.org/download/)。

可以运行

```
composer require --prefer-dist yiioctopus/yii2-adminview "*"
```

也可以添加

```
"yiioctopus/yii2-adminview": "*"
```

到你的 `composer.json` 文件的包含部分。


使用
-----

一旦扩展安装完成，你可以简单的使用它如以下代码：

```
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yiioctopus\adminview\MainHeader;
use yiioctopus\adminview\MainMenu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="theme-blue">
<?php $this->beginBody() ?>

	<?php
		MainHeader::begin([
			'brandName' => 'Yii Octopus',
			//'brandUrl' => 'http://www.hostname.com',
			'userName' => 'yiioctopus',
			'options' => [
				'account' => [
					'name' => '个人中心',
					'url' => Url::to(['user/userinfo'],true),
				],
				'panel' => [
					[
						'name' => 'Users',
						'url' => Url::to(['user/index'],true),
					],
					[
						'name' => 'Security',
						'url' => Url::to(['user/security'],true),
					],
				],
				'logout' => [
					'name' => '退出',
					'url' => Url::to(['user/logout'],true),
				],
			]
		]);
		
		MainMenu::begin([
			'items' => [
				[
					'label' => Html::tag('i','',['class'=>'fa fa-fw fa-dashboard']).' Dashboard',
					'target' => 'dashboard-menu',
					'items' => [
						[
							'label' => 'Login',
							'url' => ['site/login'],
						],
						[
							'label' => 'media',
							'url' => ['site/media'],
						],
					],
				],
			],
			'options' => [
				'active' => ['site/login'],
			]
		]);
	?>

	<div class="content">
        
		<?= $content ?>
		
		<footer>
			<hr>
			<p class="pull-right">Collect from <a href="#" title="首页" target="_blank">首页</a></p>
			<p>© <?= date('Y-m-d') ?> <a href="#" target="_blank">Portnine</a></p>
		</footer>
	</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

```