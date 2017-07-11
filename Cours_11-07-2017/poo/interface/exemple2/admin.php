<?php
    class Admin implements IAuth {
        public function authenticate($user)
        {
            echo "authenticate $_user : ADMIN";
        }
    }
?>