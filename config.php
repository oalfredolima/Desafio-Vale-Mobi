<?php
function getBasePath() {
	$path_parts = pathinfo( __FILE__ );
    return substr($_SERVER['SCRIPT_FILENAME'], 0, strlen($_SERVER['SCRIPT_FILENAME']) - strlen($path_parts['basename']) + 1);
}
function getAppPath() {
	$path_parts = pathinfo( __FILE__ );
    return substr(getBasePath(), strlen($_SERVER['DOCUMENT_ROOT']), strlen($path_parts['dirname']));
}
//Retorna o caminho com o arquivo junto
//echo getBasePath();
//define( 'ABSPATH', $_SERVER['DOCUMENT_ROOT'] );
define( 'ABSPATH', getBasePath() );
//Para usar no HTML
define( 'APP_PATH', getAppPath() );
require_once "loader.php";
/*

DOCUMENT_ROOT	C:/xampp/htdocs
SCRIPT_FILENAME	C:/xampp/htdocs/App/Axaki/index.php
SCRIPT_NAME	/App/Axaki/index.php

REQUEST_URI	/App/Axaki/?url=Home/Contact

*/
//echo $_SERVER['REQUEST_URI'];
//echo '<br>'.getAppPath();
