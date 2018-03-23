<?php


    class SiteController
    {
        public function actionIndex()
        {
            $latestProducts = array();
            $latestProducts = Product::getLatestProducts();
            $sliderProducts = Product::getRecommendedProducts();
            require_once(ROOT . '/views/site/index.php');
            return true;
        }

        public function actionContact(){
            $userEmail = '';
            $userText = '';
            $result = false;
            if (isset($_POST['submit'])){
                $userEmail = $_POST['userEmail'];
                $userText = $_POST['userText'];
                $errors = false;
                if (!User::checkEmail($userEmail)){
                    $errors[] = 'Некоректный email';
                }
                if ($errors == false){
                    $adminEmail = 'stas.aaron13@yandex.ru';
                    $subject = 'Письмо от пользователя магазина';
                    $message = "Текст: $userText .От $userEmail";
                    $result = mail($adminEmail, $subject, $message);
                    $result = true;
                }
            }
            require_once (ROOT . '/views/site/contacts.php');
            return true;
        }
    }