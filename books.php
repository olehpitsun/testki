<?php 
    include_once 'header.php';
    include_once './controllers/Books.php';


    $instance = new Books();
    var_dump($instance->getList()) ;
?>

    <p>Books</p>
    

<?php 
    include_once 'footer.php'
?>