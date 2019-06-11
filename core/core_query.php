
<?php 

include_once('core_class.php');
// (!empty($_POST['useremail']))?:'';
$core->email_auth($_REQUEST['qemail']);

?>

