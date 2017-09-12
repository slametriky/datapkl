<?php
$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu');
$hari = $array_hari[date('N')];

$array_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Novemer','Desember');
$bulan = $array_bulan[date('n')];

$tgl = date('j');
$thn = date('Y');
?>