<?php
    class User{
        public function __construct(){
            $this->username = "test";
            $this->isAdmin = True;
        }
    }

    $object = new User();
    echo serialize($object);

?>
