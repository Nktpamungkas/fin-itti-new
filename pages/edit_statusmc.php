<?php
ini_set("error_reporting", 1);
session_start();
include("../koneksi.php");
function cekDesimal($angka){
	$bulat=round($angka);
	if($bulat>$angka){
		$jam=$bulat-1;
		$waktu=$jam.":30";
	}else{
		$jam=$bulat;
		$waktu=$jam.":00";
	}
	return $waktu;
}
if($_POST){ 
	extract($_POST);
	$id = mysqli_real_escape_string($con,$_POST['id']);
	$urut = mysqli_real_escape_string($con,$_POST['no_urut']);
	$ketkain = mysqli_real_escape_string($con,$_POST['ket_kain']);
	$ket = mysqli_real_escape_string($con,$_POST['ket']);
	$personil = mysqli_real_escape_string($con,$_POST['personil']);
	$mesin = mysqli_real_escape_string($con,$_POST['no_mesin']);
	$mcfrom = mysqli_real_escape_string($con,$_POST['mc_from']);
	$gshift = mysqli_real_escape_string($con,$_POST['g_shift']);
	$catatan = mysqli_real_escape_string($con,$_POST['catatan']);
	$proses = mysqli_real_escape_string($con,$_POST['proses']);
	$status = mysqli_real_escape_string($con,$_POST['status']);
	if($status!=""){ $sts=", `status`='$status' ";}else{ $sts="";}
	$Qrycek=mysqli_query($con,"SELECT * FROM tbl_no_mesin WHERE no_mesin='$mesin' LIMIT 1");
	$rCek=mysqli_fetch_array($Qrycek);
	$kapasitas=$rCek['kapasitas'];
				$sqlupdate=mysqli_query($con,"UPDATE `tbl_schedule` SET 
				`no_mesin`='$mesin',
				`mc_from`='$mcfrom',
				`g_shift`='$gshift',
				`no_urut`='$urut',
				`no_sch`='$urut',
				`proses`='$proses',
				`catatan`='$catatan'
				$sts
				WHERE `id`='$id' LIMIT 1");
				echo " <script>window.location='StatusMesin';</script>";
				
		}
		

?>
