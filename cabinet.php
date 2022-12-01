<h1>My profile</h1>
<?php
session_start();

if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true'){
    echo 'У вас немає доступу до сторінки';
}else{
    echo 'Вітаю, ' . $_SESSION["login1"];
}
?>
<a href="clearsession.php"> Вийти</a>
