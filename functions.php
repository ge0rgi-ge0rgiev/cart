<?php

function __autoload($class) {
    $file = LIB_PATH . DS . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    } else {
        die("The file {$class}.php could not found.");
    }
}

function redirect_to($location = '') {
    if ($location !== '') {
        header('Location: ' . $location);
        exit;
    }
}

function show_error() {
    if(SHOW_ERROR) {
        return mysql_error();
    }
}

function print_array($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function get_get($value) {
    return isset($_GET[$value]) ? (int)$_GET[$value] : false;
}

function append_total_amount($total_amount, $amount) {
  $total_amount += $amount;
}