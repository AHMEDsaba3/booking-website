<?php

class Contact extends Dbhc 
{
    protected function setData($first, $second, $country, $subject)
    {
        $stmt = $this->connect()->prepare('INSERT INTO contact (first,second,country,subject) VALUES (?,?,?,?);');
        
        $stmt->execute(array($first,$second,$country,$subject));
    }

}

?>