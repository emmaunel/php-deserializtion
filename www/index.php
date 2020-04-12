<?php

    // WHAT I NEED TO PEOPLE TO DO
    /**
     * 1) Create a user class(look at solver.php)
     * 2) If they changed the isAdmin to true, it should give them a hint about the RunCmd Class by running the ReadFIle Class
     * 3) And from there, modify the user class they created to cat the flag.txt
     */
    class RunCmd{
        public function __tostring(){
            echo system($this->cmd);
            return file_get_contents($this->filetoread);
        }
    }

    class ReadFile{
        public function __tostring(){
            return file_get_contents("test.php");
        }
    }

    class User{
        public $username;
        public $isAdmin;
        public $cmd;
        public $filname;

        // public function __construct($name, $status){
        //     $this->username = $name;
        //     $this->isAdmin = $status;
    
        // //     echo "WHat am i?? " . $isAdmin;
        // }

        // // public function __set($value){
        // //     echo 'Setting ' . $variable . ' to ' . $value;
        // //     $this->$username = $value;
        // // }

        // public function prin(){
        //     echo "Name " . $this->username . "\n";
        //     echo "statue" . $this->isAdmin . "\n";
        // }
        

        public function printData(){
            if($this->isAdmin){
                echo $this->username . " is an admin\n";
                echo "Here is my test code";
                echo " ";
                echo new ReadFile();
                echo $this->cmd;
            }else{
                echo $this->username . " is an not admin\n";
            }
        }

    }

    $obj = unserialize($_POST['user']);
    $obj->printData();

    // echo "<h1> CHECKING SERVER </h1>";
    // echo "I need a user class that has "
    // $name = $_GET['user'];
    // // $username = $name;
    // // echo "usernaem: " . $username . "\n";
    // $status = $_GET['status'];
    // // $isAdmin = $status;
    // // echo "status: " . $isAdmin . "\n";
    
    // $obj = new User($name, $status);
    // $obj->prin();
    // $obj->printData();
    // // echo $obj->printData();

?>