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


//    public function query_userlogin($email, $pass) {
//        $smtp = $this->pdo->prepare('SELECT * FROM users WHERE useremail = ? && userpass = ?');
//        $smtp->execute([$email, $pass]);
//        $smtp_ve = $smtp->fetch();
//        if($email === $smtp_ve->useremail && $pass === $smtp_ve->userpass) {
//            session_start();
//            $_SESSION['name'] = $smtp_ve->username;
//            header('location: ../landingpage.php');
//        } else {
//            header('location: ../404.php');
//        }
//    }

    
    public function email_auth($e_auth) {
        $e_auth = $e_auth;
        $smtp = $this->pdo->prepare('SELECT * FROM users WHERE useremail = :e_auth');
        $smtp->execute(['e_auth' => $e_auth]);
        $smtfs = $smtp->fetchAll();
        foreach($smtfs as $smtpf) {
            print_r(json_encode($smtpf['useremail']));
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

