<?php
class pavien{
	public $m=0;
    public $s=0;
    public $u=0;
    public $t=0;
    public $max=0;
	public $w=0;
	public $nuo; 
	public $iki; 
	public $hk=0;//kiek skirtingu iteraciju
	public $his = [];//visos iteracijos
	public $hkiek = [];// iteraciju pasikartojimo kiekis
    public $arraymin;
    public $arraymax;


function NustatityPradMin($nuuo){
	$q = $nuuo;
    $w=0;
	while($q!=1){
		if ($q%2==0) $q=$q/2;
		else $q = $q*3+1;
		$w++;
		}
		return $w;
}

function didziausias($armax ,$max) {
    if($armax > $max){
        $max = $armax;
    }
    return $max;
}
function mazai($koks, $kelints, $dabartinismin, $dabartiniskelintsmin){
	if($dabartinismin > $koks){
		$dabartinismin = $koks;
		$dabartiniskelintsmin = $kelints;
	}
    $arraymin['0'] = $dabartinismin;
    $arraymin['1'] = $dabartiniskelintsmin;
    return $arraymin;
}

function daug($koks, $kelints, $dabartinismax, $dabartiniskelintsmax){
	if($koks > $dabartinismax){
		$dabartinismax = $koks;
		$dabartiniskelintsmax = $kelints;
	}
    $arraymax['0'] = $dabartinismax;
    $arraymax['1'] = $dabartiniskelintsmax;
    return $arraymax;
}


}

?>