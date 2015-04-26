<?php
require 'Conexao.php';


class Produto extends Conexao{

	public function carregar_produtos() {
		$produtos = $this->select('Produtos', '*');
		return array(
			array(
				'Produtos' => $produtos
			)
		);
	}

}