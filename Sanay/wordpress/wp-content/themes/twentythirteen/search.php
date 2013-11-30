<?php get_header(); ?>
<?php /* Template Name: Search Page */ ?>
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/home.css" />
	
	<!-- Content -->
    <div id="content">
    	
    	<!-- Content Menu -->
    	<div class="content-menu" style="margin: 30px 0 25px 0;">
        	<div class="content-center">
                <div class="page-margin">
                    
                    <!--Default View-->
                    <div class="default-view">
                        <ul>
                            <li class="obra borders animate"><a href="<?php echo home_url(); ?>/category/em-obra/" title="Em obra">Em obra</a></li>
                            <li class="lancamento borders animate"><a href="<?php echo home_url(); ?>/category/lancamentos/" title="Lançamento">Lançamento</a></li>
                            <li class="futuro-lancamento borders animate"><a href="<?php echo home_url(); ?>/category/futuro-lancamento/" title="Futuro Lançamento">Futuro Lançamento</a></li>
                            <li class="entregues borders animate"><a href="<?php echo home_url(); ?>/category/entregues/" title="Entregues">Entregues</a></li>
                            <li class="bairro borders animate"><a href="<?php echo home_url(); ?>/category/bairro/" title="Por bairro">Por bairro</a></li>
                            <li class="corretor borders animate"><a href="#" onclick="corretorDefault('http://houste.hypnobox.com.br/atendimento/entrar.php?id_produto=10&gclid=&referencia=Direto&id_parceiro=', 'Fale com nosso corretor', '563', '556')" title="Fale agora com nosso corretor online">Fale agora com nosso <strong>corretor online</strong></a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <!--End of Default View-->
                    
                    
                    <div class="selected-menu" style="left:72.5%;"></div>
                    <style>
                        .lancamento, .obra, .entregues, .futuro-lancamento{opacity:0.6 !important;}
                        .bairro{opacity:1 !important;}
                    </style>
                    
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
    	
        <!--Array dos posts-->
        <div class="destaques">
        	<div class="content-center">
                <div class="page-margin">
                
                    <h2>Bairro ></h2>
                    <!--Bairros Selector-->
                    <select id="bairros-list-content">
                        <option selected>Selecione aqui outros bairros:</option>
                        <?php
                            $bairros_list = array( 'numberposts' => -1, 'category' => $category_post->term_id );
                            $myposts = get_posts( $bairros_list );
                            
                            if(count($myposts) > 0) 
                            { 	
                                foreach( $myposts as $post ) :	setup_postdata($post); 
                                
                                    $args1 = array(
                                       'post_type' => 'attachment',
                                       'numberposts' => -1,
                                       'post_status' => null,
                                       'post_parent' => $post->ID
                                    );
                                    $attachments = get_posts( $args1 );
                                
                                ?>
                                
                                <option><?php echo get_field("bairro"); ?></option>
                                
                                 <?php 
                                endforeach;
                                } 
                                else { 
                                    echo "<p class='nenhum-encontrado'>Nenhum empreendimento encontrado.</p>";
                                }
                            ?>
                    </select>
                    <!--End of Bairros Selector-->
                    
                    <!--Destaques Slider-->
                    <div class="destaques-slider">
                        <div class="viewport">
                            <ul id="destaques-list">
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                    
                                    
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
                                
                                <?php endwhile; else : ?>
                                    <p class='nenhum-encontrado'>Nenhum empreendimento encontrado.</p>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        
                    </div>
                    <!--Destaques Slider-->
                    
                </div>
            </div>
        </div>
        <!--END OF Array dos posts-->
    	
    	<!-- Quem somos -->
    	<div class="quem-somos">
            <div class="content-center">
                <div class="page-margin">
                    <h2>Quem somos</h2>
                </div>
            </div>
    		<div class="linha"></div>
    		
            <div class="content-center">
                <div class="page-margin">
                    
                    <div class="quem-somos-txt">
                        <?php if( get_field('imagem_principal_home', 27) ) {
                            $image = get_field('imagem_principal_home', 27 ); ?>
                            <img 
                            src="<?php echo $image['url']; ?>"
                            alt="<?php echo $image['alt']; ?>"
                            title="<?php echo $image['title']; ?>">
                            
                        <?php } ?>
                        
                        
                            <?php if( get_field('quem_somos_txt', 27) ) {
                                echo get_field('quem_somos_txt', 27 ); ?>
                            <?php } ?>
                            
                            <a href="<?php echo home_url(); ?>/empresa/" title="Saiba mais sobre nós">Saiba mais sobre nós</a>
                        <div class="clear"></div>
                    </div>
                    
                </div>
            </div>
            <!-- End of Quem somos -->
    	
	</div>
    <!-- End of Content -->

<?php get_footer(); ?>

<!-- Scripts - Yes, on the end -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/home.js"></script>
<!-- End of Scripts -->