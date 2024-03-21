<?php
    if ($_POST['save'] == "save") {
        $nokk           = $_POST['nokk'];
        $nodemand       = $_POST['nodemand'];
        $langganan      = $_POST['langganan'];
        $buyer          = $_POST['buyer'];
        $no_order       = $_POST['no_order'];
        $no_hanger      = $_POST['no_hanger'];
        $no_item        = $_POST['no_item'];
        $jns_kain       = $_POST['jns_kain'];
        $tgl_delivery   = $_POST['tgl_delivery'];
        $lebar          = $_POST['lebar'];
        $grms           = $_POST['grms'];
        $warna          = $_POST['warna'];
        $no_warna       = $_POST['no_warna'];
        $qty1           = $_POST['qty1'];
        $qty2           = $_POST['qty2'];
        $satuan1        = $_POST['satuan1'];
        $lot            = $_POST['lot'];
        $roll           = $_POST['roll'];
        $qty            = $_POST['qty'];
        $proses         = $_POST['proses'];
        $personil       = $_POST['personil'];
        $catatan        = $_POST['catatan'];
        $tglnow         = date('Y-m-d H:i:s');

        $insert     = mysqli_query($con, "INSERT INTO tbl_masuk (nokk,
                                                                nodemand,
                                                                langganan,
                                                                buyer,
                                                                no_order,
                                                                no_hanger,
                                                                no_item,
                                                                jenis_kain,
                                                                tgl_delivery,
                                                                lebar,
                                                                gramasi,
                                                                warna,
                                                                no_warna,
                                                                qty_order,
                                                                qty_order_yd,
                                                                satuan,
                                                                lot,
                                                                roll,
                                                                qty,
                                                                proses,
                                                                personil,
                                                                catatan,
                                                                `status`,
                                                                creationdatetime,
                                                                ipaddress)
                                                        VALUES('$nokk',
                                                                '$nodemand',
                                                                '$langganan',
                                                                '$buyer',
                                                                '$no_order',
                                                                '$no_hanger',
                                                                '$no_item',
                                                                '$jns_kain',
                                                                '$tgl_delivery',
                                                                '$lebar',
                                                                '$grms',
                                                                '$warna',
                                                                '$no_warna',
                                                                '$qty1',
                                                                '$qty2',
                                                                '$satuan1',
                                                                '$lot',
                                                                '$roll',
                                                                '$qty',
                                                                '$proses',
                                                                '$personil',
                                                                '$catatan',
                                                                'KK MASUK',
                                                                '$tglnow',
                                                                '$_SERVER[REMOTE_ADDR]')");
        if ($insert) {
            echo "<script>swal({
                title: 'Data Tersimpan',   
                text: 'Klik Ok untuk input data kembali',
                type: 'success',
                }).then((result) => {
                if (result.value) {
                    window.location.href='Masuk'; 
                }
                });</script>";
        }
    }
