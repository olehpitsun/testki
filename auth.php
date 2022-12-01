<?php
session_start();

if(!isset($_POST["password"])) {

    if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true'){

        header('Location: index.php');
    }
}else {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (!empty($_POST["password"])) {

            //$password = md5($_POST["password"], false);

            $login = $_POST["login"];
            $password = $_POST["password"];

            if ($password == '123') {
                session_start();

                $_SESSION["authenticated"] = 'true';
                $_SESSION["login1"] = $_POST["login"];

                header('Location: cabinet.php');

            }else{
                echo "Неправильний пароль";
            }
        }
    }
}

?>
