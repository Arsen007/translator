<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
	    $connection=Yii::app()->db;
        $sql = 'SELECT id FROM `users` WHERE `email`="'.$this->username.'" AND `password`="'.$this->password.'"';
        $command = $connection->createCommand($sql);
        $result = $command -> query() ->readAll();
        if(empty($result))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(false)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->errorCode=self::ERROR_NONE;
            $this->_id=$result[0]['id'];
//            $session=new CHttpSession;//modified
//            $session->open();
//            $session['loggedUserId']=$result[0]['id'];//modified
        }

		return !$this->errorCode;
	}
    
    public function getId()
    {
        return $this ->_id;
    }
}