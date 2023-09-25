<?php 
    include_once 'header.php';
    include_once './helpers/session_helper.php';
?>

    <h1 class="header">Анкета абітурієнта</h1>

    <?php flash('register') ?>

    <form method="post" action="./controllers/Users.php">
        <input type="hidden" name="type" value="register">
        <input type="text" name="usersName" 
        placeholder="Прізвище">
        <input type="text" name="usersName"
               placeholder="Імя">
        <input type="text" name="usersName"
               placeholder="По батькові">
        <input type="text" name="usersEmail" 
        placeholder="Email...">
        <input type="text" name="usersUid" 
        placeholder="Телефон">
        <input type="text" name="usersUid"
               placeholder="Місто...">
        <input type="text" name="usersUid"
               placeholder="Школа...">
        <button type="submit" name="submit">Відправити анкету</button>
    </form>
    
<?php 
    include_once 'footer.php'
?>