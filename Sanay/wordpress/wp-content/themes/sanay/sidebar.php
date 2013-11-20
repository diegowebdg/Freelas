<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/sidebar.css" />

<!-- Options -->
<div class="options">
    <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
    <ul>
        <li><a href="#" onclick="corretorDefault('<?php echo get_field("chat_link"); ?>', 'Fale com nosso corretor', '563', '556')" class="corretores" title="<?php echo get_field("fale_com_nossos_corretores", 72); ?>"><?php echo get_field("fale_com_nossos_corretores", 72); ?></a></li>
        <li><a href="mailto:contato@sanay.com.br?subject=Ligamos para você&body=Me interesei no seguinte empreendimento: <?php echo $actual_link ?> (por favor, nos informe seu telefone abaixo para que possamos entrar em contato)" class="ligamos" title="<?php echo get_field("ligamos_para_voce", 72); ?>"><?php echo get_field("ligamos_para_voce", 72); ?></a></li>
        <li><a href="mailto:contato@sanay.com.br" class="duvidas" title="<?php echo get_field("duvidas", 72); ?>"><?php echo get_field("duvidas", 72); ?></a></li>
        <li><a href="mailto:?subject=Dê uma olhada nesse empreendimento&body=Olá! Encontrei esse empreendimento no site www.sanay.com.br e acredito que você possa se interessar: <?php echo $actual_link ?>"  class="indique" title="<?php echo get_field("indique", 72); ?>"><?php echo get_field("indique", 72); ?></a></li>
    </ul>
</div>
<div class="clear"></div>
<!-- End of Options -->