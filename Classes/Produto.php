<?php
require 'Conexao.php';


class Produto extends Conexao{

	public function carregar_produtos($id = null) {
		if (!isset($id)) {
			$produtos = $this->select('Produtos', '*');
		}

		if (isset($id)) {
			$produtos = $this->select('Produtos', '*', 'id = :id', array(':id' => $id));
		}

		return array(
			'Produtos' => $produtos
		);
	}

	public function adicionar_produto($produto) {
		$sql = "INSERT INTO Produtos (nome,preco,dataInclusao,idCategoria) values (:nome,:preco,:dataInclusao,:idCategoria) ";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam("nome",$produto->nome);
		$stmt->bindParam("preco",$produto->preco);
		$stmt->bindParam("dataInclusao",$produto->dataInclusao);
		$stmt->bindParam("idCategoria",$produto->idCategoria);
		$stmt->execute();
		$produto->id = $this->conn->lastInsertId();
		echo json_encode($produto);
	}

}