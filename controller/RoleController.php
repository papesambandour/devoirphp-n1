<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 07/12/2017
 * Time: 18:34
 */
namespace controller\roles;

require_once 'model/RolesDB.php';
require_once 'helper/helper.php';


function addRole()
{
    return \helper\render('roles/add');
}
function saveRole()
{
    //pour nouveau enregistrement
    if (isset($_POST['valider']))
    {

        $ok =  \model\roles\addRole($_POST['libR']);
        if ($ok==1)
        {
            $_SESSION['flash']['success'] = "insertion Role reussit avec succes";
            \helper\redirect('/');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur d'insertion de Role ressayer";
            \helper\redirect("?page=addroles");
        }
    }
    // Pour edition
    if(isset($_POST['editer']))
    {
        $ok =  \model\roles\updateRole(\helper\postInput('idR'),\helper\postInput('libR'));
        if ($ok==1)
        {
            $_SESSION['flash']['success'] = "Mise a jour Role reussit avec succes";
            \helper\redirect('?page=listroles');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur de mise a jour du role ressayer";
            \helper\redirect('?page=listroles');
        }
    }

}

function listRoles()
{
    $listRoles = \model\roles\listeRole();
    return \helper\render('roles/list',compact('listRoles'));
}

function editRoles($id)
{
    $role = \model\roles\getRole($id);
    $role = mysqli_fetch_object($role) ;
    return \helper\render('roles/edit',compact('role'));
}
function delRoles($id)
{
    if(\helper\postInput("supripmer") == "Supprimer")
    {
        $res = \model\roles\deleteRole($id);
        if($res == 1)
        {
            $_SESSION['flash']['success'] = "Suppression de Role reussit avec succes";
            \helper\redirect('?page=listroles');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur de suppression de role ressayer";
            \helper\redirect("?page=listroles");

        }
    }else
    {
        \helper\redirect('?page=listroles');
    }

}