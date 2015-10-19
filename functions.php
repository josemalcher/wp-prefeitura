<?php
/*
 * Carrega os arquivos Css e JS 
 * É necessário ANTES Revisar e atualizar os scripts carregados.
 * Status ta função = Desativada
 * Ultima Verificação em 19/10/2015
 */
//add_action('wp_enqueue_scripts', 'wpPrefeitura_enqueue_scripts');
function wpPrefeitura_enqueue_scripts() {
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/css/style.css');
    wp_enqueue_style('fontes-css', get_stylesheet_directory_uri() . '/css/fontes.css');
    wp_enqueue_style('ie-css', get_stylesheet_directory_uri() . '/css/ie.css');
    wp_enqueue_style('ie7-css', get_stylesheet_directory_uri() . '/css/ie7.css');
    wp_enqueue_style('ie8-css', get_stylesheet_directory_uri() . '/css/ie8.css');

    /*
     * Cor do templates ativos:
     */
    wp_enqueue_style('template-amarelo-css', get_stylesheet_directory_uri() . '/css/template-amarelo.css');
    wp_enqueue_style('template-azul-css', get_stylesheet_directory_uri() . '/css/template-azul.css');
    wp_enqueue_style('template-branco-css', get_stylesheet_directory_uri() . '/css/template-branco.css');
    wp_enqueue_style('template-verde-css', get_stylesheet_directory_uri() . '/css/template-verde.css');

    wp_enqueue_style('font-awesome-css', get_stylesheet_directory_uri() . '/libs/font-awesome/css/font-awesome.css');

    /*
     * T. Bootstrap
     */
    wp_enqueue_style('Bootstrap-css', get_stylesheet_directory_uri() . '/libs/bootstrap/css/bootstrap.css');
    wp_enqueue_style('Bootstrap-min-css', get_stylesheet_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css');
    wp_enqueue_script('Bootstrap-js', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.js');
    wp_enqueue_script('Bootstrap-mim-js', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js');

    wp_enqueue_script('html5shiv-js', get_template_directory_uri() . '/js/html5shiv.min.js');
    wp_enqueue_script('jquery-migrate-min-js', get_template_directory_uri() . '/js/jquery-migrate.min.js');
    wp_enqueue_script('jquery-noconflict-js', get_template_directory_uri() . '/js/jquery-noconflict.min.js');
    wp_enqueue_script('jquery-cookie-js', get_template_directory_uri() . '/js/jquery.cookie.js');
    wp_enqueue_script('jquery-min-js', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('jquery.parallax-min-js', get_template_directory_uri() . '/js/jquery.parallax.min.js');
    wp_enqueue_script('jquery.rss-min-js', get_template_directory_uri() . '/js/jquery.rss.min.js');
    wp_enqueue_script('retina-min-js', get_template_directory_uri() . '/js/retina.min.js');
    wp_enqueue_script('rv-jquery-fontsize-min-js', get_template_directory_uri() . '/js/rv-jquery-fontsize.min.js');
    wp_enqueue_script('store-min-js', get_template_directory_uri() . '/js/store.min.js');

    wp_enqueue_script('template-js', get_template_directory_uri() . '/js/template.js');
    wp_enqueue_script('tinynav-min-js', get_template_directory_uri() . '/js/tinynav.min.js');
}

/**
* PROJETOS ANTERIORES - PROPOSTA: ATUALIZAR A VERSÃO DO CSS's e JS's DO TEMPLATE WP-PREFEITURA
*/
//    wp_enqueue_style('jq.tweet', get_stylesheet_directory_uri() . '/css/jquery.tweet.css');
//    wp_enqueue_style('superfish', get_stylesheet_directory_uri() . '/css/superfish.css');
//    wp_enqueue_style('prettyPhoto', get_stylesheet_directory_uri() . '/js/prettyPhoto/css/prettyPhoto.css');
//    wp_enqueue_style('poshytip', get_stylesheet_directory_uri() . '/js/poshytip-1.1/src/jquery.poshytip.min.js');
//    wp_enqueue_style('flexslider', get_stylesheet_directory_uri() . '/css/flexslider.css');
//    wp_enqueue_style('less', get_stylesheet_directory_uri() . '/css/lessframework.css');
//    wp_enqueue_style('skin', get_stylesheet_directory_uri() . '/css/skin.css');
//wp_enqueue_script('css3mediaqueries', get_stylesheet_directory_uri() . '/js/css3-mediaqueries.js', array('jquery'));
//    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js');
//    wp_enqueue_script('tabs', get_stylesheet_directory_uri() . '/js/tabs.js');
//    wp_enqueue_script('jq.tweet-js', get_stylesheet_directory_uri() . '/js/tweet/jquery.tweet.js');
//    wp_enqueue_script('hoverintent', get_stylesheet_directory_uri() . '/js/superfish-1.4.8/js/hoverIntent.js');
//    wp_enqueue_script('superfish', get_stylesheet_directory_uri() . '/js/superfish-1.4.8/js/superfish.js');
//    wp_enqueue_script('supersubs', get_stylesheet_directory_uri() . '/js/superfish-1.4.8/js/supersubs.js');
//    wp_enqueue_script('jsPrettyPhoto', get_stylesheet_directory_uri() . '/js/prettyPhoto/js/jquery.prettyPhoto.js');
//    wp_enqueue_script('jsposhytip', get_stylesheet_directory_uri() . '/js/poshytip-1.1/src/jquery.poshytip.min.js');
//    wp_enqueue_script('jsflexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js');
//    wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js');

/***********************************************/

