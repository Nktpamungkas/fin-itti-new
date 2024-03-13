<script>
function roundToTwo(num) {    
    return +(Math.round(num + "e+2")  + "e-2");
}	

function aktif_staff(){
	if(document.forms['form1']['personil'].value == "bayu" || document.forms['form1']['personil'].value == "putri" ){
		document.form1.acc_staff.removeAttribute("disabled");
		document.form1.acc_staff.setAttribute("required",true);
	}else{
		document.form1.acc_staff.setAttribute("disabled",true);
		document.form1.acc_staff.removeAttribute("required");
		}
}
function aktif(){
		if(document.forms['form1']['manual'].checked == true){
		document.form1.nokk.setAttribute("readonly",true);
		document.form1.nokk.removeAttribute("required");		
		document.form1.nokk.value="";	
		document.form1.datepicker2.setAttribute("readonly",true);
		document.form1.datepicker2.removeAttribute("required");
		document.form1.datepicker2.value="";	
		document.form1.langganan.setAttribute("readonly",true);
		document.form1.langganan.removeAttribute("required");
		document.form1.langganan.value="";	
		document.form1.buyer.setAttribute("readonly",true);
		document.form1.buyer.removeAttribute("required");
		document.form1.buyer.value="";	
		document.form1.no_order.setAttribute("readonly",true);
		document.form1.no_order.removeAttribute("required");
		document.form1.no_order.value="";	
		document.form1.no_po.setAttribute("readonly",true);
		document.form1.no_po.removeAttribute("required");
		document.form1.no_po.value="";	
		document.form1.no_hanger.setAttribute("readonly",true);
		document.form1.no_hanger.removeAttribute("required");
		document.form1.no_hanger.value="";	
		document.form1.no_item.setAttribute("readonly",true);
		document.form1.no_item.removeAttribute("required");
		document.form1.no_item.value="";	
		document.form1.jns_kain.setAttribute("readonly",true);
		document.form1.jns_kain.removeAttribute("required");
		document.form1.jns_kain.value="";	
		document.form1.lebar.setAttribute("readonly",true);
		document.form1.lebar.removeAttribute("required");
		document.form1.lebar.value="";	
		document.form1.grms.setAttribute("readonly",true);
		document.form1.grms.removeAttribute("required");
		document.form1.grms.value="";	
		document.form1.warna.setAttribute("readonly",true);
		document.form1.warna.removeAttribute("required");
		document.form1.warna.value="";	
		document.form1.no_warna.setAttribute("readonly",true);
		document.form1.no_warna.removeAttribute("required");
		document.form1.no_warna.value="";	
		document.form1.qty1.setAttribute("readonly",true);
		document.form1.qty1.removeAttribute("required");
		document.form1.qty1.value="";	
		document.form1.qty2.setAttribute("readonly",true);
		document.form1.qty2.removeAttribute("required");
		document.form1.qty2.value="";	
		document.form1.satuan1.setAttribute("disabled",true);
		document.form1.satuan1.removeAttribute("required");
		document.form1.satuan1.value="";	
		document.form1.lot.setAttribute("readonly",true);
		document.form1.lot.removeAttribute("required");
		document.form1.lot.value="";	
		document.form1.qty3.setAttribute("readonly",true);
		document.form1.qty3.removeAttribute("required");
		document.form1.qty3.value="";	
		document.form1.qty4.setAttribute("readonly",true);
		document.form1.qty4.removeAttribute("required");
		document.form1.qty4.value="";	
		document.form1.loading.setAttribute("readonly",true);
		document.form1.loading.removeAttribute("required");
		document.form1.loading.value="";	
		document.form1.no_rajut.setAttribute("readonly",true);
		document.form1.no_rajut.removeAttribute("required");
		document.form1.no_rajut.value="";	
		document.form1.kategori_warna.setAttribute("disabled",true);
		document.form1.kategori_warna.removeAttribute("required");
		document.form1.kategori_warna.value="";	
		document.form1.no_resep.setAttribute("readonly",true);
		document.form1.no_resep.removeAttribute("required");
		document.form1.no_resep.value="";
		document.form1.resep.setAttribute("disabled",true);
		document.form1.resep.removeAttribute("required");
		document.form1.resep.value="";	
		}
		else{
		document.form1.nokk.removeAttribute("readonly");
		document.form1.nokk.setAttribute("required",true);	
		document.form1.datepicker2.removeAttribute("readonly");
		document.form1.datepicker2.setAttribute("required",true);	
		document.form1.langganan.removeAttribute("readonly");
		document.form1.langganan.setAttribute("required",false);	
		document.form1.buyer.removeAttribute("readonly");
		document.form1.buyer.setAttribute("required",false);
		document.form1.no_order.removeAttribute("readonly");
		document.form1.no_order.setAttribute("required",false);	
		document.form1.no_po.removeAttribute("readonly");
		document.form1.no_po.setAttribute("required",false);
		document.form1.no_hanger.removeAttribute("readonly");
		document.form1.no_hanger.setAttribute("required",false);
		document.form1.no_item.removeAttribute("readonly");
		document.form1.no_item.setAttribute("required",false);
		document.form1.jns_kain.removeAttribute("readonly");
		document.form1.jns_kain.setAttribute("required",false);
		document.form1.lebar.removeAttribute("readonly");
		document.form1.lebar.setAttribute("required",true);	
		document.form1.grms.removeAttribute("readonly");
		document.form1.grms.setAttribute("required",true);
		document.form1.warna.removeAttribute("readonly");
		document.form1.warna.setAttribute("required",false);
		document.form1.no_warna.removeAttribute("readonly");
		document.form1.no_warna.setAttribute("required",false);
		document.form1.qty1.removeAttribute("readonly");
		document.form1.qty1.setAttribute("required",true);
		document.form1.qty2.removeAttribute("readonly");
		document.form1.qty2.setAttribute("required",true);
		document.form1.satuan1.removeAttribute("disabled");
		document.form1.satuan1.setAttribute("required",true);	
		document.form1.lot.removeAttribute("readonly");
		document.form1.lot.setAttribute("required",true);	
		document.form1.qty3.removeAttribute("readonly");
		document.form1.qty3.setAttribute("required",true);
		document.form1.qty4.removeAttribute("readonly");
		document.form1.qty4.setAttribute("required",true);
		document.form1.loading.removeAttribute("readonly");
		document.form1.loading.setAttribute("required",true);
		document.form1.no_rajut.removeAttribute("readonly");
		document.form1.no_rajut.setAttribute("required",false);
		document.form1.kategori_warna.removeAttribute("disable");
		document.form1.kategori_warna.setAttribute("required",false);
		document.form1.no_resep.removeAttribute("readonly");
		document.form1.no_resep.setAttribute("required",false);
		document.form1.resep.removeAttribute("disabled");
		document.form1.resep.setAttribute("required",false);	
		}
	}	
