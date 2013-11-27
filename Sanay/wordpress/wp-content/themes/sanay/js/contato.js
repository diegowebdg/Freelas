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
				conta++; 
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
    
});