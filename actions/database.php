<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'laurent', 'h9xt2ya1');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