?>
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
    if(isset($_GET['nodemand'])){
        ini_set("error_reporting", 1);
        session_start();
        include("koneksi.php");
        function nourut()
        {
            include("koneksi.php");
            $format = date("ymd");
            $sql    = mysqli_query($con, "SELECT nokk FROM tbl_schedule WHERE substr(nokk,1,6) like '%" . $format . "%' ORDER BY nokk DESC LIMIT 1 ") or die(mysqli_error());
            $d        = mysqli_num_rows($sql);
            if ($d > 0) {
                $r = mysqli_fetch_array($sql);
                $d = $r['nokk'];
                $str = substr($d, 6, 2);
                $Urut = (int)$str;
            } else {
                $Urut = 0;
            }
            $Urut = $Urut + 1;
            $Nol = "";
            $nilai = 2 - strlen($Urut);
            for ($i = 1; $i <= $nilai; $i++) {
                $Nol = $Nol . "0";
            }
            $nipbr = $format . $Nol . $Urut;
            return $nipbr;
        }
        $nou    = nourut();
        $nodemand   = $_GET['nodemand'];
        
        $select     = mysqli_query($con, "SELECT * FROM tbl_masuk WHERE nodemand = '$nodemand'");
        $row_select = mysqli_fetch_assoc($select);
        
        if($row_select){
            echo "<script>swal({
                title: 'Tidak bisa input, schedule belum selesai.',
                        text: ' Klik OK untuk Input No Urut kembali',
                type: 'warning',
                }).then((result) => {
                if (result.value) {
                    window.location.href='FormMasuk'; 
                }
                });</script>";
        }else{
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
                                                    DELIVERYDATE,
                                                    LOT
                                                FROM 
                                                    ITXVIEWKK 
                                                WHERE 
                                                    DEAMAND = '$nodemand'");
            $dt_ITXVIEWKK    = db2_fetch_assoc($sql_ITXVIEWKK);

            $sql_pelanggan_buyer     = db2_exec($conn1, "SELECT TRIM(LANGGANAN) AS PELANGGAN, TRIM(BUYER) AS BUYER FROM ITXVIEW_PELANGGAN 
                        WHERE ORDPRNCUSTOMERSUPPLIERCODE = '$dt_ITXVIEWKK[ORDPRNCUSTOMERSUPPLIERCODE]' AND CODE = '$dt_ITXVIEWKK[PROJECTCODE]'");
            $dt_pelanggan_buyer        = db2_fetch_assoc($sql_pelanggan_buyer);

            $sql_po            = db2_exec($conn1, "SELECT TRIM(EXTERNALREFERENCE) AS NO_PO FROM ITXVIEW_KGBRUTO 
                WHERE PROJECTCODE = '$dt_ITXVIEWKK[PROJECTCODE]' AND ORIGDLVSALORDERLINEORDERLINE = '$dt_ITXVIEWKK[ORIGDLVSALORDERLINEORDERLINE]'");
            $dt_po            = db2_fetch_assoc($sql_po);

            $sql_noitem     = db2_exec($conn1, "SELECT * FROM ORDERITEMORDERPARTNERLINK WHERE ORDPRNCUSTOMERSUPPLIERCODE = '$dt_ITXVIEWKK[ORDPRNCUSTOMERSUPPLIERCODE]' 
                AND SUBCODE01 = '$dt_ITXVIEWKK[SUBCODE01]' AND SUBCODE02 = '$dt_ITXVIEWKK[SUBCODE02]' 
                AND SUBCODE03 = '$dt_ITXVIEWKK[SUBCODE03]' AND SUBCODE04 = '$dt_ITXVIEWKK[SUBCODE04]' 
                AND SUBCODE05 = '$dt_ITXVIEWKK[SUBCODE05]' AND SUBCODE06 = '$dt_ITXVIEWKK[SUBCODE06]'
                AND SUBCODE07 = '$dt_ITXVIEWKK[SUBCODE07]' AND SUBCODE08 ='$dt_ITXVIEWKK[SUBCODE08]'
                AND SUBCODE09 = '$dt_ITXVIEWKK[SUBCODE09]' AND SUBCODE10 ='$dt_ITXVIEWKK[SUBCODE10]'");
            $dt_item        = db2_fetch_assoc($sql_noitem);

            $sql_lebargramasi    = db2_exec($conn1, "SELECT i.LEBAR,
                        CASE
                            WHEN i2.GRAMASI_KFF IS NULL THEN i2.GRAMASI_FKF
                            ELSE i2.GRAMASI_KFF
                        END AS GRAMASI 
                        FROM 
                            ITXVIEWLEBAR i 
                        LEFT JOIN ITXVIEWGRAMASI i2 ON i2.SALESORDERCODE = '$dt_ITXVIEWKK[PROJECTCODE]' AND i2.ORDERLINE = '$dt_ITXVIEWKK[ORIGDLVSALORDERLINEORDERLINE]'
                        WHERE 
                            i.SALESORDERCODE = '$dt_ITXVIEWKK[PROJECTCODE]' AND i.ORDERLINE = '$dt_ITXVIEWKK[ORIGDLVSALORDERLINEORDERLINE]'");
            $dt_lg                = db2_fetch_assoc($sql_lebargramasi);

            $sql_warna        = db2_exec($conn1, "SELECT DISTINCT TRIM(WARNA) AS WARNA FROM ITXVIEWCOLOR 
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
            $dt_warna        = db2_fetch_assoc($sql_warna);

            $sql_qtyorder   = db2_exec($conn1, "SELECT DISTINCT
                                                        GROUPSTEPNUMBER,
                                                        INITIALUSERPRIMARYQUANTITY AS QTY_ORDER,
                                                        INITIALUSERSECONDARYQUANTITY AS QTY_ORDER_YARD
                                                    FROM 
                                                        VIEWPRODUCTIONDEMANDSTEP 
                                                    WHERE 
                                                        PRODUCTIONORDERCODE = '$dt_ITXVIEWKK[PRODUCTIONORDERCODE]'
                                                    ORDER BY
                                                        GROUPSTEPNUMBER ASC LIMIT 1");
            $dt_qtyorder    = db2_fetch_assoc($sql_qtyorder);

            $sql_roll        = db2_exec($conn1, "SELECT count(*) AS ROLL, s2.PRODUCTIONORDERCODE
                                                    FROM STOCKTRANSACTION s2 
                                                    WHERE s2.ITEMTYPECODE ='KGF' AND s2.PRODUCTIONORDERCODE = '$dt_ITXVIEWKK[PRODUCTIONORDERCODE]'
                                                    GROUP BY s2.PRODUCTIONORDERCODE");
            $dt_roll           = db2_fetch_assoc($sql_roll);

            $sqlCek = mysqli_query($con, "SELECT * FROM tbl_schedule WHERE nokk='$nokk' ORDER BY id DESC LIMIT 1");
            $cek = mysqli_num_rows($sqlCek);
            $rcek = mysqli_fetch_array($sqlCek);
            $sqlCek1 = mysqli_query($con, "SELECT * FROM tbl_schedule WHERE nokk='$nokk' AND not status='selesai' ORDER BY id DESC LIMIT 1");
            $cek1 = mysqli_num_rows($sqlCek1);
        }
    }
?>
<?php
    $Kapasitas    = isset($_POST['kapasitas']) ? $_POST['kapasitas'] : '';
    $TglMasuk    = isset($_POST['tglmsk']) ? $_POST['tglmsk'] : '';
    $Item        = isset($_POST['item']) ? $_POST['item'] : '';
    $Warna        = isset($_POST['warna']) ? $_POST['warna'] : '';
    $Langganan    = isset($_POST['langganan']) ? $_POST['langganan'] : '';
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
            <h3 class="box-title">Input Data Kartu Kerja</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nodemand" class="col-sm-3 control-label">No Demand</label>
                    <div class="col-sm-4">
                        <input name="nodemand" type="text" class="form-control" onchange="window.location='FormMasuk-'+this.value" value="<?php echo $_GET['nodemand']; ?>" placeholder="No Demand" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nokk" class="col-sm-3 control-label">No Production Order</label>
                    <div class="col-sm-8">
                        <input name="nokk" type="text" class="form-control" value="<?= $dt_ITXVIEWKK['PRODUCTIONORDERCODE']; ?>" placeholder="No Production Order">
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
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="no_warna" class="col-sm-3 control-label">No Warna</label>
                    <div class="col-sm-8">
                        <input name="no_warna" type="text" class="form-control" id="no_warna" value="<?= $dt_ITXVIEWKK['NO_WARNA']; ?>" placeholder="No Warna">
                    </div>
                </div>
                <div class="form-group">
                    <label for="qty_order" class="col-sm-3 control-label">Qty Order</label>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input name="qty1" type="text" class="form-control" value="<?= $dt_qtyorder['QTY_ORDER']; ?>" placeholder="0.00" required>
                            <span class="input-group-addon">KGs</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <input name="qty2" type="text" class="form-control" value="<?= $dt_qtyorder['QTY_ORDER_YARD']; ?>" placeholder="0.00" style="text-align: right;" required>
                            <span class="input-group-addon">
								<select name="satuan1" style="font-size: 12px;" id="satuan1">
									<option value="">Pilih</option>
									<option value="Yard" SELECTED>Yard</option>
								</select>
							</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lot" class="col-sm-3 control-label">Lot</label>
                    <div class="col-sm-4">
                        <input name="lot" type="text" class="form-control" id="lot" value="<?= $dt_ITXVIEWKK['LOT']; ?>" placeholder="Lot">
                    </div>
                </div>
                <div class="form-group">
                    <label for="jml_bruto" class="col-sm-3 control-label">Roll &amp; Qty</label>
                    <div class="col-sm-2">
                        <input name="roll" type="text" class="form-control" value="<?= $dt_roll['ROLL']; ?>" placeholder="0.00" required>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input name="qty" type="text" class="form-control" value="<?= $dt_qtyorder['QTY_ORDER']; ?>" placeholder="0.00" style="text-align: right;" required>
                            <span class="input-group-addon">KGs</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
					<label for="no_mc" class="col-sm-3 control-label">No MC </label>
					<div class="col-sm-3">
						<select name="no_mc" class="form-control select2" id="no_mc" required>
							<option value="">Pilih</option>
								<option value="<?= $row_nomesin['']; ?>"><?= $row_nomesin['']; ?></option>
						</select>
					</div>

				</div>
                <div class="form-group">
                    <label for="proses" class="col-sm-3 control-label">Proses</label>
                    <div class="col-sm-5">
                        <select name="proses" class="form-control" onchange="window.location='FormMasuk-'+<?= $_GET['nodemand']; ?>'&operation='+this.value" required>
                            <option value="">Pilih</option>
                            <?php
                                $q_step = db2_exec($conn1, "SELECT
                                                                COALESCE(TRIM(p.PRODRESERVATIONLINKGROUPCODE), TRIM(p.OPERATIONCODE)) AS OPERATIONCODE,
                                                                TRIM(o.OPERATIONGROUPCODE) AS DEPT,
                                                                o.LONGDESCRIPTION
                                                            FROM 
                                                                PRODUCTIONDEMANDSTEP p 
                                                            LEFT JOIN OPERATION o ON o.CODE = p.OPERATIONCODE 
                                                            WHERE
                                                                p.PRODUCTIONORDERCODE  = '$dt_ITXVIEWKK[PRODUCTIONORDERCODE]' 
                                                                AND p.PRODUCTIONDEMANDCODE = '$_GET[nodemand]'
                                                                AND o.OPERATIONGROUPCODE = 'FIN'
                                                            GROUP BY
                                                                p.PRODUCTIONORDERCODE,
                                                                p.STEPNUMBER,
                                                                p.OPERATIONCODE,
                                                                p.PRODRESERVATIONLINKGROUPCODE,
                                                                o.OPERATIONGROUPCODE,
                                                                o.LONGDESCRIPTION,
                                                                p.PROGRESSSTATUS,
                                                                p.PRODUCTIONORDERCODE,
                                                                p.PRODUCTIONDEMANDCODE
                                                            ORDER BY 
                                                                p.STEPNUMBER 
                                                            ASC");
                            ?>
                            <?php while ($row_step = db2_fetch_assoc($q_step)) : ?>
                                <option value="<?= $row_step['OPERATIONCODE']; ?>"><?= $row_step['OPERATIONCODE']; ?> - <?= $row_step['LONGDESCRIPTION']; ?></option>
                            <?php endwhile; ?>
                            <?php  ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="personil" class="col-sm-3 control-label">Personil</label>
                    <div class="col-sm-5">
                        <input name="personil" type="text" class="form-control" id="personil" value="<?php echo $_SESSION['nama1Fin']; ?>" placeholder="personil" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="catatan" class="col-sm-3 control-label">Catatan</label>
                    <div class="col-sm-8">
                        <textarea name="catatan" class="form-control" id="catatan" placeholder="catatan..."></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="button" class="btn btn-default pull-left" name="back" value="kembali" onClick="window.location='Schedule'">Kembali <i class="fa fa-arrow-circle-o-left"></i></button>
            <button type="submit" class="btn btn-primary pull-right" name="save" value="save">Simpan <i class="fa fa-save"></i></button>
        </div>
    </div>
</form>