<?php

ini_set('display_errors',true);
error_reporting(E_ALL);

/*
$seconds_to_cache = 300;
$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
header("Expires: $ts");
header("Pragma: cache");
header("Cache-Control: max-age=$seconds_to_cache");
*/

/* SMARTY SETUP */
require('smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setConfigDir('configs/');
$smarty->setCacheDir('cache/');
//$smarty->debugging = true;

/* MODELO */
require("class/modelo.class.php");
$modelo = new Modelo();

/* CONTROLADOR */
//que sección estoy pidiendo
if (!empty($_GET['seccion']))
{
    $modelo->setSection($_GET['seccion']);
}
if (!empty($_GET['id']))
{
    $modelo->setId($_GET['id']);
}

// meto xml en array
$data = $modelo->getData();

//recorro array y asigno variables
switch($_GET['seccion'])
{
    case "asociate":
        break;

    case "portada":
    	$smarty->assign("noticias",$data[0]);
    	$smarty->assign("calendario",$data[1]);
        break;
	
	case "noticias":
		$smarty->assign("noticias",$data);
        break;

    case "registro":
        $smarty->assign("result",$data);
        break;
}

$smarty->assign("seccion",$_GET['seccion']);

//asigno plantilla
$plantilla = $modelo->getTemplate();

/* VISTA */
$smarty->display($plantilla);
?>