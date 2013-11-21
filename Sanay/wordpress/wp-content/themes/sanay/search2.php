<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<style>
@import url("<?php bloginfo('template_directory'); ?>/css/update.css");
@import url("<?php bloginfo('template_directory'); ?>/css/no-posts.css");
</style>

<script>
	// When the document is ready to receive its code
	$(document).ready( function( event ) { 

		var loader = new iSeeLoader("update");
		loader.init();
		loader.onLoadComplete( onComplete );
		
		function onComplete(){ 
			
			var site = new iSeeSite();
			site.init();
			
			var siteUpdate = new iSeeUpdate();
			siteUpdate.init();
			
		};
		
		$.getScript( iSeeLoader.connectURL + "js/masonry/masonry.pkgd.min.js").done(function() { 
			var container = document.querySelector('#the-posts');
			var msnry = new Masonry( container, {
			  // options
			  columnWidth: 0,
			  itemSelector: '.post'
			});
				
		});
		
	});
</script>

        <!-- Container That holds everything -->
        <section id="content-container">
        
            <div class="content">
                <!--Menu Update-->
                <article id="update-menu">
                    <div class="bar">
                        <h1><a href="<?php echo get_option('home'); ?>/update">Update</a></h1>
                        <div class="categorias">
                            <a href="#" id="categorias-show">Categorias</a>
                            <div class="categorias-select">
                                <ul>
                                    <?php
                                        $variable = wp_list_categories('orderby=id&show_count=0&child_of=2&title_li=0');
                                        echo $variable;
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <?php get_search_form(); ?> 
                        <div class="clearboth"></div>
                    </div>
                    <h2>Mantenha-se informado sobre as novidades do mercado e da iSee</h2>
                </article>
    
             <!--The posts-->
            <section id="the-posts">
            <!--CONTAINER COM TODOS OS ELEMENTOS DO POST-->
            <?php if ( have_posts() ) : ?>
            
                <div class="post">
                    <figure><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo catch_that_image( get_the_post_thumbnail($post->ID, 'thumbnail') ) ?></a></figure>
                    <span class="date"><?php the_time('d-m'); ?></span>
                     <h3><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
                </div>
            
            <?php else : ?>
            <div class="post-container">
                <p class="resultado">Nenhum resultado encontrado</p>
            </div>
            <?php endif; ?>
            <div class="clearboth"></div>
        </section>
    </div>
</section>


<?php get_footer(); ?>