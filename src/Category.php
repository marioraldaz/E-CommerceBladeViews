<?php
    namespace Mario\Commerce;
    use Mario\Commerce\DBConnection;

    Class Category extends DBConnection{
        public $category_id;
        public $name;
        public $parent_category_id;

        public function __construct($name, $parent_category_id){
            $this->name = $name;
            $this->parent_category_id = $parent_category_id;
            parent::getConnection();
        }
    }