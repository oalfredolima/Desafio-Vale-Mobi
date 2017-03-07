<?php
function actionController($controle, $metodo) {
	switch ($controle) {
		case "Home":
			actionMethodHome($metodo);
			break;
		case "User":
			actionMethodUser($metodo);
			break;
		case "Merc":
			actionMethodMerchandise($metodo);
			break;
		default:
			actionMethodNotFound();
	}
}
function vd($var) { //Alternativa para o var_dump
	echo '<hr><pre>';
	print_r($var);
	echo '</pre><hr>';
}
function actionMethodHome($metodo) {
	require_once("Controller/HomeController.php");
	require_once('Model/MerchandiseModel.php');
	
	//Declaração da dependencia
	$molde = new MerchandiseModel();
	//Injetando a dependecia
	$page = new HomeController($molde);
	
	switch ($metodo) {
		case "Index":
			$page->index();
			break;
		case "About":
			$page->about();
			break;
		case "Contact":
			$page->contact();
			break;
		default:
			actionMethodNotFound();
	}
}
function actionMethodUser($metodo) {
	require_once("Controller/UserController.php");
	require_once('Model/UserModel.php');
	
	//Declaração da dependencia
	$molde = new UserModel();
	//Injetando a dependecia
	$page = new UserController($molde);
	
	switch ($metodo) {
		case "Home":
			$page->home();
			break;
		case "Login":
			$page->login();
			break;
		case "Auth":
			$page->auth();
			break;
		case "Logout":
			$page->logout();
			break;
		case "Cadastro":
			$page->signup();
			break;
		case "New":
			$page->newUser();
			break;
		default:
			actionMethodNotFound();
	}
}
function actionMethodMerchandise($metodo) {
	require_once("Controller/MerchandiseController.php");
	require_once './Model/MerchandiseModel.php';
	
	//Declaração da dependencia
	$molde = new MerchandiseModel();
	//Injetando a dependecia
	$page = new MerchandiseController($molde);
	
	switch ($metodo) {
		case "Incluir":
			$page->incluir();
			break;
		case "NovaMercadoria":
			$page->addItem();
			break;
		case "TodasMercadoria":
			$page->todasMercadoria();
			break;
		case "View":
			$page->viewItem();
			break;
		default:
			actionMethodNotFound();
	}
}
function actionMethodNotFound() {
	require_once("Controller/Controller.php");
	$page = new Controller();
	$page->notFound();
}
?>
