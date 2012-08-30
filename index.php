<?php

require_once 'includes/initialize.php';


$smarty = new MySmarty();

$categories = Products::listCategories();
$products = Products::listProducts();
$count_items = isset($_SESSION['count_items']) ? $_SESSION['count_items'] : 0;

$smarty->assign('categories', $categories);
$smarty->assign('products', $products);
$smarty->assign('count_items', $count_items);

$smarty->display('header.tpl');
$smarty->display('index.tpl');
$smarty->display('header.tpl');
