<?php 

class Buah{
	private $nama,
			$jumlah, 
			$harga;
	
	// magic method
	function __construct($nama=NULL, $harga=NULL, $jumlah=0){
		if( $nama!=NULL && $harga!=NULL ){
			$this->nama = $nama;
			$this->harga = $harga * $jumlah;
			$this->jumlah = $jumlah;
		}
	}

	// getter
	function getNama(){
		return $this->nama;
	}
	function getHarga(){
		return $this->harga;
	}
	function getJumlah(){
		return $this->jumlah;	
	}
}

class Belanja{
	private static $daftarBelanja = array(),
				   $totalHarga = 0,
	               $index = 0;

	// magic method
	function __construct( Buah $jenisBuah = NULL ){
		if ($jenisBuah != NULL) {
			self::$daftarBelanja[ self::$index ] = $jenisBuah;
			self::$index++;
			self::$totalHarga = self::$totalHarga + $jenisBuah->getHarga();
		}
	}

	// getter
	function getIndex(){
		return self::$index;
	}
	function getNama($i=0){
		return self::$daftarBelanja[$i]->getNama();
	}
	function getHarga($i=0){
		return self::$daftarBelanja[$i]->getHarga();
	}
	function getJumlah($i=0){
		return self::$daftarBelanja[$i]->getJumlah();	
	}
	function getTotal(){
		return self::$totalHarga;
	}

}

// objek
$belanja = new Belanja();
$jenisBuah = new Buah();

if( isset($_POST['tambah']) ){
	if( $_POST['jumlahMangga'] != NULL && $_POST['jumlahJambu'] != NULL && $_POST['jumlahSalak'] != NULL ){
		
		$jenisBuah = new Buah("Mangga", 15000, $_POST['jumlahMangga']);	
		$belanja = new Belanja($jenisBuah);

		$jenisBuah = new Buah("Jambu", 13000, $_POST['jumlahJambu']);	
		$belanja = new Belanja($jenisBuah);

		$jenisBuah = new Buah("Salak", 10000, $_POST['jumlahSalak']);	
		$belanja = new Belanja($jenisBuah);
	}
}

?>