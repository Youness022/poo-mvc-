<?php


define('ROOT',dirname(__DIR__).DIRECTORY_SEPARATOR);
define('SRC',ROOT.'src'.DIRECTORY_SEPARATOR );
define('VIEW', ROOT.'src'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR);
define('MODEL', ROOT.'src'.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR);
define('CORE', ROOT.'src'.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR);
define('CONTROLLER', ROOT.'src'.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR);
$modeles=[ROOT,SRC,VIEW,CORE,MODEL,CONTROLLER];
set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR, $modeles));
spl_autoload_register('spl_autoload',false);




new Application;





?>