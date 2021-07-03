<?php
if ((isset($_POST ["email"])) && (isset($_POST["senha"]))) {

} else {
    $_SESSION["loginError"] = "Usuário ou senha inválidos";
    header("Location: index.php");
    }


?>