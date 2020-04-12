<?php

class RunCmd{
    public function __construct(){
        $this->filetoread = "garbarge";
        $this->cmd = "ls";
    }
}

    class User{
         public function __construct(){
             $this->username = "test";
             $this->isAdmin = True;
         }
    }

    $object = new User();
    echo serialize($object);
?>