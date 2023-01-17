<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    else{
        header("Location: dashboard.php");
    }
?>