<?php

    $pdo = null;
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=prostate-expert-system','root','');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    }
    catch(PDOException $e){
        echo 'Error: '.$e->getMessage();
        exit();
    }

    //echo 'everything works';
?>