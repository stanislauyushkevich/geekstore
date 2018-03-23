<?php
    class CabinetController{
        public  function actionIndex(){
            $userId = User::chekLogged();
            $user = User::getUserById($userId);
            require_once (ROOT . '/views/cabinet/index.php');
            return true;
        }
        public function actionEdit(){
            $userId = User::chekLogged();
            $user = User::getUserById($userId);
            $name = $user['name'];
            $password = $user['password'];
            if (isset($_POST['submit'])){
                $name = $_POST['name'];
                $password = $_POST['password'];
                $errors = false;
                if (!User::checkName($name)){
                    $errors[]='Имя не короче двух символов';
                }
                if (!User::checkPassword($password)){
                    $errors[] = 'Пароль не короче 6 символов';
                }
                if ($errors == false){
                    $result = User::edit($userId, $name, $password);
                }

            }
            require_once (ROOT . '/views/cabinet/edit.php');
            return true;
        }
    }