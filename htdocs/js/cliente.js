
	function telaListagem(){
		
		console.log("Foi para a tela de cadastro");
		window.location.href = 'listarClientes.php';	
	}

	function telaCadastro(){
		
		//console.log("Foi para a tela de clientes");
		window.location.href = 'formCadastro.php';
	}	

	

	function cadastro(){
		
      var dados = $('#cadUsuario').serialize();

            $.ajax({
                type: 'POST',
                url: 'controleVisao/controle_cliente2.php',
                data: dados,
                
				success: function(response) {
                    
					alert('Cadastrado!!!');
					location.reload();
					telaListagem();
					console.log(data);
                }
            });

            return false;
			alert('Falha!!!');
    
	}



	function telaEditagem(valor){
		
		//window.location.href = 'formEditarCadastro.php?id='+valor;
		$('#idFormulario').val(valor);
		$('#formulario').submit();
		
	}

	
	function editar(){
		
	  //var dados = $('#editUsuario').serialize();
		
		id    = $('#id').val();
		nome  = $('#nome').val();
		idade = $('#idade').val();
		
		$.ajax({
                type: 'POST',
                url: 'controleVisao/controle_cliente2.php',
                data: {acao:"update", nome:nome, idade:idade, id:id},
				
				success: function(response) {
                    
					location.reload();
					alert('Editado!!!');
					telaListagem();
					console.log(data);
					
                }
            });

            
			return false;
			alert('Falha!!!');
			console.log("Foi para a tela de Edição");
	
	
	}



	function Deletar(valor){

	var confirmDel = confirm('Tem certeza que deseja deletar?');
		
	  if(confirmDel == true){
		$.ajax({
			
			type:"POST",
			url:"controleVisao/controle_cliente2.php",
			data:{acao:"delete",id:valor},
			
			
			
			success: function(data){
				
				alert('Cliente Deletado!!');
				location.reload();
				console.log(data);
				
				}
			
			
			});
		}
	}