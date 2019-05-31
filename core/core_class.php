<?php 

include_once('db.php');

class registration {
    
    public $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }


    public function insert_registration($name, $email, $phone, $password) {
        $insertion_cmd = $this->pdo->prepare('INSERT INTO users(username, useremail, userphone, userpass) VALUES(:username, :useremail, :userphone, :userpassword)');
        $insertion_cmd->execute([
            'username' => $name,
            'useremail' => $email,
            'userphone' => $phone,
            'userpassword' => $password
        ]);

        header('location: ../' );
    }


    public function query_userlogin($name, $pass) {
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $insertion_cmd = $this->pdo->query('SELECT * FROM users');
        while($userLists = $insertion_cmd->fetch()) {
            if($userLists->username == $name && $userLists->userpass == $pass) {
                header('location: ../landingpage.php' );
            } else {
                header('location: ../404.php' );
            }
        } 
    }

}

$core = new registration($pdo);




?>

