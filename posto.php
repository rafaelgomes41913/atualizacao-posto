<?php
	
	session_start();
	include_once("conexao.php");
	$result_posto = "SELECT * FROM tbl_posto WHERE COD_POSTO = '50'";
	$resultado_posto = mysqli_query($conn, $result_posto);
	$row_posto = mysqli_fetch_assoc($resultado_posto);

?>




<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Atualizar POSTO</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>



	<div class="formularios">

		<div class="col1">
			<div id="corpo-form" align="center">
			<h1 id="h" align="center">ATULIZAR POSTO</h1>
				<form method="POST" action="processa_atualizar.php" name="form_atualizar">
			<div id="a">
				
				<br><font color='ffffff'>Bandeira Posto</font><input type="text" placeholder="Bandeira" name="bandeira" maxlength="30" value="<?php echo $row_posto['BANDEIRA'];?>" />
				<font color='ffffff'>Nome</font><input type="text" placeholder="Nome" name="nome" maxlength="30" value="<?php echo $row_posto['NOME_POSTO'];?>"/>
				<font color='ffffff'>CNPJ</font><input type="text" placeholder="CNPJ" name="cnpj" maxlength="14" value="<?php echo $row_posto['CNPJ'];?>"/>
				<font color='ffffff'>Numero Celular</font><input type="text" placeholder="Celular" name="numero" maxlength="11" value="<?php echo $row_posto['TELEFONE'];?>"/>
				<!--<input type="text" placeholder="Usuario" name="usuario" maxlength="20" />-->
				<font color='ffffff'>Email</font><input type="Email" placeholder="E-MAIL" name="email" maxlength="40" value="<?php echo $row_posto['EMAIL'];?>" />
				<font color='ffffff'>Senha</font><input type="Password" placeholder="Senha" name="senha" maxlength="30" id="senha" value="<?php echo $row_posto['SENHA'];?>" />
				<font color='ffffff'>Confirmar Senha</font><input type="Password" placeholder="Confirmar senha" name="senhaconfirm" maxlength="30" id="senhaconfirm" value="<?php echo $row_posto['SENHA'];?>"/>
				
				</div>
        </div>
		</div>

	<div class="col2">		
            <div id="corpo-form2" align="center">
		    <h1 id="h" align="center">LOCAL</h1>
			<div id="b">
			<br><font color='ffffff'>CEP</font><input id="L" type="text" placeholder="CEP" name="cep" value="<?php echo $row_posto['CEP'];?>" />
			<font color='ffffff'>Estado</font><input id="L" type="text" placeholder="Estado" name="estado" value="<?php echo $row_posto['COD_ESTADO'];?>" />
			<font color='ffffff'>Cidade</font><input id="L" type="text" placeholder="Cidade" name="cidade" value="<?php echo $row_posto['COD_CIDADE'];?>" />
			<font color='ffffff'>Bairro</font><input id="L" type="text" placeholder="Bairro" name="bairro" value="<?php echo $row_posto['COD_BAIRRO'];?>" />
			<font color='ffffff'>Rua</font><input id="L" type="text" placeholder="Rua" name="rua" value="<?php echo $row_posto['COD_RUA'];?>" />
			<font color='ffffff'>Numero</font><input id="L" type="text" placeholder="Num" name="num" value="<?php echo $row_posto['NUM_POSTO'];?>" />
			
				<input type="button" value="Salvar Alterações" onclick="funcao_salvar()"/>
				<input type="button" value="Voltar" onclick="funcao_sair()"/>
               
				
				</div>
				</form>

</div>
</div>
			</form>
		
<!-- Confere se as senhas sao iguais e emite mensagem de erro ou não
	 Tambem confere se os campos estao preenchidos -->
<script  type="text/javascript">
	function funcao_salvar(){
	
		if (form_atualizar.bandeira.value == ""){
			alert("Favor preencher o campo bandeira");
		}
		else if (form_atualizar.nome.value == ""){
			alert("Favor preencher o campo nome");
		}
		else if (form_atualizar.cnpj.value == ""){
			alert("Favor preencher o campo cnpj");
		}
		else if (form_atualizar.numero.value == ""){
			alert("Favor preencher o campo numero do celular");
		}
		else if (form_atualizar.email.value == ""){
			alert("Favor preencher o campo email");
		}
		else if (form_atualizar.cep.value == ""){
			alert("Favor preencher o campo cep");
		}
		else if (form_atualizar.estado.value == ""){
			alert("Favor preencher o campo estado");
		}
		else if (form_atualizar.cidade.value == ""){
			alert("Favor preencher o campo cidade");
		}
		else if (form_atualizar.bairro.value == ""){
			alert("Favor preencher o campo bairro");
		}
		else if (form_atualizar.rua.value == ""){
			alert("Favor preencher o campo rua");
		}
		else if (form_atualizar.num.value == ""){
			alert("Favor preencher o campo num");
		}
		else if (form_atualizar.senha.value != form_atualizar.senhaconfirm.value){
			alert("As senhas digitadas são diferentes");
		}	
		else if (form_atualizar.senha.value == form_atualizar.senhaconfirm.value && form_atualizar.senha.value == "") {
			alert("As senhas estao vazias ");	
		}else{
			document.form_atualizar.submit();	
		}	
	}
			
	function funcao_sair(){
		alert("sair");
	}

</script>		
	
<script src="./script/jquery-3.4.1.slim.min.js" type="text/javascript"></script>
<script type="text/javascript">
	
</script>




</body>
</html>
