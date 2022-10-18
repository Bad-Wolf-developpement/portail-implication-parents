<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION["login"] != "")
{
	header("location: dashboard.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        $param_username = trim($_POST["username"]);
	header("location: dashboard.php");
    }
    $_SESSION["login"]=$_POST["username"];
   
    header("location: dashboard.php");
}
$title = "Connexion au porail d'implication parents";
require_once($_SERVER["DOCUMENT_ROOT"].'/shared/header.php');
?>
<script>
	$().ready(function() {
		// validate the comment form when it is submitted
		$("#login-form").validate();
</script>
<style>
	#login-form {
	  transform: translateY(calc(-50% - 6rem));
	  top: 50%;
	  position: relative;
	  text-align: center;
	  font-size: 1.6rem;
	  width: 50%;
	  min-width: 28rem;
	  max-width: 38rem;
	  margin: 0 auto;
	}
	input[type="text"], input[type="password"], input[type="email"] {
	  background-color: #d2d9de;
	  border: none;
	  border-radius: 0.5rem;
	  padding: 0.5rem;
	  margin: 1rem auto;
	}
</style>
<form id="login-form" method="post">
	<h1>Connexion au portail d'implication parents</h1>
	<input  id="username" name="username" autofocus="" placeholder="Code utilisateur" minlength="6" type="text" required>
	<span class="field-validation-valid text-danger error" data-valmsg-for="username" data-valmsg-replace="true"></span>
	<input type="password" id="password" name="password" placeholder="Mot de passe" minlength="6" required>
	<span class="field-validation-valid text-danger error" data-valmsg-for="password" data-valmsg-replace="true"></span>
	<div id="error-submission" class="error hidden">
	</div>
	<button id="login-button" type="submit">Connexion</button>
</form>
<script>
$("#login-form").validate();
</script>