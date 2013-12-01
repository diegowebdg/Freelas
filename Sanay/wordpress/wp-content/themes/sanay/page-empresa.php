<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/empresa.css" />
	
	<!-- Content -->
    <div id="content">
           
        <!-- Post img -->
		<?php
        
        $images = get_field( 'banner-post' );
        
        if( $images ): ?>
           <div class="post-img"
            style="background:url( <?php echo $images; ?> ) no-repeat center;"></div>
		
		<?php else : ?>
        	
            <div class="post-img" style="background:url( <?php bloginfo('template_directory'); ?>/images/bg-default-internas.jpg) no-repeat center;"></div>
        
        <?php endif; ?>    	
        <!-- End of Post img -->
        
        <div class="content-center">
            <div class="page-margin">
                
                <!-- Navigation -->
                <div class="navigation">
                    <div class="left">
                        <a href="<?php echo home_url(); ?>/" title="Home">Home</a> 
                        <a href="#" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        <div class="clear"></div>
                    </div>
                    <div class="right">
                        <a href="../" title="Voltar para a página anterior">Voltar para a página anterior</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- End of Navigation -->
                
                <!--Page Tittle-->
                <h1><?php the_title(); ?></h1>
                <!--End of Page Tittle-->
                
            </div>
        </div>
        
        <div class="linha"></div>
        
        <div class="content-center">
            <div class="page-margin">
                
                <!-- Left Column -->
                <div class="left-column">
                
                    <!-- Share Buttons -->
                    <div class="share-buttons">
                        <div class="addthis_toolbox addthis_default_style ">
                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                        <a class="addthis_button_tweet"></a>
                        <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal"></a>
                        <a class="addthis_counter addthis_pill_style"></a>
                        </div>
                        <script type="text/javascript">
                            var addthis_config = addthis_config||{};
                            addthis_config.data_track_addressbar = false;
                            addthis_config.data_track_clickback = false;
                        </script>
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-528859565f261904"></script>
                    </div>
                    <!-- End of Share Buttons -->
                    
                    <div class="empresa-txt">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                            the_content();
                    endwhile; ?>
                        <?php endif; ?>
                    </div>
                    
                    
                </div>
                <!-- End of Left Column -->
                
                <!-- Right Column -->
                <div class="right-column">
                    
                    <?php
                        include "encontre-imoveis.php";
                    ?>
                    
                    <!-- Options -->
                    <?php get_sidebar(); ?>
                    <!-- End of Options-->
                    
                </div>
                <!-- End of Right Column -->
                <div class="clear"></div>
                
            </div>
        </div>
    	
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
                                    $posts = get_field('destaques', 27);
                                    
                                    if( $posts ): ?>
                                        
                                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                                            <?php setup_postdata($post); ?>
                                                <li>
                                                    <div class="destaque-img">
                                                        <?php echo the_post_thumbnail('home-category', 27); ?>
                                                        
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
    	
    	
    	
	</div>
    <!-- End of Content -->

<?php get_footer(); ?>

<!-- Scripts -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/masked.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/sidebar.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script type="text/javascript">
$(document).ready(function(e){
    $("#menu ul li").children("a[title*='A empresa']").css({borderBottom:"solid 3px #02789e"});
    
    $("#ddd_tel_ligamos").mask("(99) 9999-9999?9"); 
    $("#ddd_tel_duvidas").mask("(99) 9999-9999?9");
});
</script>
<!-- End of Scripts -->