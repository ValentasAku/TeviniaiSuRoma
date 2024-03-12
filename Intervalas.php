<?php
include 'PavieniaiSkaiciai.php';
include 'Roma.php';
class fsio extends pavien{
	public function pajimti(){
		$this->nuo = $_GET["pirmas"];
		$this->iki = $_GET["antras"];
	}

	function histograma($interacija){
		$taip=0;
		for($hhk = 0; $hhk < $this->hk; $hhk++){
			if($interacija == $this->his[$hhk]){
				$this->hkiek[$hhk]++;
				$taip++;
			}
		}
		if($taip==0){
			$this->his[$hhk] = $interacija;
			$this->hkiek[$hhk] = 1;
			$this->hk++;}
		$taip=0;
	}
	
public function skaiciavimas() {
	$pavienn = new pavien();
    $this->s = $this->nuo;
    $this->u = $pavienn -> NustatityPradMin($this->nuo);
    for($b= $this->nuo; $b<=$x= $this->iki;$b++){
		echo "pradinis sk $b <br>";
		$q = $b;
		while($q!=1){
			if ($q%2==0) $q=$q/2;
			else $q = $q*3+1;
			$this->w++;
			$this->max = $pavienn -> didziausias($q, $this->max);
			}
			$arraymin = $pavienn -> mazai($this->w, $b, $this->u, $this->s);
            $this->u = $arraymin[0];
            $this->s = $arraymin[1];
			$arraymax = $pavienn -> daug($this->w, $b, $this->m, $this->t);
            $this->m = $arraymax[0];
            $this->t = $arraymax[1];
			$this->histograma($this->w);
			echo "Iteracija truko $this->w <br>";
			$this->w = 0;
			echo "<br><br>";
		
	}
}

public function isvedimas() {
	$roma = new Roma();
    echo "didziausias iteracijos skacius buvo ";
	echo $laik = $roma-> integerToRoman ($this->max);
	echo "<br>";
    echo "maziausi iteraciju ";
	echo $laik = $roma-> integerToRoman ($this->u);
	echo " buvo su skaiciumi ";
	echo $laik = $roma-> integerToRoman ($this->s); 
	echo " <br>";
    echo "daugiausiai iteraciju ";
	echo $laik = $roma-> integerToRoman($this->m);
	echo " buvo su skaiciumi ";
	echo $laik = $roma-> integerToRoman($this->t);
	echo "<br>";
	echo "<br> ---------Histograma--------- <br>";


	for($prad = 0; $prad < $this->hk; $prad++){
		$kas = $this->his[$prad];
		$ko = $this->hkiek[$prad];
		echo "iteracija- $kas  pasikartojo- $ko syk. <br>";
	}
}


}


	

$fsio = new fsio();
$fsio->pajimti();
$fsio->skaiciavimas();
$fsio->isvedimas();

?>