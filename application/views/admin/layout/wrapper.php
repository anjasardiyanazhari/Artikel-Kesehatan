<?php 
	//Proteksi halaman supaya tidak bisa di akses sembarangan
	$this->check_login->check();
	//gabunglan semua bagian halaman
	require_once('head.php');
	require_once('header.php');
	require_once('nav.php');
	require_once('content.php');
	require_once('footer.php');
