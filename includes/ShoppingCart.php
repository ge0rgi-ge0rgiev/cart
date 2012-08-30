<?php

require_once 'Database.php';

class ShoppingCart {

    public function __construct() {
        session_start();
        $this->addItem();
        $this->removeItem();
        $this->deleteItem();
    }

    public function addItem() {
        if (isset($_GET['add'])) {
            $id = (int) $_GET['add'];
            $row = $this->return_item_row($id);
            if ($row['quantity'] != $_SESSION['cart_' . $id]) {
                $_SESSION['cart_' . $id] += 1;
                $_SESSION['count_items'] += 1;
                $_SESSION['total_amount'] += $row['price'];
            }
            redirect_to($_SERVER['PHP_SELF']);
        }
    }

    public function removeItem() {
        if (isset($_GET['rem'])) {
            $id = (int) $_GET['rem'];
            $row = $this->return_item_row($id);
            $_SESSION['cart_' . $id]--;
            $_SESSION['count_items']--;
            $_SESSION['total_amount'] -= $row['price'];
            redirect_to($_SERVER['PHP_SELF']);
        }
    }

    public function deleteItem() {
        if (isset($_GET['del'])) {
            $id = (int) $_GET['del'];
            $row = $this->return_item_row($id);
            $_SESSION['count_items'] -= $_SESSION['cart_' . $id];
            $_SESSION['total_amount'] -= $row['price'] * $_SESSION['cart_' . $id];
            unset($_SESSION['cart_' . $id]);
            redirect_to($_SERVER['PHP_SELF']);
        }
    }

    private function return_item_row($id) {
        global $db;
        $id = $db->escape_value($id);
        $result = $db->query('SELECT * FROM products WHERE product_id = ' . $id);
        $row = $db->fetch_array($result);
        return $row;
    }

    public function cart() {
        global $db;
        $rows = array();

        foreach ($_SESSION as $name => $value) {
            if ($value > 0) {
                if (substr($name, 0, 5) == 'cart_') {
                    $id = substr($name, 5, strlen($name) - 5);
                    $result = $db->query('SELECT * FROM products WHERE product_id = ' . $id);
                    $row = $db->fetch_array($result);
                    $row[] = $value;
                    $rows[] = $row;
                }
            }
        }

        return $rows;
    }

    public function payPalItems() {

        global $db;
        $items = array();
        $num = 0;
        foreach ($_SESSION as $name => $value) {
            if ($value != 0) {
                if (substr($name, 0, 5) == 'cart_') {
                    $id = substr($name, 5, strlen($name) - 5);
                    $id = $db->escape_value((int)$id);
                    $result = $db->query('SELECT * FROM products WHERE product_id = ' . $id);
                    while ($row = $db->fetch_array($result)) {
                        $num++;
                        $row[1] = $value;
                        $row[0] = $num;
                        $items[] = $row;
                    }
                }
            }
        }
        
        return $items;
    }

}

$cart = new ShoppingCart();
