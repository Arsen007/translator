<?php
class Words extends CFormModel{
    var $english;
    var $date;
    var $priority;
    var $russian;
    var $armenian;
    var $userID;
    var $wordID;

    public function getWords()
    {
        $connection = Yii::app()->db;
        $sql = 'SELECT * FROM `words` WHERE userID='.$this -> userID.' ORDER BY id DESC';
        $command = $connection->createCommand($sql);
        $result = $command -> query()->readAll();
        return $result;
    }
    public function addWord()
    {
        $connection = Yii::app()->db;
        $sql = 'INSERT INTO `words` VALUES (NULL,"'.$this -> english.'" , "'.$this -> date.'", "'.$this -> userID.'", "'.$this -> priority.'", "'.$this -> russian.'", "'.$this -> armenian.'")';
        $command = $connection->createCommand($sql);
        $result = $command -> query();
        return $result;
    }
    
    public function getWord()
    {
        $connection = Yii::app()->db;
        $sql = 'SELECT * FROM `words` WHERE id='.$this ->wordID;
        $command = $connection->createCommand($sql);
        $result = $command -> query()->readAll();
        return $result;
    }
    
    public function updateWord()
    {
        $connection = Yii::app()->db;
        $sql = 'UPDATE `words` SET word = "'.$this -> english.'",in_armenian = "'.$this -> armenian.'",in_russian="'.$this -> russian.'" WHERE id='.$this->wordID.'';
        $command = $connection->createCommand($sql);
        $result = $command -> query();
        return $result;        
    }
    public function deleteWord()
    {
        $connection = Yii::app()->db;
        $sql = 'DELETE FROM `words` WHERE id='.$this->wordID.'';
        $command = $connection->createCommand($sql);
        $result = $command -> query();
        return $result;
    }

}

?>