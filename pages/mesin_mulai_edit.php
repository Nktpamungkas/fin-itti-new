<?php
session_start();
include("../koneksi.php");
    $modal_id=$_GET['id'];
	$modal=mysql_query("SELECT * FROM `tbl_schedule` WHERE id='$modal_id' ");
while($r=mysql_fetch_array($modal)){
?>
         
<div class="modal-dialog modal1 modal-sm">
            <div class="modal-content">
            <form class="form-horizontal" name="modal_popup" data-toggle="validator" method="post" action="EditMesinMulai" enctype="multipart/form-data">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Fin-ITTI</h4>
              </div>
              <div class="modal-body">
                  <input type="hidden" id="id" name="id" value="<?php echo $r[id];?>">
				  <input type="hidden" id="personil" name="personil" value="<?php echo $_SESSION[nama1];?>"> 
				  <div align="center">Mulai Finishing</div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" >OK</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
  </div>
          <!-- /.modal-dialog -->
          <?php } ?>
