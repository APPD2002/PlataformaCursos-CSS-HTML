<?php
echo "<br><h1>VARIABLES GLOBALES QUE MANEJA PHP</h1><br>";
    foreach ($_SERVER as $key => $value) {
        echo 'SERVER['.$key.']: '.$value.'<br>';
    }

    if($_SERVER['REQUEST_METHOD']=='GET'){
        echo "<br><h3>MÉTODO GET</h3><br>";
        foreach ($_GET as $key => $value) {
            echo 'GET['.$key.']: '.$value.'<br>';
        }
    }elseif($_SERVER['REQUEST_METHOD']=='POST'){
        echo "<br><h3>MÉTODO POST</h3><br>";
        foreach ($_POST as $key => $value) {
            echo 'POST['.$key.']: '.$value.'<br>';
        }
    }
?>

