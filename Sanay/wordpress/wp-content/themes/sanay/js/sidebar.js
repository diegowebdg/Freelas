$(document).ready(function(e) {
    
    /*Valida Campos LIGAMOS*/
	$(function() {
		function validaCamposLigamos(){ 
			var campos="";
			var conta = 0;
			
			if($('#nome_ligamos').val()!="") {			      
				conta++;
			}else{
				campos=campos+"- Nome\n";
			}
			    			     			     
			if($('#ddd_tel_ligamos').val()!="") {     
				       
				conta++;      

			}else{
				campos=campos+"- Telefone\n";
			}   
			if($('#horario_ligamos').val()!="") {
				conta++;
			}else{
				campos=campos+"- Horário\n";
			}                    
			if(conta==3){      
				return true;
			}else{
				alert('Preencha os campos:\n'+campos+'');
				return false;
			}
		}
		
		
		$(document).on('click','#enviar_ligamos',function(e){
			if(validaCamposLigamos()){
			
				e.preventDefault();	
				$.ajax({
					url:'http://www.rafaelbianco.com.br/projetos/sanay/wordpress/wp-content/themes/sanay/ajax/ajax_mail_ligamos.php',
					type:'POST',
					dataType:'json',
					data: $('#ligamos').serialize(),
					success:function(json){
						alert(json.msg);
						document.getElementById("ligamos").reset();
					}
				});	
			}  
			return false;
		});
	
	});
	/*Fim do Valida Campos LIGAMOS*/
    
    /*Valida Campos DUVIDAS*/
	$(function() {
		function validaCamposDuvidas(){ 
			var campos="";
			var conta = 0;
			
			if($('#nome_duvidas').val()!="") {			      
				conta++;
			}else{
				campos=campos+"- Nome\n";
			}
            if($('#email_duvidas').val()!="") {
            
                var filtro_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                
                if(filtro_email.test($('#email_duvidas').val())){
                    conta++;      
                }else{
                    campos=campos+"- Email Inválido\n";
                }
            }else{
                campos=campos+"- E-mail\n";
            }
			    			     			     
			if($('#ddd_tel_duvidas').val()!="") {     
				       
				conta++;      

			}else{
				campos=campos+"- Telefone\n";
			}   
			if($('#mensagem_duvidas').val()!="") {
				conta++;
			}else{
				campos=campos+"- Mensagem\n";
			}                    
			if(conta==4){      
				return true;
			}else{
				alert('Preencha os campos:\n'+campos+'');
				return false;
			}
		}
		
		
		$(document).on('click','#enviar_duvidas',function(e){
			if(validaCamposDuvidas()){
			
				e.preventDefault();	
				$.ajax({
					url:'http://www.rafaelbianco.com.br/projetos/sanay/wordpress/wp-content/themes/sanay/ajax/ajax_mail_duvidas.php',
					type:'POST',
					dataType:'json',
					data: $('#duvidas').serialize(),
					success:function(json){
						alert(json.msg);
						document.getElementById("duvidas").reset();
					}
				});	
			}  
			return false;
		});
	
	});
	/*Fim do Valida Campos DUVIDAS*/
    
    /*Valida Campos DUVIDAS*/
	$(function() {
		function validaCamposIndique(){ 
			var campos="";
			var conta = 0;
			
			if($('#seu_nome_indique').val()!="") {			      
				conta++;
			}else{
				campos=campos+"- Seu Nome\n";
			}
            if($('#seu_email_indique').val()!="") {
            
                var filtro_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                
                if(filtro_email.test($('#seu_email_indique').val())){
                    conta++;      
                }else{
                    campos=campos+"- Email Inválido\n";
                }
            }else{
                campos=campos+"- Seu E-mail\n";
            } 
			    			     			     
			if($('#nome_amigo_indique').val()!="") {     
				       
				conta++;      

			}else{
				campos=campos+"- Nome do seu amigo\n";
			}   
			if($('#email_amigo_indique').val()!="") {
				conta++;
			}else{
				campos=campos+"- E-mail do seu amigo\n";
			}                    
			if(conta==4){      
				return true;
			}else{
				alert('Preencha os campos:\n'+campos+'');
				return false;
			}
		}
		
		
		$(document).on('click','#enviar_indique',function(e){
			if(validaCamposIndique()){
			
				e.preventDefault();	
				$.ajax({
					url:'http://www.rafaelbianco.com.br/projetos/sanay/wordpress/wp-content/themes/sanay/ajax/ajax_mail_indique.php',
					type:'POST',
					dataType:'json',
					data: $('#indique').serialize(),
					success:function(json){
						alert(json.msg);
						document.getElementById("indique").reset();
					}
				});	
			}  
			return false;
		});
	
	});
	/*Fim do Valida Campos DUVIDAS*/
    
    $(".options .item1").click(function(e){
        $(".ligamos-li").slideToggle();
    });
    $(".options .item2").click(function(e){
        $(".duvidas-li").slideToggle();
    });
    $(".options .item3").click(function(e){
        $(".indique-li").slideToggle();
    });
    
});