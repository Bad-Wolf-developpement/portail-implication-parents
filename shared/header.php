<!DOCTYPE html>
 <?php
session_start();
if(basename($_SERVER['PHP_SELF']) != "login.php" && (! isset($_SESSION['login']) || $_SESSION["login"] == ""))
{
	header("location: login.php");
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?=$title ?></title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.validate.js"></script>
    <script src="/js/messages_fr.js"></script>
    <link href="/css/portail.css?v=2" rel="stylesheet">
</head>
 
<body>
<?php
if($_SESSION["login"] != ""){
    require_once($_SERVER["DOCUMENT_ROOT"].'/shared/menu.php');
}
?>