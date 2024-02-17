<?php
    require '../vendor/autoload.php';
    use Mario\Commerce\DBConnection;
    use Mario\Commerce\Product;
    use Mario\Commerce\Category;
    use Philo\Blade\Blade;
    
    session_start();
    DBConnection::getConnection();
    
    $views = '../views';
    $cache = '../cache';
    $blade = new Blade($views, $cache);
    
    var_dump($_SESSION['cart']);
    
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    
    $categories = Category::getCategoriesAssociative();
    $products = Product::getProducts();
    $cartProducts = array();
    foreach($_SESSION['cart'] as $id=>$amount){
        $product = Product::getProductById($id);
        $product['amount']=$amount;
        array_push($cartProducts,$product);
    }
    
    echo $blade->view()->make('viewSale',['categories'=>$categories,'products'=>$products, 'cartProducts'=>$cartProducts])->render();

    if(isset($_POST['submit'])){
        header("refresh:0");
        Product::updateProduct($_POST['product_id'],$_POST['name'], $_POST['description'], $_POST['price'], $_POST['category_id']);
    }

    if(isset($_POST['product_to_add'])){
        
        header("refresh:0");

        if (array_key_exists($_POST['product_to_add'], $_SESSION['cart'])) {
            $_SESSION['cart']["$_POST[product_to_add]"]++;
        } else {
            $_SESSION['cart']["$_POST[product_to_add]"]=1;
        }
    }

    if(isset($_POST['empty_cart'])){
        header("refresh:0");
        $_SESSION['cart'] = array();
    }