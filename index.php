<?php

include 'header.php';

$pagina=$_GET['aaa'];

switch($pagina){

    case "home": include 'view/home.php';
    break;
    case "Contatos": include 'view/contacts.php';
    break;
    default: include 'view/home.php';
    break;
}

include 'footer.php';