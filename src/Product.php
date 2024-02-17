<?php
namespace Mario\Commerce;
use Mario\Commerce\DBConnection;
use PDO;
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

        public static function getProducts(){
            $statement = DBConnection::$connection->prepare("SELECT * FROM products");
            $success = $statement->execute();
            if(!$success){
                echo "Error getting products";
            }
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;    
        }

        public static function getProductById($id){
            $statement = DBConnection::$connection->prepare("SELECT * FROM products WHERE product_id = :id");
            $statement->bindParam(':id',$id);
            $success = $statement->execute();

            if(!$success){
                echo "Error getting products";
            }
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result[0];    
        }

        public static function updateProduct($product_id, $name, $description, $price, $category_id){
            $statement = DBConnection::$connection->prepare("UPDATE products SET
             name = :name, description = :description, price = :price, category_id = :category_id WHERE product_id = :product_id");

            $statement->bindParam(':product_id',$product_id);
            $statement->bindParam(':name',$name);
            $statement->bindParam(':description',$description);
            $statement->bindParam(':price',$price);
            $statement->bindParam(':category_id',$category_id);
            $success = $statement->execute();

            if(!$success){
                echo "Error updating products";
            }

        }
    }