<?php
    require '../vendor/autoload.php';
    use Mario\Commerce\DBConnection;
    use Mario\Commerce\Product;
    use philo\Blade\Blade;
    DBConnection::getConnection();

    $views = '../views';
    $cache = '../cache';
    $blade = new Blade($views, $cache);

    if(isset($_POST['submit'])){
        $type = new Product($_POST['name'], $_POST['description'], 
        $_POST['price'], $_POST['category_id']);
        $type->insert();
    }