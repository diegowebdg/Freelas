$(document).ready(function(e) {
    
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
				ga('send', 'event', 'Button', 'Click', currentPage + "Formulário Não Enviado");
				return false;
			}
		}
		
		
		$(document).on('click','#bt-enviar',function(e){
			if(validaCampos()){
			
				e.preventDefault();	
				$.ajax({
					url:'ajax-contato.php',
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
    
});