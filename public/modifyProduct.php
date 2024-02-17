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
    
    $id = $_GET['id'];
    $product = Product::getProductById($id);
    $categories = Category::getCategoriesAssociative();

    echo $blade->view()->make('viewModifyProduct',['categories'=>$categories,'product'=>$product])->render();

    if(isset($_POST['submit'])){
        var_dump($_POST);
        Product::updateProduct($_POST['product_id'],$_POST['name'], $_POST['description'], $_POST['price'], $_POST['category_id']);
    }