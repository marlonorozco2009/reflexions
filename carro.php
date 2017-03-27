<?php
class carro{
	public $color;
	public $tipo;
	public $marca;
	public $Vbase;
	public function __construct($marca,$tipo,$color,$Vbase){
		$this->color=$color;
		$this->tipo=$tipo;
		$this->marca=$marca;
		$this->Vbase=$Vbase;
	}
	public function marca(){
		return "La marca del automovil es: ".$this->marca."<br>";

	}
	public function tipo(){
		return " tipo : ".$this->tipo."<br>";

	}
	public function color(){
		return "Color: ".$this->color."<br>";

	}
	public function velocidad(){
		$velocidad1 = ($this->Vbase*2);
		return "La velocidad en movimiento del automovil es de :".($velocidad1." KM/H");

	}
}
$automovil=new carro("NISSAN","Sedan","Rojo",50);
echo $automovil->marca();
echo $automovil->tipo();
echo $automovil->color();
echo "La velocidad base del automovil es de: ".(50)." KM/H<br>";
echo $automovil->Velocidad();



?>