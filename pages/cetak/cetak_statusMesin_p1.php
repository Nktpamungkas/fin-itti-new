<?php
	ini_set("error_reporting", 1);
	session_start();
	include "../../koneksi.php";

    if($_GET['no_mc']){
        $where_no_mc	= "no_mesin = '$_GET[no_mc]' AND";
    }else{
        $where_no_mc	= "";
    }

    if($_GET['g_shift']){
        $where_gShift	= "g_shift = '$_GET[g_shift]' AND";
    }else{
        $where_gShift	= "";
    }

    if($_GET['awal'] && $_GET['akhir']){
        $where1		= "DATE_FORMAT(tgl_update,'%Y-%m-%d') BETWEEN '$_GET[awal]' and '$_GET[akhir]'";
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
                                tgl_update
                            FROM
                                tbl_schedule 
                            WHERE
                                $where_no_mc $where_gShift $where1
                            GROUP BY
                                id
                            ORDER BY
                                no_mesin ASC, g_shift, no_urut ASC");
?>
<link href="styles_cetak.css" rel="stylesheet" type="text/css">
<style>
    .hurufvertical {
        writing-mode:tb-rl;
        -webkit-transform:rotate(-90deg);
        -moz-transform:rotate(-90deg);
        -o-transform: rotate(-90deg);
        -ms-transform:rotate(-90deg);
        transform: rotate(180deg);
        white-space:nowrap;
        float:left;
    }	

    input{
        text-align:center;
        border:hidden;
    }
    @media print {
        ::-webkit-input-placeholder { /* WebKit browsers */
            color: transparent;
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color: transparent;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color: transparent;
        }
        :-ms-input-placeholder { /* Internet Explorer 10+ */
            color: transparent;
        }
        .pagebreak { page-break-before:always; }
        .header {display:block}
        table thead 
        {
            display: table-header-group;
        }
    }	
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<table  width="100%">
    <thead>
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
            $qCeks = mysqli_query($con, "SELECT nokk,tgl_buat,no_mesin FROM tbl_produksi where nokk='" . $rowd['nokk'] . "' and proses like '" . $rowd['proses'] . "%' and tgl_buat >= '" . $rowd['tgl_update'] . "' and shift='" . $rowd['g_shift'] . "'");
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
                        <i><?php echo $rowd['nokk']; ?></i><br />
                        <!-- <i style="color:red;"><strong><?php echo $rowd['catatan']; ?></strong></i><br /> -->
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