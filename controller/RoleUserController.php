<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 07/12/2017
 * Time: 18:34
 */
namespace controller\roles_user;


use function helper\postInput;

require_once 'model/RoleUserDB.php';
require_once 'helper/helper.php';

function addRolesUser()
{
    $roles = \model\roles\listeRole();
    $users =  \model\user\listeUser();
    return \helper\render('role_user/add',compact(['roles','users']));
}
function saveRolesUser()
{
    //pour nouveau enregistrement
    if (isset($_POST['valider']))
    {

        $ok =  \model\role_user\addRoleUser(\helper\postInput('idR'),\helper\postInput('idU'));
        if ($ok==1)
        {
            $_SESSION['flash']['success'] = "insertion User Role reussit avec succes";
            \helper\redirect('/');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur d'insertion de User ressayer";
            \helper\redirect("?page=adduserroles");
        }
    }
    // Pour edition
    if(isset($_POST['editer']))
    {
        $ok =  \model\role_user\updateRoleUser(\helper\postInput('idR'),\helper\postInput('idU'),\helper\postInput('idR_init'),\helper\postInput('idU_init'));
        if ($ok==1)
        {
            $_SESSION['flash']['success'] = "Mise a jour user role reussit avec succes";
            \helper\redirect('?page=listuserroles');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur de mise a jour  user ressayer";
            \helper\redirect('?page=listuserroles');
        }
    }

}

function listRolesUser()
{
    $listRolesUser = \model\role_user\listeRoleUser();
    return \helper\render('role_user/list',compact('listRolesUser'));
}

function editUser($idR,$idU)
{
    $roles = \model\roles\listeRole();
    $users =  \model\user\listeUser();
    return \helper\render('role_user/edit',compact(['users','roles','idR','idU']));
}
function delRolesUser($idR,$idU)
{
    if(\helper\postInput("supripmer") == "Supprimer")
    {
        $res = \model\role_user\deleteRoleUser($idR,$idU);
        if($res == 1)
        {
            $_SESSION['flash']['success'] = "Suppression de user role reussit avec succes";
            \helper\redirect('?page=listuserroles');
        }
        else
        {
            $_SESSION['flash']['danger'] = "Erreur de suppression ressayer";
            \helper\redirect("?page=listuserroles");

        }
    }else
    {
        \helper\redirect('/');
    }

}