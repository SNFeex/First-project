<?php
function dbJungtis()
{
    try {
        $pdo = new PDO('mysql:host=127.0.0.1; port=8889; dbname=ford', 'root', 'root');
        $teiginys = $pdo->prepare("INSERT INTO klientai(name, email, message) 
            VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')");
        return $teiginys->execute();
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

dbJungtis();