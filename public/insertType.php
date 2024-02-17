<?PHP
        require '../vendor/autoload.php';
    
        use Mario\Commerce\DBConnection;
        use Mario\Commerce\Category;
        use Philo\Blade\Blade;
        DBConnection::getConnection();
    
        $views = '../views';
        $cache = '../cache';
        $blade = new Blade($views, $cache);
    
        echo $blade->view()->make('viewInsertType', ['titulo'=>'Gestionar Libros'])->render();

        if(isset($_POST['submit'])){
            $product = new Category($_POST['name']);
            $product->insert();
        }