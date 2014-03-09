<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>
<?php  
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerCssFile($baseUrl.'/css/login.css');
  $cs->registerScriptFile($baseUrl.'/js/login_register.js');
  //$cs->registerCssFile($baseUrl.'/css/animate-custom.css');
?>
<h1>Login</h1>

<div id="errors" >
    <?php if(isset($error)){
        echo '<p>'.$error.'</p>';
    }?>
</div>
<div id="register_container" class="login_register_container">
    <div class="typers">
        <form action="" method="post" id="login_form">
    
        <p>
            <label for="email">E-mail: </label><br />
            <input type="text" name="email" id="email" value="<?php echo (isset($_POST['email'])?$_POST['email']:'')?>" />
        </p>
        <p>
            <label for="password">Password: </label><br />
            <input type="password" name="password" id="password" value="" />
        </p>
        <p>
            <input type="submit" name="submit" id="submit" value="Login" />
        </p>
    </div>
</div>
        </form>
