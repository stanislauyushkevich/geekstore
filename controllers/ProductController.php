<?php

    class ProductController{
        public function actionView($id){
            $product = Product::getProductById($id);
            require_once (ROOT.'/views/product/view.php');
            return true;
        }
    }