<?php
require_once 'core/init.php';

if(Session::exists('username')){
    header('Location: logiin.php');
}
require_once 'templates/header.php';
?>

<h2> Hai <?php echo Session::get('username');?></h2>
<?php require_once 'templates/footer.php';?>