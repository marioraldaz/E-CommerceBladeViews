<?PHP
        require '../vendor/autoload.php';
    
        use Mario\Commerce\DBConnection;
        use Mario\Commerce\User;
        use Philo\Blade\Blade;
        DBConnection::getConnection();
    
        $views = '../views';
        $cache = '../cache';
        $blade = new Blade($views, $cache);
    
        echo $blade->view()->make('viewInsertUser')->render();

        if(isset($_POST['submit'])){
            $user = new User($_POST['username'],  $_POST['email'], $_POST['password']);
            $user->insert();
        } elseif(isset($_POST['fake'])){
            User::addFake();
        } 