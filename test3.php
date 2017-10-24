<?php
class robot{

	public $suara='ngik ngok';
	public $berat=30;
	function sora()
	{
		$sr ='kurrrrr';
		return $sr.$this->sora;
	}


}
$kuy = new robot;
echo "bunyi robot : ".$kuy->suara;
echo "<br>";
class manusia{

	public $mata=2;
	public $hidung=1;
	public $tangan=2;
	public $kaki=2;



}
$a = new manusia;
echo "Mata manusia : ".$a->mata;
echo "<br>";
class ayam{

	public $mata=2;
	public $hidung=1;
	public $jenis="jantan";
	public $kaki=2;

}
$b = new ayam;
echo "jenis ayam : ".$b->jenis;
echo "<br>";
class hp{

	public $merek="vivo";
	public $type="v7";

}
$c = new hp;
echo "Merek HP : ".$c->merek;
echo "<br>";
class school{

	public $ruangan=29;
	public $lapangan=1;
	public $murid=876;

}
$d = new school;
echo "jumlah murid : ".$d->murid;

?>