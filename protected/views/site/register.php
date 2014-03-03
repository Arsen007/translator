<?php

$this->pageTitle=Yii::app()->name . ' - Register';

?>
<?php  
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerCssFile($baseUrl.'/css/login.css');
  $cs->registerScriptFile($baseUrl.'/js/login_register.js');
  //$cs->registerCssFile($baseUrl.'/css/animate-custom.css');
?>
<h1>Registration</h1>
<div id="errors" >
</div>
<div id="login_container" class="login_register_container">
    <div class="typers">
        <form action="" method="post" id="register_form">
    
        <p>
            <label for="email">E-mail: </label><br />
            <input type="text" name="email" id="email" value="<?php echo (isset($_POST['email'])?$_POST['email']:'')?>" />
        </p>
        <p>
            <label for="username">Username: </label><br />
            <input type="text" name="username" id="username" value="<?php echo (isset($_POST['username'])?$_POST['username']:'')?>" />
        </p>
        <p>
            <label for="password">Password: </label><br />
            <input type="password" name="password" id="password" value="" />
        </p>
        <p>
            <label for="passwordConf">Password confirmation: </label><br />
            <input type="password" name="passwordConf" id="passwordConf" value="" />
        </p>
        <p>
            <input type="submit" name="submit" id="submit" value="Register" />
        </p>
        
        </form>
    </div>
</div>
				
      