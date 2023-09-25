<?php 
    include_once 'header.php';
    include_once './controllers/Abiturients.php';
    $instance = new Abiturients();
    //var_dump($instance->getList()) ;
?>

    <p>Список абітурієнтів</p>
    <br>

    <p>Сортувати за </p>
    <a href="#">Прізвище</a>
    <a href="##">Рік</a>
    <a href="#">Місто</a>
    <a href="#">Чи поступив</a>
<br><br>

<?php
$abiturients = json_decode(json_encode($instance->getList()), true); ?>

<table>
    <thead>
    <tr>
        <td>#</td>
        <td>Прізвище</td>
        <td>Імя</td>
        <td>По батькові</td>
        <td>Емейл</td>
        <td>Місто</td>
        <td>Телефон </td>
        <td>Контактна особа </td>
        <td>Коментар</td>
        <td>Рік</td>
        <td>Чи поступив</td>
    </tr>
    </thead>
    <tbody>

<?php
foreach ($abiturients as $biturient) {?>
        <tr>
            <?php
    foreach ($biturient as $value) {?>
        <td><?php echo $value; ?></td>
   <?php
    }
}

var_dump($instance->getRowCount());
for($page = 1; $page<= 2; $page++) {
    echo '<a href = "abiturients.php?page=' . $page . '">' . $page . ' </a>';
}

    ?>

        </tr>
    </tbody>
</table>
<?php 
    include_once 'footer.php'
?>