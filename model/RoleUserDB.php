<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 07/12/2017
 * Time: 18:33
 */
namespace model\role_user;
require_once "model/BD.php";
function addRoleUser($idR,$idU)
{
    $sql = "INSERT INTO user_roles VALUES($idR,$idU);";
    return \model\bd\executeSQL($sql) ;
}

function deleteRoleUser($idR,$idU)
{
    $sql = "DELETE FROM user_roles where idR = $idR AND idU= $idU;" ;
    return \model\bd\executeSQL($sql) ;
}

function updateRoleUser($idR,$idU,$idR_init,$idU_init)
{
    $sql = "UPDATE user_roles SET idR = $idR ,idU = $idU WHERE idU = $idU_init AND idR = $idR_init;";
    return \model\bd\executeSQL($sql);
}

function listeRoleUser()
{
    $sql = "SELECT user.* , roles.*  FROM user_roles , roles , user WHERE user_roles.idR = roles.idR AND user_roles.idU = user.idU;";
    return \model\bd\executeSQL($sql) ;
}

