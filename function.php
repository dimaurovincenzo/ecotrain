<?php

if (!empty($_POST['appt'])) {
    $ora = $_POST['appt'];
    echo "$ora </br>"; 
    }

if (!empty($_POST['btype'])) {
    $biglietto = $_POST['btype'];
    echo $biglietto;
    }

    $file = "pagina.html";

    $codice = "
    <html>
    <head><title>Prova</title></head>
    <boby></body>
    </html>
    ";
    
    $fo = fopen($file, "w");
    fwrite($fo, $codice);
    fclose($fo);    