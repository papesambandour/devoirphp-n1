<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 16/11/2017
 * Time: 12:37
 */


/* ON DOIT APPELLER CETTE FUNCTION SUR LE CONTROLLER POUR QU'IL PUISSE CHARGER LES VUES ET LUI PASSER LES PARAMETTRE */
namespace helper;
session_start();
function render($fileName, $data = array())
{
    extract($data);
    $paht = 'view/';
    ob_start();
    $title = str_replace('/','-',$fileName) ;
    require_once $paht . $fileName . '.view.php';
    $__CONTENT__ = ob_get_clean();

    require_once $paht . 'default.view.php' ;

}

/**
 * @param $page
 */
function redirect($page = '/')
{

    header("Location: $page");
    exit;
}

function getInput($key)
{
    return isset($_GET[$key]) ? $_GET[$key] : null ;
}
function postInput($key)
{
    return isset($_POST[$key]) ? $_POST[$key] : null ;
}

function flashSuccess()
{

    if (isset($_SESSION['flash']['success']))
    {
        ?>
        <div class="alert alert-success" style="width: 500px;text-align: center;margin: auto">
            <?php
            echo $_SESSION['flash']['success'];
            ?>
        </div>

        <?php
        unset($_SESSION['flash']);
    }

}

function flashError()
{
        if (isset($_SESSION['flash']['danger']))
        {
            ?>
            <div class="alert alert-danger" style="width: 500px;text-align: center;margin: auto">
                <?php
                echo $_SESSION['flash']['danger'];
                ?>
            </div>

            <?php
            unset($_SESSION['flash']);
        }

}