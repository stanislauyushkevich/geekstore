<?php

    class router {
        private $routes;
        public function __construct()
        {
            $routesPath = ROOT . '\config\routes.php';
            $this->routes = include($routesPath );
        }

        //ПОЛУЧАЕМ СТРОКУ ЗАПРОСА
        private function gerURL(){
            if(!empty($_SERVER['REQUEST_URI'])){
                return  trim($_SERVER['REQUEST_URI'], '/');
            }
        }


        /**
         *
         */
        public  function run()
         {
            $url = $this -> gerURL();//ПОЛУЧАЕМ СТРОКУ ЗАПРОСА

             //ПРОВЕРЯЕМ НАЛИЧИЕ ТАКОГО ЗАПРОСА В routes.php
             foreach ($this -> routes as $urlPattern => $path ){

                 // СРАВНИВАЕМ urlPattern и url
                if(preg_match("~$urlPattern~", $url)){
                   //ОПРЕДЕЛЯЕМ КАКОЙ КОНТРОЛЛЕР И ЭКШН ОБРАБАТЫВАЮТ ЗАПРОС
                    $internalRoute = preg_replace("~$urlPattern~", $path, $url);
                    $segments = explode('/',    $internalRoute);
                    $controllerName = array_shift($segments). 'Controller';
                    $controllerName = ucfirst($controllerName);
                    $actionName = 'action'.ucfirst(array_shift($segments));
                    $parameters = $segments;
                    //ПОДКЛЮЧАЕМ ФАЙЛ С КОНТРОЛЛЕРОМ
                    $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                    if(file_exists($controllerFile)){
                        include_once ($controllerFile);
                    }
                    //СОЗДАЕМ ОБЪЕКТ И ВЫЗЫВАЕМ МЕТОД
                    $controllerObject = new $controllerName;
                    $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                    if($result != null){
                        break;
                    }
                }
             }

         }
    }
