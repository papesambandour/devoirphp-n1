<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 07/12/2017
 * Time: 18:33
 */
namespace model\user ;
require_once "model/BD.php";

function addUser($nom,$prenom,$login,$password)
{
    $sql = "INSERT INTO user VALUES(NULL,'$nom','$prenom','$login','$password')";
    return \model\bd\executeSQL($sql) ;
}

function deleteUser($idU)
{
    $sql = "DELETE FROM user where idU = $idU ;" ;
    return \model\bd\executeSQL($sql) ;
}

function updateUser($idU,$nom,$prenom,$login,$password)
{
    $sql = "UPDATE user SET nom = '$nom', prenom = '$prenom',login = '$login' ,password = '$password' WHERE  idU= $idU  ;";
    return \model\bd\executeSQL($sql);
}

function listeUser()
{
    $sql = "SELECT * FROM user ;";
    return \model\bd\executeSQL($sql) ;
}

function getUser($idU)
{
    $sql = "SELECT * FROM user WHERE idU = $idU ;";
    return \model\bd\executeSQL($sql);
}