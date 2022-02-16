<?php
	//criação de uma váriavel para se ligar ao banco de dados
	$conn = new mysqli("localhost", "root", "", "csv");
	//formatação para a escrita brasileira
	mysqli_set_charset($conn,"utf8");
	
	//logica para checar o tipo de arquivo
	$arquivo	= $_FILES["file"]["tmp_name"];
	$nome		= $_FILES["file"]["name"];
	
	$ext = explode(".", $nome);

	$extensao = end($ext);
	
	//checagem do tipo de arquivo
	if($extensao != "csv"){
		echo "Extensão inválida.";
	}else{
		$objeto = fopen($arquivo, 'r');
			//codigos para receber todas linhas do arquivo csv e já separar nas tabelas por ordem, eliminando tudo que não é do tipo especificado.
			while (($dados = fgetcsv($objeto, 1000, ",")) !== FALSE)	
			{
				$group_id		= utf8_encode($dados[0]);
				$material_id	= utf8_encode($dados[1]);
				$item_qty		= utf8_encode($dados[2]);
				$item_dim_1		= utf8_encode($dados[3]);
				$item_dim_2		= utf8_encode($dados[4]);
				$item_dim_3		= utf8_encode($dados[5]);
				$item_class		= utf8_encode($dados[6]);

				$result = $conn->query("INSERT INTO itens (group_id, material_id, item_qty, item_dim_1, item_dim_2, item_dim_3, item_class) VALUES ('$group_id', '$material_id', '$item_qty', '$item_dim_1', '$item_dim_2', '$item_dim_3', '$item_class')");
				
			}

			if($result){
				echo "Dados inseridos com sucesso.";
			}else{
				echo "Erro ao inserir os dados.";
			}
	}
?>
