<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION[úser])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'vistas/home.php';
}