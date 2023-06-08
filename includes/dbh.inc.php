<?php

function executeQuery($query){
    $dsn = "mysql:host=localhost;dbname=secretchat";
    $dbusername = "root";
    $dbpassword = "";

    try{
        //pdo = php data objects
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $pdo->prepare($query);
        $statement->execute();

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $results;
    } catch (PDOException $e){
        echo "Query failed: ".$e->getMessage();
    }
}