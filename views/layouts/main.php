<?php
use yii\helpers\Html;
use app\assets\AppAsset;

$bundle = AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language; ?>">
<head>
	<?= Html::csrfMetaTags(); ?>
	<meta charset="<?= Yii::$app->charset; ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= Html::encode($this->title); ?> - <?= Yii::$app->name; ?></title>
	<?php $this->head(); ?>
</head>
<body class="lightTheme">

<?php $this->beginBody(); ?>
<div class="logo">
	<img src="<?= $bundle->baseUrl; ?>images/aerial_logo_dark.png"/>
	<span class="pull-right" style="font-size: x-small;">
		<a href="javascript:;" onclick="switchThemes();">Toggle Theme</a>
	</span>
</div>
<?php echo $content; ?>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>