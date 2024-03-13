<?php
if($_POST){ 
	extract($_POST);
	$id = mysql_real_escape_string($_POST['id']);
	$id_schedule = mysql_real_escape_string($_POST['id_schedule']);
	$no_order = mysql_real_escape_string($_POST['no_order']);
	$jeniskain = mysql_real_escape_string($_POST['jenis_kain']);
	$catatan = mysql_real_escape_string($_POST['catatan']);
	$warna = mysql_real_escape_string($_POST['warna']);
	$lot = mysql_real_escape_string($_POST['lot']);
	$sts = mysql_real_escape_string($_POST['sts_pro']);
	$kd_sts = mysql_real_escape_string($_POST['kd_sts']);
	$gerobak1 = mysql_real_escape_string($_POST['gerobak1']);
	$gerobak2 = mysql_real_escape_string($_POST['gerobak2']);
	$gerobak3 = mysql_real_escape_string($_POST['gerobak3']);
	$gerobak4 = mysql_real_escape_string($_POST['gerobak4']);
	$gerobak5 = mysql_real_escape_string($_POST['gerobak5']);
	$gerobak6 = mysql_real_escape_string($_POST['gerobak6']);
	if($gerobak6!=""){ $tgl=" ,`no_gerobak1`='$gerobak1',`no_gerobak2`='$gerobak2',`no_gerobak3`='$gerobak3',`no_gerobak4`='$gerobak4',`no_gerobak5`='$gerobak5',`no_gerobak6`='$gerobak6',tgl_out6=now() ";}else
	if($gerobak5!=""){ $tgl=" ,`no_gerobak1`='$gerobak1',`no_gerobak2`='$gerobak2',`no_gerobak3`='$gerobak3',`no_gerobak4`='$gerobak4',`no_gerobak5`='$gerobak5',tgl_out5=now() ";}else
	if($gerobak4!=""){ $tgl=" ,`no_gerobak1`='$gerobak1',`no_gerobak2`='$gerobak2',`no_gerobak3`='$gerobak3',`no_gerobak4`='$gerobak4',tgl_out4=now() ";}else
	if($gerobak3!=""){ $tgl=" ,`no_gerobak1`='$gerobak1',`no_gerobak2`='$gerobak2',`no_gerobak3`='$gerobak3',tgl_out3=now() ";}else
	if($gerobak2!=""){ $tgl=" ,`no_gerobak1`='$gerobak1',`no_gerobak2`='$gerobak2',tgl_out2=now() ";}else
	if($gerobak1!=""){ $tgl=" ,`no_gerobak1`='$gerobak1',tgl_out1=now() ";}	
	if($id_schedule==""){
		$sqlupdate=mysql_query("INSERT INTO `tbl_gerobak` SET
				`id_schedule`='$id',
				`no_order`='$no_order',
				`jenis_kain`='$jeniskain',
				`warna`='$warna',
				`lot`='$lot',
				`kd_status`='$kd_sts',
				`catatan`='$catatan',
				`status_produk`='$sts'
				$tgl
				");
				
	}else{
		$sqlupdate=mysql_query("UPDATE `tbl_gerobak` SET		
				`catatan`='$catatan',
				`status_produk`='$sts'
				$tgl
				WHERE id='$id_schedule'
				");		
		
	}
				echo " <script>window.location='Schedule';</script>";
				
		}
		

?>
