<?php

require_once 'includes/initialize.php';

$smarty = new MySmarty();

$rows = $cart->cart();
$items = $cart->payPalItems();

$smarty->assign('rows', $rows);
$smarty->assign('items', $items);
if(isset($_SESSION['total_amount'])) {
    $smarty->assign('total_amount', $_SESSION['total_amount']);
}

$smarty->display('header.tpl');
$smarty->display('cart.tpl');
$smarty->display('header.tpl');