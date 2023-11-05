<?php
    //  echo '<pre>', print_r($_SESSION['user_authenticated'], true) ?: 'undefined index', '</pre>';
    if(empty($_SESSION)){

        header ('Location: ..');
        exit();
    }else if(!$_SESSION['user_authenticated'] && $_SESSION['user_authenticated'] === '1')
    {
        header ('Location: process.php');
        exit();
    }