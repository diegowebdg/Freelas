<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="pt-br">
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php if ( is_search() ) { echo the_search_query(); echo " - "; bloginfo(’name’); } ?><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
<!--Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11864946-14', 'sanay.com.br');
  ga('send', 'pageview');

</script>
<!--End of Analytics-->
<script type="text/javascript">
   var site_url = '<?php bloginfo('url'); ?>';
</script>
</head>

<body>

<!--Container-->
<div id="container">
	
    <!--LightBox-->
    <div class="lightbox">
        <div class="lightbox-content">
            <a href="#" title="Fechar" class="fechar">Fechar</a>
            
            <?php if( is_single()) { ?>
				 <?php
                   
                   $images = get_field( 'galeria_1' );
                   if( $images ):
                 ?>
                                                                        
                     <img src="<?php echo $image[ 'sizes' ][ 'large' ]; ?>" alt="" title="">
                     
                 <?php
                    endif;
                 ?>
            <?php } ?>
        </div>
    </div>
    <!--End of LightBox-->
    
    <!--Header-->
    <div id="header">

        <div class="content-center">
            
            <div class="page-margin">
                
                <!--Default View-->
                <div class="default-view">
                    <!--Logo-->
                    <a href="<?php echo home_url(); ?>/" title="Voltar para a página inicial" class="link-padding logo">Sanay | Desenvolvimento imobiliário</a>
                    <!--End of Logo-->
                
                    <!--Menu-->
                    <div id="menu">
                        <ul>
                            <li><a href="<?php echo home_url(); ?>" title="Voltar para a página inicial" class="home-link link-padding">Home</a></li>
                            <li><a href="<?php echo home_url(); ?>/empresa/" title="A empresa">A empresa</a></li>
                            <li class="relative">
                                <a href="#" title="Empreendimentos" class="empreendimentos-menu">Empreendimentos</a>
<<<<<<< HEAD
                                <div class="hover"></div>
                                
                                <div class="submenu-empreendimentos">
=======
                                <!--Menu Empreendimentos-->
                                <div class="submenu-empreendimentos">
                                    <div class="hover"></div>
>>>>>>> 4b0a5cf741fdd0a81cb06db431c38a65c3c7f662
                                    <ul>
                                        <li class="obra"><a href="<?php echo home_url(); ?>/category/em-obra/" title="Em obra">Em obra</a></li>
                                        <li class="lancamento"><a href="<?php echo home_url(); ?>/category/lancamentos/" title="Lançamento">Lançamento</a></li>
                                        <li class="futuro-lancamento"><a href="<?php echo home_url(); ?>/category/futuro-lancamento/" title="Futuro Lançamento">Futuro Lançamento</a></li>
                                        <li class="entregues"><a href="<?php echo home_url(); ?>/category/entregues/" title="Entregues">Entregues</a></li>
                                        <li class="bairro"><a href="<?php echo home_url(); ?>/category/bairro/" title="Por bairro">Por bairro</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
<<<<<<< HEAD
                                
=======
                                <!--End of Menu Empreendimentos-->
>>>>>>> 4b0a5cf741fdd0a81cb06db431c38a65c3c7f662
                            </li>
                            <li><a href="<?php echo home_url(); ?>/parceiros/" title="Parceiros">Parceiros</a></li>
                            <li><a href="<?php echo home_url(); ?>/contato/" class="fale-conosco" title="Fale conosco">Fale conosco</a></li>
                            <li><a href="#" onclick="corretorDefault('http://houste.hypnobox.com.br/atendimento/entrar.php?id_produto=10&gclid=&referencia=Direto&id_parceiro=', 'Fale com nosso corretor', '563', '556')" class="corretores" title="Corretores Online">Corretores Online</a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                    <!--End of Menu-->
                    <div class="clear"></div>
                </div>
                <!--End of Default View-->
                
                <!--Mobile View-->
                <div class="mobile-view">
                    <!--Logo | Corretores-->
                    <a href="<?php echo home_url(); ?>/" title="Voltar para a página inicial" class="link-padding logo">Sanay | Desenvolvimento imobiliário</a>
                    <a href="#" class="corretores" title="Corretores Online">Corretores <br>Online</a>
                    <div class="clear"></div>
                    <!--End of Logo | Corretores-->
                
                    <!--Menu-->
                    <div id="menu-mobile">
                        <div class="menu-list animate">
                            <ul>
                                <li><a href="<?php echo home_url(); ?>/empresa/" title="A empresa">A empresa</a></li>
                                <li><a href="<?php echo home_url(); ?>/empreendimentos/" title="Empreendimentos">Empreendimentos</a></li>
                                <li><a href="<?php echo home_url(); ?>/parceiros/" title="Parceiros">Parceiros</a></li>
                                <li><a href="<?php echo home_url(); ?>/contato/" class="fale-conosco" title="Fale conosco">Fale conosco</a></li>
                            </ul>
                        </div>
                        <a href="#" class="menu-expand"></a>
                    </div>
                    <!--End of Menu-->
                    <div class="clear"></div>
                </div>
                <!--End of Mobile View-->
                
            </div>
        </div>
    </div>
    <!--End of Header-->
<<<<<<< HEAD
=======
    
>>>>>>> 4b0a5cf741fdd0a81cb06db431c38a65c3c7f662
