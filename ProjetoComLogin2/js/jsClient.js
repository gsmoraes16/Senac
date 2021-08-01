	
	function clientList(){
		
		window.location.href = 'clientsScreen.php';
		
	}

	function registerClient(){
		
		window.location.href = 'registerScreen.php';
		
	}

	function editClient(){
		
		window.location.href = 'editClientScreen.php';
		
	}

	function buttonHome(){
		
		window.location.href = 'principalScreen.php';
		
	}

	function telaEditagem(valor){
		
		$('#idFormulario').val(valor);
		$('#formulario').submit();
		
	}

	function editar(){
		
		id     = $('#id').val();
		nome   = $('#nome').val();
		idade  = $('#idade').val();
		sexo   = $('#sexo').val();
		cidade = $('#cidade').val();
		estado = $('#estado').val();
		pais   = $('#pais').val();
		
		$.ajax({
                type: 'POST',
                url: 'controller/controller_client.php',
                data: {action:"update", nome:nome, idade:idade, sexo:sexo, cidade:cidade, estado:estado, pais:pais, id:id},
				
				success: function(data) {
                    
					alert('Editado!!!');
					clientList();
					console.log(data);
					
                }
            });
		}

	function cadastro(){
		
      var dados = $('#cadUsuario').serialize();

            $.ajax({
                type: 'POST',
                url: 'controller/controller_client.php',
                data: dados,
                
				success: function(data) {
                    
					alert('Cadastrado!!!');
					location.reload()
					//telaListagem();
					console.log(data);
                }
            });

		}


	function Delete(valor){

	var confirmDel = confirm('Tem certeza que deseja deletar?');
		
	  if(confirmDel == true){
		$.ajax({
			
			type:"POST",
			url:"controller/controller_client.php",
			data:{action:"delete",id:valor},
			
			
			
			success: function(data){
				
				alert('Cliente Deletado!!');
				location.reload();
				console.log(data);
				
				}
			});
		}
	}


///NÃO TERMINEI E NÃO SEI SE FUNCIONA

	/*function Pesquisar(){

      $('#pesquisa').keyup(function(){

        $('form').submit(function(){
            var dados = $(this).serialize();

            $.ajax({
				
                type:"POST",
				url:"controller/controller_client.php",
				data: dados,
                
				
				success: function(data){
                    $('#resultado').empty().html(data);
                }
            });

            return false;
        });

        $('form').trigger('submit');

    	});
	};*/


