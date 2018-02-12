<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 16/11/2017
 * Time: 12:56
 */
//die(__DIR__); permet de dir le parent du fichier
//die(dirname(__DIR__)); permet de dir le parent du dossier en paramettre

namespace controller\home;

//require_once dirname(__DIR__)."/model/BD.php";
function homeController($data = array())
{
   return \helper\render('home');
}