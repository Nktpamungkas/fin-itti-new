<?php
ini_set("error_reporting", 1);
session_start();
include"koneksi.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Batas Produksi</title>
  </head>

  <body>
    <?php 
    $sqlDB2="SELECT A.CODE AS DEMANDNO, TRIM(B.PRODUCTIONORDERCODE) AS PRODUCTIONORDERCODE, TRIM(E.LEGALNAME1) AS LEGALNAME1, TRIM(C.ORDERPARTNERBRANDCODE) AS ORDERPARTNERBRANDCODE, 
    TRIM(C.SALESORDERCODE) AS SALESORDERCODE, TRIM(C.ITEMDESCRIPTION) AS ITEMDESCRIPTION, TRIM(A.SUBCODE05) AS NO_WARNA, TRIM(F.LONGDESCRIPTION) AS WARNA,
    TRIM(A.SUBCODE02) AS SUBCODE02, TRIM(A.SUBCODE03) AS SUBCODE03, TRIM(C.EXTERNALREFERENCE) AS EXTERNALREFERENCE, TRIM(C.INTERNALREFERENCE) AS INTERNALREFERENCE, A.BASEPRIMARYQUANTITY AS QTY_NETTO, TRIM(A.BASEPRIMARYUOMCODE) AS BASEPRIMARYUOMCODE,
    A.BASESECONDARYQUANTITY AS QTY_NETTO_YARD, TRIM(A.BASESECONDARYUOMCODE) AS BASESECONDARYUOMCODE, C.QTY_ORDER, TRIM(C.QTY_ORDER_UOM) AS QTY_ORDER_UOM, C.QTY_PANJANG_ORDER,
    TRIM(C.QTY_PANJANG_ORDER_UOM) AS QTY_PANJANG_ORDER_UOM, C.DELIVERYDATE,D.NAMENAME,D.VALUEDECIMAL FROM PRODUCTIONDEMAND A 
    LEFT JOIN 
      (SELECT PRODUCTIONDEMANDSTEP.PRODUCTIONORDERCODE, PRODUCTIONDEMANDSTEP.PRODUCTIONDEMANDCODE FROM 
      PRODUCTIONDEMANDSTEP PRODUCTIONDEMANDSTEP
      GROUP BY PRODUCTIONDEMANDSTEP.PRODUCTIONORDERCODE,PRODUCTIONDEMANDSTEP.PRODUCTIONDEMANDCODE) B
    ON A.CODE=B.PRODUCTIONDEMANDCODE
    LEFT JOIN 
      (SELECT SALESORDER.ORDERPARTNERBRANDCODE, SALESORDERLINE.SALESORDERCODE, SALESORDERLINE.ITEMDESCRIPTION, SALESORDERLINE.SUBCODE03, SALESORDERLINE.SUBCODE05, SALESORDERLINE.BASEPRIMARYUOMCODE AS QTY_ORDER_UOM,
      SALESORDERLINE.EXTERNALREFERENCE, SALESORDERLINE.INTERNALREFERENCE, SUM(SALESORDERLINE.BASEPRIMARYQUANTITY) AS QTY_ORDER,SUM(SALESORDERLINE.BASESECONDARYQUANTITY) AS QTY_PANJANG_ORDER, SALESORDERLINE.BASESECONDARYUOMCODE AS QTY_PANJANG_ORDER_UOM, SALESORDERDELIVERY.DELIVERYDATE FROM SALESORDER SALESORDER
      LEFT JOIN SALESORDERLINE SALESORDERLINE ON SALESORDER.CODE=SALESORDERLINE.SALESORDERCODE 
      LEFT JOIN SALESORDERDELIVERY SALESORDERDELIVERY ON SALESORDERLINE.SALESORDERCODE=SALESORDERDELIVERY.SALESORDERLINESALESORDERCODE AND SALESORDERLINE.ORDERLINE=SALESORDERDELIVERY.SALESORDERLINEORDERLINE
      GROUP BY SALESORDER.ORDERPARTNERBRANDCODE, SALESORDERLINE.SALESORDERCODE, SALESORDERLINE.ITEMDESCRIPTION, SALESORDERLINE.SUBCODE03, SALESORDERLINE.SUBCODE05, SALESORDERLINE.BASEPRIMARYUOMCODE,SALESORDERLINE.BASESECONDARYUOMCODE, SALESORDERLINE.EXTERNALREFERENCE,
      SALESORDERLINE.INTERNALREFERENCE, SALESORDERDELIVERY.DELIVERYDATE) C
    ON A.PROJECTCODE = C.SALESORDERCODE AND A.SUBCODE03 = C.SUBCODE03
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
    LEFT JOIN 
      (SELECT USERGENERICGROUP.CODE,USERGENERICGROUP.LONGDESCRIPTION FROM USERGENERICGROUP USERGENERICGROUP) F
    ON A.SUBCODE05=F.CODE";
    $stmt=db2_exec($conn1,$sqlDB2, array('cursor'=>DB2_SCROLLABLE));
    
    ?>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
		  <!-- <a href="#" data-toggle="modal" data-target="#DataNews" class="btn btn-success <?php if($_SESSION['akses']=="biasa"){ echo "disabled";} ?>"><i class="fa fa-plus-circle"></i> Add</a> -->
          </div>
          <div class="box-body">
            <table width="100%" id="example2" class="table table-bordered table-hover table-striped">
              <thead class="btn-primary">
                <tr>
                  <th rowspan="2" width="2%" align="center">No</th>
                  <th rowspan="2" width="5%" align="center">No Demand</th>
                  <th rowspan="2" width="5%" align="center">No Production Order</th>
                  <th rowspan="2" width="9%" align="center">Langganan</th>
                  <th rowspan="2" width="9%" align="center">Buyer</th>
                  <th rowspan="2" width="4%" align="center">No Order</th>
                  <th rowspan="2" width="4%" align="center">No PO</th>
                  <th rowspan="2" width="4%" align="center">No Hanger</th>
                  <th rowspan="2" width="15%" align="center">Jenis Kain</th>
                  <th rowspan="2" width="4%" align="center">Lebar</th>
                  <th rowspan="2" width="4%" align="center">Gramasi</th>
                  <th rowspan="2" width="4%" align="center">Warna</th>
                  <th rowspan="2" width="4%" align="center">No Warna</th>
                  <th rowspan="2" width="4%" align="center">Qty Netto</th>
                  <th width="4%" colspan="2" align="center">Qty Order</th>
                  <th rowspan="2" width="4%" align="center">Tgl Kirim</th>
                </tr>
                <tr>
                  <th width="4%">Kg</th>
                  <th width="4%">Yard</th>
                </tr>
              </thead>
              <tbody>
                <?php
  $col=0;
  $no=1;
  while ($rowdb2 = db2_fetch_assoc($stmt)) {
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
      $bgcolor = ($col++ & 1) ? 'gainsboro' : 'antiquewhite'; ?>
                <tr align="center" bgcolor="<?php echo $bgcolor; ?>">
                  <td align="center"><?php echo $no; ?></td>
                  <td align="left"><?php echo $rowdb2['DEMANDNO']; ?></td>
                  <td align="left"><?php echo $rowdb2['PRODUCTIONORDERCODE']; ?></td>
                  <td align="left"><?php echo $rowdb2['LEGALNAME1']; ?></td>
                  <td align="left"><?php echo $rowdb2['ORDERPARTNERBRANDCODE']; ?></td>
                  <td align="left"><?php echo $rowdb2['SALESORDERCODE']; ?></td>
                  <td align="left"><?php echo $rowdb2['EXTERNALREFERENCE']; ?></td>
                  <td align="left"><?php echo $rowdb2['SUBCODE02']."-".$rowdb2['SUBCODE03']; ?></td>
                  <td align="left"><?php echo $rowdb2['ITEMDESCRIPTION']; ?></td>
                  <td align="left"><?php echo $vallebar; ?></td>
                  <td align="left"><?php echo $valgramasi; ?></td>
                  <td align="left"><?php echo $rowdb2['WARNA']; ?></td>
                  <td align="left"><?php echo $rowdb2['NO_WARNA']; ?></td>
                  <td align="left"><?php echo $rowdb2['QTY_NETTO']." ".$rowdb2['BASEPRIMARYUOMCODE']; ?></td>
                  <td align="left"><?php echo $rowdb2['QTY_ORDER']." ".$rowdb2['QTY_ORDER_UOM']; ?></td>
                  <td align="left"><?php echo $rowdb2['QTY_PANJANG_ORDER']." ".$rowdb2['QTY_PANJANG_ORDER_UOM']; ?></td>
                  <td align="left"><?php echo $rowdb2['DELIVERYDATE']; ?></td>
                </tr>
                <?php $no++;} ?>
              </tbody>
            </table>
		  <div class="modal fade modal-super-scaled" id="DataNews">
          <div class="modal-dialog" style="width: 90%;">
            <div class="modal-content">
            <form class="form-horizontal" name="modal_popup" data-toggle="validator" method="post" action="SimpanNews" enctype="multipart/form-data">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data News</h4>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                  <label for="nama" class="col-md-2 control-label">Line News</label>
                  <div class="col-md-10">
                  <textarea name="line_news" rows="10" class="form-control" id="line_news"></textarea>
                  <span class="help-block with-errors"></span>
                  </div>
                  </div>    
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Save</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
  </div>
          <!-- /.modal-dialog -->
</div>
          <!-- Modal Popup untuk delete-->
	<div class="modal fade" id="delNews" tabindex="-1">
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
  
		  <div id="NewsEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

          </div>
  </body>

</html>
	  <script>
	  function confirm_del(delete_url) {
                $('#delNews').modal('show', {
                  backdrop: 'static'
                });
                document.getElementById('del_link').setAttribute('href', delete_url);
              }
	  </script>