function angka(e) {
   if (!/^[0-9 .]+$/.test(e.value)) {
      e.value = e.value.substring(0,e.value.length-1);
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
$sql=mysqli_query($con,"SELECT nokk FROM tbl_schedule WHERE substr(nokk,1,6) like '%".$format."%' ORDER BY nokk DESC LIMIT 1 ") or die (mysqli_error());
$d=mysqli_num_rows($sql);
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
$nipbr =$format.$Nol.$Urut;
return $nipbr;
}
$nou=nourut();
$nodemand=$_GET['nodemand'];
$operation=$_GET['operation'];
$sqlDB2="SELECT A.CODE AS DEMANDNO, TRIM(B.PRODUCTIONORDERCODE) AS PRODUCTIONORDERCODE, TRIM(E.LEGALNAME1) AS LEGALNAME1, TRIM(C.ORDERPARTNERBRANDCODE) AS ORDERPARTNERBRANDCODE, TRIM(C.BUYER) AS BUYER,
TRIM(C.SALESORDERCODE) AS SALESORDERCODE, TRIM(C.ITEMDESCRIPTION) AS ITEMDESCRIPTION, TRIM(C.STATISTICALGROUPCODE) AS SEASON, TRIM(A.SUBCODE05) AS NO_WARNA, TRIM(F.WARNA) AS WARNA, 
TRIM(A.SUBCODE02) AS SUBCODE02, TRIM(A.SUBCODE03) AS SUBCODE03, TRIM(C.LONGDESCRIPTION) AS NO_ITEM,TRIM(C.PO_NUMBER) AS PO_NUMBER, TRIM(C.INTERNALREFERENCE) AS INTERNALREFERENCE, A.BASEPRIMARYQUANTITY AS QTY_NETTO, TRIM(A.BASEPRIMARYUOMCODE) AS BASEPRIMARYUOMCODE,
A.BASESECONDARYQUANTITY AS QTY_NETTO_YARD, TRIM(A.BASESECONDARYUOMCODE) AS BASESECONDARYUOMCODE, C.QTY_ORDER, TRIM(C.QTY_ORDER_UOM) AS QTY_ORDER_UOM, C.QTY_PANJANG_ORDER,
TRIM(C.QTY_PANJANG_ORDER_UOM) AS QTY_PANJANG_ORDER_UOM, G.USEDBASEPRIMARYQUANTITY AS QTY_BAGI_KAIN,I.JML_ROLL_GREIGE, C.DELIVERYDATE,D.NAMENAME,D.VALUEDECIMAL, H.TOTAL_ROLL AS TOTAL_ROLL_PACKING, H.TOTAL_KG AS TOTAL_KG_PACKING, H.TOTAL_YARD AS TOTAL_YARD_PACKING FROM PRODUCTIONDEMAND A 
LEFT JOIN 
	(SELECT PRODUCTIONDEMANDSTEP.PRODUCTIONORDERCODE, PRODUCTIONDEMANDSTEP.PRODUCTIONDEMANDCODE FROM 
	PRODUCTIONDEMANDSTEP PRODUCTIONDEMANDSTEP
	GROUP BY PRODUCTIONDEMANDSTEP.PRODUCTIONORDERCODE,PRODUCTIONDEMANDSTEP.PRODUCTIONDEMANDCODE) B
ON A.CODE=B.PRODUCTIONDEMANDCODE
LEFT JOIN 
	(SELECT SALESORDER.ORDERPARTNERBRANDCODE, SALESORDER.STATISTICALGROUPCODE, SALESORDERLINE.SALESORDERCODE, SALESORDERLINE.ORDERLINE, SALESORDERLINE.ITEMDESCRIPTION, SALESORDERLINE.SUBCODE03, SALESORDERLINE.SUBCODE05, SALESORDERLINE.BASEPRIMARYUOMCODE AS QTY_ORDER_UOM,
	CASE
        WHEN SALESORDER.EXTERNALREFERENCE IS NULL THEN SALESORDERLINE.EXTERNALREFERENCE
        ELSE SALESORDER.EXTERNALREFERENCE
    END AS PO_NUMBER,
    SALESORDERLINE.INTERNALREFERENCE, SUM(SALESORDERLINE.BASEPRIMARYQUANTITY) AS QTY_ORDER,SUM(SALESORDERLINE.BASESECONDARYQUANTITY) AS QTY_PANJANG_ORDER, 
	SALESORDERLINE.BASESECONDARYUOMCODE AS QTY_PANJANG_ORDER_UOM, SALESORDERDELIVERY.DELIVERYDATE,ORDERITEMORDERPARTNERLINK.LONGDESCRIPTION, ORDERPARTNERBRAND.LONGDESCRIPTION AS BUYER
	FROM SALESORDER SALESORDER
	LEFT JOIN SALESORDERLINE SALESORDERLINE ON SALESORDER.CODE=SALESORDERLINE.SALESORDERCODE 
	LEFT JOIN SALESORDERDELIVERY SALESORDERDELIVERY ON SALESORDERLINE.SALESORDERCODE=SALESORDERDELIVERY.SALESORDERLINESALESORDERCODE AND SALESORDERLINE.ORDERLINE=SALESORDERDELIVERY.SALESORDERLINEORDERLINE
	LEFT JOIN ORDERITEMORDERPARTNERLINK ORDERITEMORDERPARTNERLINK ON SALESORDER.ORDPRNCUSTOMERSUPPLIERCODE = ORDERITEMORDERPARTNERLINK.ORDPRNCUSTOMERSUPPLIERCODE AND SALESORDERLINE.ITEMTYPEAFICODE= ORDERITEMORDERPARTNERLINK.ITEMTYPEAFICODE AND 
	SALESORDERLINE.SUBCODE01 = ORDERITEMORDERPARTNERLINK.SUBCODE01 AND SALESORDERLINE.SUBCODE02 = ORDERITEMORDERPARTNERLINK.SUBCODE02 AND SALESORDERLINE.SUBCODE03 = ORDERITEMORDERPARTNERLINK.SUBCODE03 AND
	SALESORDERLINE.SUBCODE04 = ORDERITEMORDERPARTNERLINK.SUBCODE04 AND SALESORDERLINE.SUBCODE05 = ORDERITEMORDERPARTNERLINK.SUBCODE05 AND SALESORDERLINE.SUBCODE06 = ORDERITEMORDERPARTNERLINK.SUBCODE06 AND 
	SALESORDERLINE.SUBCODE07 = ORDERITEMORDERPARTNERLINK.SUBCODE07 AND SALESORDERLINE.SUBCODE08 = ORDERITEMORDERPARTNERLINK.SUBCODE08 AND SALESORDERLINE.SUBCODE09 = ORDERITEMORDERPARTNERLINK.SUBCODE09 AND 
	SALESORDERLINE.SUBCODE10 = ORDERITEMORDERPARTNERLINK.SUBCODE10
	LEFT JOIN ORDERPARTNERBRAND ORDERPARTNERBRAND ON SALESORDER.ORDPRNCUSTOMERSUPPLIERCODE = ORDERPARTNERBRAND.ORDPRNCUSTOMERSUPPLIERCODE AND SALESORDER.ORDERPARTNERBRANDCODE=ORDERPARTNERBRAND.CODE 
	GROUP BY SALESORDER.ORDERPARTNERBRANDCODE, SALESORDER.STATISTICALGROUPCODE, SALESORDERLINE.SALESORDERCODE, SALESORDERLINE.ORDERLINE, SALESORDERLINE.ITEMDESCRIPTION, SALESORDERLINE.SUBCODE03, SALESORDERLINE.SUBCODE05, SALESORDERLINE.BASEPRIMARYUOMCODE,SALESORDERLINE.BASESECONDARYUOMCODE, 
	SALESORDER.EXTERNALREFERENCE,SALESORDERLINE.EXTERNALREFERENCE,SALESORDERLINE.INTERNALREFERENCE, SALESORDERDELIVERY.DELIVERYDATE, ORDERITEMORDERPARTNERLINK.LONGDESCRIPTION, ORDERPARTNERBRAND.LONGDESCRIPTION) C
ON A.PROJECTCODE = C.SALESORDERCODE AND A.ORIGDLVSALORDERLINEORDERLINE = C.ORDERLINE
LEFT JOIN
	(SELECT PRODUCT.SUBCODE01, PRODUCT.SUBCODE02, PRODUCT.SUBCODE03, PRODUCT.SUBCODE04, PRODUCT.SUBCODE05,
	PRODUCT.SUBCODE06, PRODUCT.SUBCODE07, PRODUCT.SUBCODE08, PRODUCT.SUBCODE09, PRODUCT.SUBCODE10,  
	LISTAGG(TRIM(ADSTORAGE.NAMENAME),',') WITHIN GROUP(ORDER BY ADSTORAGE.NAMENAME ASC) AS NAMENAME, 
	LISTAGG(ADSTORAGE.VALUEDECIMAL,',') WITHIN GROUP(ORDER BY ADSTORAGE.NAMENAME ASC) AS VALUEDECIMAL
	FROM PRODUCT PRODUCT LEFT JOIN ADSTORAGE ADSTORAGE ON PRODUCT.ABSUNIQUEID=ADSTORAGE.UNIQUEID
	GROUP BY PRODUCT.SUBCODE01, PRODUCT.SUBCODE02, PRODUCT.SUBCODE03, PRODUCT.SUBCODE04, PRODUCT.SUBCODE05,
	PRODUCT.SUBCODE06, PRODUCT.SUBCODE07, PRODUCT.SUBCODE08, PRODUCT.SUBCODE09, PRODUCT.SUBCODE10) D
ON A.SUBCODE01=D.SUBCODE01 AND
A.SUBCODE02=D.SUBCODE02 AND
A.SUBCODE03=D.SUBCODE03 AND 
A.SUBCODE04=D.SUBCODE04 AND
A.SUBCODE05=D.SUBCODE05 AND 
A.SUBCODE06=D.SUBCODE06 AND 
A.SUBCODE07=D.SUBCODE07 AND 
A.SUBCODE08=D.SUBCODE08 AND 
A.SUBCODE09=D.SUBCODE09 AND 
A.SUBCODE10=D.SUBCODE10
LEFT JOIN
	(SELECT BUSINESSPARTNER.LEGALNAME1,ORDERPARTNER.CUSTOMERSUPPLIERCODE FROM BUSINESSPARTNER BUSINESSPARTNER 
	LEFT JOIN ORDERPARTNER ORDERPARTNER ON BUSINESSPARTNER.NUMBERID=ORDERPARTNER.ORDERBUSINESSPARTNERNUMBERID) E
ON A.CUSTOMERCODE=E.CUSTOMERSUPPLIERCODE
LEFT JOIN (
    SELECT ITXVIEWCOLOR.ITEMTYPECODE, ITXVIEWCOLOR.SUBCODE01, ITXVIEWCOLOR.SUBCODE02,
    ITXVIEWCOLOR.SUBCODE03, ITXVIEWCOLOR.SUBCODE04, ITXVIEWCOLOR.SUBCODE05, ITXVIEWCOLOR.SUBCODE06, 
    ITXVIEWCOLOR.SUBCODE07, ITXVIEWCOLOR.SUBCODE08, ITXVIEWCOLOR.SUBCODE09, ITXVIEWCOLOR.SUBCODE10, 
    ITXVIEWCOLOR.WARNA FROM ITXVIEWCOLOR ITXVIEWCOLOR) F ON
    A.ITEMTYPEAFICODE = F.ITEMTYPECODE AND 
    A.SUBCODE01 = F.SUBCODE01 AND 
    A.SUBCODE02 = F.SUBCODE02 AND 
    A.SUBCODE03 = F.SUBCODE03 AND 
    A.SUBCODE04 = F.SUBCODE04 AND 
    A.SUBCODE05 = F.SUBCODE05 AND 
    A.SUBCODE06 = F.SUBCODE06 AND 
    A.SUBCODE07 = F.SUBCODE07 AND 
    A.SUBCODE08 = F.SUBCODE08 AND 
    A.SUBCODE09 = F.SUBCODE09 AND 
    A.SUBCODE10 = F.SUBCODE10
LEFT JOIN
	(SELECT PRODUCTIONRESERVATION.ORDERCODE, PRODUCTIONRESERVATION.ITEMTYPEAFICODE, SUM(PRODUCTIONRESERVATION.USEDBASEPRIMARYQUANTITY) AS USEDBASEPRIMARYQUANTITY FROM PRODUCTIONRESERVATION 
	PRODUCTIONRESERVATION WHERE PRODUCTIONRESERVATION.ITEMTYPEAFICODE='KGF' GROUP BY PRODUCTIONRESERVATION.ORDERCODE, PRODUCTIONRESERVATION.ITEMTYPEAFICODE) G
ON A.CODE = G.ORDERCODE
LEFT JOIN (
    SELECT
        ELEMENTSINSPECTION.DEMANDCODE,
        COUNT(ELEMENTSINSPECTION.ELEMENTCODE) AS TOTAL_ROLL,
        SUM(ELEMENTSINSPECTION.WEIGHTNET) AS TOTAL_KG,
        SUM(ELEMENTSINSPECTION.LENGTHGROSS) AS TOTAL_YARD
    FROM
        ELEMENTSINSPECTION ELEMENTSINSPECTION
    WHERE
        LENGTH(TRIM(ELEMENTSINSPECTION.ELEMENTCODE))= 13
    GROUP BY
        ELEMENTSINSPECTION.DEMANDCODE) H ON
    A.CODE = H.DEMANDCODE
LEFT JOIN (
	SELECT COUNT(STOCKTRANSACTION.USERPRIMARYQUANTITY) AS JML_ROLL_GREIGE,
	STOCKTRANSACTION.ORDERCODE FROM STOCKTRANSACTION STOCKTRANSACTION
	WHERE STOCKTRANSACTION.LOGICALWAREHOUSECODE ='M021'
	GROUP BY STOCKTRANSACTION.ORDERCODE
	) I ON B.PRODUCTIONORDERCODE=I.ORDERCODE
WHERE A.CODE='$nodemand'";
$stmt=db2_exec($conn1,$sqlDB2, array('cursor'=>DB2_SCROLLABLE));
$rowdb2 = db2_fetch_assoc($stmt);
$ww=explode(",",$rowdb2['NAMENAME']);
$valueww=explode(",",$rowdb2['VALUEDECIMAL']);
//GRAMASI
if($ww[0]=="GSM"){ $gramasi=$valueww[0];}
else if($ww[1]=="GSM"){ $gramasi=$valueww[1];}
else if($ww[2]=="GSM"){ $gramasi=$valueww[2];}
else if($ww[3]=="GSM"){ $gramasi=$valueww[3];}
$posg=strpos($gramasi,".");
$valgramasi=substr($gramasi,0,$posg);
//WIDTH
if($ww[0]=="Width"){ $lebar=$valueww[0];}
else if($ww[1]=="Width"){ $lebar=$valueww[1];}
else if($ww[2]=="Width"){ $lebar=$valueww[2];}
else if($ww[3]=="Width"){ $lebar=$valueww[3];}
$posl=strpos($lebar,".");
$vallebar=substr($lebar,0,$posl);


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
				  <input name="nodemand" type="text" class="form-control" id="nodemand" 
                     onchange="window.location='FormSchedule-'+this.value" value="<?php echo $_GET['nodemand'];?>" placeholder="No Demand" required >
		  </div>
        </div>
		<div class="form-group">
                  <label for="nokk" class="col-sm-3 control-label">No Production Order</label>
                  <div class="col-sm-8">
                    <input name="nokk" type="text" class="form-control" id="nokk" 
                    value="<?php if($cek>0){echo $rcek['nokk'];}else{echo $rowdb2['PRODUCTIONORDERCODE'];}?>" placeholder="No Production Order">
                  </div>				   
                </div>
		<div class="form-group">
                  <label for="langganan" class="col-sm-3 control-label">Langganan</label>
                  <div class="col-sm-8">
                    <input name="langganan" type="text" class="form-control" id="langganan" 
                    value="<?php if($cek>0){echo $rcek['langganan'];}else{echo $rowdb2['LEGALNAME1'];}?>" placeholder="Langganan">
                  </div>				   
                </div>
		<div class="form-group">
                  <label for="buyer" class="col-sm-3 control-label">Buyer</label>
                  <div class="col-sm-8">
                    <input name="buyer" type="text" class="form-control" id="buyer" 
                    value="<?php if($cek>0){echo $rcek['buyer'];}else{echo $rowdb2['ORDERPARTNERBRANDCODE'];}?>" placeholder="Buyer">
                  </div>				   
                </div>
	    <div class="form-group">
                  <label for="no_order" class="col-sm-3 control-label">No Order</label>
                  <div class="col-sm-4">
                    <input name="no_order" type="text" class="form-control" id="no_order" 
                    value="<?php if($cek>0){echo $rcek['no_order'];}else{if($rowdb2['SALESORDERCODE']!=""){echo $rowdb2['SALESORDERCODE'];}else if($nokk!=""){echo $cekM['no_order'];}} ?>" placeholder="No Order">
                  </div>				   
                </div>
	    <!--<div class="form-group">
                  <label for="no_po" class="col-sm-3 control-label">PO</label>
                  <div class="col-sm-5">-->
                    <input name="no_po" type="hidden" class="form-control" id="no_po" 
                    value="<?php if($cek>0){echo $rcek['po'];}else{if($rowdb2['EXTERNALREFERENCE']!=""){echo $rowdb2['EXTERNALREFERENCE'];}else if($nokk!=""){echo $cekM['no_po'];}} ?>" placeholder="PO" >
                 <!-- </div>				   
                </div>-->
		<div class="form-group">
                  <label for="no_hanger" class="col-sm-3 control-label">No Hanger</label>
                  <div class="col-sm-3">
                    <input name="no_hanger" type="text" class="form-control" id="no_hanger" 
                    value="<?php if($cek>0){echo $rcek['no_hanger'];}else{if($rowdb2['SUBCODE02']!=""){echo trim($rowdb2['SUBCODE02']).'-'.trim($rowdb2['SUBCODE03']);}else if($nokk!=""){echo $cekM['no_item'];}}?>" placeholder="No Hanger">  
                  </div>
				  <div class="col-sm-3">
				  <input name="no_item" type="text" class="form-control" id="no_item" 
                    value="<?php if($rcek['no_item']!=""){echo $rcek['no_item'];}else if($rowdb2['NO_ITEM']!=""){echo $rowdb2['NO_ITEM'];}?>" placeholder="No Item">
				  </div>
                </div>
	    <div class="form-group">
                  <label for="jns_kain" class="col-sm-3 control-label">Jenis Kain</label>
                  <div class="col-sm-8">
					  <textarea name="jns_kain" class="form-control" id="jns_kain" placeholder="Jenis Kain"><?php if($cek>0){echo $rcek['jenis_kain'];}else{if($rowdb2['ITEMDESCRIPTION']!=""){echo $rowdb2['ITEMDESCRIPTION'];}else if($nokk!=""){ echo $cekM['jenis_kain']; } }?></textarea>
					  </div>
                  </div>
		<div class="form-group">
        <label for="tgl_delivery" class="col-sm-3 control-label">Tgl. Delivery</label>
        <div class="col-sm-4">
          <div class="input-group date">
            <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
            <input name="tgl_delivery" type="text" class="form-control pull-right" id="datepicker2" placeholder="0000-00-00" value="<?php if($cek>0){echo $rcek['tgl_delivery'];}else{if($rowdb2['DELIVERYDATE']!=""){echo date('Y-m-d', strtotime($rowdb2['DELIVERYDATE']));}}?>" required/>
          </div>
        </div>
	  </div>
		<div class="form-group">
			  <label for="l_g" class="col-sm-3 control-label">Lebar X Gramasi</label>
			  <div class="col-sm-2">
				<input name="lebar" type="text" class="form-control" id="lebar" 
				value="<?php if($cek>0){echo $rcek['lebar'];}else{echo $vallebar;} ?>" placeholder="0" required>
			  </div>
			  <div class="col-sm-2">
				<input name="grms" type="text" class="form-control" id="grms" 
				value="<?php if($cek>0){echo $rcek['gramasi'];}else{echo $valgramasi;} ?>" placeholder="0" required>
			  </div>		
			</div>
		<div class="form-group">
			  <label for="warna" class="col-sm-3 control-label">Warna</label>
			  <div class="col-sm-8">
				<input name="warna" type="text" class="form-control" id="warna" 
				value="<?php if($cek>0){echo $rcek['warna'];}else{if($rowdb2['WARNA']!=""){echo $rowdb2['WARNA'];}else if($nokk!=""){ echo $cekM['warna'];} }?>" placeholder="Warna">  
			  </div>				   
			</div>
	  </div>
	  		<!-- col --> 
	  <div class="col-md-6">
		 <div class="form-group">
			  <label for="no_warna" class="col-sm-3 control-label">No Warna</label>
			  <div class="col-sm-8">
				<input name="no_warna" type="text" class="form-control" id="no_warna" 
				value="<?php if($cek>0){echo $rcek['no_warna'];}else{if($rowdb2['NO_WARNA']!=""){echo $rowdb2['NO_WARNA'];}else if($nokk!=""){echo $cekM['no_warna'];}}?>" placeholder="No Warna">  
			  </div>				   
			</div>   
		 <div class="form-group">
                  <label for="qty_order" class="col-sm-3 control-label">Qty Order</label>
                  <div class="col-sm-3">
					<div class="input-group">  
                    <input name="qty1" type="text" class="form-control" id="qty1" 
                    value="<?php if($cek>0){echo $rcek['qty_order'];}else{echo round($rowdb2['QTY_ORDER'],2);} ?>" placeholder="0.00" required>
					  <span class="input-group-addon">KGs</span></div>  
                  </div>
				  <div class="col-sm-4">
					<div class="input-group">  
                    <input name="qty2" type="text" class="form-control" id="qty2" 
                    value="<?php if($cek>0){echo $rcek['pjng_order'];}else {echo round($rowdb2['QTY_PANJANG_ORDER'],2);} ?>" placeholder="0.00" style="text-align: right;" required>
                    <span class="input-group-addon">
							  <select name="satuan1" style="font-size: 12px;" id="satuan1">
								  <option value="">Pilih</option>
								  <option value="Yard" <?php if($rowdb2['QTY_PANJANG_ORDER_UOM']=="yd"){ echo "SELECTED"; }?>>Yard</option>
								  <option value="Meter" <?php if($rowdb2['QTY_PANJANG_ORDER_UOM']=="m"){ echo "SELECTED"; }?>>Meter</option>
								  <option value="PCS" <?php if($rowdb2['QTY_PANJANG_ORDER_UOM']=="un"){ echo "SELECTED"; }?>>PCS</option>
							  </select>
					    </span>
					</div>	
                  </div>		
                </div>
		<div class="form-group">
                  <label for="lot" class="col-sm-3 control-label">Lot</label>
                  <div class="col-sm-4">
                    <input name="lot" type="text" class="form-control" id="lot" 
                    value="<?php if($cek>0){echo $rcek['lot'];}else{echo $rowdb2['DEMANDNO'];} ?>" placeholder="Lot" >
                  </div>				   
        </div>
		<div class="form-group">
			  <label for="jml_bruto" class="col-sm-3 control-label">Roll &amp; Qty</label>
			  <div class="col-sm-2">
				<input name="qty3" type="text" class="form-control" id="qty3" 
				value="<?php if($cek>0){echo $rcek['rol'];}else{echo $rowdb2['JML_ROLL_GREIGE'];} ?>" placeholder="0.00" required>
			  </div>
			  <div class="col-sm-3">
				<div class="input-group">  
				<input name="qty4" type="text" class="form-control" id="qty4" 
				value="<?php if($cek>0){echo $rcek['bruto'];}else{echo round($rowdb2['QTY_BAGI_KAIN'],2);} ?>" placeholder="0.00" style="text-align: right;" required>
				<span class="input-group-addon">KGs</span>
				</div>	
			  </div>		
			</div>
		
		<div class="form-group">
                  <label for="no_mc" class="col-sm-3 control-label">No MC </label>
                  <div class="col-sm-3">					  
						  <select name="no_mc" class="form-control select2" id="no_mc"   required>
							  	<option value="">Pilih</option>							 
							  <?php 
							  $sqlKap=mysqli_query($con,"SELECT no_mesin FROM tbl_no_mesin WHERE NOT (jenis='belah' or jenis='lipat')ORDER BY no_mesin ASC");
							  while($rK=mysqli_fetch_array($sqlKap)){
							  ?>
								  <option value="<?php echo $rK['no_mesin']; ?>" <?php if($_GET['mc']==$rK['no_mesin']){ echo "SELECTED"; } ?>><?php echo $rK['no_mesin']; ?></option>
							 <?php } ?>	

					  </select>
				  </div>
					  
		</div>
		<div class="form-group">
                  <label for="no_urut" class="col-sm-3 control-label">No Urut</label>
                  <div class="col-sm-2">					  
						  <select name="no_urut" class="form-control select2" id="no_urut" required>
							  	<option value="">Pilih</option>
							  <?php 
							  $sqlKap=mysqli_query($con,"SELECT no_urut FROM tbl_urut ORDER BY no_urut ASC");
							  while($rK=mysqli_fetch_array($sqlKap)){
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
							  	<option value="">Pilih</option>
							  <?php 
							  $sqlKap=mysqli_query($con,"SELECT proses FROM tbl_proses ORDER BY proses ASC");
							  while($rK=mysqli_fetch_array($sqlKap)){
							  ?>
								  <option value="<?php echo $rK['proses']; ?>"><?php echo $rK['proses']; ?></option>
							 <?php } ?>	  
					  </select>
				  </div>				   
		    </div>  
		
		
		<div class="form-group">
                  <label for="personil" class="col-sm-3 control-label">Personil</label>
                  <div class="col-sm-5">					  
				  <input name="personil" type="text" class="form-control" id="personil" 
                    value="<?php echo $_SESSION['nama1Fin'];?>" placeholder="personil" readonly>		  
				  </div>
					  
		    </div> 
	  <div class="form-group">
                  <label for="catatan" class="col-sm-3 control-label">Catatan</label>
                  <div class="col-sm-8">		  
				  <textarea name="catatan" class="form-control" id="catatan" placeholder="catatan..."></textarea>		  
				  </div>			  
					  
		</div>	  
      </div>
	  		
		  <input type="hidden" value="<?php if($cek>0){echo $rcek['no_ko'];}else{echo $rKO['KONo'];}?>" name="no_ko">
		  
 	</div>
   	<div class="box-footer">
   <button type="button" class="btn btn-default pull-left" name="back" value="kembali" onClick="window.location='Schedule'">Kembali <i class="fa fa-arrow-circle-o-left"></i></button>		
  	   
   <button type="submit" class="btn btn-primary pull-right" name="save" value="save">Simpan <i class="fa fa-save"></i></button> 
   </div>
    <!-- /.box-footer -->
 </div>
</form>
    
						
                    

<?php 
	if($_POST['save']=="save"){
	  $qryCek=mysqli_query($con,"SELECT * from tbl_schedule WHERE `status`='sedang jalan' and  no_mesin='$_POST[no_mc]'");
	  $row=mysqli_num_rows($qryCek);
	  $qryCekN=mysqli_query($con,"SELECT * from tbl_schedule WHERE nodemand='$_POST[nodemand]' and  no_mesin='$_POST[no_mc]' and proses='".$_POST['proses']."' and DATE_FORMAT(tgl_update,'%Y-%m-%d')=DATE_FORMAT( now( ), '%Y-%m-%d' ) and `status`='selesai' and g_shift='$_POST[g_shift]'");
	  $rowN=mysqli_num_rows($qryCekN);
	  $qryCekN1=mysqli_query($con,"SELECT * from tbl_schedule WHERE no_urut='$_POST[no_urut]' and  no_mesin='$_POST[no_mc]' and proses='".$_POST['proses']."' and DATE_FORMAT(tgl_update,'%Y-%m-%d')=DATE_FORMAT( now( ), '%Y-%m-%d' ) and `status`='selesai' and g_shift='$_POST[g_shift]'");
	  $rowN1=mysqli_num_rows($qryCekN1);
	  $qryCekN2=mysqli_query($con,"SELECT * from tbl_schedule WHERE nodemand='".$_POST['nodemand']."' and  proses='".$_POST['proses']."' and tampil='1' and `status`='selesai' and g_shift='$_POST[g_shift]'");
	  $rowN2=mysqli_num_rows($qryCekN2);	
	  if($row>0 and $_POST['no_urut']=="1"){
		echo "<script> swal({
            title: 'Tidak bisa input urutan ke-`1`, mesin masih jalan',
            text: ' Klik OK untuk Input No Urut kembali',
            type: 'warning'
        }, function(){
            window.location='';
        });</script>";  
	  }	else if($rowN>0 ){	  
		 echo "<script> swal({
            title: 'Tidak bisa input, NoKK sudah di mesin ini dengan proses sama',
            text: ' Klik OK untuk Input No Urut kembali',
            type: 'warning'
        }, function(){
            window.location='';
        });</script>"; 
	  }	else if($rowN1>0 ){	  
		 echo "<script> swal({
            title: 'Tidak bisa input, NoKK sudah di mesin ini dengan proses sama',
            text: ' Klik OK untuk Input No Urut kembali',
            type: 'warning'
        }, function(){
            window.location='';
        });</script>"; 
	  } else if($rowN2>0 ){	  
		 echo "<script> swal({
            title: 'Tidak bisa simpan, NoKK sudah ada',
            text: ' Klik OK untuk Input No Urut kembali',
            type: 'warning'
        }, function(){
            window.location='';
        });</script>"; 	  
	  }	else {
	  if($_POST['nokk']!=""){$kartu=$_POST['nokk'];}else{$kartu=$nou;}	
	  $warna=str_replace("'","''",$_POST['warna']);
	  $nowarna=str_replace("'","''",$_POST['no_warna']);	
	  $jns=str_replace("'","''",$_POST['jns_kain']);
	  $po=str_replace("'","''",$_POST['no_po']);
	  $catatan=str_replace("'","''",$_POST['catatan']);	  
	  $lot=trim($_POST['lot']);	
	  $nomesin=str_replace("'","''",$_POST['no_mc']);	  
  	  $sqlData=mysqli_query($con,"INSERT INTO tbl_schedule SET
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
	  
		if($sqlData){
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
    if($_POST['update']=="update"){
	  $warna=str_replace("'","''",$_POST['warna']);
	  $nowarna=str_replace("'","''",$_POST['no_warna']);	
	  $jns=str_replace("'","''",$_POST['jns_kain']);
	  $po=str_replace("'","''",$_POST['no_po']);
	  $catatan=str_replace("'","''",$_POST['catatan']);	
	  $lot=trim($_POST['lot']);		
  	  $sqlData=mysqli_query($con,"UPDATE tbl_schedule SET 
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
		  WHERE nokk='$_POST[nokk]'",$con);	 	  
	  
		if($sqlData){
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
