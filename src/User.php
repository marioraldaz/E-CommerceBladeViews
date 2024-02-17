<?php
    namespace Mario\Commerce;
    use Mario\Commerce\DBConnection;
    use Faker\Factory;
    Class User extends DBConnection{

        public $user_id;
        public $username;
        public $email;
        public $password;
        
        public function __construct($username, $email, $password){
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            parent::getConnection();
        }

        public function insert(){
            $statement = DBConnection::$connection->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
            $statement->bindParam(":username",$this->username);
            $statement->bindParam(":email",$this->email);
            $statement->bindParam(":password",$this->password);
            
            if($statement->execute()){
                echo "User created successfully";
            } else{
                echo "Error inserting user into database";
            }
        }

        public static function addFake(){
            $faker = Factory::create();

            $fakeUser = new User(
                $faker->name(),
                $faker->email(),
                $faker->password()
            );

            $fakeUser->insert();
        }
    }