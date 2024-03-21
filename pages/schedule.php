<?PHP
ini_set("error_reporting", 1);
session_start();
include "koneksi.php";
?>
<?php
$Awal	= isset($_POST['awal']) ? $_POST['awal'] : '';
$Akhir	= isset($_POST['akhir']) ? $_POST['akhir'] : '';
$NoMC 	= isset($_POST['no_mc']) ? $_POST['no_mc'] : '';
$Gshft 	= isset($_POST['g_shift']) ? $_POST['g_shift'] : '';
$now = date("Y-m-d");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Schedule</title>
</head>

<body>
	<div class="row">
		<div class="col-xs-7">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Filter Schedule Finishing</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form method="post" enctype="multipart/form-data" name="form2" class="form-horizontal" id="form2">
					<div class="box-body">
						<div class="form-group">
							<div class="col-sm-4">
								<select name="no_mc" class="form-control" id="no_mc">
									<!--<option value="">Pilih Mesin</option>-->
									<option value="Semua Mesin" <?php if ($NoMC == "Semua Mesin") {
																	echo "SELECTED";
																} ?>>Semua Mesin</option>
									<?php
									$sqlKap = mysqli_query($con, "SELECT no_mesin FROM tbl_schedule WHERE NOT no_mesin LIKE 'BELAH-CUCI%' 
							  and NOT no_mesin='COMPACT' and NOT no_mesin LIKE 'LIPAT%'  and NOT no_mesin LIKE 'STENTER%'
							  GROUP BY no_mesin ORDER BY no_mesin ASC");
									while ($rK = mysqli_fetch_array($sqlKap)) {
									?>
										<option value="<?php echo $rK['no_mesin']; ?>" <?php if ($rK['no_mesin'] == $NoMC) {
																							echo "SELECTED";
																						} ?>><?php echo $rK['no_mesin']; ?></option>
									<?php } ?>

								</select>
							</div>
							<div class="col-sm-2">
								<select name="g_shift" class="form-control" required>
									<!--<option value="">Pilih</option>-->
									<option value="ALL" <?php if ($Gshft == "ALL") {
															echo "SELECTED";
														} ?>>ALL</option>
									<option value="A" <?php if ($Gshft == "A") {
															echo "SELECTED";
														} ?>>A</option>
									<option value="B" <?php if ($Gshft == "B") {
															echo "SELECTED";
														} ?>>B</option>
									<option value="C" <?php if ($Gshft == "C") {
															echo "SELECTED";
														} ?>>C</option>

								</select>
							</div>
							<div class="col-sm-3">
								<div class="input-group date">
									<div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
									<input name="awal" type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal Awal" value="<?php echo $Awal; ?>" autocomplete="off" />
								</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group date">
									<div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
									<input name="akhir" type="text" class="form-control pull-right" id="datepicker1" placeholder="Tanggal Akhir" value="<?php echo $Akhir; ?>" autocomplete="off" />
								</div>
							</div>

							<!-- /.input group -->
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" class="btn btn-primary pull-right" name="cari"><i class="fa fa-search"></i> Cari Data</button>
							<?php if ($NoMC != "") { ?>
								<div class="btn-group">
									<a href="pages/cetak/cetak_schedule_p1.php?no_mc=<?php echo $NoMC; ?>&shift=<?php echo $Gshft; ?>&Awal=<?php echo $Awal; ?>&Akhir=<?php echo $Akhir; ?>" class="btn btn-warning pull-left" target="_blank"><i class="fa fa-print"></i> Cetak</a>
									<a href="pages/cetak/cetak_schedule_p1_excel.php?no_mc=<?php echo $NoMC; ?>&shift=<?php echo $Gshft; ?>&Awal=<?php echo $Awal; ?>&Akhir=<?php echo $Akhir; ?>" class="btn btn-danger" target="_blank"><i class="fa fa-file-excel-o"></i> Cetak Ke Excel</a>
								</div>
							<?php } ?>
						</div>
						<!-- /.box-footer -->

					</div>
				</form>
			</div>
		</div>
		<div class="col-xs-5">
			<div class="box box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Rangkuman</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3600">
						<div class="carousel-inner">
							<?php
									$qryGmbr = mysqli_query($con, "SELECT ceil(count(*)/2) as jumlah FROM 
																		(SELECT
																			no_mesin
																		FROM
																			tbl_schedule 
																		WHERE
																		(`status` = 'antri mesin' or `status` = 'sedang jalan') and `tampil`='1'
																		GROUP BY no_mesin, g_shift) x");
									$rG = mysqli_fetch_array($qryGmbr);
									$pages = $rG['jumlah'] - 1;
								for ($i = 0; $i <= $pages; $i++) {
							?>
								<div class="item <?php if ($i == "0") {
														echo "active";
													} ?>">

									<!-- awal table -->
									<?php
									$bts = $i * 2;
									$data12 = mysqli_query($con, "SELECT
																	no_mesin,sum(bruto) as tot,count(nokk) as jml, g_shift 
																FROM
																	tbl_schedule
																WHERE 
																(`status` = 'antri mesin' or `status` = 'sedang jalan') and `tampil`='1'
																GROUP BY no_mesin, g_shift ORDER BY g_shift ASC LIMIT $bts,2");
									?>
									<div class="box-body table-responsive">
										<table id="tblr21" class="table table-bordered table-hover table-striped" width="100%">
											<thead class="bg-purple">
												<tr>
													<th width="281">
														<div align="center">No Mesin</div>
													</th>
													<th width="223">
														<div align="center">Shift</div>
													</th>
													<th width="506">
														<div align="center">Bruto</div>
													</th>
													<th width="170">
														<div align="center">Jml KK</div>
													</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$col = 0;
												while ($rowd12 = mysqli_fetch_array($data12)) {
													$bgcolor = ($col++ & 1) ? 'gainsboro' : 'antiquewhite';
													$con1 = mysqli_connect("10.0.0.10", "dit", "4dm1n", "db_qc");
													$qCek = mysqli_query($con1, "SELECT `status` FROM tbl_inspection WHERE id_schedule='" . $rowd12['id'] . "' LIMIT 1");
													$rCEk = mysqli_fetch_array($qCek);
												?>

													<tr bgcolor="<?php echo $bgcolor; ?>">
														<td align="center">
															<font size="-1"><?php echo $rowd12['no_mesin']; ?></font>
														</td>
														<td align="center">
															<font size="-1"><?php echo $rowd12['g_shift']; ?></font>
														</td>
														<td align="right">
															<font size="-1"><?php echo $rowd12['tot']; ?></font>
														</td>
														<td align="center">
															<font size="-1"><?php echo $rowd12['jml']; ?></font>
														</td>
													</tr>
												<?php
													$no++;
												} ?>

											</tbody>

										</table>
									</div>
									<!-- akhir table -->
									<div class="carousel-caption">
										<?php $hal = $i + 1;
										echo "Halaman " . $hal . "/" . $rG['jumlah']; ?>
									</div>
								</div>
							<?php } ?>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="fa fa-angle-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="fa fa-angle-right"></span>
						</a>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>

	<?php
	if ($Awal == "") {
		$tgl = date('Y-m-d');
	} else {
		$tgl = "";
	}
	if ($NoMC == "Semua Mesin") {
		$where = " ";
	} else if ($NoMC != "") {
		$where = " and no_mesin='$NoMC' ";
	} else {
		$where = " ";
	}
	if ($Gshft == "ALL") {
		$where1 = " ";
	} else if ($Gshft != "") {
		$where1 = " and g_shift='$Gshft' ";
	} else {
		$where1 = " ";
	}
	if ($Awal != "" and $Akhir != "") {
		$where2 = " and DATE_FORMAT(tgl_update,'%Y-%m-%d') BETWEEN '$Awal' and '$Akhir' ";
		$limit = "";
	} else {
		$where2 = " and `tampil`='1' ";
		$limit = " LIMIT 300 ";
	}
	$data = mysqli_query($con, "SELECT
									id,
									g_shift,
									no_mesin,
									no_urut,
									buyer,
									langganan,
									no_order,
									nokk,
									nodemand,
									jenis_kain,
									warna,
									lot,
									no_warna,
									sum(rol) as rol,
									sum(bruto) as bruto,
									proses,
									catatan,
									ket_status,
									tgl_delivery,
									tgl_update
								FROM
									tbl_schedule
								WHERE
									(`status` = 'antri mesin' or `status` = 'sedang jalan' or `status` = 'selesai' ) 
									$where $where1 $where2
								GROUP BY
									id 
								ORDER BY
									no_mesin ASC,no_urut ASC $limit");
	$no = 1;
	$n = 1;
	$c = 0;
	?>

	<div class="row">
		<div class="col-xs-12">
			<form role="form" method="post" enctype="multipart/form-data" name="form1" id="form1" action="">
				<div class="box">
					<div class="box-header">
						<a href="FormSchedule" class="btn btn-success <?php if ($_SESSION['aksesFin'] == "biasa") {
																			echo "disabled";
																		} ?>"><i class="fa fa-plus-circle"></i> Tambah Demand</a>
						<a href="FormScheduleNoKK" class="btn btn-info <?php if ($_SESSION['aksesFin'] == "biasa") {
																			echo "disabled";
																		} ?>"><i class="fa fa-plus-circle"></i> Tambah NoKK</a>
						<input type="submit" class="btn btn-primary pull-right" value="Hapus Data" name="hapus">
						<!--<a href="pages/cetak/cetak_schedule.php" class="btn btn-danger pull-right" target="_blank"><i class="fa fa-print"></i> Cetak</a>-->
						<!--<a href="#" data-toggle="modal" data-target="#PrintHalaman" class="btn btn-danger pull-right"><i class="fa fa-print"></i> Cetak</a>-->
						<div class="box-body">
							<table id="example5" class="table table-bordered table-hover table-striped" width="100%">
								<thead class="bg-blue">
									<tr style="font-size: 12px;">
										<th>
											<div align="center"><input type="checkbox" name="allbox" value="check" onClick="checkAll(0);" /></div>
										</th>
										<th width="115">
											<div align="center">Shift</div>
										</th>
										<th width="45">
											<div align="center">Mesin</div>
										</th>
										<th width="24">
											<div align="center">No.</div>
										</th>
										<th width="162">
											<div align="center">Pelanggan</div>
										</th>
										<th width="118">
											<div align="center">No. Order</div>
										</th>
										<th width="122">
											<div align="center">Jenis Kain</div>
										</th>
										<th width="86">
											<div align="center">Warna</div>
										</th>
										<th width="83">
											<div align="center">No Warna</div>
										</th>
										<th width="38">
											<div align="center">Lot</div>
										</th>
										<th width="79">
											<div align="center">Keterangan</div>
										</th>
										<th width="46">
											<div align="center">Rol</div>
										</th>
										<th width="48">
											<div align="center">Kg</div>
										</th>
										<th width="59">
											<div align="center">Proses</div>
										</th>
										<th>
											<div align="center">Delivery</div>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$col = 0;
									while ($rowd = mysqli_fetch_array($data)) {
										$bgcolor = ($col++ & 1) ? 'gainsboro' : 'antiquewhite';
										$qCek = mysqli_query($con, "SELECT `status` FROM tbl_fin_oven WHERE id_schedule='" . $rowd['id'] . "' LIMIT 1");
										$rCEk = mysqli_fetch_array($qCek);
										$qCeks = mysqli_query($con, "SELECT 
																		nokk,tgl_buat,no_mesin 
																	FROM 
																		tbl_produksi 
																	WHERE 
																		(nokk = '" . $rowd['nokk'] . "' OR demandno = '" . $rowd['nodemand'] . "')
																		AND proses like '" . $rowd['proses'] . "%' and tgl_buat >= '" . $rowd['tgl_update'] . "'");
										$rCEks = mysqli_fetch_array($qCeks);
										$rowcek = mysqli_num_rows($qCeks);
									?>
										<div class="modal fade modal-super-scaled" id="PrintHalaman<?php echo $rowd['id']; ?>">
											<div class="modal-dialog modal-sm">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span></button>
														<h4 class="modal-title">Cetak Identifikasi Produk</h4>
													</div>
													<div class="modal-body" align="center">
														<a href="pages/cetak/iden_produk1.php?idkk=<?php echo $rowd['id']; ?>" class="btn btn-danger" target="_blank"><i class="fa fa-print"></i> Gerobak ke-1</a>
														<a href="pages/cetak/iden_produk2.php?idkk=<?php echo $rowd['id']; ?>" class="btn btn-danger" target="_blank"><i class="fa fa-print"></i> Gerobak ke-2</a><br><br>
														<a href="pages/cetak/iden_produk3.php?idkk=<?php echo $rowd['id']; ?>" class="btn btn-success" target="_blank"><i class="fa fa-print"></i> Gerobak ke-3</a>
														<a href="pages/cetak/iden_produk4.php?idkk=<?php echo $rowd['id']; ?>" class="btn btn-success" target="_blank"><i class="fa fa-print"></i> Gerobak ke-4</a><br><br>
														<a href="pages/cetak/iden_produk5.php?idkk=<?php echo $rowd['id']; ?>" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i> Gerobak ke-5</a>
														<a href="pages/cetak/iden_produk6.php?idkk=<?php echo $rowd['id']; ?>" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i> Gerobak ke-6</a>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
										<tr bgcolor="<?php echo $bgcolor; ?>">
											<td align="center"><input type="checkbox" name="cek[<?php echo $no; ?>]" value="<?php echo $rowd['id']; ?>" <?php if ($rowcek == 0) {
																																							echo "disabled";
																																						} ?> /></td>
											<td align="center">
												<font size="-1"><?php echo $rowd['g_shift']; ?><br>
													<div class="btn-group"><!--<a href="#" id='<?php echo $rowd['id']; ?>' class="btn btn-xs btn-warning gerobak_tambah <?php if ($_SESSION['aksesFin'] != "biasa") {
																																											echo "disabled";
																																										} ?>"><i class="fa fa-plus"></i></a>--><a href="#" id='<?php echo $rowd['id']; ?>' class="btn btn-xs btn-info schedule_edit <?php if ($_SESSION['aksesFin'] == "biasa") {
																																																																																									echo "disabled";
																																																																																								} ?>"><i class="fa fa-edit"></i></a><a href="#" onclick="confirm_del('HapusSch-<?php echo $rowd['id'] ?>');" class="btn btn-xs btn-danger <?php if ($_SESSION['aksesFin'] == "biasa" or $rCEk['idb'] != "" or $rCEk['status'] == "sedang jalan") {
																																																																																																																																										echo "disabled";
																																																																																																																																									} ?>"><i class="fa fa-trash"></i></a></div>
												</font>
											</td>
											<td align="center">
												<font size="-1"><a href="#" id='<?php echo $rowd['no_mesin'] . "-" . $rowd['g_shift']; ?>' class="edit_status_mesin <?php if ($_SESSION['lvl_id10'] == "3") {
																																									echo "disabled";
																																								} ?>"><?php echo $rowd['no_mesin']; ?></a><br />
													<a href="#" data-toggle="modal" data-target="#PrintHalaman<?php echo $rowd['id']; ?>" class="btn btn-xs btn-danger <?php if ($rowd['no_urut'] != "1" or $rCEk['status'] == "") {
																																											echo " hidden ";
																																										} ?>" target="_blank"><i class="fa fa-print"></i></a>
												</font>
											</td>
											<td align="center">
												<font size="-1"><?php echo $rowd['no_urut']; ?><br />
													<!--<a href="#" id='<?php echo $rowd['id']; ?>' class="btn btn-xs  <?php if ($_SESSION['aksesFin'] == "biasa") {
																															echo "enabled";
																														} else {
																															echo " disabled ";
																														}
																														if ($rowd['no_urut'] != "1") {
																															echo " hidden ";
																														}
																														if ($rCEk['status'] == "sedang jalan") {
																															echo " btn-danger mesin_berhenti_edit ";
																														} else {
																															echo " btn-warning mesin_mulai_edit ";
																														} ?>">
                  							<?php if ($rCEk['status'] == "sedang jalan") {
												echo "stop";
											} else {
												echo "mulai";
											} ?>
                									</a>-->
											</td>
											<td>
												<font size="-1"><?php echo $rowd['langganan'] . "/" . $rowd['buyer']; ?></font>
											</td>
											<td align="center">
												<font size="-1"><?php echo $rowd['no_order']; ?></font>
											</td>
											<td>
												<font size="-1"><?php echo $rowd['jenis_kain']; ?></font>
											</td>
											<td align="center">
												<font size="-1"><?php echo $rowd['warna']; ?></font>
											</td>
											<td align="center">
												<font size="-1"><?php echo $rowd['no_warna']; ?></font>
											</td>
											<td align="center">
												<font size="-1"><a href="#"><?php echo $rowd['lot']; ?></a></font>
											</td>
											<td>
												<font size="-1">
													<i>nokk : <?php echo $rowd['nokk']; ?></i><br />
													<i>no demand : <?= $rowd['nodemand']; ?></i><br>
													<i style="color:red;"><strong><?php if($rowd['catatan'] == 'data diinput dari finishing') { echo ''; }else{ echo $rowd['catatan']; } ?></strong></i><br />
													<a href="#" id='<?php echo $rowd['id']; ?>' class="detail_kartu"><span class="label label-danger"><?php echo $rowd['ket_kartu']; ?></span></a><?php echo $rowd['tgl_update']; ?>
												</font>
											</td>
											<td align="center">
												<font size="-1"><?php echo $rowd['rol'] . $rowd['kk']; ?></font>
											</td>
											<td align="center">
												<font size="-1"><?php echo $rowd['bruto']; ?></font>
											</td>
											<td>
												<font size="-1"><?php echo $rowd['proses']; ?></font>
												<br>
												<?php 
													if ($rowcek > 0) {
														echo 	"<span class='label label-danger'>
																	Sudah Jalan
																</span>
																<br>
																<span class='label label-danger'>
																	$rCEks[tgl_buat]
																</span>
																<br>
																<span class='label label-danger'>
																	$rCEks[no_mesin]
																</span>";
													} 
												?>
											</td>
											<td align="center">
												<font size="-1"><?php echo $rowd['tgl_delivery']; ?></font>
											</td>
										</tr>
									<?php
										$no++;
									} ?>
							</table>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Modal Popup untuk delete-->
	<div class="modal fade" id="delSchedule" tabindex="-1">
		<div class="modal-dialog modal-sm">
			<div class="modal-content" style="margin-top:100px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
				</div>

				<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
					<a href="#" class="btn btn-danger" id="del_link">Delete</a>
					<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>

	<div id="ScheduleEdit" class="modal fade modal-3d-slit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	</div>
	<div id="MesinMulaiEdit" class="modal fade modal-3d-slit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	</div>
	<div id="MesinBerhentiEdit" class="modal fade modal-3d-slit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	</div>
	<div id="EditStatusMesin" class="modal fade modal-3d-slit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	</div>
	<div id="GerobakTambah" class="modal fade modal-3d-slit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	</div>
	<div id="DetailKartu" class="modal fade modal-3d-slit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	</div>
