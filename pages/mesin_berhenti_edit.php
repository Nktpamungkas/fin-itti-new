<?php
session_start();
include("../koneksi.php");
    $modal_id=$_GET['id'];
	$modal=mysql_query("SELECT * FROM `tbl_schedule` WHERE id='$modal_id' ");
while($r=mysql_fetch_array($modal)){
?>
         
<div class="modal-dialog modal1 ">
            <div class="modal-content">
            <form class="form-horizontal" name="modal_popup" data-toggle="validator" method="post" action="EditMesinBerhenti" enctype="multipart/form-data">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Fin-ITTI</h4>
              </div>
              <div class="modal-body">
                  <input type="hidden" id="id" name="id" value="<?php echo $r[id];?>">
				  <input type="hidden" id="personil" name="personil" value="<?php echo $_SESSION[usrid];?>"> 
				  <div class="form-group">
                  <label for="istirahat" class="col-md-4 control-label">Lama Istirahat</label>
                  <div class="col-md-5">
                  <select name="istirahat" class="form-control" id="istirahat">
						<option value="">Pilih</option>
						<option value="30">30 Menit</option>
						<option value="60">60 Menit</option>
						<option value="90">90 Menit</option>
						
				  </select>
                  <span class="help-block with-errors"></span>
                  </div>
                  </div>
				  <div class="form-group">
                  <label for="catatan" class="col-md-4 control-label">Catatan</label>
                  <div class="col-sm-8">		  
				  <textarea name="catatan" class="form-control" id="catatan" placeholder="catatan..."></textarea>
				  <span class="help-block with-errors"></span>	  
				  </div>			  
					  
		</div>
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
