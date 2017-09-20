<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Checar Placa</title>
	<!-- Custom CSS -->
	<link type="text/css" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="checar.css" />
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />
	<!-- jQuery Library -->
    <script src="jquery-3.2.1.min.js"></script>
    <!-- Bootstrap Core JS -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<script src="jquery.maskedinput.js" type="text/javascript"></script>
	<script type="text/javascript"> 
	jQuery.noConflict();
	jQuery(function($){
	   $("#placa").mask("aaa-9999", {"placeholder": ""});
	   $(document).on('blur', "input[type=text]", function () {
			$(this).val(function (_, val) {
				return val.toUpperCase();
			});
		});

		$("#btnChecar").click(function(e){
			e.preventDefault();
			if($("#placa").val() == ""){
				return false;
			}
			$.ajax({
                type: "POST",
                url: "http://sinespcidadao.incognitochat.com.br/?placa=" + $("#placa").val(),
                success: function(response) {
					
					var cidadeEstado = "Cidade - Estado: " + response["municipio"]+" - "+response["uf"];
					var marca = "Marca: " + response["marca"];
					var modelo = "Modelo: " + response["modelo"];
					var cor = "Cor: " + response["cor"];
					var ano = "Ano: " + response["ano"];
					var anoModelo = "Ano Modelo: " + response["anoModelo"];
					var chassi = "Chassi: " + response["chassi"];
					var pesquisaEm = "Data Pesquisa: " + response["data"];
					
                    $(".retorno").html("");
					$(".painel_detalhes").html("");
					$(".retorno").removeClass("hide");
					$(".painel_detalhes").removeClass("hide");
					if(response["codigoSituacao"] == 1)
						$(".retorno").html('<br><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>VEÍCULO ROUBADO!</div>');
					else
						$(".retorno").html('<br><div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>SEM RESTRIÇÃO</div>');
					
					$(".close").click(function(){
						$(".painel_detalhes").html("");
						$(".painel_detalhes").addClass("hide");
						$("#placa").val("");
					});
					
					$(".painel_detalhes").html("<div class='panel panel-primary'><div class='panel-heading alert-dismissible' role='alert'><h3 class='panel-title'>Detalhes do veículo</h3></div><div class='panel-body'><ul class='list-group'><li class='list-group-item'>"+cidadeEstado+"</li><li class='list-group-item'>"+marca+"</li><li class='list-group-item'>"+modelo+"</li><li class='list-group-item'>"+cor+"</li><li class='list-group-item'>"+ano+"</li><li class='list-group-item'>"+anoModelo+"</li><li class='list-group-item'>"+chassi+"</li><li class='list-group-item'>"+pesquisaEm+"</li></ul></div></div>");
                },
                error: function(jqXHR, exception) {
                    var msg = '';
                    if (jqXHR.status === 0) {
                        msg = 'Not connect.\n Verify Network.';
                    } else if (jqXHR.status == 404) {
                        msg = 'Requested page not found. [404]';
                    } else if (jqXHR.status == 500) {
                        msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                        msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                        msg = 'Time out error.';
                    } else if (exception === 'abort') {
                        msg = 'Ajax request aborted.';
                    } else {
                        msg = 'Uncaught Error.\n' + jqXHR.responseText;
                    }
                    console.log(msg);
                }
            });
		});
	});
	</script> 
</head>
<body>
	<div class="login">
    <h1>Checar Placa</h1>
    <form method="post">
    	<input type="text" id="placa" name="placa" placeholder="Placa" required="required" />
        <button type="submit" id="btnChecar" class="btn btn-primary btn-block btn-large btnChecar">Checar</button>
    </form>
	<div class="retorno hide"></div>
	<div class="painel_detalhes hide"></div>
</div>
</body>
</html>