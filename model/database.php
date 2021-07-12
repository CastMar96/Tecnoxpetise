<?php
class Database
{
    public static function StartUp()
    {
        //cambiar nombre de base de datos al nombre de la de ecommerce
        $pdo = new PDO('mysql:host=localhost;dbname=tecnoxpetise;charset=utf8','root','castellanos');
       // $pdo = new PDO('mysql:host=localhost;dbname=tecnoxpetise;charset=utf8','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}