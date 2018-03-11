<?php

class tabela extends model
{
	public function index()
	{

	}

	public function getTabelaFull()
	{
		$arrayResp = array();

		$sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'javali'";

		$sql = $this->pdo->query($sql);

		$array = $sql->fetchAll();

		foreach ($array as $key => $values) {
			$values;

			foreach ($values as $valor) {
				$arrayResp[] = $valor;
				
			}	
		}

		$arrayResp = array_flip($arrayResp);

		//$arrayResp = array_unique($arrayResp);

		return $arrayResp;

	}



}