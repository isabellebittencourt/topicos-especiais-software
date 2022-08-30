<?php 

function nav_bar($elemento_nav){

    if($elemento_nav == 'contato') {
        include './Navegacao/contato.php';
    }
    elseif ($elemento_nav == 'sobre_nos') {
        include './Navegacao/sobre_nos.php';
    }
    elseif($elemento_nav == 'home'){
        include './Navegacao/home.php';
    }
    else{
        include './Navegacao/404.php';
    }
}


?>