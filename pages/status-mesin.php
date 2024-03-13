<?php
	ini_set("error_reporting", 1);
	session_start();
	include "koneksi.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="refresh" content="180">
	<title>Status Mesin</title>
	<style>
		td {
			padding: 1px 0px;
		}

		p {
			line-height: 4px;
			font-size: 10px;
		}
	</style>
	<style type="text/css">
		.teks-berjalan {
			background-color: #03165E;
			color: #F4F0F0;
			font-family: monospace;
			font-size: 24px;
			font-style: italic;
		}

		.tbl-berjalan {
			background-color: ;
			color: #F4F0F0;
			font-family: monospace;
			font-size: 14px;
			font-style: italic;
		}
	</style>
</head>

<body>
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-7">
					<div class="box box-info">
						<div class="box-header with-border">
							<h3 class="box-title">Filter Antrian kartu kerja mesin</h3>
							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
							</div>
						</div>
						<form method="post" enctype="multipart/form-data" class="form-horizontal">
							<div class="box-body">
								<div class="form-group">
									<div class="col-sm-4">
										<select name="no_mc" class="form-control" id="no_mc">
											<!--<option value="">Pilih Mesin</option>-->
											<option value="">Semua Mesin</option>
											<?php
												$sqlKap = mysqli_query($con, "SELECT no_mesin FROM tbl_schedule WHERE NOT no_mesin LIKE 'BELAH-CUCI%' 
																				and NOT no_mesin='COMPACT' and NOT no_mesin LIKE 'LIPAT%'  and NOT no_mesin LIKE 'STENTER%'
																				GROUP BY no_mesin ORDER BY no_mesin ASC");
												while ($rK = mysqli_fetch_array($sqlKap)) {
											?>
												<option value="<?php echo $rK['no_mesin']; ?>" <?php if($rK['no_mesin'] == $_POST['no_mc']){ echo "SELECTED"; } ?>><?php echo $rK['no_mesin']; ?></option>
											<?php } ?>

										</select>
									</div>
									<div class="col-sm-2">
										<select name="g_shift" class="form-control">
											<!--<option value="">Pilih</option>-->
											<option value="">ALL</option>
											<option value="A" <?php if("A" == $_POST['g_shift']){echo "SELECTED"; } ?>>A</option>
											<option value="B" <?php if("B" == $_POST['g_shift']){echo "SELECTED"; } ?>>B</option>
											<option value="C" <?php if("C" == $_POST['g_shift']){echo "SELECTED"; } ?>>C</option>

										</select>
									</div>
									<div class="col-sm-3">
										<div class="input-group date">
											<div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
											<input name="awal" type="text" class="form-control pull-right" id="datepicker" placeholder="Tanggal Awal" value="<?= $_POST['awal']; ?>" autocomplete="off" />
										</div>
									</div>
									<div class="col-sm-3">
										<div class="input-group date">
											<div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
											<input name="akhir" type="text" class="form-control pull-right" id="datepicker1" placeholder="Tanggal Akhir" value="<?= $_POST['akhir']; ?>" autocomplete="off" />
										</div>
									</div>

								</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary pull-right" name="cari"><i class="fa fa-search"></i> Cari Data</button>
									<?php if($_POST['awal'] && $_POST['akhir']) : ?>
										<div class="btn-group">
											<a href="pages/cetak/cetak_statusMesin_p1.php?awal=<?= $_POST['awal']; ?>&akhir=<?= $_POST['akhir']; ?>&no_mc=<?= $_POST['no_mc']; ?>&g_shift=<?= $_POST['g_shift']; ?>" class="btn btn-warning pull-left" target="_blank"><i class="fa fa-print"></i> Cetak</a>
											<a href="pages/cetak/cetak_statusMesin_p1_excel.php?awal=<?= $_POST['awal']; ?>&akhir=<?= $_POST['akhir']; ?>&no_mc=<?= $_POST['no_mc']; ?>&g_shift=<?= $_POST['g_shift']; ?>" class="btn btn-danger" target="_blank"><i class="fa fa-file-excel-o"></i> Cetak Ke Excel</a>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="box box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Antrian kartu kerja mesin</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="carousel-example-generic1" class="carousel slide1" data-ride="carousel1" data-interval="10000">
						<div class="carousel-inner">
							<!-- awal table -->
							<?php
								$tody = date("Y-m-d");
								$Skrng = date("Y-m-d H:i");
//								if ($Skrng >= $tody . " 08:50") {
//									$updateA = mysqli_query($con, "UPDATE tbl_schedule SET `status` = 'selesai', `sts_mc`='0' WHERE tgl_update <= '$tody 08:50' ");
//								}

								if($_POST['no_mc']){
									$where_no_mc	= "no_mesin = '$_POST[no_mc]' AND";
								}else{
									$where_no_mc	= "";
								}

								if($_POST['g_shift']){
									$where_gShift	= "g_shift = '$_POST[g_shift]' AND";
								}else{
									$where_gShift	= "";
								}

								if($_POST['awal'] && $_POST['akhir']){
									$where1		= "DATE_FORMAT(tgl_update,'%Y-%m-%d') BETWEEN '$_POST[awal]' and '$_POST[akhir]'";
								}else{
									$where1		= "(`status` = 'antri mesin' or `status`='sedang jalan' or `status` = 'selesai')
													AND personil='husni' AND tampil='1' AND sts_mc='1'";
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
															no_warna,
															lot,
															sum(rol) as rol,
															sum(bruto) as bruto,
															proses,
															catatan,
															ket_status,
															tgl_delivery,
															tgl_update,
															nodemand
														FROM
															tbl_schedule 
														WHERE
															$where_no_mc $where_gShift $where1
														GROUP BY
															id
														ORDER BY
															no_mesin ASC, g_shift, no_urut ASC");
							?>
							<div class="box-body table-responsive">
								<!-- <table id="tblr21" class="table table-bordered table-hover table-striped" width="100%"> -->
								<table id="example5" class="table table-bordered table-hover table-striped" width="100%">
									<thead class="bg-blue">
										<tr>
											<th width="45">
												<div align="center">Mesin</div>
											</th>
											<th width="24">
												<div align="center">No.</div>
											</th>
											<th width="24">
												<div align="center">Shift</div>
											</th>
											<th width="118">
												<div align="center">Pelanggan</div>
											</th>
											<th width="118">
												<div align="center">No. Order</div>
											</th>
											<th width="182">
												<div align="center">Jenis Kain</div>
											</th>
											<th width="82">
												<div align="center">Warna</div>
											</th>
											<th width="93">
												<div align="center">No Warna</div>
											</th>
											<th width="34">
												<div align="center">Lot</div>
											</th>
											<th width="109">
												<div align="center">Keterangan</div>
											</th>
											<th width="62">
												<div align="center">Rol</div>
											</th>
											<th width="68">
												<div align="center">Kg</div>
											</th>
											<th width="71">
												<div align="center">Proses</div>
											</th>
											<th width="86">
												<div align="center">Delivery</div>
											</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$col = 0;
										$no = 0;
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
																		AND proses like '" . $rowd['proses'] . "%' 
																		AND tgl_buat >= '" . $rowd['tgl_update'] . "' and shift='" . $rowd['g_shift'] . "'");
											$rCEks = mysqli_fetch_array($qCeks);
											$rowcek = mysqli_num_rows($qCeks);
										?>

											<tr bgcolor="<?php echo $bgcolor; ?>">
												<td align="center">
													<font size="-1"><a href="#" id='<?php echo $rowd['no_mesin']; ?>' class="edit_status_mesin <?php if ($_SESSION['lvl_id10'] == "3") {
																																					echo "disabled";
																																				} ?>"><?php echo $rowd['no_mesin']; ?></a></font><br>
													<div class="btn-group">
														<a href="#" id='<?php echo $rowd['id']; ?>' class="btn btn-xs btn-info statusmc_edit"><i class="fa fa-edit"></i></a>
														<a href="#" onclick="confirm_del('HapusStsMc-<?php echo $rowd['id'] ?>');" class="btn btn-xs btn-danger "><i class="fa fa-trash"></i></a>
													</div>
												</td>
												<td align="center">
													<font size="-1"><?php echo $rowd['no_urut']; ?></font>
												</td>
												<td><?php echo $rowd['g_shift']; ?></td>
												<td>
													<font size="-2"><?php echo $rowd['langganan'] . "/" . $rowd['buyer']; ?></font>
												</td>
												<td align="center">
													<font size="-1"><?php echo $rowd['no_order']; ?></font>
												</td>
												<td>
													<font size="-2"><?php echo $rowd['jenis_kain']; ?></font>
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
													<font size="-2"><?php echo $rowd['ket_status']; ?><br />
														<i>nokk : <?php echo $rowd['nokk']; ?></i><br />
														<i>no demand : <?= $rowd['nodemand']; ?></i><br>
															<i style="color:red;">
																<strong><?php if($rowd['catatan'] == 'data diinput dari finishing') { echo ''; }else{ echo $rowd['catatan']; } ?></strong>
															</i><br />
														<a href="#" id='<?php echo $rowd['id']; ?>' class="detail_kartu"><span class="label label-danger"><?php echo $rowd['ket_kartu']; ?></span></a><br><?php echo $rowd['tgl_update']; ?>
													</font>
												</td>
												<td align="center">
													<font size="-1"><?php echo $rowd['rol'] . $rowd['kk']; ?></font>
												</td>
												<td align="center">
													<font size="-1"><?php echo $rowd['bruto']; ?></font>
												</td>
												<td>
													<font size="-1"><?php echo $rowd['proses']; ?><br><?php if ($rowcek > 0) {
																											echo "<span class='label label-danger'>Sudah Jalan</span><br><span class='label label-danger'>" . $rCEks['tgl_buat'] . "</span><br><span class='label label-danger'>" . $rCEks['no_mesin'] . "</span>";
																										} ?></font>
												</td>
												<td align="center">
													<font size="-1"><?php echo $rowd['tgl_delivery']; ?></font>
												</td>
											</tr>
										<?php
											$no++;
										} ?>

									</tbody>

								</table>
							</div>
							<!-- akhir table -->
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>

	</div>
	<!-- Modal Popup untuk delete-->
	<div class="modal fade" id="delStatusMesin" tabindex="-1">
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



	<div id="CekDetailStatus" class="modal fade modal-3d-slit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
	<div id="StatusMCEdit" class="modal fade modal-3d-slit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>

</body>
<!-- Tooltips -->
<script src="dist/js/tooltips.js"></script>
<script>
	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>
<script type="text/javascript">
	function confirm_del(delete_url) {
		$('#delStatusMesin').modal('show', {
			backdrop: 'static'
		});
		document.getElementById('del_link').setAttribute('href', delete_url);
	}
</script>

</html>