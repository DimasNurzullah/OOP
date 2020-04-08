<?php 
	/**
	 * 
	 */
	class Kendaraan
	{
		private $warna ="putih";
		private  $mesin=1000;

		public function setwarna($warna)
		{
			$this-> warna=$warna;
		}
		public function getwarna()
		{
			return $this->warna;
		}
		public function setmesin($mesin)
		{
			$this-> mesin=$mesin;
		}
		public function getmesin()
		{
			return $this->mesin;
		}
	}

/**
	 * 
	 */
	class mobil extends Kendaraan
	{
		private $temperatur=0;
		public function __construct(){
			
		}
		public function setTemperatur($temperatur){
			$this->temperatur=$temperatur;
		}
		public function getTemperatur()
		{
			return $this->temperatur;
		}	
	}	

	class motor extends Kendaraan
	{
		private $jokmotor=0;
		public function __construct(){
			
		}
		public function setJokMotor($jokmotor){
			$this->jokmotor=$jokmotor;
		}
		public function getJokMotor()
		{
			return $this->jokmotor;
		}	
	}
	/**
		 * 
		 */
		class sepeda extends Kendaraan{}	

$mobil=new mobil();
$mobil->setwarna("hitam");
$mobil->setmesin(2000);
$mobil->setTemperatur("20 °C");
echo "Mobil berwarna ". $mobil->getwarna()."Dengan mesin". $mobil->getmesin()."Dan Memiliki temperatur suhu :".$mobil->getTemperatur();
echo "<hr/>";
$motor= new motor();
$motor-> setwarna("Abang");
$motor->setmesin(200);
$motor->setJokMotor("2 helm");
echo "Motor berwarna ".$motor-> getwarna()."Dengan Kondisi Mesin".$motor->getmesin()."Dan memili jok motor yang muat sampai".$motor->getJokMotor();
echo "<hr/>";

$sepeda = new sepeda();
$sepeda->setwarna("putih abu-abu");
$sepeda->setmesin("Tidak Memiliki Mesin Hanya bisa dipancal");
echo "Sepeda berwarna".$sepeda->getwarna()."Dengan mesin yang".$sepeda->getmesin();