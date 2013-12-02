<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/single.css" />
	
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
                        <?php 
                            // Get the URL of this category
                            $category      = get_the_category();
                            $category_id   = get_cat_ID( $category[0]->cat_name );
                            $category_link = get_category_link( $category_id );
                        ?>
                        <a href="<?php echo esc_url($category_link) ?>" title="<?php echo $category[0]->name; ?>"> <?php echo $category[0]->name; ?> </a> 
                        <a href="#" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        <div class="clear"></div>
                    </div>
                    <div class="right">
                        <a href="../" title="Voltar para a página anterior">Voltar para a página anterior</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- End of Navigation -->
                
                    
                <!-- Image | Name | Status | Corretor-->
                <div class="main-info">
                    
                    <!--Image | Name | Status-->
                    <div class="img-name-status">
                        <div class="img-empreendimento">
                            <div class="relative">
                                <?php if( get_field('logo_empreendimento') ) {
                                    $logo_empreendimento = get_field('logo_empreendimento' ); ?>
                                    <img 
                                    src="<?php   echo $logo_empreendimento['url']; ?>"
                                    alt="<?php   echo $logo_empreendimento['alt']; ?>"
                                    title="<?php echo $logo_empreendimento['title']; ?>"
                                    >
                                <?php } ?>
                            </div>
                        </div>
                            
                            
                        <div class="name-status">
                            <h1><?php the_title(); ?></h1>
                            <div class="status">
                                <span><strong>Fase: </strong> <span class="fase"><?php echo $category[0]->name; ?></span> <span class="separator">></span> <span class="address"><?php echo get_field('bairro'); ?></span></span>
                            </div>
                            
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
                            
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- End of Image | Name | Status -->
                    
                    <!--Fale com o corretor-->
                    <?php
                    
                    $corretor_link = get_field( 'chat_link' );
                    
                    if( $corretor_link ): ?>
                       <a href="#" onclick="corretorDefault('<?php echo get_field("chat_link"); ?>', 'Fale com nosso corretor', '563', '556')" class="corretor">Fale agora com nosso <br>corretor online</a>
                    
                    <?php else : ?>
                        
                        <a href="#" onclick="corretorDefault('http://houste.hypnobox.com.br/atendimento/entrar.php?id_produto=10&gclid=&referencia=Direto&id_parceiro=', 'Fale com nosso corretor', '563', '556')" class="corretor" title="Corretores Online">Fale agora com nosso <br>corretor online</a>
                    
                    <?php endif; ?> 
                    <!--End of Fale com o corretor-->
                    
                    <!-- TABLET Fale com o corretor-->
                    <div class="tablet-corretor">
                        <?php
                    
                        $corretor_link = get_field( 'chat_link' );
                        
                        if( $corretor_link ): ?>
                           <a href="#" onclick="corretorDefault('<?php echo get_field("chat_link"); ?>', 'Fale com nosso corretor', '563', '556')">Fale agora com nosso corretor online</a>
                        
                        <?php else : ?>
                            
                            <a href="#" onclick="corretorDefault('http://houste.hypnobox.com.br/atendimento/entrar.php?id_produto=10&gclid=&referencia=Direto&id_parceiro=', 'Fale com nosso corretor', '563', '556')" class="corretor" title="Corretores Online">Fale agora com nosso corretor online</a>
                        
                        <?php endif; ?> 
                        
                    </div>
                    <!--End of TABLET Fale com o corretor-->
                    <div class="clear"></div>
                    
                </div>
                <!-- End of Image | Name | Status | Corretor -->
                
                <!-- MOBILE Image | Name | Status | Corretor-->
                <div class="mobile-main-info">
                    
                    <!--Image | Name | Status-->
                    <div class="img-name-status">
                        <h1><?php the_title(); ?></h1>
                        
                        <div class="mobile-logo">
                            <?php if( get_field('logo_empreendimento') ) {
                                $logo_empreendimento = get_field('logo_empreendimento' ); ?>
                                <img 
                                src="<?php   echo $logo_empreendimento['url']; ?>"
                                alt="<?php   echo $logo_empreendimento['alt']; ?>"
                                title="<?php echo $logo_empreendimento['title']; ?>"
                                >
                            <?php } ?>
                        </div>
                            
                            
                        <div class="name-status">
                            <div class="status">
                                <span class="first"><strong>Fase: </strong> <span class="fase"><?php echo $category[0]->name; ?></span> <span class="separator">></span> <span class="address"><?php echo get_field('bairro'); ?></span></span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- End of Image | Name | Status -->
                    
                    <!-- MOBILE Fale com o corretor-->
                    <div class="mobile-corretor">
                        <a href="#" onclick="corretorDefault('<?php echo get_field("chat_link"); ?>', 'Fale com nosso corretor', '563', '556')">Fale agora com nosso corretor online</a>
                    </div>
                    <!--End of MOBILE Fale com o corretor-->
                    <div class="clear"></div>
                    
                </div>
                <!-- End of MOBILE Image | Name | Status | Corretor -->
            
            </div>
        </div>
        
        <div class="linha"></div>
    	
        
        
        <div class="content-center">
            <div class="page-margin">
            
            <!-- Left Column -->
            <div class="left-column">
                
                <!-- Main img | txt -->
                <div class="main-img-txt">
                    
                    <?php echo the_post_thumbnail('single'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                endwhile; ?>
                    <?php endif; ?>
                    <div class="clear"></div>
                </div>
                <!-- End of Main img | txt -->
                
                <!-- Gallery -->
                <div class="gallery">
                    <h2>Galeria de fotos</h2>
                    
                    <!-- Large Size -->
                    <div class="large-image animate">
                    		<?php $the_gallery_img =  get_field('galeria_1'); ?>
                        <img src="<?php echo $the_gallery_img['url'] ?>" alt="" title="<?php echo $the_gallery_img['title'] ?>" width="<?php echo $the_gallery_img['width'] ?>" heigth="<?php echo $the_gallery_img['height'] ?>">
                        <span><?php echo $the_gallery_img['title'] ?></span>
                        <a href="<?php echo $the_gallery_img['url'] ?>" title="Veja mais detalhes" class="link-padding detalhes-hover transition"></a>
                    </div>
                    <!-- End of Large Size -->
                    
                    <!-- Selectors -->
                    <div class="selectors">
                        <a href="#" title="Anterior" class="prev selected">Anterior</a>
                        <div class="thumbs">
                            <div class="viewport animate">
                                <ul>
                                    <?php
                                
                                        $gallery_img = array();
                                        for($x=1;$x<=25;$x++)
                                        {
                                            
                                            if(get_field('galeria_' . $x))
                                            {
                                                $galeria = get_field('galeria_' . $x);
                                                $gallery_img[$x-1]["image"] = $galeria['sizes']['thumbnail'];
                                                $gallery_img[$x-1]["title"] = $galeria['title'];
                                                $gallery_img[$x-1]["link"] = $galeria['url'];
                                            }
                                            else
                                            {
                                                break;
                                            }
                                        }
                                    ?>
                                    <?php foreach($gallery_img as $gallery): ?>
                                    
                                        <li><a href="<?php  echo $gallery["link"] ?>"><img src="<?php  echo $gallery["image"] ?>" alt="" title="<?php echo $gallery["title"] ?>"></a></li>
                                        
                                    <?php endforeach; ?>
                                    
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <a href="#" title="Próxima" class="next link-padding">Próxima</a>
                        <div class="clear"></div>
                    </div>
                    <!-- End of Selectors -->
                    
                </div>
                <!-- End of Gallery -->
                
                <!-- Planta -->
                <div class="planta-gallery">
                    <h2>Planta do empreendimento</h2>
                    
                    <!-- Large Size -->
                    <div class="large-image animate">
                    		<?php $the_planta_img =  get_field('planta_galeria_1'); ?>
                        <img src="<?php echo $the_planta_img['url'] ?>" alt="" title="<?php echo $the_planta_img['title'] ?>">
                        
                        <?php if( $the_planta_img['title'] ): ?>
                        
                        <span><?php echo $the_planta_img['title'] ?></span>
                        <?php endif; ?>
                        
                        <a href="<?php echo $the_planta_img['url'] ?>" title="Veja mais detalhes" class="link-padding detalhes-hover transition"></a>
                    </div>
                    <!-- End of Large Size -->
                    
                    <!-- Selectors -->
                    <div class="selectors">
                        <a href="#" title="Anterior" class="prev selected">Anterior</a>
                        <div class="thumbs">
                            <div class="viewport animate">
                                <ul>
                                    <?php
                                
                                        $planta_gallery_img = array();
                                        for($x=1;$x<=10;$x++)
                                        {
                                            $planta_array = get_field('planta_galeria_' . $x);
                                            if($planta_array)
                                            {
                                                
                                                $planta_gallery_img[$x-1]["image"] = $planta_array['sizes']['thumbnail'];
                                                $planta_gallery_img[$x-1]["title"] = $planta_array['title'];
                                                $planta_gallery_img[$x-1]["link"]  = $planta_array['url'];
                                            }
                                            else
                                            {
                                                break;
                                            }
                                        }
                                    ?>
                                    <?php foreach($planta_gallery_img as $planta_gallery): ?>
                                    
                                        <li><a href="<?php  echo $planta_gallery["link"] ?>"><img src="<?php  echo $planta_gallery["image"] ?>" alt="" title="<?php echo $planta_gallery["title"] ?>"></a></li>
                                        
                                    <?php endforeach; ?>
                                    
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <a href="#" title="Próxima" class="next link-padding">Próxima</a>
                        <div class="clear"></div>
                    </div>
                    <!-- End of Selectors -->
                    
                </div>
                <!-- End of Planta -->
                
                <!-- Localização -->
                <div class="localizacao">
                    <h2>Localização</h2>
                    <?php $map = get_field('map');?>
                    <p><?php echo $map['address']; ?></p>
                    <iframe width="100%" height="372" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=pt&amp;geocode=&amp;q=<?php echo $map['coordinates']; ?>&amp;aq=&amp;sll=37.0625,-95.677068&amp;output=embed"></iframe>
                </div>
                <!-- End of Localização -->
                
            </div>
            <!-- End of Left Column -->
            
            <!-- Right Column -->
            <div class="right-column">
                
                <!-- Ficha técnica -->
                <div class="ficha-tecnica">
                    <a href="#" title="Expandir informações" class="mobile-expand"></a>
                    <h2>Ficha Técnica</h2>
                    <ul class="animate">
                        <li><strong>Produto:</strong> <span><?php echo get_field('produto'); ?></span> </li>
                        <li><strong>Área do terreno</strong> <span><?php echo get_field('area'); ?></span></li>
                        <li><strong>Nº de vagas por unidade:</strong> <span><?php echo get_field('vagas'); ?></span></li>
                        <li><strong>Tipo:</strong> <span><?php echo get_field('tipo'); ?></span></li>
                        <li><strong>Pavimentos:</strong> <span><?php echo get_field('pavimentos'); ?></span></li>
                        <li><strong>Número de torres:</strong> <span><?php echo get_field('torres'); ?></span></li>
                        <li><strong>Unidades (total):</strong> <span><?php echo get_field('unidades_total'); ?></span></li>
                        <li><strong>Unidades (andar):</strong> <span><?php echo get_field('unidades_andar'); ?></span></li>
                        <li><strong class="block">Realização:</strong> <span><?php echo get_field('realizacao'); ?></span></li>
                        <li><strong>Projeto de arquitetura:</strong> <span><?php echo get_field('projeto_de_arquitetura'); ?></span></li>
                        <li><strong>Projeto de paisagismo:</strong> <span><?php echo get_field('projeto_de_paisagismo'); ?></span></li>
                        <li><strong>Vendas:</strong> <span><?php echo get_field('vendas'); ?></span></li>
                        <li><strong>Acesse:</strong> <span><a class="acesse" href="http://<?php echo get_field('acesse'); ?>" target="blank"><?php echo get_field('acesse'); ?></a></span></li>
                    </ul>
                </div>
                <!-- Ficha técnica -->
                
                <?php get_sidebar(); ?>
                
            </div>
            <!-- End of Right Column -->
            
            <div class="clear"></div>
            
            
            
            </div>
    	</div>
		
		
                                
                                <?php
                                    $posts = get_field('relacionados');
                                    
                                    if( $posts ): ?>
                                        
                                        <!-- Destaques -->
                                        <div class="destaques">
                                            <div class="content-center">
                                                <div class="page-margin">
                                                    <h2>Veja os imóveis que podem te interessar</h2>
                                                    <!--Destaques Slider-->
                                                    <div class="destaques-slider">
                                                        <div class="viewport">
                                                            <ul id="destaques-list">
        
                                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                                            <?php setup_postdata($post); ?>
                                                <li>
                                                    <div class="destaque-img">
                                                        <?php echo the_post_thumbnail('home-category', 27); ?>
                                                        
                                                        <span><?php echo $category[0]->cat_name; ?></span>
                                                    </div>
                                                    <div class="destaque-info">
                                                        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                                        <span><?php echo get_field("bairro"); ?></span>
                                                        <p><?php echo get_field("description"); ?></p>
                                                    </div>
                                                    <a href="<?php the_permalink(); ?>" title="Mais detalhes">Mais detalhes</a>
                                                    <a href="<?php the_permalink(); ?>" title="Veja mais detalhes" class="link-padding detalhes-hover transition"></a>
                                                </li>
                                        <?php endforeach; ?>
                                                                </ul>
                        </div>
                        <div class="clear"></div>
                        
                    </div>
                                        
                                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                             
                    <!--Destaques Slider-->
                
                </div>
           </div>
    	</div>
    	<!-- End of Destaques -->                   
                                                                
                                <?php endif ?>
                                
                            
    	
	</div>
    <!-- End of Content -->

<?php get_footer(); ?>

<!-- Scripts -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/sidebar.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/single.js"></script>
<!-- End of Scripts -->