</body>

</html>
<script type="text/javascript">
	function confirm_del(delete_url) {
		$('#delSchedule').modal('show', {
			backdrop: 'static'
		});
		document.getElementById('del_link').setAttribute('href', delete_url);
	}
</script>
<?php
if ($_POST['hapus'] == "Hapus Data") {
	if ($Awal == "") {
		$tgl = date('Y-m-d');
	} else {
		$tgl = "";
	}
	if ($NoMC == "Semua Mesin") {
		$where = " ";
	} else if ($NoMC != "") {
		$where = " and no_mesin='$NoMC' ";
	} else {
		$where = " ";
	}
	if ($Gshft == "ALL") {
		$where1 = " ";
	} else if ($Gshft != "") {
		$where1 = " and g_shift='$Gshft' ";
	} else {
		$where1 = " ";
	}
	if ($Awal != "") {
		$where2 = " and DATE_FORMAT(tgl_update,'%Y-%m-%d')='$Awal' ";
	} else {
		$where2 = " and `tampil`='1' ";
	}
	$data = mysqli_query($con, "SELECT
   	id,
	g_shift,
	no_mesin,
	no_urut,
	buyer,
	langganan,
	no_order,
	nokk,
	jenis_kain,
	warna,
	lot,
	no_warna,
	sum(rol) as rol,
	sum(bruto) as bruto,
	proses,
	catatan,
	ket_status,
	tgl_delivery,
	tgl_update
FROM
	tbl_schedule
WHERE
	NOT `status` = 'selesai' 
	$where $where1 $where2
GROUP BY
	id 
ORDER BY
	no_mesin ASC,no_urut ASC");
	$no = 1;
	while ($rowd = mysqli_fetch_array($data)) {
		if ($_POST['cek'][$no] != '') {
			$id_pd = $_POST['cek'][$no];
			mysqli_query($con, "UPDATE tbl_schedule SET tampil=null where id='$id_pd'") or die("Gagal2 $id_pd");
			$no++;
		} else {
			$no++;
		}
	}
	echo "<script>swal({
  title: 'Data Telah diHapus',   
  text: 'Klik Ok untuk cek data kembali',
  type: 'success',
  }).then((result) => {
  if (result.value) {
    
	 window.location.href=''; 
  }
});</script>";
}
?>
<script type="text/javascript">
	function checkAll(form1) {
		for (var i = 0; i < document.forms['form1'].elements.length; i++) {
			var e = document.forms['form1'].elements[i];
			if ((e.name != 'allbox') && (e.type == 'checkbox')) {
				e.checked = document.forms['form1'].allbox.checked;

			}
		}
	}
</script>