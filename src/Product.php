<?php
namespace Mario\Commerce;
use Mario\Commerce\DBConnection;
    Class Product extends DBConnection{
        public $name;
        public $description;
        public $price;
        public $category_id;
        public $product_id;

        public function __construct($name, $description, $price, $category_id){
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->category_id = $category_id;
            parent::getConnection();
        }

        public function insert(){
            $query = "INSERT INTO products (name, description, price, category_id)
             VALUES ('$this->name', '$this->description', '$this->price', '$this->category_id')";       
             $statement = DBConnection::$connection->prepare($query);
             $success = $statement->execute();
             if($success){
                echo "Success inserting product";
             } else{
                echo "Error inserting product";
             }    
        }

        public function getProducts(){
            $statement = DBConnection::$connection->prepare("SELECT * FROM products");
            $success = $statement->execute();
            if(!$success){
                echo "Error getting products";
            }
            $result = $statement->fetchAll();
            return $result;    
        }
    }