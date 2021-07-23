<?php 
	class Usuario
	{
		private $peso;
		private $altura;
		private $imc;
		public $color;

		public function setPeso(float $peso)
		{
			$this->peso = $peso;
		}

		public function getPeso():float
		{
			return $this->peso;
		}

		public function setAltura(float $altura)
		{
			$this->altura = $altura;
		}

		public function getAltura():float
		{
			return $this->altura;
		}

		public function calcularIMC():float
		{
			$this->imc = $this->peso / pow($this->altura/100, 2);
			return round($this->imc, 2);
		}

		public function mensaje():string
		{
			if ($this->imc < 18.5) {
				$this->color = "grey";
				$mensaje = "Peso Bajo  - Debes alimentarte";
			} else if ($this->imc >= 18.5 && $this->imc < 25) {
				$this->color = "green";
				$mensaje = "Peso normal - Sigue con tu Alimentacion";
			} else if ($this->imc >= 25 && $this->imc < 30) {
				$this->color = "orange";
				$mensaje = "Sobrepeso  - Debes ponerte en contro con un nutricionista";
			} else {
				$this->color = "red";
				$mensaje = "Obeso - Cuidado con el Covid";
			}
			return $mensaje;
		}
	}
?>