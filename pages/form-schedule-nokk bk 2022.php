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
$nokk=$_GET['nokk'];
$sql=sqlsrv_query($conn,"select top 1
			x.*,dbo.fn_StockMovementDetails_GetTotalWeightPCC(0, x.PCBID) as Weight, 
			pm.Weight as Gramasi,pm.CuttableWidth as Lebar, pm.Description as ProductDesc, pm.ColorNo, pm.Color,
      dbo.fn_StockMovementDetails_GetTotalRollPCC(0, x.PCBID) as RollCount
		from
			(
			select
				so.SONumber, convert(char(10),so.SODate,103) as TglSO, so.CustomerID, so.BuyerID, so.PODate,
				sod.ID as SODID, sod.ProductID, sod.Quantity, sod.UnitID, sod.WeightUnitID, 
				soda.RefNo as DetailRefNo,jo.DocumentNo as NoOrder,soda.PONumber,
				pcb.ID as PCBID, pcb.Gross as Bruto,soda.HangerNo,pp.ProductCode,
				pcb.Quantity as BatchQuantity, pcb.UnitID as BatchUnitID, pcb.ScheduledDate, pcb.ProductionScheduledDate,
				pcblp.DepartmentID,pcb.LotNo,pcb.PCID,pcb.ChildLevel,pcb.RootID,convert(char(10),sod.RequiredDate,126) as TglDev
				
			from
				SalesOrders so inner join
				JobOrders jo on jo.SOID=so.ID inner join
				SODetails sod on so.ID = sod.SOID inner join
				SODetailsAdditional soda on sod.ID = soda.SODID left join
				ProductPartner pp on pp.productid= sod.productid left join
				ProcessControlJO pcjo on sod.ID = pcjo.SODID left join
				ProcessControlBatches pcb on pcjo.PCID = pcb.PCID left join
				ProcessControlBatchesLastPosition pcblp on pcb.ID = pcblp.PCBID left join
				ProcessFlowProcessNo pfpn on pfpn.EntryType = 2 and pcb.ID = pfpn.ParentID and pfpn.MachineType = 24 left join
				ProcessFlowDetailsNote pfdn on pfpn.EntryType = pfdn.EntryType and pfpn.ID = pfdn.ParentID
			where pcb.DocumentNo='$nokk' and pcb.Gross<>'0'
				group by
					so.SONumber, so.SODate, so.CustomerID, so.BuyerID, so.PONumber, so.PODate,jo.DocumentNo,
					sod.ID, sod.ProductID, sod.Quantity, sod.UnitID, sod.Weight, sod.WeightUnitID,
					soda.RefNo,pcb.DocumentNo,soda.HangerNo,
					pcb.ID, pcb.DocumentNo, pcb.Gross,soda.PONumber,pp.ProductCode,
					pcb.Quantity, pcb.UnitID, pcb.ScheduledDate, pcb.ProductionScheduledDate,
					pcblp.DepartmentID,pcb.LotNo,pcb.PCID,pcb.ChildLevel,pcb.RootID,sod.RequiredDate
				) x inner join
				ProductMaster pm on x.ProductID = pm.ID left join
				Departments dep on x.DepartmentID  = dep.ID left join
				Departments pdep on dep.RootID = pdep.ID left join				
				Partners cust on x.CustomerID = cust.ID left join
				Partners buy on x.BuyerID = buy.ID left join
				UnitDescription udq on x.UnitID = udq.ID left join
				UnitDescription udw on x.WeightUnitID = udw.ID left join
				UnitDescription udb on x.BatchUnitID = udb.ID
			order by
				x.SODID, x.PCBID");
		  $r=sqlsrv_fetch_array($sql);
$sql1=sqlsrv_query($conn,"select partnername from partners where id='".$r['CustomerID']."'");	
$r1=sqlsrv_fetch_array($sql1);
$sql2=sqlsrv_query($conn,"select partnername from partners where id='".$r['BuyerID']."'");	
$r2=sqlsrv_fetch_array($sql2);
$pelanggan=$r1['partnername'];
$buyer=$r2['partnername'];
$ko=sqlsrv_query($conn,"select  ko.KONo from
		ProcessControlJO pcjo inner join
		ProcessControl pc on pcjo.PCID = pc.ID left join
		KnittingOrders ko on pc.CID = ko.CID and pcjo.KONo = ko.KONo 
	where
		pcjo.PCID = '".$r['PCID']."'
group by ko.KONo");
					$rKO=sqlsrv_fetch_array($ko);
					
$child=$r['ChildLevel'];
	if($nokk!=""){	
		if($child > 0){
			$sqlgetparent=sqlsrv_query($conn,"select ID,LotNo from ProcessControlBatches where ID='".$r['RootID']."' and ChildLevel='0'");
			$rowgp=sqlsrv_fetch_array($sqlgetparent);
			
			//$nomLot=substr("$row2[LotNo]",0,1);
			$nomLot=$rowgp['LotNo'];
			$nomorLot="$nomLot/K".$r['ChildLevel']."";				
								
		}else{
			$nomorLot=$r['LotNo'];
				
		}

		$sqlLot1="Select count(*) as TotalLot From ProcessControlBatches where PCID='".$r['PCID']."' and RootID='0' and LotNo < '1000'";
		$qryLot1 = sqlsrv_query($conn,$sqlLot1) or die('A error occured : ');							
		$rowLot=sqlsrv_fetch_array($qryLot1);
		$lotno=$rowLot['TotalLot']."-".$nomorLot;
		

}
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
                  <label for="nokk" class="col-sm-3 control-label">No KK</label>
                  <div class="col-sm-4">
				  <input name="nokk" type="text" class="form-control" id="nokk" 
                     onchange="window.location='FormScheduleNoKK-'+this.value" value="<?php echo $_GET['nokk'];?>" placeholder="No KK" required >
		  </div>
                </div>
		<div class="form-group">
                  <label for="langganan" class="col-sm-3 control-label">Langganan</label>
                  <div class="col-sm-8">
                    <input name="langganan" type="text" class="form-control" id="langganan" 
                    value="<?php if($cek>0){echo $rcek['langganan'];}else{echo $pelanggan;}?>" placeholder="Langganan">
                  </div>				   
                </div>
		<div class="form-group">
                  <label for="buyer" class="col-sm-3 control-label">Buyer</label>
                  <div class="col-sm-8">
                    <input name="buyer" type="text" class="form-control" id="buyer" 
                    value="<?php if($cek>0){echo $rcek['buyer'];}else{echo $buyer;}?>" placeholder="Buyer">
                  </div>				   
                </div>
	    <div class="form-group">
                  <label for="no_order" class="col-sm-3 control-label">No Order</label>
                  <div class="col-sm-4">
                    <input name="no_order" type="text" class="form-control" id="no_order" 
                    value="<?php if($cek>0){echo $rcek['no_order'];}else{if($r['NoOrder']!=""){echo $r['NoOrder'];}else if($nokk!=""){echo $cekM['no_order'];}} ?>" placeholder="No Order">
                  </div>				   
                </div>
	    <div class="form-group">
                  <label for="no_po" class="col-sm-3 control-label">PO</label>
                  <div class="col-sm-5">
                    <input name="no_po" type="text" class="form-control" id="no_po" 
                    value="<?php if($r['PONumber']!=""){echo $r['PONumber'];}else if($nokk!=""){echo $cekM['no_po'];} ?>" placeholder="PO" >
                  </div>				   
                </div>
		<div class="form-group">
                  <label for="no_hanger" class="col-sm-3 control-label">No Hanger / No Item</label>
                  <div class="col-sm-3">
                    <input name="no_hanger" type="text" class="form-control" id="no_hanger" 
                    value="<?php if($cek>0){echo $rcek['no_hanger'];}else{if($r['HangerNo']){echo $r['HangerNo'];}else if($nokk!=""){echo $cekM['no_item'];}}?>" placeholder="No Hanger">  
                  </div>
				  <div class="col-sm-3">
				  <input name="no_item" type="text" class="form-control" id="no_item" 
                    value="<?php if($rcek['no_item']!=""){echo $rcek['no_item'];}else if($r['ProductCode']!=""){echo $r['ProductCode'];}else{if($r['HangerNo']){echo $r['HangerNo'];}else if($nokk!=""){echo $cekM['no_item'];}}?>" placeholder="No Item">
				  </div>	
                </div>
	    <div class="form-group">
                  <label for="jns_kain" class="col-sm-3 control-label">Jenis Kain</label>
                  <div class="col-sm-8">
					  <textarea name="jns_kain" class="form-control" id="jns_kain" placeholder="Jenis Kain"><?php if($cek>0){echo $rcek['jenis_kain'];}else{if($r['ProductDesc']!=""){echo $r['ProductDesc'];}else if($nokk!=""){ echo $cekM['jenis_kain']; } }?></textarea>
					  </div>
                  </div>
		<div class="form-group">
        <label for="tgl_delivery" class="col-sm-3 control-label">Tgl. Delivery</label>
        <div class="col-sm-4">
          <div class="input-group date">
            <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
            <input name="tgl_delivery" type="text" class="form-control pull-right" id="datepicker2" placeholder="0000-00-00" value="<?php echo $r['TglDev']; ?>" required/>
          </div>
        </div>
	  </div>
		<div class="form-group">
			  <label for="l_g" class="col-sm-3 control-label">Lebar X Gramasi</label>
			  <div class="col-sm-2">
				<input name="lebar" type="text" class="form-control" id="lebar" 
				value="<?php if($cek>0){echo $rcek['lebar'];}else{echo round($r['Lebar']);} ?>" placeholder="0" required>
			  </div>
			  <div class="col-sm-2">
				<input name="grms" type="text" class="form-control" id="grms" 
				value="<?php if($cek>0){echo $rcek['gramasi'];}else{echo round($r['Gramasi']);} ?>" placeholder="0" required>
			  </div>		
			</div>
		<div class="form-group">
			  <label for="warna" class="col-sm-3 control-label">Warna</label>
			  <div class="col-sm-8">
				<input name="warna" type="text" class="form-control" id="warna" 
				value="<?php if($cek>0){echo $rcek['warna'];}else{if($r['Color']!=""){echo $r['Color'];}else if($nokk!=""){ echo $cekM['warna'];} }?>" placeholder="Warna">  
			  </div>				   
			</div>
		  
		
	  </div>
	  		<!-- col --> 
	  <div class="col-md-6">
		 <div class="form-group">
			  <label for="no_warna" class="col-sm-3 control-label">No Warna</label>
			  <div class="col-sm-8">
				<input name="no_warna" type="text" class="form-control" id="no_warna" 
				value="<?php if($cek>0){echo $rcek['no_warna'];}else{if($r['ColorNo']!=""){echo $r['ColorNo'];}else if($nokk!=""){echo $cekM['no_warna'];}}?>" placeholder="No Warna">  
			  </div>				   
			</div>   
		 <div class="form-group">
                  <label for="qty_order" class="col-sm-3 control-label">Qty Order</label>
                  <div class="col-sm-3">
					<div class="input-group">  
                    <input name="qty1" type="text" class="form-control" id="qty1" 
                    value="<?php echo round($r['BatchQuantity'],2); ?>" placeholder="0.00" required>
					  <span class="input-group-addon">KGs</span></div>  
                  </div>
				  <div class="col-sm-4">
					<div class="input-group">  
                    <input name="qty2" type="text" class="form-control" id="qty2" 
                    value="<?php echo round($r['Quantity'],2); ?>" placeholder="0.00" style="text-align: right;" required>
                    <span class="input-group-addon">
							  <select name="satuan1" style="font-size: 12px;" id="satuan1">
								  <option value="">Pilih</option>
								  <option value="Yard" <?php if($r['UnitID']=="21"){ echo "SELECTED"; }?>>Yard</option>
								  <option value="Meter" <?php if($r['UnitID']=="10"){ echo "SELECTED"; }?>>Meter</option>
								  <option value="PCS" <?php if($r['UnitID']=="1"){ echo "SELECTED"; }?>>PCS</option>
								  <option value="KG" <?php if($r['UnitID']=="5"){ echo "SELECTED"; }?>>KG</option>
							  </select>
					    </span>
					</div>	
                  </div>		
                </div>
		<div class="form-group">
                  <label for="lot" class="col-sm-3 control-label">Lot</label>
                  <div class="col-sm-2">
                    <input name="lot" type="text" class="form-control" id="lot" 
                    value="<?php if($cek>0){echo $rcek['lot'];}else{if($nomorLot!=""){echo $lotno;}else if($nokk!=""){echo $cekM['lot'];} } ?>" placeholder="Lot" >
                  </div>				   
                </div>
		<div class="form-group">
			  <label for="jml_bruto" class="col-sm-3 control-label">Roll &amp; Qty</label>
			  <div class="col-sm-2">
				<input name="qty3" type="text" class="form-control" id="qty3" 
				value="<?php if($cek>0){echo $rcek['rol'];}else{if($r['RollCount']!=""){echo round($r['RollCount']);}else if($nokk!=""){echo $cekM['jml_roll'];}} ?>" placeholder="0.00" required>
			  </div>
			  <div class="col-sm-3">
				<div class="input-group">  
				<input name="qty4" type="text" class="form-control" id="qty4" 
				value="<?php if($cek>0){echo $rcek['bruto'];}else{if($r['Weight']>0){echo round($r['Weight'],2);}else if($nokk!=""){echo $cekM['bruto'];}} ?>" placeholder="0.00" style="text-align: right;" required>
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
	  $qryCekN=mysqli_query($con,"SELECT * from tbl_schedule WHERE nokk='$_POST[nokk]' and  no_mesin='$_POST[no_mc]' and DATE_FORMAT(tgl_update,'%Y-%m-%d')=DATE_FORMAT( now( ), '%Y-%m-%d' )");
	  $rowN=mysqli_num_rows($qryCekN);
	  $qryCekN1=mysqli_query($con,"SELECT * from tbl_schedule WHERE no_urut='$_POST[no_urut]' and  no_mesin='$_POST[no_mc]' and DATE_FORMAT(tgl_update,'%Y-%m-%d')=DATE_FORMAT( now( ), '%Y-%m-%d' )");
	  $rowN1=mysqli_num_rows($qryCekN1);
	  $qryCekN2=mysqli_query($con,"SELECT * from tbl_schedule WHERE nokk='".$_POST['nokk']."' and  proses='".$_POST['proses']."' and tampil='1'");
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
            title: 'Tidak bisa input, NoKK sudah di mesin ini',
            text: ' Klik OK untuk Input No Urut kembali',
            type: 'warning'
        }, function(){
            window.location='';
        });</script>";
	 }	else if($rowN>0 ){	  
		 echo "<script> swal({
            title: 'Tidak bisa input, NoKK sudah di mesin ini',
            text: ' Klik OK untuk Input No Urut kembali',
            type: 'warning'
        }, function(){
            window.location='';
        });</script>"; }
	  else if($rowN2>0 ){	  
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
		  no_sch='$_POST[no_urut]',
		  proses='$_POST[proses]',
		  revisi='$_POST[revisi]',
		  ket_status='$_POST[ket]',
		  ket_kain='$_POST[ket_kain]',
		  tgl_masuk=now(),
		  personil='$_POST[personil]',
		  target='$_POST[target]',
		  catatan='$catatan',
		  tgl_update=now(),
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
		  WHERE nokk='$_POST[nokk]'");	 	  
	  
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
