<?php 

class conexao {

	private $username = 'root';
	private $password = '';
	private $banco    = 'prototipo';
	private $host	  = 'localhost';

	public $conn     = '';

	function __construct () {
		try {
		    $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->banco.'', $this->username, $this->password);
		    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
		    echo 'ERROR: ' . $e->getMessage();
		}
	}

	/**
	* Funçao de select
	* @param $tabela String com o nome da tabela que deseja busca os dados
	* @param $coluna String com as colunas que deseja busca
	* @param $parametros String quais parametros deseja busca no select
	* @param $valores Array com os indices e valores a serem buscado no array
	* @param $limit Int o limite de valores a serem buscados
	* @param $order Array passando o campo de coluna a ser ordenado e o tipo de ordenaçao
	**/

	public function select($tabela, $colunas = '*', $parametros = 'id = :id', $valores = array(), $limit = 5, $ordem = array('coluna' => 'id', 'ordem' => 'DESC')) {
		try {
		    if (!empty($valores)) {	
		    	$stmt = $this->conn->prepare('SELECT '.$colunas.' FROM '.$tabela.' WHERE '.$parametros.' LIMIT '. $limit);
		    	$stmt->execute($valores);
		  	} else {
		  		$stmt = $this->conn->prepare('SELECT '.$colunas.' FROM '.$tabela .'  ORDER BY '.$ordem['coluna'].' '.$ordem['ordem'].' LIMIT '. $limit);
		    	$stmt->execute();
		  	}
		  	
		  	$retorno = array();
		    while($row = $stmt->fetch()) {
		        $retorno[] = $row;
 		    }

		    return $retorno;
		} catch(PDOException $e) {
		    echo 'ERROR: ' . $e->getMessage();
		}
	}

	public function insert ($tabela, $colunas, $valores, $dados = array()) {
		$stmt = $this->conn->prepare('INSERT INTO '.$tabela.' ('.$colunas.') VALUES('.$valores.')');
		$stmt->execute($dados);

		return true;
	}
}	