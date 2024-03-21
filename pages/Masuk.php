<?php
    ini_set("error_reporting", 1);
    session_start();
    include "koneksi.php";
    ?>
    <?php
    $Awal    = isset($_POST['awal']) ? $_POST['awal'] : '';
    $Akhir    = isset($_POST['akhir']) ? $_POST['akhir'] : '';
    $NoMC     = isset($_POST['no_mc']) ? $_POST['no_mc'] : '';
    $Gshft     = isset($_POST['g_shift']) ? $_POST['g_shift'] : '';
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
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Filter KK MASUK Finishing</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <form method="post" enctype="multipart/form-data" name="form2" class="form-horizontal" id="form2">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <select name="proses" class="form-control" id="no_mc">
                                    <!--<option value="">Pilih Mesin</option>-->
                                    <option value="Semua Proses" <?php if ($NoMC == "Semua Proses") {
                                                                    echo "SELECTED";
                                                                } ?>>Semua Proses</option>
                                    <?php
                                        $q_mesin_masuk  = mysqli_query($con, "SELECT DISTINCT proses FROM tbl_masuk");
                                    ?>
                                    <?php while($row_mesin_masuk    = mysqli_fetch_array($q_mesin_masuk)) : ?>
                                        <option value="<?= $row_mesin_masuk['proses'] ?>"><?= $row_mesin_masuk['proses'] ?></option>
                                    <?php endwhile; ?>
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
    </div>
    <div class="row">
        <div class="col-xs-12">
            <form role="form" method="post" enctype="multipart/form-data" name="form1" id="form1" action="">
                <div class="box">
                    <div class="box-header">
                        <a href="FormMasuk" class="btn btn-success <?php if ($_SESSION['aksesFin'] == "biasa") {
                                                                            echo "disabled";
                                                                        } ?>"><i class="fa fa-plus-circle"></i> Tambah Demand</a>
                        <!-- <a href="FormMasukNokk" class="btn btn-info <?php if ($_SESSION['aksesFin'] == "biasa") {
                                                                            echo "disabled";
                                                                        } ?>"><i class="fa fa-plus-circle"></i> Tambah NoKK</a> -->
                    </div>
                </div>
            </form>
            <div class="box">
                <div class="box-body">
                    <table id="example5" class="table table-bordered table-hover table-striped" width="100%">
                        <thead class="bg-purple">
                            <tr>
                                <th width="281"><div align="center">No Demand</div></th>
                                <th width="281"><div align="center">No Kartu Kerja</div></th>
                                <th width="281"><div align="center">Pelanggan</div></th>
                                <th width="281"><div align="center">Buyer</div></th>
                                <th width="281"><div align="center">No Order</div></th>
                                <th width="281"><div align="center">Jenis Kain</div></th>
                                <th width="281"><div align="center">Warna</div></th>
                                <th width="281"><div align="center">No Warna</div></th>
                                <th width="281"><div align="center">Proses</div></th>
                                <th width="281"><div align="center">Personil</div></th>
                                <th width="281"><div align="center">Opsi</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $q_masuk    = mysqli_query($con, "SELECT * FROM tbl_masuk WHERE `status` = 'KK MASUK'");
                            ?>
                            <?php while ($row_masuk = mysqli_fetch_array($q_masuk)) : ?>
                                <tr>
                                    <td><?= $row_masuk['nodemand'] ?></td>
                                    <td><?= $row_masuk['nokk'] ?></td>
                                    <td><?= $row_masuk['langganan'] ?></td>
                                    <td><?= $row_masuk['buyer'] ?></td>
                                    <td><?= $row_masuk['no_order'] ?></td>
                                    <td><?= $row_masuk['jenis_kain'] ?></td>
                                    <td><?= $row_masuk['warna'] ?></td>
                                    <td><?= $row_masuk['no_warna'] ?></td>
                                    <td><?= $row_masuk['proses'] ?></td>
                                    <td><?= $row_masuk['personil'] ?></td>
                                    <td>
                                        Edit | Hapus
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>