<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/home.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/camera.css" />
	
	<!-- Content -->
    <div id="content">
    	
    	<!-- Slider -->
    	<div class="slider">
            
            <?php
                                
                $slider = array();
                for($x=1;$x<=3;$x++)
                {
                    
                    if(get_field('slider_' . $x))
                    {
                        
                        $slider[$x-1]["image"] = get_field('slider_' . $x);
                        
                        $slider[$x-1]["link-img"] = get_field('slider_link_' . $x);
                        
                        $slider[$x-1]["image_caption"] = get_field('slider_img_interna_' . $x);
                        $slider[$x-1]["title"] = get_field('slider_titulo_' . $x);
                        $slider[$x-1]["region"] = get_field('slider_localizacao_new_' . $x);
                        $slider[$x-1]["description"] = get_field('slider_descricao_' . $x);
                    }
                    else
                    {
                        break;
                    }
                }
            ?>
            <?php foreach($slider as $sliders): ?>
                
                <div data-src="<?php echo $sliders["image"] ?>" data-link="<?php echo $sliders["link-img"] ?>">
                    <div class="camera_caption">
                        <img src="<?php echo $sliders["image_caption"] ?>">
                        <div class="slide-info">
                            <strong><?php echo $sliders["title"] ?></strong>
                            <span><?php echo $sliders["region"] ?></span>
                            <p><?php echo $sliders["description"] ?></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                
            <?php endforeach; ?>

    	</div>
        <div class="clear"></div>
    	<!-- End of Slider -->
    	
    	<!-- Content Menu -->
    	<div class="content-menu">
        	<div class="content-center">
                <div class="page-margin">
                    
                    <!--Default View-->
                    <div class="default-view">
                        <ul>
                            <li class="obra borders animate"><a href="<?php echo home_url(); ?>/category/em-obra/" title="Em obra">Em obra</a></li>
                            <li class="lancamento borders animate"><a href="<?php echo home_url(); ?>/category/lancamentos/" title="Lançamento">Lançamento</a></li>
                            <li class="futuro-lancamento borders animate"><a href="<?php echo home_url(); ?>/category/futuro-lancamento/" title="Futuro Lançamento">Futuro Lançamento</a></li>
                            <li class="entregues borders animate"><a href="<?php echo home_url(); ?>/category/entregues/" title="Entregues">Entregues</a></li>
                            <li class="bairro borders animate" ><a href="<?php echo home_url(); ?>/category/bairro/" title="Por bairro">Por bairro</a></li>
                            <li class="corretor borders" onclick="corretorDefault('http://houste.hypnobox.com.br/atendimento/entrar.php?id_produto=10&gclid=&referencia=Direto&id_parceiro=', 'Fale com nosso corretor', '563', '556')" title="Fale agora com nosso corretor online"><a href="#">Fale agora com nosso <strong>corretor online</strong></a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <!--End of Default View-->
                    
                    <!--Mobile View-->
                    <div class="mobile-view">
                        <div class="corretor borders">
                            <a href="#" title="Fale agora com nosso corretor online">Fale agora com nosso corretor online</a>
                        </div>
                        <ul>
                            <li class="obra borders"><a href="<?php echo home_url(); ?>/category/em-obra/" title="Em obra">Em obra</a></li>
                            <li class="lancamento borders"><a href="<?php echo home_url(); ?>/category/lancamentos/" title="Lançamento">Lançamento</a></li>
                            <li class="futuro-lancamento borders"><a href="<?php echo home_url(); ?>/category/futuro-lancamento/" title="Futuro Lançamento">Futuro <br>Lançamento</a></li>
                            <li class="entregues borders"><a href="<?php echo home_url(); ?>/category/entregues/" title="Entregues">Entregues</a></li>
                            <li class="bairro borders"><a href="#" title="Por bairro">Por bairro</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <!--End of Mobile View-->
                    
                </div>
           </div>
    	</div>
    	<!-- End of Content Menu -->
    	
    	<!-- Destaques -->
    	<div class="destaques">
        	<div class="content-center">
                <div class="page-margin">
                    <h2>Em destaque</h2>
                    <!--Destaques Slider-->
                    <div class="destaques-slider">
                        <div class="viewport">
                            <ul id="destaques-list">
                                
                                <?php
                                    $posts = get_field('destaques');
                                    
                                    if( $posts ): ?>
                                        
                                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                                            <?php setup_postdata($post); ?>
                                                <li>
                                                    <div class="destaque-img">
                                                        <?php echo the_post_thumbnail('home-category'); ?>
                                                        <span><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span>
                                                    </div>
                                                    <div class="destaque-info">
                                                        <h3><?php the_title(); ?></h3>
                                                        <span><?php echo get_field("bairro"); ?></span>
                                                        <p><?php echo get_field("description"); ?></p>
                                                    </div>
                                                    <a href="<?php the_permalink(); ?>" title="Mais detalhes">Mais detalhes</a>
                                                    <a href="<?php the_permalink(); ?>" title="Veja mais detalhes" class="link-padding detalhes-hover transition"></a>
                                                </li>
                                        <?php endforeach; ?>
                                        
                                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                <?php endif ?>
                                
                            </ul>
                            
                        </div>
                        <div class="clear"></div>
                        
                    </div>
                    <!--Destaques Slider-->
                
                </div>
           </div>
    	</div>
    	<!-- End of Destaques -->
    	
    	<!-- Quem somos -->
    	<div class="quem-somos">
            <div class="content-center">
                <div class="page-margin">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
    		<div class="linha"></div>
    		
            <div class="content-center">
                <div class="page-margin">
                    
                    <div class="quem-somos-txt">
                    
                        <?php if( get_field('imagem_principal_home') ) {
                            $image = get_field('imagem_principal_home' ); ?>
                            <img 
                            src="<?php echo $image['url']; ?>"
                            alt="<?php echo $image['alt']; ?>"
                            title="<?php echo $image['title']; ?>">
                            
                        <?php } ?>
                    
                        <?php if( get_field('quem_somos_txt') ) {
                            echo get_field('quem_somos_txt' ); ?>
                        <?php } ?>
                        
                        <a href="<?php echo home_url(); ?>/empresa/" title="Saiba mais sobre nós">Saiba mais sobre nós</a>
                    </div>
                    <div class="clear"></div>
                    
                </div>
            </div>
    	</div>
    	<!-- End of Quem somos -->
    	
	</div>
    <!-- End of Content -->

<?php get_footer(); ?>

<!-- Scripts -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/camera.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/home.js"></script>
<!-- End of Scripts -->