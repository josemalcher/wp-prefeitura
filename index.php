<?php get_header(); ?>
<!--Início Mail-->
<main> 
    <div class="container">
        <div class="row-fluid">
            <section id="em-destaque">
                <!-- Menu Destaques - TOTAL 5 -->
                <h2 class="span2"><span>Destaques</span></h2>
                <ul class="span10 n5">    						
                    <li>
                        <a href="index.html" title="">Padrão na cor verde</a>
                    </li>
                    <li>
                        <a href="index-amarelo.html" title="">Padrão na cor amarelo</a>
                    </li>
                    <li>
                        <a href="index-azul.html" title="">Padrão na cor azul</a>
                    </li>
                    <li>
                        <a href="index-branco.html" title="">Padrão na cor branco</a>
                    </li>
                    <li>
                        <a href="index-estrutura-c.html" title="">Estrutura em C</a>
                    </li>							
                </ul>	
                <!-- <li class="ajuste-duas-linhas">Destaque 5</li> -->						
            </section>
        </div>
        <!-- fim .row-fluid -->
        <!-- sidebar -->
        <?php get_sidebar(); ?>
        <!-- sidebar fim-->
        <div id="content" class="span9">
            <section id="content-section">							
                <span class="hide">Início do conteúdo da página</span>							
                <div class="row-fluid module">							
                    <div class="outstanding-header">
                        <h2 class="outstanding-title">Portal Padrão</h2>
                    </div>
                    <section class="module-section">
                        <div class="span4 no-margin">    								
                            <p class="subtitle">Identidade Digital de Governo</p>
                            <h1>
                                <a title="Estrutura reúne o que há de mais adequado em soluções digitais de acessibilidade e de divulgação de informações nos mais variados formatos; conheça os detalhes deste novo modelo e acesse os manuais de identidade digital, estilo, instalação e gestão de conteúdo" href="#">Conheça o novo modelo de plataforma digital</a>
                            </h1>
                            <p>Estrutura reúne o que há de mais adequado em soluções digitais de acessibilidade e de divulgação de informações nos mais variados formatos; conheça os detalhes deste novo modelo e acesse os manuais de identidade digital, estilo, instalação e gestão de conteúdo</p>											
                        </div>
                        <!-- fim .span4 -->
                        <div class="span8">
                            <object width="480" height="246"><param value="//www.youtube.com/v/BGzfIhIUF68?version=3&amp;hl=pt_BR&amp;rel=0" name="movie"><param value="true" name="allowFullScreen"><param value="always" name="allowscriptaccess"><embed width="480" height="368" allowfullscreen="true" allowscriptaccess="always" type="application/x-shockwave-flash" src="//www.youtube.com/v/BGzfIhIUF68?version=3&amp;hl=pt_BR&amp;rel=0"></object>
                        </div>
                        <!-- fim .span8 -->
                    </section>
                </div>
                <!-- fim .row-fluid -->
                <div class="row-fluid">
                    <div class="span4 module variacao-module-01">
                        <div class="outstanding-header">
                            <h2 class="outstanding-title">Planejamento</h2>
                        </div>
                        <h3><a href="#">Conheça as etapas para o desenvolvimento de portais</a></h3>
                        <p>Apresentação mostra como desenvolver um site de acordo com a Identidade digital do governo federal</p>
                    </div>
                    <div class="span4 module variacao-module-02">
                        <div class="outstanding-header">
                            <h2 class="outstanding-title">Lei de acesso à informação</h2>
                        </div>
                        <h3><a href="#">Saiba como montar o menu da Lei de Acesso à Informação</a></h3>
                        <p>Órgãos do governo federal devem disponibilizar em seu site um menu especificado pela legislação</p>
                    </div>
                    <div class="span4 module variacao-module-03">
                        <div class="outstanding-header">
                            <h2 class="outstanding-title">Agenda</h2>
                        </div>
                        <p>O módulo agenda, que ocupará este espaço está em desenvolvimento e ficará disponível até o fim do mês de outubro.</p>
                    </div>
                </div>
                <!-- fim .row-fluid -->
                <div class="row-fluid">
                    <div class="span4 module">									
                        <div class="outstanding-header">
                            <h2 class="outstanding-title">Áudio do órgão</h2>
                        </div>
                        <!-- inicio jplayer -->
                        <div class="jp-audio-slim">
                            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                            <div id="jp_container_1" class="jp-audio">
                                <div class="jp-type-single">
                                    <div class="jp-gui jp-interface">
                                        <ul class="jp-controls">
                                            <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                                            <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                                            <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                                            <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                                            <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                                            <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                                        </ul>
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div class="jp-play-bar"></div>
                                            </div>
                                        </div>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value"></div>
                                        </div>
                                        <div class="jp-time-holder">
                                            <div class="jp-current-time"></div>
                                            <div class="jp-duration"></div>


                                        </div>
                                    </div>
                                    <div class="jp-no-solution">
                                        <span>Necessário plugin</span>
                                        Para habilitar o áudio, é necessário que você tenha instalado em seu computador o <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fim jplayer -->
                        <p>Espaço para inserir a legenda do áudio 1</p>
                        <div class="outstanding-footer">
                            <a href="#" class="outstanding-link">
                                <span class="text">Mais áudios</span>
                                <span class="icon-box">											 
                                    <i class="icon-angle-right icon-light"><span class="hide">&nbsp;</span></i>
                                </span>
                            </a>
                        </div>									
                    </div>
                    <!-- fim .span4 .module -->
                    <div class="span8 module module-box-01">									
                        <div class="header">
                            <h2 class="title">Últimas notícias</h2>
                        </div>
                        <ul class="lista row-fluid">
                            <li class="span4">
                                <h3><a href="#" title="Subtítulo do texto 1. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres">Subtítulo do texto 1. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres</a></h3>
                            </li>
                            <li class="span4">
                                <h3><a href="#" title="Subtítulo do texto 2. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres">Subtítulo do texto 2. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres</a></h3>
                            </li>
                            <li class="span4">
                                <h3><a href="#" title="Subtítulo do texto 3. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres">Subtítulo do texto 3. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres</a></h3>
                            </li>
                            <li class="span4">
                                <h3><a href="#" title="Subtítulo do texto 4. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres">Subtítulo do texto 4. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres</a></h3>
                            </li>
                            <li class="span4">
                                <h3><a href="#" title="Subtítulo do texto 5. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres">Subtítulo do texto 5. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres</a></h3>
                            </li>
                            <li class="span4">
                                <h3><a href="#" title="Subtítulo do texto 6. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres">Subtítulo do texto 6. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres</a></h3>
                            </li>
                            <li class="span4">
                                <h3><a href="#" title="Subtítulo do texto 7. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres">Subtítulo do texto 7. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres</a></h3>
                            </li>
                            <li class="span4">
                                <h3><a href="#" title="Subtítulo do texto 8. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres">Subtítulo do texto 8. Se em uma linha, usar 90 caracteres. Se em duas linhas usar 190 caracteres</a></h3>
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="interna-ultimas-noticias.html" class="link">Acesse a lista completa</a>
                        </div>									
                    </div>
                    <!-- fim .span8 .module -->
                </div>
                <!-- fim .row-fluid -->
                <div class="row-fluid">
                    <div class="span4 module module-twitter-facebook">
                        <div class="header tabs row-fluid">
                            <h2 class="title active span6">Twitter</h2>
                            <h2 class="title span6 hide">Facebook</h2>
                        </div>
                        <div class="pane">
                            <div class="twitter-content">
                                <a data-widget-id="388035310119964672" href="https://twitter.com/Portal%20Brasil" class="twitter-timeline"><br />Tweets do Portal Brasil</a>
                                <script>!function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location)?'http':'https'; if (!d.getElementById(id)){js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); }}(document, "script", "twitter-wjs");</script><noscript>
                                <div class="error">
                                    <p>Javascript desativado.</p>
                                    <p><a href="https://twitter.com/portalbrasil">Micro-blog Twitter do Portal Brasil</a></p>
                                </div>
                                </noscript>
                            </div>								       
                        </div>
                    </div>
                    <!-- fim .span4 .module -->
                    <div class="span8 module module-box-01 module-box-01-top-adjust">
                        <div class="header">
                            <h2 class="title">Galeria de imagens</h2>
                        </div>
                        <div class="gallery-pane">
                            <!-- inicio galeria -->
                            <div class="carousel slide" id="gallery-carousel">
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img alt="Foto de paisagem de montanhas" src="<?php bloginfo('template_url'); ?>/images/image.jpg">

                                        <div class="galleria-info">
                                            <div class="galleria-info-text">
                                                <div class="galleria-info-title">
                                                    <h3><a href="http://portalpadrao.plone.org.br/conteudos-de-marcacao/imagem-1-titulo-com-ate-45-caracteres/view">Imagem 1: título com até 45 caracteres</a></h3>
                                                </div>
                                                <div class="galleria-info-description">Espaço para incluir a legenda/descrição da imagem</div>
                                                <div data-index="0" style="display: block;" class="rights">Nome do autor da imagem</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item active">
                                        <img alt="Foto de flor delicada cercada de folhas verdes" src="<?php bloginfo('template_url'); ?>/images/image2.jpg">

                                        <div class="galleria-info">
                                            <div class="galleria-info-text">
                                                <div class="galleria-info-title">
                                                    <h3><a href="http://portalpadrao.plone.org.br/conteudos-de-marcacao/imagem-1-titulo-com-ate-45-caracteres/view">Imagem 2: título com até 45 caracteres</a></h3>
                                                </div>
                                                <div class="galleria-info-description">Espaço para incluir a legenda/descrição da imagem</div>
                                                <div data-index="0" style="display: block;" class="rights">Nome do autor da imagem</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img alt="Foto de 3 pinguins" src="<?php bloginfo('template_url'); ?>/images/image3.jpg">

                                        <div class="galleria-info">
                                            <div class="galleria-info-text">
                                                <div class="galleria-info-title">
                                                    <h3><a href="http://portalpadrao.plone.org.br/conteudos-de-marcacao/imagem-1-titulo-com-ate-45-caracteres/view">Imagem 3: título com até 45 caracteres</a></h3>
                                                </div>
                                                <div class="galleria-info-description">Espaço para incluir a legenda/descrição da imagem</div>
                                                <div data-index="0" style="display: block;" class="rights">Nome do autor da imagem</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img alt="Foto de várias flores" src="<?php bloginfo('template_url'); ?>/images/image4.jpg">

                                        <div class="galleria-info">
                                            <div class="galleria-info-text">
                                                <div class="galleria-info-title">
                                                    <h3><a href="http://portalpadrao.plone.org.br/conteudos-de-marcacao/imagem-1-titulo-com-ate-45-caracteres/view">Imagem 4: título com até 45 caracteres</a></h3>
                                                </div>
                                                <div class="galleria-info-description">Espaço para incluir a legenda/descrição da imagem</div>
                                                <div data-index="0" style="display: block;" class="rights">Nome do autor da imagem</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <a data-slide="prev" href="#gallery-carousel" class="left carousel-control"><i class="icon-angle-left"></i><span class="hide">Mover foto esquerda</span></a>
                                <!-- separador para fins de acessibilidade --><span class="hide">&nbsp;</span><!-- fim separador para fins de acessibilidade -->
                                <a data-slide="next" href="#gallery-carousel" class="right carousel-control"><i class="icon-angle-right"></i><span class="hide">Mover foto esquerda</span></a>
                            </div>
                            <!-- fim galeria -->
                        </div>
                        <div class="footer">
                            <a href="#" class="outstanding-link"><span class="text">Acesse a lista completa</span>
                                <span class="icon-box">											 
                                    <i class="icon-angle-right icon-light"><span class="hide">&nbsp;</span></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- fim .span8 .module -->
                </div>
                <!-- fim .row-fluid -->
                <div class="row-fluid">
                    <div class="span12 module">
                        <div class="outstanding-header">
                            <h2 class="outstanding-title">Programas</h2>
                        </div>
                        <div class="span4 no-margin">
                            <a href="#" class="img-rounded"><img src="<?php bloginfo('template_url'); ?>/images/8309509b-fd4a-4c6c-be30-e8ce75642bcc.jpeg" alt="imagem decorativa"></a>
                            <h2><a href="#">Texto 1: Título da manchete em até 55 caracteres com espaço</a></h2>
                            <p>Subtítulo do texto 1. Escrever texto do subtítulo da chamada em até 130 caracteres com espaço</p>
                        </div>
                        <!-- fim .span4 .no-margin -->
                        <div class="span4">
                            <a href="#" class="img-rounded"><img src="<?php bloginfo('template_url'); ?>/images/4ae7baa4-f707-4b34-a01e-9c5fe45f00b9.jpeg" alt="imagem decorativa"></a>
                            <h2><a href="#">Texto 2: Título da manchete em até 55 caracteres com espaço</a></h2>
                            <p>Subtítulo do texto 2. Escrever texto do subtítulo da chamada em até 130 caracteres com espaço</p>
                        </div>
                        <!-- fim .span4 -->
                        <div class="span4">
                            <a href="#" class="img-rounded"><img src="<?php bloginfo('template_url'); ?>/images/c11b62ec-4a89-4707-a39e-9413b20cf235.jpeg" alt="imagem decorativa"></a>
                            <h2><a href="#">Texto 3: Título da manchete em até 55 caracteres com espaço</a></h2>
                            <p>Subtítulo do texto 3. Escrever texto do subtítulo da chamada em até 130 caracteres com espaço</p>
                        </div>
                        <!-- fim .span4 -->
                    </div>
                    <!-- fim .span12 .module -->
                </div>
                <!-- fim .row-fluid -->
                <span class="hide">Fim do conteúdo da página</span>							
            </section>
        </div>
        <!-- fim #content.span9 -->
    </div>
    <!-- fim .row-fluid -->
</div>
<!-- fim .container -->
</main>
<!--FIM Mail-->
<?php get_footer(); ?>