<?php
    class CatalogeController
    {
        public function actionIndex()
        {
            $category = [];
            $category = Category::getCategoriesList();
            $latestProducts = array();
            $latestProducts = Product::getLatestProducts();
            require_once(ROOT . '/views/catalog/index.php');
            return true;
        }

        public function actionCategory($categoryId, $page=1){
            $categoryList = [];
            $categoryList = Category::getCategoriesList();
            $categoryProducts = array();
            $category = Category::getCategoryById($categoryId);
            $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
            $total = Product::getTotalPtoductByCategory($categoryId);
            $pagination = new Pagination($total, $page, PRODUCT::SHOW_BY_DEFAULT, 'page-');
            require_once (ROOT  . '/views/catalog/category.php');
            return true;
        }
    }