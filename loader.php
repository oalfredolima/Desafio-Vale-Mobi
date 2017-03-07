<?php
// Evita que usuários acesse este arquivo diretamente
if ( ! defined('ABSPATH')) exit;
 
// Inicia a sessão
session_start();
// Funções globais include "function.php";
require_once ABSPATH . 'Config/functions.php';
//Layout loader
require_once ABSPATH . 'View/_Layout.php';
