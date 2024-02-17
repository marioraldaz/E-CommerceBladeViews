<?PHP
        require '../vendor/autoload.php';
    
        use Mario\Commerce\DBConnection;
        use Mario\Commerce\Category;
        use Philo\Blade\Blade;
        DBConnection::getConnection();
    
        $views = '../views';
        $cache = '../cache';
        $blade = new Blade($views, $cache);
        $types = Category::getTypes();
        echo $blade->view()->make('viewInsertCategory',['types'=>$types])->render();

        if(isset($_POST['submit'])){
            $product = new Category($_POST['name'],$_POST['parent_category_id']);
            echo "aaaa";
            $product->insert();
        }