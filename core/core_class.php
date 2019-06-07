<?php 

include_once('db.php');

class registration {
    
    public $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }


    public function insert_registration($name, $email, $phone, $password) {
        $smtp = $this->pdo->prepare('INSERT INTO users(username, useremail, userphone, userpass) VALUES(:username, :useremail, :userphone, :userpassword)');
        $smtp->execute([
            'username' => $name,
            'useremail' => $email,
            'userphone' => $phone,
            'userpassword' => $password
        ]);

    }


    public function query_userlogin($email, $pass) {
        $smtp = $this->pdo->prepare('SELECT * FROM users WHERE useremail = ? && userpass = ?');
        $smtp->execute([$email, $pass]);
        $smtp_ve = $smtp->fetch();
        if($email === $smtp_ve->useremail && $pass === $smtp_ve->userpass) {
            session_start();
            $_SESSION['name'] = $smtp_ve->username;
            header('location: ../landingpage.php');
        } else {
            header('location: ../404.php');
        }
    }

    
    public function query_all_memebers() {
        $smtp = $this->pdo->prepare('SELECT * FROM users');
        $smtp_ve = $smtp->fetch();
        foreach($smtp_ve as $smtp_v) {
            print_r($smtp_v);
        }
    }

}

    $core = new registration($pdo);


    function pres($pres_val) {
        echo '<pre>';
        print_r($pres_val);
        echo '</pre>';
    }


?>

