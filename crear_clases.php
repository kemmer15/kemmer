<?php

class personal {

	private $nombre;
	public function inicializar($nom)

	

	{
		$this->nombre = $nom;
	}

	public function imprimir()

	{
		echo $this->nombre;
		echo '<br>';
	}

}

?>

<?php
$per1 = new personal();
$per1 ->inicializar('kemmer');
$per1 ->imprimir();
?>

<?php
$per1 = new personal();
$per1 ->inicializar('nicol');
$per1 ->imprimir();
?>


