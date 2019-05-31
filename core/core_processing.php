<?php 

include_once('core_class.php');

    if(isset($_POST['register']) && $_POST['userpassword'] === $_POST['userconfirmpassword']) {

        $reg_name = $_POST['username'];
        $reg_email = $_POST['useremail'];
        $reg_phone = $_POST['userphone'];
        $reg_pass = $_POST['userpassword'];
        
        $core->insert_registration($reg_name, $reg_email, $reg_phone, $reg_pass);


    } 



    if(isset($_POST['login'])) {

        $reg_name = $_POST['username'];
        $reg_pass = $_POST['userpassword'];
        
        $core->query_userlogin($reg_name, $reg_pass);


    } 






?>

