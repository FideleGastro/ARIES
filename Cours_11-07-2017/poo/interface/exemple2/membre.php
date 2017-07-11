<?php
    class Member implements IAuth {
        public function authenticate($user)
        {
            echo "authenticate $_user : MEMBER";
        }
    }
?>