<script>
	function roundToTwo(num) {
		return +(Math.round(num + "e+2") + "e-2");
	}

	function aktif_staff() {
		if (document.forms['form1']['personil'].value == "bayu" || document.forms['form1']['personil'].value == "putri") {
			document.form1.acc_staff.removeAttribute("disabled");
			document.form1.acc_staff.setAttribute("required", true);
		} else {
			document.form1.acc_staff.setAttribute("disabled", true);
			document.form1.acc_staff.removeAttribute("required");
		}
	}

	function aktif() {
		if (document.forms['form1']['manual'].checked == true) {
			document.form1.nokk.setAttribute("readonly", true);
			document.form1.nokk.removeAttribute("required");
			document.form1.nokk.value = "";
			document.form1.datepicker2.setAttribute("readonly", true);
			document.form1.datepicker2.removeAttribute("required");
			document.form1.datepicker2.value = "";
			document.form1.langganan.setAttribute("readonly", true);
			document.form1.langganan.removeAttribute("required");
			document.form1.langganan.value = "";
			document.form1.buyer.setAttribute("readonly", true);
			document.form1.buyer.removeAttribute("required");
			document.form1.buyer.value = "";
			document.form1.no_order.setAttribute("readonly", true);
			document.form1.no_order.removeAttribute("required");
			document.form1.no_order.value = "";
			document.form1.no_po.setAttribute("readonly", true);
			document.form1.no_po.removeAttribute("required");
			document.form1.no_po.value = "";
			document.form1.no_hanger.setAttribute("readonly", true);
			document.form1.no_hanger.removeAttribute("required");
			document.form1.no_hanger.value = "";
			document.form1.no_item.setAttribute("readonly", true);
			document.form1.no_item.removeAttribute("required");
			document.form1.no_item.value = "";
			document.form1.jns_kain.setAttribute("readonly", true);
			document.form1.jns_kain.removeAttribute("required");
			document.form1.jns_kain.value = "";
			document.form1.lebar.setAttribute("readonly", true);
			document.form1.lebar.removeAttribute("required");
			document.form1.lebar.value = "";
			document.form1.grms.setAttribute("readonly", true);
			document.form1.grms.removeAttribute("required");
			document.form1.grms.value = "";
			document.form1.warna.setAttribute("readonly", true);
			document.form1.warna.removeAttribute("required");
			document.form1.warna.value = "";
			document.form1.no_warna.setAttribute("readonly", true);
			document.form1.no_warna.removeAttribute("required");
			document.form1.no_warna.value = "";
			document.form1.qty1.setAttribute("readonly", true);
			document.form1.qty1.removeAttribute("required");
			document.form1.qty1.value = "";
			document.form1.qty2.setAttribute("readonly", true);
			document.form1.qty2.removeAttribute("required");
			document.form1.qty2.value = "";
			document.form1.satuan1.setAttribute("disabled", true);
			document.form1.satuan1.removeAttribute("required");
			document.form1.satuan1.value = "";
			document.form1.lot.setAttribute("readonly", true);
			document.form1.lot.removeAttribute("required");
			document.form1.lot.value = "";
			document.form1.qty3.setAttribute("readonly", true);
			document.form1.qty3.removeAttribute("required");
			document.form1.qty3.value = "";
			document.form1.qty4.setAttribute("readonly", true);
			document.form1.qty4.removeAttribute("required");
			document.form1.qty4.value = "";
			document.form1.loading.setAttribute("readonly", true);
			document.form1.loading.removeAttribute("required");
			document.form1.loading.value = "";
			document.form1.no_rajut.setAttribute("readonly", true);
			document.form1.no_rajut.removeAttribute("required");
			document.form1.no_rajut.value = "";
			document.form1.kategori_warna.setAttribute("disabled", true);
			document.form1.kategori_warna.removeAttribute("required");
			document.form1.kategori_warna.value = "";
			document.form1.no_resep.setAttribute("readonly", true);
			document.form1.no_resep.removeAttribute("required");
			document.form1.no_resep.value = "";
			document.form1.resep.setAttribute("disabled", true);
			document.form1.resep.removeAttribute("required");
			document.form1.resep.value = "";
		} else {
			document.form1.nokk.removeAttribute("readonly");
			document.form1.nokk.setAttribute("required", true);
			document.form1.datepicker2.removeAttribute("readonly");
			document.form1.datepicker2.setAttribute("required", true);
			document.form1.langganan.removeAttribute("readonly");
			document.form1.langganan.setAttribute("required", false);
			document.form1.buyer.removeAttribute("readonly");
			document.form1.buyer.setAttribute("required", false);
			document.form1.no_order.removeAttribute("readonly");
			document.form1.no_order.setAttribute("required", false);
			document.form1.no_po.removeAttribute("readonly");
			document.form1.no_po.setAttribute("required", false);
			document.form1.no_hanger.removeAttribute("readonly");
			document.form1.no_hanger.setAttribute("required", false);
			document.form1.no_item.removeAttribute("readonly");
			document.form1.no_item.setAttribute("required", false);
			document.form1.jns_kain.removeAttribute("readonly");
			document.form1.jns_kain.setAttribute("required", false);
			document.form1.lebar.removeAttribute("readonly");
			document.form1.lebar.setAttribute("required", true);
			document.form1.grms.removeAttribute("readonly");
			document.form1.grms.setAttribute("required", true);
			document.form1.warna.removeAttribute("readonly");
			document.form1.warna.setAttribute("required", false);
			document.form1.no_warna.removeAttribute("readonly");
			document.form1.no_warna.setAttribute("required", false);
			document.form1.qty1.removeAttribute("readonly");
			document.form1.qty1.setAttribute("required", true);
			document.form1.qty2.removeAttribute("readonly");
			document.form1.qty2.setAttribute("required", true);
			document.form1.satuan1.removeAttribute("disabled");
			document.form1.satuan1.setAttribute("required", true);
			document.form1.lot.removeAttribute("readonly");
			document.form1.lot.setAttribute("required", true);
			document.form1.qty3.removeAttribute("readonly");
			document.form1.qty3.setAttribute("required", true);
			document.form1.qty4.removeAttribute("readonly");
			document.form1.qty4.setAttribute("required", true);
			document.form1.loading.removeAttribute("readonly");
			document.form1.loading.setAttribute("required", true);
			document.form1.no_rajut.removeAttribute("readonly");
			document.form1.no_rajut.setAttribute("required", false);
			document.form1.kategori_warna.removeAttribute("disable");
			document.form1.kategori_warna.setAttribute("required", false);
			document.form1.no_resep.removeAttribute("readonly");
			document.form1.no_resep.setAttribute("required", false);
			document.form1.resep.removeAttribute("disabled");
			document.form1.resep.setAttribute("required", false);
		}
	}

	function angka(e) {
		if (!/^[0-9 .]+$/.test(e.value)) {
			e.value = e.value.substring(0, e.value.length - 1);
		}
	}
