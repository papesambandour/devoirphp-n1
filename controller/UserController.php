<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 07/12/2017
 * Time: 18:34
 */
namespace controller\user;

use function helper\postInput;

require_once 'model/UserDB.php';
require_once 'helper/helper.php';

function addUser()
{
    return \helper\render('user/add');
}
function saveUser()
{
    //pour nouveau enregistrement
    if (isset($_POST['valider']))
    {

        $ok =  \model\user\addUser($_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['password']);
        if ($ok==1)
        {
            $_SESSION['flash']['success'] = "insertion User reussit avec succes";
            \helper\redirect('/');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur d'insertion de User ressayer";
            \helper\redirect("?page=addroles");
        }
    }
    // Pour edition
    if(isset($_POST['editer']))
    {
        $ok =  \model\user\updateUser(postInput('idU'),postInput('nom'),postInput('prenom'),postInput('login'),postInput('password'));
        if ($ok==1)
        {
            $_SESSION['flash']['success'] = "Mise a jour user reussit avec succes";
            \helper\redirect('?page=listuser');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur de mise a jour  user ressayer";
            \helper\redirect('?page=listuser');
        }
    }

}

function listUser()
{
    $listUser = \model\user\listeUser();
    return \helper\render('user/list',compact('listUser'));
}

function editUser($id)
{
    $user = \model\user\getUser($id);
    $user = mysqli_fetch_object($user) ;
    return \helper\render('user/edit',compact('user'));
}
function delUser($id)
{
    if(\helper\postInput("supripmer") == "Supprimer")
    {
        $res = \model\user\deleteUser($id);
        if($res == 1)
        {
            $_SESSION['flash']['success'] = "Suppression de user reussit avec succes";
            \helper\redirect('?page=listuser');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur de suppression ressayer";
            \helper\redirect("?page=listuser");

        }
    }else
    {
        \helper\redirect('?page=user');
    }

}