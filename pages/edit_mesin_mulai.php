<?php
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
	$id = mysql_real_escape_string($_POST['id']);
	$personil = mysql_real_escape_string($_POST['personil']);
	$Qrycek=mysql_query("SELECT * FROM tbl_schedule WHERE id='$id' LIMIT 1");
	$rCek=mysql_fetch_array($Qrycek);
	$target1=$rCek[target];
				$sqlupdate=mysql_query("INSERT `tbl_fin_oven` SET 
				`id_schedule`='$rCek[id]',
				`nokk`='$rCek[nokk]',
				`status`='sedang jalan',
				`tgl_target`=ADDDATE(now(), INTERVAL '$target1' HOUR_MINUTE),
				`personil`='$personil',
				`tgl_buat`=now(),
				`tgl_update`=now()");
	
	$sqlupdate1=mysql_query("UPDATE `tbl_schedule` SET 
				`status`='sedang jalan',
				`tgl_mulai`=now()
				WHERE `id`='$id' LIMIT 1");
				/*$sqlupdate1=mysql_query("UPDATE tbl_montemp SET 
				tgl_target= ADDDATE(tgl_buat, INTERVAL '$target1' HOUR_MINUTE) 
				WHERE id_schedule='$id' LIMIT 1");*/
				echo " <script>window.location='Schedule';</script>";
				
		}
		

?>
