<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br" dir="ltr"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="pt-br" dir="ltr"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="pt-br" dir="ltr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br" dir="ltr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>
            <?php
            bloginfo('name');
            if (is_home()) {
                echo '-' . get_bloginfo('description');
            } else {
                wp_title('|', true);
            }
            ?>
        </title>
        <!-- <base href="" /> -->
        <meta name="keywords" content="" />
        <meta name="author" content="Joomla Calango - Joomla User Group Oficial" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="generator" content="Joomla! - Open Source Content Management" />
        <!--[if lt IE 9]><script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script><![endif]-->
        <link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/bootstrap/css/bootstrap.min.css" type='text/css'/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/template-verde.css" type='text/css'/>		
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/font-awesome/css/font-awesome.min.css" type='text/css'/>
        <!--[if lt IE 10]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css" /><![endif]-->
        <!--[if lt IE 9]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie8.css" /><![endif]-->
        <!--[if lt IE 8]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie7.css" /><link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.min.css" /><![endif]-->
        <!-- chamada de fontes local --><!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fontes.css" type='text/css'/>		 -->
        <!-- chamada de fontes externas --><link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,800,700' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/jplayer/skin/portalpadrao01/jplayer.css" type='text/css'/>	
    </head>
    <body>
        <a class="hide" id="topo" href="#accessibility">Ir direto para menu de acessibilidade.</a>
        <noscript>
        <div class="error minor-font">
            Seu navegador de internet está sem suporte à JavaScript. Por esse motivo algumas funcionalidades do site podem não estar acessíveis.
        </div>
        </noscript>
        <!--[if lt IE 7]><center><strong>Atenção, a versão de seu navegador não é compatível com este sítio. Atualize seu navegador.</strong></center><![endif]-->
        <!-- barra do governo -->
        <div id="barra-brasil">
            <a href="http://brasil.gov.br" title="Acesse para conhecer todos os serviços e informações do Governo Brasileiro na Internet.">Portal do Governo Brasileiro</a>		
        </div>
        <!-- fim barra do governo -->
        <div class="layout">
            <header>
                <div class="container"> 
                    <div class="row-fluid accessibility-language-actions-container">    			   			
                        <div class="span6 accessibility-container">
                            <ul id="accessibility">
                                <li>
                                    <a accesskey="1" href="#content" id="link-conteudo">
                                        Ir para o conte&uacute;do
                                        <span>1</span>
                                    </a>
                                </li>
                                <li>
                                    <a accesskey="2" href="#navigation" id="link-navegacao">
                                        Ir para o menu
                                        <span>2</span>
                                    </a>
                                </li>
                                <li>
                                    <a accesskey="3" href="#portal-searchbox" id="link-buscar">
                                        Ir para a busca
                                        <span>3</span>
                                    </a>
                                </li>
                                <li>
                                    <a accesskey="4" href="#footer" id="link-rodape">
                                        Ir para o rodap&eacute;
                                        <span>4</span>
                                    </a>
                                </li>
                            </ul>						
                        </div>
                        <!-- fim div.span6 -->
                        <div class="span6 language-and-actions-container">
                            <!-- Descomente para inserir menu de exemplo de idiomas no topo -->
                            <!-- <ul id="language" class="pull-right">
                                    <li class="language-en">
                                            <a href="#">EN</a>
                                    </li>
                                    <li class="language-es">
                                            <a href="#">ES</a>
                                    </li>
                            </ul>	 -->				
                            <ul id="portal-siteactions" class="pull-right">
                                <li>
                                    <a accesskey="5" href="interna-acessibilidade.html">Acessibilidade</a>
                                </li>
                                <li>
                                    <a accesskey="6" href="#" class="toggle-contraste">Alto Contraste</a>
                                </li>
                                <li>
                                    <a accesskey="7" href="#">Mapa do Site</a>
                                </li>
                            </ul>
                        </div>
                        <!-- fim div.span6 -->    
                    </div>
                    <!-- fim .row-fluid -->
                    <div class="row-fluid">
                        <div id="logo" class="span8">
                            <!-- <div id="logo" class="span8 big"> <div id="logo" class="span8 small"> -->
                            <a href="<?php bloginfo('template_url'); ?>" title="Prefeitura Munícipal de <?php bloginfo('name');?>">							
                                <span class="portal-title-1">Prefeitura Munícipal de</span>
                                <h1 class="portal-title corto"><?php bloginfo('name');?></h1>
                                <span class="portal-description"><?php echo get_bloginfo('description'); ?></span>
                            </a>
                        </div>
                        <!-- fim .span8 -->
                        <div class="span4">					
                            <div id="portal-searchbox" class="row">
                                <form action="#" class="pull-right">
                                    <fieldset>
                                        <legend class="hide">Busca</legend>
                                        <h2 class="hidden">Buscar no portal</h2>
                                        <div class="input-append">
                                            <label for="portal-searchbox-field" class="hide">Busca: </label>
                                            <input type="text" id="portal-searchbox-field" class="searchField" placeholder="Buscar no portal" title="Buscar no portal" name="searchterm">		
                                            <button type="button" class="btn searchButton"><span class="hide">Buscar</span><i class="icon-search"></i></button>
                                        </div>									
                                    </fieldset>
                                </form>
                            </div>
                            <!-- fim div#portal-searchbox.row -->
                            <div id="social-icons" class="row">
                                <h2 class="hidden">Redes Sociais</h2>
                                <ul class="pull-right">
                                    <li class="portalredes-item"><a title="Twitter" href="https://twitter.com/twitter">
                                            <i class="icon-twitter-sign"><span>Twitter</span></i></a>
                                    </li>
                                    <li class="portalredes-item"><a title="YouTube" href="http://youtube.com/youtube">
                                            <i class="icon-youtube"><span>Youtube</span></i></a>
                                    </li>
                                    <li class="portalredes-item"><a title="Facebook" href="http://facebook.com/facebook">
                                            <i class="icon-facebook-sign"><span>Facebook</span></i></a>
                                    </li>
                                    <li class="portalredes-item"><a title="Flickr" href="http://flickr.com/flickr">
                                            <i class="icon-flickr"><span>Flickr</span></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- fim div#social-icons.row -->
                        </div>
                        <!-- fim .span4 -->
                    </div>
                    <!-- fim .row-fluid -->
                </div>
                <!-- fim div.container -->
                <div class="sobre">
                    <div class="container">
                        <nav class="menu-servicos pull-right">
                            <h2 class="hide">Serviços</h2>
                            <ul>
                                <li class="portalservicos-item">
                                    <a title="Perguntas frequentes" href="interna-perguntas-frequentes.html">Perguntas frequentes</a>
                                </li>
                                <li class="portalservicos-item">
                                    <a title="Contato" href="#">Contato</a>
                                </li>
                                <li class="portalservicos-item">
                                    <a title="Serviços da [Denominação]" href="#">Serviços da [Denominação]</a>
                                </li>
                                <li class="portalservicos-item">
                                    <a title="Dados abertos" href="#">Dados abertos</a>
                                </li>
                                <li class="portalservicos-item">
                                    <a title="Área de imprensa" href="#">Área de imprensa</a>
                                </li>
                            </ul>
                            <span class="hide">Fim do menu de serviços</span>
                        </nav>
                        <!-- fim #menu-servicos.pull-right -->
                    </div>
                    <!-- .container -->
                </div>
                <!-- fim .sobre -->			
            </header>