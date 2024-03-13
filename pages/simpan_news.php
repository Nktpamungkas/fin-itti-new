<?php
if ($_POST) {
    extract($_POST);
    $pesan = mysql_real_escape_string(strtoupper($_POST['line_news']));
        $sqlupdate=mysql_query("INSERT INTO `tbl_news_line` SET
				`gedung`='LT 1',				
				`news_line`='$pesan',
				`tgl_update`=now()
				");
        echo " <script>window.location='LineNews';</script>";
    }