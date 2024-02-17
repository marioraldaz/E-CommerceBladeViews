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
    $categories = Category::getCategories();
    $newCategories=[];
    foreach ($categories as $category){
        $newCategories[$category['category_id']] = $category['name'];
    }

    echo $blade->view()->make('viewProducts', ['categories'=>$newCategories,'products'=>$products])->render();
    if(isset($_POST['submit'])){
        $product = new Product($_POST['name'], $_POST['description'], 
        $_POST['price'], $_POST['category_id']);

    }