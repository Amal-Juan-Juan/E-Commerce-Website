<?php
// Use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArray = array();

        // fetch product data one by one
        if($result != null){
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

        }
        

        return $resultArray;
    } 
    
    public function getDataElectronics($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE category='Electronics'");
        $resultArray = array();

        // fetch product data one by one
        if($result != null){
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

        }
        

        return $resultArray;
    }
    public function getDataClothing($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE category='Clothing'");
        $resultArray = array();

        // fetch product data one by one
        if($result != null){
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

        }
        

        return $resultArray;
    }
    public function getDataCart($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE user_id = '". $_SESSION['user_id'] . "'");
        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using item id
    public function getProduct($item_id = null, $table= 'product'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

}