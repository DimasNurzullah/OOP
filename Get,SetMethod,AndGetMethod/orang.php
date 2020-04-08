<?php
	/**
	 * 
	 */
	class orang
	{
		
		public $nama="john";
		public $umur=1;
		function setumur($parameterumur){
			$this->umur=$parameterumur;
		}
		function getumur(){
			if ($this->umur >10) {
				return $this->umur;
			}
			throw new Exception("Tidak cukup umur");
			
		}

	}
		$orang= new orang();
		$orang->setumur(19);
		echo $orang->getUmur();

		echo "<br/>";

		$orang2= new orang();
		$orang2->setumur(50);
		echo $orang2->getUmur();	