<!doctype html>
<html lang="pt-BR" class="h-100">
    
    <head>
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap CSS -->
        <link href="./util/bootstrap-513-dist/css/bootstrap.css" rel="stylesheet" >
        <link href="./util/font-awesome/css/font-awesome.css" rel="stylesheet" >
        
        <style>

           .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
           }

           @media (min-width: 768px) {
               .bd-placeholder-img-lg {
                   font-size: 3.5rem;
               }
           }
           
           @media (max-width: 768px) {
               .sidebarTopCover {
                   margin-top: 20px !important;
               }
           }
           
        </style>
                
        <link href="./util/bootstrap-513-dist/css/cover.css" rel="stylesheet" >
        
        <title>spf.Chat</title>       
        
    </head>
    
    <body class="d-flex h-100 text-white" style="background-color: #627d9c">
        
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    
            <header class="mb-auto text-center">
                
                <div>
                    <h3 class="float-md-start mb-0">
                        <i class="fa fa-commenting" aria-hidden="true"></i> spf.Chat
                    </h3>
                    
                    <nav class="nav nav-masthead justify-content-center float-md-end sidebarTopCover">
                        <a 
                            class="btnLoad nav-link active"
                            id="linkEntrada"
                            aria-current="page" 
                            onclick="acaoLinkEntradaCover()">
                            Entrada
                        </a>
                        <a 
                            class="btnLoad nav-link"
                            id="linkCadastro"
                            onclick="acaoLinkCadastroCover()">
                            Cadastro
                        </a>
                        
                        <a class="nav-link" href="#">Ajuda</a>
                    </nav>
                </div>
                
            </header>
            
            <main class="px-3">
        
            <!-- Conteudo termina no footer -->

