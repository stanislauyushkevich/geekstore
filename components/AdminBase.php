<?php
    abstract class AdminBase{
        public static function checkAdmin(){
            $userId = User::chekLogged();
            $user = User::getUserById($userId);
            if ($user['role'] == 'admin'){
                return true;
            }
            die('Accses denid');
        }
    }