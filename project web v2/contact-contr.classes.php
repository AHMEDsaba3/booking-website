<?php
class ContactContr extends Contact
{

    private $first;
    private $second; 
    private $country;
    private $subject;

    public function __construct($first, $second, $country, $subject){
        $this->first = $first;
        $this->second = $second;
        $this->country = $country;
        $this->subject = $subject;
    }

    public function insertData()
    {
        $this->setData($this->first, $this->second, $this->country, $this->subject);
        header("location: project.php?MessageSent");
    }


}   

?>