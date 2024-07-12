<?php
// Переменные с формы
$FIO = $_POST['FIO'];
$email = $_POST['email'];
$selectus = $_REQUEST['types'] ;
if ($selectus == 'vrem') {
    $first_calendar = $_REQUEST['first_calendar'] ;
    $second_calendar = $_REQUEST['second_calendar'] ;
    $target =  $_REQUEST['target'];

    
}
else {
    $first_calendar = '01.01.2000' ;
    $second_calendar = '01.01.2001' ;
    $target = 'none'
}
$photo=$_FILES['imageus']['name'];

$mysql = new mysqli('localhost', 'root', '', 'BDDB');

$mysql->query("INSERT INTO `polz` (`FIO`, `email`, `type`, `date_n`, `date_k`, `target`, `photo`)
	VALUES('$FIO', '$email', '$selectus', '$first_calendar', '$second_calendar' , '$target', '$photo')");
$mysql->close();

header('Location: form_reg.html');
exit();
?>