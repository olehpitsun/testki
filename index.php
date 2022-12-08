<html>
<head></head>
<body>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    function addFunction($num1, $num2 = NULL) {
        $sum = $num1 + $num2;

        if($num1 === NULL){
            echo 'hello';
        }

        return $sum;
    }
    $return_value = addFunction(1);

    echo 'Result = ' . $return_value;

} else {
    ?>


    <form id="login" method="post" action="/">
        <label for="login">Login</label>
        <input id="login" name="num1" type="text" required>

        <label for="password">Access code:</label>
        <input id="password" name="num2" type="text" required>

        <input type="submit" value="OK">
    </form>

    <?php
}
?>
</body>
</html>