
	function verificaLogin(){
		
		
		var email  = $('#email').val();
		var senha  = $('#senha').val();
		var action = $('#action').val();
		
		$.ajax({
                type: 'POST',
                url: 'controller/controller_login.php',
                data: {action:action, email:email, senha:senha},
				
				success: function(data) {
                    
					//console.log(data);
					if(data == 1){
					
						window.location.href = 'principalScreen.php';
					
					}else{
						
						alert("Email e/ou Senha inválidos!!!");
						window.location.href = 'loginScreen.php';
					}
					
                }
            });
		}