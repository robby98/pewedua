<?php 
include_once 'mdoel/User.php';

$user = new User();
$hasil = $user ->ambilUser($_POST['username']); 
?>