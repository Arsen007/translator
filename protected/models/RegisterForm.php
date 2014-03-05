<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class RegisterForm extends CFormModel
{
    public  $email;
    public  $username;
    public $password;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */

	public function rules()
	{
		return array(
			// username and password are required
			array('email, username, password', 'required'),

		);
	}

	/**
	 * Declares attribute labels.
	 */
//	public function attributeLabels()
//	{
//		return array(
//			'rememberMe'=>'Remember me next time',
//		);
//	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
//	public function authenticate($attribute,$params)
//	{
//		if(!$this->hasErrors())
//		{
//			$this->_identity=new UserIdentity($this->username,$this->password);
//			if(!$this->_identity->authenticate())
//				$this->addError('password','Incorrect username or password.');
//		}
//	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function write()
	{
        $connection=Yii::app()->db;
        $sql = 'INSERT INTO `users` VALUES (NULL,"'.$this -> email.'" , "'.$this -> username.'", "'.$this -> password.'")';
        $command = $connection->createCommand($sql);
        $result = $command -> execute(); 

        return $result;
	}
}
