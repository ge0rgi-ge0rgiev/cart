<?php

require_once 'config.php';

class Database {
    
    private $connection;
    private $last_query;
    private $real_escape_string_exists;
    private $magic_quotes_active;
    
    public function __construct() {
        $this->open_connection();
        $this->real_escape_string_exists = function_exists('mysql_real_escaoe_string');
        $this->magic_quotes_active = get_magic_quotes_gpc();
    }
    
    private function open_connection() {
        $this->connection = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
        if(!$this->connection) {
            die('Database connection failed. ' . show_error());
        }
        else {
            $db_select = mysql_select_db(DB_NAME);
            if(!$db_select) {
                die('Database selecton failed. ' . show_error());
            }
            mysql_query('SET NAMES UTF8');
        }
    }
    
    public function escape_value($value) {
        if($this->real_escape_string_exists) {
            if($this->magic_quotes_active) {
                $value = stripslashes($value);
            }
            $value = mysql_real_escape_string($value);
        }
        else {
            if(!$this->magic_quotes_active) {
                $value = addslashes($value);
            }
        }
        return $value;
    }
        
    
    public function query($sql) {
        $this->last_query = $sql;
        $result = mysql_query($sql);
        $this->check_result($result);
        return $result;
    }
    
    private function check_result($result) {
        if(!$result) {
            $output = 'Database query failed. ' . show_error().'<br />';
            $output .= 'Last Query: ' . $this->last_query;
            die($output);
        }
    }
    
    public function fetch_array($result) {
        return mysql_fetch_assoc($result);
    }
}

$db = new Database();