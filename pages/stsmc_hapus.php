<?php
ini_set("error_reporting", 1);
session_start();
include("../koneksi.php");
    $modal_id=$_GET['id'];
    $modal1=mysqli_query($con,"UPDATE tbl_schedule SET tampil=NULL WHERE id='$modal_id' ");
    if ($modal1) {
        echo "<script>window.location='StatusMesin';</script>";
    } else {
        echo "<script>alert('Gagal Hapus');window.location='StatusMesin';</script>";
    }
