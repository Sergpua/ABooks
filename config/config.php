<?php
/**
 * Created by PhpStorm.
 * User: Serg
 * Date: 02.07.2017
 * Time: 18:49
 */
// константи для пыдключення контроллерів
define ('PathPrefix', 'controllers/');
define ('PathPostfix', "Controller.php");

// настройки шаблонізатора Smarty
$template = 'default'; //шаблон що використовується в данний момент

//шляхи до файлів шаблонів (*.tpl)
define('TemplatePrefix',"views/{$template}/");
define('TemplatePostfix','.tpl');

//шлях до файлів шаблонів в веб просторі
define('TemplateWebPath', "templates/{$template}/");

//ініціалізація шаблонізатора Smarty
require('library/Smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('tmp/smarty/templates_c');
$smarty->setCacheDir('tmp/smarty/cache');
$smarty->setConfigDir('library/Smarty/config');

$smarty->assign('TemplateWebPath', TemplateWebPath);
