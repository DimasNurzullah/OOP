<?php
	/**
	 * 
	 */
	class orang
	{
		
		public $nama="john";
		protected $umur=1;
		public function setumur($parameterumur){
			// echo "test";
			// return false;
			if ($parameterumur < 6) {
				throw new Exception("Umur harus lebih besar dari 13");	
			}
				
			$this->umur=$parameterumur;
		}
		public function getumur(){
			
			return $this->umur;
		}

	}
		$orang= new orang();
		$orang->setumur(19);
		// $orang->umur=43;
		echo $orang->getUmur();



		// echo "<br/>";

		// $orang2= new orang();
		// $orang2->setumur(50);
		// echo $orang2->getUmur();	