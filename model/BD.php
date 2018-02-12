<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 10/27/17
 * Time: 1:42 PM
 */
namespace model\bd;

function getConnexion(){
    $connexion = mysqli_connect('localhost','root','root','gestion_user');
    return $connexion ;
}


function executeSQL($SQL)
{
    return mysqli_query(getConnexion(),$SQL);
}