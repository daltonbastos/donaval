<?php

function carregar_pagina(){
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'novidades';

    $caminho = 'view/'.$pagina.'.php';

    require_once 'view/_templates/header.html';

    if(file_exists($caminho))
        require_once $caminho;
    else
        require 'view/_templates/404.html';

    require_once 'view/_templates/footer.html';
}

carregar_pagina();