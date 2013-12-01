<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/sidebar.css" />

<!-- Options -->
<div class="options">
    <ul>
        <li><a href="#" onclick="corretorDefault('<?php echo get_field("chat_link"); ?>', 'Fale com nosso corretor', '563', '556')" class="corretores" title="<?php echo get_field("fale_com_nossos_corretores", 72); ?>"><?php echo get_field("fale_com_nossos_corretores", 72); ?></a></li>
        <li class="item1"><a href="#" class="ligamos" title="<?php echo get_field("ligamos_para_voce", 72); ?>"><?php echo get_field("ligamos_para_voce", 72); ?></a></li>
        <li class="ligamos-li">
            <form id="ligamos">
                <input type="text" name="nome_ligamos" placeholder="NOME:" id="nome_ligamos">
                <input type="text" name="ddd_tel_ligamos" placeholder="DDD/TELEFONE:" id="ddd_tel_ligamos">
                <input type="text" name="horario_ligamos" placeholder="MELHOR HORÁRIO PARA LIGARMOS:" id="horario_ligamos">
                <button type="button" id="enviar_ligamos">Enviar</button>
            </form>
            <div class="clear"></div>
        </li>
        <li class="item2"><a href="#" class="duvidas" title="<?php echo get_field("duvidas", 72); ?>"><?php echo get_field("duvidas", 72); ?></a></li>
        <li class="duvidas-li">
            <form id="duvidas">
                <input type="text" name="nome_duvidas" placeholder="NOME:" id="nome_duvidas">
                <input type="text" name="email_duvidas" placeholder="E-MAIL:" id="email_duvidas">
                <input type="text" name="ddd_tel_duvidas" placeholder="DDD/TELEFONE:" id="ddd_tel_duvidas">
                <textarea type="text" name="mensagem_duvidas" placeholder="MENSAGEM:" id="mensagem_duvidas"></textarea>
                <button type="button" id="enviar_duvidas">Enviar</button>
            </form>
            <div class="clear"></div>
        </li>
        <li class="item3"><a href="#"  class="indique" title="<?php echo get_field("indique", 72); ?>"><?php echo get_field("indique", 72); ?></a></li>
        <li class="indique-li">
            <form id="indique">
                <input type="text" name="seu_nome_indique" placeholder="SEU NOME:" id="seu_nome_indique">
                <input type="text" name="seu_email_indique" placeholder="SEU E-MAIL:" id="seu_email_indique">
                <input type="text" name="nome_amigo_indique" placeholder="NOME DO AMIGO:" id="nome_amigo_indique">
                <input type="text" name="email_amigo_indique" placeholder="E-MAIL DO AMIGO:" id="email_amigo_indique">
                <button type="button" id="enviar_indique">Enviar</button>
            </form>
            <div class="clear"></div>
        </li>
    </ul>
</div>
<div class="clear"></div>
<!-- End of Options -->

<script type="text/javascript">
/*$(document).ready(function(e){
    $(".options li").click(function(e){
        $(this).children(a).click();
    });
});*/
</script>
