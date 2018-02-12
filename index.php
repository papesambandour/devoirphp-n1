<?php
require_once "helper/helper.php";
require_once "controller/RoleController.php";
require_once "controller/RoleUserController.php";
require_once "controller/UserController.php";
require_once "controller/HomeController.php" ;

if(isset($_GET['page']))
{
    switch ($_GET['page'])
    {
        // DEBUT ROUTE SERVEUR
        case 'addroles':
            controller\roles\addRole();
        break;

        case 'listroles' :
            controller\roles\listRoles();
        break;

        case 'editroles':
            $id= \helper\postInput("id");
            controller\roles\editRoles($id);
            break;
        case 'delroles':
            $id= \helper\postInput("id");
            controller\roles\delRoles($id);
            break;

        case 'saveroles':
           controller\roles\saveRole();
            break;
        //DEBUT ROUTE SERVICE
        case 'adduser':
            controller\user\addUser();
            break;

        case 'listuser' :
            controller\user\listUser();
            break;

        case 'edituser':
            $id = \helper\postInput('id');
            controller\user\editUser($id);
            break;
        case 'deluser':
            $id = \helper\postInput('id');
            controller\user\delUser($id);
            break;

        case 'saveuser':
            controller\user\saveUser();
            break;
        // ROUTE USER ROLE
        case 'adduserroles':
            controller\roles_user\addRolesUser();
            break;

        case 'listuserroles' :
            controller\roles_user\listRolesUser();
            break;

        case 'edituserroles':
            $idR = \helper\postInput('idR');
            $idU = \helper\postInput('idU');
            controller\roles_user\editUser($idR,$idU);
            break;
        case 'deluserroles':
            $idR = \helper\postInput('idR');
            $idU = \helper\postInput('idU');
            controller\roles_user\delRolesUser($idR,$idU);
            break;

        case 'saveuserroles':
            controller\roles_user\saveRolesUser();
            break;
        default:
          helper\redirect('/');
            break;
    }
}
else
{
    \controller\home\homeController();
   // call_user_func('homeController',array(12,65,87));
}