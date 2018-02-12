<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 07/12/2017
 * Time: 18:32
 */
namespace model\roles;
require_once "model/BD.php";

function addRole($libRole)
{
    $sql = "INSERT INTO roles VALUES(NULL,'$libRole')";
    return \model\bd\executeSQL($sql) ;
}

function deleteRole($idR)
{
    $sql = "DELETE FROM roles where idR = $idR ;" ;
    return \model\bd\executeSQL($sql) ;
}

function updateRole($idRole,$libRole)
{
    $sql = "UPDATE roles SET libR = '$libRole'WHERE idR = $idRole ;";
    return \model\bd\executeSQL($sql);
}

function listeRole()
{
    $sql = "SELECT * FROM roles ;";
    return \model\bd\executeSQL($sql) ;
}

function getRole($idR)
{
    $sql = "SELECT * FROM roles WHERE idR = $idR ;";
    return \model\bd\executeSQL($sql);
}