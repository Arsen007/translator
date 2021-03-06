<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/> <!--320-->
    <meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.mobile-1.4.2.min.css" />
<!--    <script src="--><?php //echo Yii::app()->request->baseUrl; ?><!--/js/jquery-1.9.0.js"></script>-->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php Yii::app()->clientScript->registerCoreScript('jquery.ui');     ?>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mobile-1.4.2.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.tablesorter.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/activity-indicator.js"></script>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/home.png" />', 'url'=>array('/site/index'),'linkOptions' => array('data-transition' => 'flow')),
				array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/login.png" />', 'url'=>array('/site/login'),'linkOptions' => array('data-transition' => 'flow'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/registration.png" />', 'url'=>array('/site/registration'),'linkOptions' => array('data-transition' => 'flow'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/add.png" />', 'url'=>array('/translate/AddWord'),'linkOptions' => array('data-transition' => 'flow'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/list.png" />', 'url'=>array('/translate/words'),'linkOptions' => array('data-transition' => 'flow'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/logout.png" />', 'url'=>array('/site/logout'), 'linkOptions' => array('data-transition' => 'flow'),'visible'=>!Yii::app()->user->isGuest)
			),
            'encodeLabel'=>false,

		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Arsen Sargsyan.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
