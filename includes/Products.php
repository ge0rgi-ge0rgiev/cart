<?php

require_once 'Database.php';

class Products {
    
    
    public static function listProducts() {
        global $db;
        $products = array();
        $category = (isset($_GET['cat'])) ? (int)$_GET['cat'] : 0;
        $cat_spec = '';
        
        if($category != 0) {
            $cat_spec = 'AND c.category_id = ' . $category;
        }
        
        $sql = 'SELECT p.product_id as id, p.name as name,
                p.description as description, p.price as price, p.quantity as quantity ';
        $sql .= 'FROM products as p join product_category as pc ';
        $sql .= 'on ';
        $sql .= 'p.product_id=pc.product_id ';
        $sql .= 'join category as c ';
        $sql .= 'on ';
        $sql .= 'c.category_id=pc.category_id ';
        $sql .= 'WHERE p.quantity > 0 ';
        $sql .= $cat_spec;
        
        
        $products = self::returnItems($sql);
        
        return $products;
    }
    
    public static function listCategories() {
        global $db;
        $categories = array();
        
        $sql = 'SELECT * FROM category';
        $categories = self::returnItems($sql);
        
        return $categories;
    }
    
    private static function returnItems($sql) {
        global $db;
        $items = array();
        $result = $db->query($sql);
        while($row = $db->fetch_array($result)) {
            $items[] = $row;
        }
        return empty($items) ? false : $items;
    }
}