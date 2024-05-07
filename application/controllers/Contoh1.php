<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller {

	
	public function index()
	{
	echo "<h1>PERKENALAN</h1>";
	echo"Nama : Bayu Eko Prasetyo
	Kelas : 17.6A.27
	Program Studi : TEKNIK
	Semester : 6
	Alamat : Bintaro JL.Pondok Jaya 
	Olahraga yang saya sukai adalah futsal";
	}

	public function latihan()
	{
		echo "<h1>PERKENALAN</h1>";
		echo"Nama : Bayu Eko Prasetyo
		Kelas : 17.6A.27<br>
		Program Studi : TEKNIK<br>
		Semester : 6<br>
		Alamat : Bintaro JL.Pondok Jaya <br>
		Olahraga yang saya sukai adalah futsal";
	}
}