</script>
<?php
	ini_set("error_reporting", 1);
	session_start();
	include("koneksi.php");
	function nourut(){
		include("koneksi.php");
		$format = date("ymd");
		$sql	= mysqli_query($con,"SELECT nokk FROM tbl_schedule WHERE substr(nokk,1,6) like '%".$format."%' ORDER BY nokk DESC LIMIT 1 ") or die (mysqli_error());
		$d		= mysqli_num_rows($sql);
		if($d>0){
			$r=mysqli_fetch_array($sql);
			$d=$r['nokk'];
			$str=substr($d,6,2);
			$Urut = (int)$str;
		}else{
			$Urut = 0;
		}
		$Urut = $Urut + 1;
		$Nol="";
		$nilai=2-strlen($Urut);
		for ($i=1;$i<=$nilai;$i++){
			$Nol= $Nol."0";
		}
		$nipbr = $format.$Nol.$Urut;
		return $nipbr;
	}
	$nou	= nourut();
	$nodemand	= $_GET['nodemand'];
	$operation	= $_GET['operation'];
	$sql_ITXVIEWKK  = db2_exec($conn1, "SELECT
											TRIM(PRODUCTIONORDERCODE) AS PRODUCTIONORDERCODE,
											TRIM(DEAMAND) AS DEMAND,
											ORIGDLVSALORDERLINEORDERLINE,
											PROJECTCODE,
											ORDPRNCUSTOMERSUPPLIERCODE,
											TRIM(SUBCODE01) AS SUBCODE01, TRIM(SUBCODE02) AS SUBCODE02, TRIM(SUBCODE03) AS SUBCODE03, TRIM(SUBCODE04) AS SUBCODE04,
											TRIM(SUBCODE05) AS SUBCODE05, TRIM(SUBCODE06) AS SUBCODE06, TRIM(SUBCODE07) AS SUBCODE07, TRIM(SUBCODE08) AS SUBCODE08,
											TRIM(SUBCODE09) AS SUBCODE09, TRIM(SUBCODE10) AS SUBCODE10, 
											TRIM(ITEMTYPEAFICODE) AS ITEMTYPEAFICODE,
											TRIM(DSUBCODE05) AS NO_WARNA,
											TRIM(DSUBCODE02) || '-' || TRIM(DSUBCODE03)  AS NO_HANGER,
											TRIM(ITEMDESCRIPTION) AS ITEMDESCRIPTION,
											DELIVERYDATE
										FROM 
											ITXVIEWKK 
										WHERE 
											DEAMAND = '$nodemand'");
	$dt_ITXVIEWKK	= db2_fetch_assoc($sql_ITXVIEWKK);

	$sql_pelanggan_buyer 	= db2_exec($conn1, "SELECT TRIM(LANGGANAN) AS PELANGGAN, TRIM(BUYER) AS BUYER FROM ITXVIEW_PELANGGAN 
												WHERE ORDPRNCUSTOMERSUPPLIERCODE = '$dt_ITXVIEWKK[ORDPRNCUSTOMERSUPPLIERCODE]' AND CODE = '$dt_ITXVIEWKK[PROJECTCODE]'");
	$dt_pelanggan_buyer		= db2_fetch_assoc($sql_pelanggan_buyer);

	$sql_po			= db2_exec($conn1, "SELECT TRIM(EXTERNALREFERENCE) AS NO_PO FROM ITXVIEW_KGBRUTO 
										WHERE PROJECTCODE = '$dt_ITXVIEWKK[PROJECTCODE]' AND ORIGDLVSALORDERLINEORDERLINE = '$dt_ITXVIEWKK[ORIGDLVSALORDERLINEORDERLINE]'");
	$dt_po    		= db2_fetch_assoc($sql_po);

	$sql_noitem     = db2_exec($conn1, "SELECT * FROM ORDERITEMORDERPARTNERLINK WHERE ORDPRNCUSTOMERSUPPLIERCODE = '$dt_ITXVIEWKK[ORDPRNCUSTOMERSUPPLIERCODE]' 
										AND SUBCODE01 = '$dt_ITXVIEWKK[SUBCODE01]' AND SUBCODE02 = '$dt_ITXVIEWKK[SUBCODE02]' 
										AND SUBCODE03 = '$dt_ITXVIEWKK[SUBCODE03]' AND SUBCODE04 = '$dt_ITXVIEWKK[SUBCODE04]' 
										AND SUBCODE05 = '$dt_ITXVIEWKK[SUBCODE05]' AND SUBCODE06 = '$dt_ITXVIEWKK[SUBCODE06]'
										AND SUBCODE07 = '$dt_ITXVIEWKK[SUBCODE07]' AND SUBCODE08 ='$dt_ITXVIEWKK[SUBCODE08]'
										AND SUBCODE09 = '$dt_ITXVIEWKK[SUBCODE09]' AND SUBCODE10 ='$dt_ITXVIEWKK[SUBCODE10]'");
	$dt_item        = db2_fetch_assoc($sql_noitem);

	$sql_lebargramasi	= db2_exec($conn1, "SELECT i.LEBAR,
												CASE
													WHEN i2.GRAMASI_KFF IS NULL THEN i2.GRAMASI_FKF
													ELSE i2.GRAMASI_KFF
												END AS GRAMASI 
												FROM 
													ITXVIEWLEBAR i 
												LEFT JOIN ITXVIEWGRAMASI i2 ON i2.SALESORDERCODE = '$dt_ITXVIEWKK[PROJECTCODE]' AND i2.ORDERLINE = '$dt_ITXVIEWKK[ORIGDLVSALORDERLINEORDERLINE]'
												WHERE 
													i.SALESORDERCODE = '$dt_ITXVIEWKK[PROJECTCODE]' AND i.ORDERLINE = '$dt_ITXVIEWKK[ORIGDLVSALORDERLINEORDERLINE]'");
	$dt_lg				= db2_fetch_assoc($sql_lebargramasi);

	$sql_warna		= db2_exec($conn1, "SELECT DISTINCT TRIM(WARNA) AS WARNA FROM ITXVIEWCOLOR 
									WHERE ITEMTYPECODE = '$dt_ITXVIEWKK[ITEMTYPEAFICODE]' 
									AND SUBCODE01 = '$dt_ITXVIEWKK[SUBCODE01]' 
									AND SUBCODE02 = '$dt_ITXVIEWKK[SUBCODE02]'
									AND SUBCODE03 = '$dt_ITXVIEWKK[SUBCODE03]' 
									AND SUBCODE04 = '$dt_ITXVIEWKK[SUBCODE04]'
									AND SUBCODE05 = '$dt_ITXVIEWKK[SUBCODE05]' 
									AND SUBCODE06 = '$dt_ITXVIEWKK[SUBCODE06]'
									AND SUBCODE07 = '$dt_ITXVIEWKK[SUBCODE07]' 
									AND SUBCODE08 = '$dt_ITXVIEWKK[SUBCODE08]'
									AND SUBCODE09 = '$dt_ITXVIEWKK[SUBCODE09]' 
									AND SUBCODE10 = '$dt_ITXVIEWKK[SUBCODE10]'");
	$dt_warna		= db2_fetch_assoc($sql_warna);

	$sql_qtyorder   = db2_exec($conn1, "SELECT DISTINCT
											INITIALUSERPRIMARYQUANTITY AS QTY_ORDER,
											USERSECONDARYQUANTITY AS QTY_ORDER_YARD,
											CASE
												WHEN TRIM(USERSECONDARYUOMCODE) = 'yd' THEN 'Yard'
												WHEN TRIM(USERSECONDARYUOMCODE) = 'm' THEN 'Meter'
												ELSE 'PCS'
											END AS SATUAN_QTY
										FROM 
											ITXVIEW_RESERVATION 
										WHERE 
											PRODUCTIONORDERCODE = '$dt_ITXVIEWKK[PRODUCTIONORDERCODE]' AND ITEMTYPEAFICODE = 'RFD'");
	$dt_qtyorder    = db2_fetch_assoc($sql_qtyorder);

	$sql_roll		= db2_exec($conn1, "SELECT count(*) AS ROLL, s2.PRODUCTIONORDERCODE
										FROM STOCKTRANSACTION s2 
										WHERE s2.ITEMTYPECODE ='KGF' AND s2.PRODUCTIONORDERCODE = '$dt_ITXVIEWKK[PRODUCTIONORDERCODE]'
										GROUP BY s2.PRODUCTIONORDERCODE");
	$dt_roll   		= db2_fetch_assoc($sql_roll);

	$sqlCek=mysqli_query($con,"SELECT * FROM tbl_schedule WHERE nokk='$nokk' ORDER BY id DESC LIMIT 1");
	$cek=mysqli_num_rows($sqlCek);
	$rcek=mysqli_fetch_array($sqlCek);
	$sqlCek1=mysqli_query($con,"SELECT * FROM tbl_schedule WHERE nokk='$nokk' AND not status='selesai' ORDER BY id DESC LIMIT 1");
	$cek1=mysqli_num_rows($sqlCek1);
?>
<?php
	$Kapasitas	= isset($_POST['kapasitas']) ? $_POST['kapasitas'] : '';
	$TglMasuk	= isset($_POST['tglmsk']) ? $_POST['tglmsk'] : '';
	$Item		= isset($_POST['item']) ? $_POST['item'] : '';
	$Warna		= isset($_POST['warna']) ? $_POST['warna'] : '';
	$Langganan	= isset($_POST['langganan']) ? $_POST['langganan'] : '';
?>
<?php
	// $sql_demand		= db2_exec($conn1, "SELECT LISTAGG(TRIM(DEAMAND), ', ') AS DEMAND,
	// 									LISTAGG(''''|| TRIM(ORIGDLVSALORDERLINEORDERLINE) ||'''', ', ')  AS ORIGDLVSALORDERLINEORDERLINE
	// 							FROM ITXVIEWKK 
	// 							WHERE PRODUCTIONORDERCODE = '$nokk'");
	// $dt_demand		= db2_fetch_assoc($sql_demand);

	// if (!empty($dt_demand['ORIGDLVSALORDERLINEORDERLINE'])) {
	// $orderline	= $dt_demand['ORIGDLVSALORDERLINEORDERLINE'];
	// } else {
	// $orderline	= '0';
	// }

	// $sql_mesinknt	= db2_exec($conn1, "SELECT 
	// 								s.LOTCODE,
	// 								a.VALUESTRING 
	// 							FROM STOCKTRANSACTION s 
	// 							LEFT JOIN PRODUCTIONDEMAND p ON p.CODE = s.LOTCODE 
	// 							LEFT JOIN ADSTORAGE a ON a.UNIQUEID = p.ABSUNIQUEID AND a.NAMENAME = 'MachineNo'
	// 							WHERE s.PRODUCTIONORDERCODE = '$nokk'");
	// $dt_mesinknt	= db2_fetch_assoc($sql_mesinknt);

	// $sql_bonresep1	= db2_exec($conn1, "SELECT
	// 								TRIM(PRODUCTIONRESERVATION.PRODUCTIONORDERCODE) AS PRODUCTIONORDERCODE,
	// 								TRIM(PRODUCTIONRESERVATION.PRODUCTIONORDERCODE) || '-' || TRIM(PRODUCTIONRESERVATION.GROUPLINE) AS BONRESEP1,
	// 								TRIM(SUFFIXCODE) AS SUFFIXCODE
	// 							FROM
	// 								PRODUCTIONRESERVATION PRODUCTIONRESERVATION 
	// 							WHERE
	// 								-- (PRODUCTIONRESERVATION.ITEMTYPEAFICODE = 'RFD' OR PRODUCTIONRESERVATION.ITEMTYPEAFICODE = 'RFF')
	// 								PRODUCTIONRESERVATION.ITEMTYPEAFICODE = 'RFD' AND PRODUCTIONRESERVATION.PRODUCTIONORDERCODE = '$nokk' 
	// 								AND NOT SUFFIXCODE = '001'
	// 							ORDER BY
	// 								PRODUCTIONRESERVATION.GROUPLINE ASC LIMIT 1");
	// $dt_bonresep1	= db2_fetch_assoc($sql_bonresep1);

	// $sql_bonresep2	= db2_exec($conn1, "SELECT
	// 								TRIM( PRODUCTIONRESERVATION.PRODUCTIONORDERCODE ) AS PRODUCTIONORDERCODE,
	// 								TRIM(PRODUCTIONRESERVATION.PRODUCTIONORDERCODE) || '-' || TRIM(PRODUCTIONRESERVATION.GROUPLINE) AS BONRESEP2,
	// 								TRIM(SUFFIXCODE) AS SUFFIXCODE
	// 							FROM
	// 								PRODUCTIONRESERVATION PRODUCTIONRESERVATION 
	// 							WHERE
	// 								-- (PRODUCTIONRESERVATION.ITEMTYPEAFICODE = 'RFD' OR PRODUCTIONRESERVATION.ITEMTYPEAFICODE = 'RFF')
	// 								PRODUCTIONRESERVATION.ITEMTYPEAFICODE = 'RFD' AND PRODUCTIONRESERVATION.PRODUCTIONORDERCODE = '$nokk' 
	// 								AND NOT SUFFIXCODE = '001'
	// 							ORDER BY
	// 								PRODUCTIONRESERVATION.GROUPLINE DESC LIMIT 1");
	// $dt_bonresep2	= db2_fetch_assoc($sql_bonresep2);
?>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" name="form1">
	<div class="box box-info">
		<div class="box-header with-border">
			<h3 class="box-title">Input Data Kartu Kerja Antrian</h3>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div>
		</div>
		<div class="box-body">
			<div class="col-md-6">

				<div class="form-group">
					<label for="nodemand" class="col-sm-3 control-label">No Demand</label>
					<div class="col-sm-4">
						<input name="nodemand" type="text" class="form-control" id="nodemand" onchange="window.location='FormSchedule-'+this.value" value="<?php echo $_GET['nodemand']; ?>" placeholder="No Demand" required>
					</div>
				</div>
				<div class="form-group">
					<label for="nokk" class="col-sm-3 control-label">No Production Order</label>
					<div class="col-sm-8">
						<input name="nokk" type="text" class="form-control" id="nokk" value="<?= $dt_ITXVIEWKK['PRODUCTIONORDERCODE']; ?>" placeholder="No Production Order">
					</div>
				</div>
				<div class="form-group">
					<label for="langganan" class="col-sm-3 control-label">Langganan</label>
					<div class="col-sm-8">
						<input name="langganan" type="text" class="form-control" id="langganan" value="<?= $dt_pelanggan_buyer['PELANGGAN']; ?>" placeholder="Langganan">
					</div>
				</div>
				<div class="form-group">
					<label for="buyer" class="col-sm-3 control-label">Buyer</label>
					<div class="col-sm-8">
						<input name="buyer" type="text" class="form-control" id="buyer" value="<?= $dt_pelanggan_buyer['BUYER']; ?>" placeholder="Buyer">
					</div>
				</div>
				<div class="form-group">
					<label for="no_order" class="col-sm-3 control-label">No Order</label>
					<div class="col-sm-4">
						<input name="no_order" type="text" class="form-control" id="no_order" value="<?= $dt_ITXVIEWKK['PROJECTCODE']; ?>" placeholder="No Order">
					</div>
				</div>
				<!--<div class="form-group">
                  <label for="no_po" class="col-sm-3 control-label">PO</label>
                  <div class="col-sm-5">-->
				<input name="no_po" type="hidden" class="form-control" id="no_po" value="<?= $dt_po['NO_PO']; ?>" placeholder="PO">
				<!-- </div>				   
                </div>-->
				<div class="form-group">
					<label for="no_hanger" class="col-sm-3 control-label">No Hanger</label>
					<div class="col-sm-3">
						<input name="no_hanger" type="text" class="form-control" id="no_hanger" value="<?= $dt_ITXVIEWKK['NO_HANGER'] ?>" placeholder="No Hanger">
					</div>
					<div class="col-sm-3">
						<input name="no_item" type="text" class="form-control" id="no_item" value="<?= $dt_item['EXTERNALITEMCODE'] ?>" placeholder="No Item">
					</div>
				</div>
				<div class="form-group">
					<label for="jns_kain" class="col-sm-3 control-label">Jenis Kain</label>
					<div class="col-sm-8">
						<textarea name="jns_kain" class="form-control" id="jns_kain" placeholder="Jenis Kain"><?= $dt_ITXVIEWKK['ITEMDESCRIPTION'] ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="tgl_delivery" class="col-sm-3 control-label">Tgl. Delivery</label>
					<div class="col-sm-4">
						<div class="input-group date">
							<div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
							<input name="tgl_delivery" type="text" class="form-control pull-right" id="datepicker2" placeholder="0000-00-00" value="<?= $dt_ITXVIEWKK['DELIVERYDATE']; ?>" required />
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="l_g" class="col-sm-3 control-label">Lebar X Gramasi</label>
					<div class="col-sm-2">
						<input name="lebar" type="text" class="form-control" id="lebar" value="<?= $dt_lg['LEBAR']; ?>" placeholder="0" required>
					</div>
					<div class="col-sm-2">
						<input name="grms" type="text" class="form-control" id="grms" value="<?= $dt_lg['GRAMASI']; ?>" placeholder="0" required>
					</div>
				</div>
				<div class="form-group">
					<label for="warna" class="col-sm-3 control-label">Warna</label>
					<div class="col-sm-8">
						<input name="warna" type="text" class="form-control" id="warna" value="<?= $dt_warna['WARNA']; ?>" placeholder="Warna">
					</div>
				</div>
				<div class="form-group">
					<label for="no_warna" class="col-sm-3 control-label">No Warna</label>
					<div class="col-sm-8">
						<input name="no_warna" type="text" class="form-control" id="no_warna" value="<?= $dt_ITXVIEWKK['NO_WARNA']; ?>" placeholder="No Warna">
					</div>
				</div>
				
			</div>
			<!-- col -->
			<div class="col-md-6">
				
				<div class="form-group">
					<label for="qty_order" class="col-sm-3 control-label">Qty Order</label>
					<div class="col-sm-3">
						<div class="input-group">
							<input name="qty1" type="text" class="form-control" id="qty1" value="<?= $dt_qtyorder['QTY_ORDER']; ?>" placeholder="0.00" required>
							<span class="input-group-addon">KGs</span>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="input-group">
							<input name="qty2" type="text" class="form-control" id="qty2" value="<?= $dt_qtyorder['QTY_ORDER_YARD']; ?>" placeholder="0.00" style="text-align: right;" required>
							<span class="input-group-addon">
								<select name="satuan1" style="font-size: 12px;" id="satuan1">
									<option value="">Pilih</option>
									<option value="Yard" <?php if ($dt_qtyorder['SATUAN_QTY'] == "Yard") {
																echo "SELECTED";
															} ?>>Yard</option>
									<option value="Meter" <?php if ($dt_qtyorder['SATUAN_QTY'] == "Meter") {
																echo "SELECTED";
															} ?>>Meter</option>
									<option value="PCS" <?php if ($dt_qtyorder['SATUAN_QTY'] == "PCS") {
															echo "SELECTED";
														} ?>>PCS</option>
								</select>
							</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="lot" class="col-sm-3 control-label">Lot</label>
					<div class="col-sm-4">
						<input name="lot" type="text" class="form-control" id="lot" value="<?php if ($cek > 0) {
																								echo $rcek['lot'];
																							} else {
																								echo $rowdb2['DEMANDNO'];
																							} ?>" placeholder="Lot">
					</div>
				</div>
				<div class="form-group">
					<label for="jml_bruto" class="col-sm-3 control-label">Roll &amp; Qty</label>
					<div class="col-sm-2">
						<input name="qty3" type="text" class="form-control" id="qty3" value="<?= $dt_roll['ROLL']; ?>" placeholder="0.00" required>
					</div>
					<div class="col-sm-3">
						<div class="input-group">
							<input name="qty4" type="text" class="form-control" id="qty4" value="<?php if ($cek > 0) {
																										echo $rcek['bruto'];
																									} else {
																										echo round($rowdb2['QTY_BAGI_KAIN'], 2);
																									} ?>" placeholder="0.00" style="text-align: right;" required>
							<span class="input-group-addon">KGs</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="no_urut" class="col-sm-3 control-label">No Urut</label>
					<div class="col-sm-2">
						<select name="no_urut" class="form-control select2" id="no_urut" required>
							<option value="">Pilih</option>
							<?php
							$sqlKap = mysqli_query($con, "SELECT no_urut FROM tbl_urut ORDER BY no_urut ASC");
							while ($rK = mysqli_fetch_array($sqlKap)) {
							?>
								<option value="<?php echo $rK['no_urut']; ?>"><?php echo $rK['no_urut']; ?></option>
							<?php } ?>
						</select>
					</div>

				</div>
				<div class="form-group">
					<label for="g_shift" class="col-sm-3 control-label">Group Shift</label>
					<div class="col-sm-2">
						<select name="g_shift" class="form-control select2" required>
							<option value="">Pilih</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
						</select>
					</div>

				</div>
				<div class="form-group">
					<label for="proses" class="col-sm-3 control-label">Proses</label>
					<div class="col-sm-5">
						<select name="proses" class="form-control" id="proses" onChange="cekpro(); cekpro1(); cekpro2(); aktif_staff();" required>
							<!-- <option value="">Pilih</option>
							<?php
								$sqlKap = mysqli_query($con, "SELECT proses FROM tbl_proses ORDER BY proses ASC");
								while ($rK = mysqli_fetch_array($sqlKap)) {
							?>
								<option value="<?php echo $rK['proses']; ?>"><?php echo $rK['proses']; ?></option>
							<?php } ?> -->
							<option value="">Pilih</option>
							<?php 
								$qry1 = mysqli_query($con, "SELECT proses,jns FROM tbl_proses ORDER BY id ASC");
								while ($r = mysqli_fetch_array($qry1)) {
							?>
								<option value="<?php echo $r['proses'] . " (" . $r['jns'] . ")"; ?>" <?php if ($rw['proses'] == $r['proses'] . " (" . $r['jns'] . ")") {
																								echo "SELECTED";
																							} ?>><?php echo $r['proses'] . " (" . $r['jns'] . ")"; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="catatan" class="col-sm-3 control-label">Catatan</label>
					<div class="col-sm-8">
						<textarea name="catatan" class="form-control" id="catatan" placeholder="catatan..."></textarea>
					</div>

				</div>
			</div>

			<input type="hidden" value="<?php if ($cek > 0) {
											echo $rcek['no_ko'];
										} else {
											echo $rKO['KONo'];
										} ?>" name="no_ko">

		</div>
		<div class="box-footer">
			<button type="button" class="btn btn-default pull-left" name="back" value="kembali" onClick="window.location='AntrianKartuKerja'">Kembali <i class="fa fa-arrow-circle-o-left"></i></button>

			<button type="submit" class="btn btn-primary pull-right" name="save1" value="save">Simpan <i class="fa fa-save"></i></button>
		</div>
		<!-- /.box-footer -->
	</div>
</form>




<?php
if ($_POST['save'] == "save") {
	$qryCek = mysqli_query($con, "SELECT * from tbl_schedule WHERE `status`='sedang jalan' and  no_mesin='$_POST[no_mc]'");
	$row = mysqli_num_rows($qryCek);
	// $qryCekN = mysqli_query($con, "SELECT * from tbl_schedule WHERE nodemand='$_POST[nodemand]' and  no_mesin='$_POST[no_mc]' and proses='" . $_POST['proses'] . "' and DATE_FORMAT(tgl_update,'%Y-%m-%d')=DATE_FORMAT( now( ), '%Y-%m-%d' ) and `status`='selesai' and g_shift='$_POST[g_shift]'");
	$qryCekN = mysqli_query($con, "SELECT * from tbl_schedule WHERE nodemand='$_POST[nodemand]' and  no_mesin='$_POST[no_mc]' and proses='" . $_POST['proses'] . "' and DATE_FORMAT(tgl_update,'%Y-%m-%d')=DATE_FORMAT( now( ), '%Y-%m-%d' ) and `status`='selesai'");
	$rowN = mysqli_num_rows($qryCekN);
	// $qryCekN1 = mysqli_query($con, "SELECT * from tbl_schedule WHERE no_urut='$_POST[no_urut]' and  no_mesin='$_POST[no_mc]' and proses='" . $_POST['proses'] . "' and DATE_FORMAT(tgl_update,'%Y-%m-%d')=DATE_FORMAT( now( ), '%Y-%m-%d' ) and `status`='selesai' and g_shift='$_POST[g_shift]'");
	$qryCekN1 = mysqli_query($con, "SELECT * from tbl_schedule WHERE no_urut='$_POST[no_urut]' and  no_mesin='$_POST[no_mc]' and proses='" . $_POST['proses'] . "' and DATE_FORMAT(tgl_update,'%Y-%m-%d')=DATE_FORMAT( now( ), '%Y-%m-%d' ) and `status`='selesai'");
	$rowN1 = mysqli_num_rows($qryCekN1);
	// $qryCekN2 = mysqli_query($con, "SELECT * from tbl_schedule WHERE nodemand='" . $_POST['nodemand'] . "' and  proses='" . $_POST['proses'] . "' and tampil='1' and `status`='selesai' and g_shift='$_POST[g_shift]'");
	// $qryCekN2 = mysqli_query($con, "SELECT * from tbl_schedule WHERE nodemand='" . $_POST['nodemand'] . "' and  proses='" . $_POST['proses'] . "' and tampil='1' and `status`='selesai'");
	$qryCekN2 = mysqli_query($con, "SELECT * from tbl_schedule WHERE nodemand='" . $_POST['nodemand'] . "' and  proses='" . $_POST['proses'] . "' and `status`='selesai'");
	$rowN2 = mysqli_num_rows($qryCekN2);
	if ($row > 0 and $_POST['no_urut'] == "1") {
		echo "<script> swal({
            title: 'Tidak bisa input urutan ke-`1`, mesin masih jalan',
            text: ' Klik OK untuk Input No Urut kembali',
            type: 'warning'
        }, function(){
            window.location='';
        });</script>";
	} else if ($rowN > 0) {
		echo "<script> swal({
            title: 'Tidak bisa input, NoKK sudah di mesin ini dengan proses sama',
            text: ' Klik OK untuk Input No Urut kembali',
            type: 'warning'
        }, function(){
            window.location='';
        });</script>";
	} //else if ($rowN > 0) {
		//echo "<script> swal({
        //    title: 'Tidak bisa input, NoKK sudah di mesin ini dengan proses sama',
        //    text: ' Klik OK untuk Input No Urut kembali',
        //    type: 'warning'
        //}, function(){
        //    window.location='';
        //});</script>";
	//} else if ($rowN2 > 0) {
	//	echo "<script> swal({
    //        title: 'Tidak bisa simpan, NoKK sudah ada',
    //        text: ' Klik OK untuk Input No Urut kembali',
    //        type: 'warning'
    //    }, function(){
     //       window.location='';
     //   });</script>";
	//} 
		else {
		if ($_POST['nokk'] != "") {
			$kartu = $_POST['nokk'];
		} else {
			$kartu = $nou;
		}
		$warna = str_replace("'", "''", $_POST['warna']);
		$nowarna = str_replace("'", "''", $_POST['no_warna']);
		$jns = str_replace("'", "''", $_POST['jns_kain']);
		$po = str_replace("'", "''", $_POST['no_po']);
		$catatan = str_replace("'", "''", $_POST['catatan']);
		$lot = trim($_POST['lot']);
		$nomesin = str_replace("'", "''", $_POST['no_mc']);
		$sqlData = mysqli_query($con, "INSERT INTO tbl_schedule SET
			nokk='$kartu',
			nodemand='$_POST[nodemand]',
			langganan='$_POST[langganan]',
			buyer='$_POST[buyer]',
			no_order='$_POST[no_order]',
			po='$po',
			no_hanger='$_POST[no_hanger]',
			no_item='$_POST[no_item]',
			jenis_kain='$jns',
			tgl_delivery='$_POST[tgl_delivery]',
			lebar='$_POST[lebar]',
			gramasi='$_POST[grms]',
			warna='$warna',
			no_warna='$nowarna',
			qty_order='$_POST[qty1]',
			pjng_order='$_POST[qty2]',
			satuan_order='$_POST[satuan1]',
			lot='$lot',
			rol='$_POST[qty3]',
			bruto='$_POST[qty4]',
			shift='$_POST[shift]',
			g_shift='$_POST[g_shift]',
			no_mesin='$nomesin',
			no_urut='$_POST[no_urut]',
			proses='$_POST[proses]',
			tgl_masuk=now(),
			personil='$_POST[personil]',
			catatan='$catatan',
			tgl_update=now(),
			sts_mc='1',
			tampil='1'");

		if ($sqlData) {
			// echo "<script>alert('Data Tersimpan');</script>";
			// echo "<script>window.location.href='?p=Input-Data-KJ;</script>";
			echo "<script>swal({
  title: 'Data Tersimpan',   
  text: 'Klik Ok untuk input data kembali',
  type: 'success',
  }).then((result) => {
  if (result.value) {
    
	 window.location.href='Schedule'; 
  }
});</script>";
		}
	}
}
if ($_POST['update'] == "update") {
	$warna = str_replace("'", "''", $_POST['warna']);
	$nowarna = str_replace("'", "''", $_POST['no_warna']);
	$jns = str_replace("'", "''", $_POST['jns_kain']);
	$po = str_replace("'", "''", $_POST['no_po']);
	$catatan = str_replace("'", "''", $_POST['catatan']);
	$lot = trim($_POST['lot']);
	$sqlData = mysqli_query($con, "UPDATE tbl_schedule SET 
		  no_mesin='$_POST[no_mc]',
		  no_urut='$_POST[no_urut]',
		  no_sch='$_POST[no_urut]',
		  proses='$_POST[proses]',
		  revisi='$_POST[revisi]',
		  shift='$_POST[shift]',
		  g_shift='$_POST[g_shift]',
		  ket_status='$_POST[ket]',
		  personil='$_POST[personil]',
		  target='$_POST[target]',
		  catatan='$catatan',
		  tgl_stop=now(),
		  tgl_update=now()
		  WHERE nokk='$_POST[nokk]'", $con);

	if ($sqlData) {
		// echo "<script>alert('Data Telah Diubah');</script>";
		// echo "<script>window.location.href='?p=Input-Data-KJ;</script>";
		echo "<script>swal({
  title: 'Data Telah DiUbah',   
  text: 'Klik Ok untuk input data kembali',
  type: 'success',
  }).then((result) => {
  if (result.value) {
    
	 window.location.href='Schedule'; 
  }
});</script>";
	}
}
?>