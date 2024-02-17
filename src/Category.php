<?php
    namespace Mario\Commerce;
    use Mario\Commerce\DBConnection;

    Class Category extends DBConnection{
        public $category_id;
        public $name;
        public $parent_category_id;

        public function __construct($name, $parent_category_id=null){
            $this->name = $name;
            $this->parent_category_id = $parent_category_id;
            parent::getConnection();
        }

        public function insert(){
            $statement = DBConnection::$connection->prepare("INSERT INTO categories (name, parent_category_id)
            VALUES (:name, :parent_category_id)");

            $statement->bindValue(":name",$this->name);
            $statement->bindValue(":parent_category_id",$this->parent_category_id);
            
            $success=$statement->execute();

            if($success){
                echo "Category inserted successfully";
            } else{
                echo "Error inserting category";
            }
        }

        public static function getTypes(){
            $statement = DBConnection::$connection->prepare("SELECT * FROM categories WHERE parent_category_id IS NULL");
            $statement->execute();
            return $statement->fetchAll();
        }

        public static function getCategories(){
            $statement = DBConnection::$connection->prepare("SELECT * FROM categories");
            $statement->execute();
            return $statement->fetchAll();
        }
    }