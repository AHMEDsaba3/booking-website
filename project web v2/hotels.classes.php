<?php

class Hotel{
    private $hotelID;

    public function __construct($hotelID){
        $this->hotelID = $hotelID;
    }
    public function getName(){
        $con = mysqli_connect("localhost", "root", "", "accommodations");
        if(mysqli_connect_error())
        {
            echo "Failed to connect: " . mysqli_connect_errno();
        }

        $result = mysqli_query($con,"SELECT name FROM hotels WHERE id = ?;");
        return $result;
    }

}

?>