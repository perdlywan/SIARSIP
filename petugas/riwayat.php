<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow mb-5">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"> <i class="fas fa-download"></i> Riwayat Unduh</h6>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped display rsponesive wrap mt-3" cellspacing="0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Waktu Unduh</th>
                                <th>Pegawai</th>
                                <th>Arsip Yang Diunduh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $saya = $_SESSION['id'];
                            $arsip = mysqli_query($koneksi, "SELECT * FROM riwayat,arsip,user WHERE riwayat_arsip = id_arsip AND riwayat_user=id_user AND petugas_arsip = '$saya' ORDER BY id_riwayat DESC");
                            while ($r = mysqli_fetch_assoc($arsip)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo date('H:i:s  d-m-Y', strtotime($r['waktu_unduh'])) ?></td>
                                    <td><?php echo $r['nama_user'] ?></td>
                                    <td><a style="color: blue" href="arsip_preview.php?id=<?php echo $r['id_arsip']; ?>"><?php echo $r['nama_file'] ?></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>