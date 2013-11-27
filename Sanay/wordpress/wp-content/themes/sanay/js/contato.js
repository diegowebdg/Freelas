$(document).ready(function(e) {
    
    
    $("#tel").mask("(99)9999-9999");
    $("#cel").mask("(99)9999-9999");
    
    $("#ddd_tel_ligamos").mask("(99)9999-9999");
    $("#ddd_tel_duvidas").mask("(99)9999-9999");
    /*Valida Campos do formulário*/
	$(function() {
		function validaCampos(){ 
			var campos="";
			var conta = 0;
			
			if($('#nome').val()!="") {			      
				conta++;
			}else{
				campos=campos+"- Nome\n";
			}
			    			     			     
            if($('#email').val()!="") {
            
                var filtro_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                
                if(filtro_email.test($('#email').val())){
                    conta++;      
                }else{
                    campos=campos+"- Email Inválido\n";
                }
            }else{
                campos=campos+"- E-mail\n";
            }
            
			if($('#msg').val()!="") {
				conta++;
			}else{
				campos=campos+"- Mensagem\n";
			}                    
			if(conta==3){      
				return true;
			}else{
				alert('Preencha os campos:\n'+campos+'');
				return false;
			}
		}
		
		
		$(document).on('click','#bt-enviar',function(e){
			if(validaCampos()){
			
				e.preventDefault();	
				$.ajax({
					url:'http://www.rafaelbianco.com.br/projetos/sanay/wordpress/wp-content/themes/sanay/ajax/ajax_mail.php',
					type:'POST',
					dataType:'json',
					data: $('#form').serialize(),
					success:function(json){
						alert(json.msg);
						document.getElementById("form").reset();
					}
				});	
			}  
			return false;
		});
	
	});
	/*Fim do Valida Campos do formulário*/
    
    
    $(document).ready(function(e){
        $("#menu ul li").children("a[title*='Fale conosco']").css({borderBottom:"solid 3px #02789e"});
    });

    
});