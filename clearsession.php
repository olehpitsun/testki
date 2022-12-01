<?php
session_start();
$_SESSION["authenticated"] = 'false';
$_SESSION["login"] = '';

header('Location: index.php');
?>
