<?php
    require '../vendor/autoload.php';
    use Mario\Commerce\DBConnection;
    use Mario\Commerce\Product;
    use Mario\Commerce\Category;
    use Philo\Blade\Blade;
    DBConnection::getConnection();

    $views = '../views';
    $cache = '../cache';
    $blade = new Blade($views, $cache);
    $products = Product::getProducts();
    $categories = Category::getCategoriesAssociative();
  
    var_dump($categories);
    echo $blade->view()->make('viewProducts', ['categories'=>$categories,'products'=>$products])->render();
    if(isset($_POST['submit'])){
        $product = new Product($_POST['name'], $_POST['description'], 
        $_POST['price'], $_POST['category_id']);

    }