<?php

if($_POST){ 
	extract($_POST);
	$id = mysql_real_escape_string($_POST['id']);
	$catatan = mysql_real_escape_string($_POST['catatan']);
	$istirahat = mysql_real_escape_string($_POST['istirahat']);
	$Qrycek=mysql_query("SELECT * FROM tbl_schedule WHERE id='$id' LIMIT 1");
	$rCek=mysql_fetch_array($Qrycek);
				$sqlupdate=mysql_query("UPDATE `tbl_fin_oven` SET 
				`catatan`='$catatan',
				`status`='selesai'
				WHERE `id_schedule`='$id' LIMIT 1");
				$sqlupdate1=mysql_query("UPDATE `tbl_schedule` SET 
				`status`='selesai',
				`tgl_stop`=now(),				
				`istirahat`='$istirahat'
				WHERE `id`='$id' LIMIT 1");
				$sqlUrut=mysql_query("UPDATE tbl_schedule 
		  		SET no_urut = no_urut - 1 
				WHERE no_mesin = '$rCek[no_mesin]' 
		  		AND `status` = 'antri mesin' AND not no_urut='1' ");	
				/*$sqlupdate1=mysql_query("UPDATE tbl_montemp SET 
				tgl_target= ADDDATE(tgl_buat, INTERVAL '$target1' HOUR_MINUTE) 
				WHERE id_schedule='$id' LIMIT 1");*/
				echo " <script>window.location='Schedule';</script>";
				
		}
		

?>
