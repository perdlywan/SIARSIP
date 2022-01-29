<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col md-12">
            <div class="card border-0 shadow mb-5">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"> <i class="fas fa-eye"></i> PREVIEW ARSIP</h6>
                </div>
                <div class="card-body">
                    <a href="arsip.php" class="btn btn-sm btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a> <br> <br>

                    <?php
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "SELECT * FROM arsip,kategori,petugas,user WHERE petugas_arsip=id_petugas AND kategori_arsip=id_kategori AND oleh=id_user AND id_arsip='$id' ORDER BY id_arsip DESC");
                    while ($d = mysqli_fetch_assoc($data)) {
                    ?>
                        <div class="row">
                            <div class="col-lg-4">
                                <table class="table">
                                    <tr>
                                        <th>Kode Arsip</th>
                                        <td><?php echo $d['kode_arsip']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Upload</th>
                                        <td><?php echo date('H:i:s  d-m-Y', strtotime($d['waktu_arsip'])) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama File</th>
                                        <td><?php echo $d['nama_file']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td><?php echo $d['kategori']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis File</th>
                                        <td><?php echo $d['jenis_file']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pemilik File</th>
                                        <td><?php echo $d['nama_user']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pengupload</th>
                                        <td><?php echo $d['nama_petugas']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <td><?php echo $d['keterangan_arsip']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-8">

                                <?php
                                if ($d['jenis_file'] == "png" || $d['jenis_file'] == "jpg" || $d['jenis_file'] == "gif" || $d['jenis_file'] == "jpeg") {
                                ?>
                                    <img src="../assets/arsip/<?php echo $d['file_arsip']; ?>" width="630" class="img-fluid">

                                <?php
                                } elseif ($d['jenis_file'] == "pdf") {
                                ?>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="../assets/arsip/<?php echo $d['file_arsip']; ?>" allowfullscreen></iframe>
                                    </div>



                                <?php
                                } elseif ($d['jenis_file'] == "mp4") {
                                ?>

                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="../assets/arsip/<?php echo $d['file_arsip']; ?>" allowfullscreen></iframe>
                                    </div>

                                <?php
                                } else {
                                ?>
                                    <p>Preview tidak tersedia, silahkan <a target="_blank" style="color: blue" href="../assets/arsip/<?php echo $d['file_arsip']; ?>">Download di sini.</a></p>
                                <?php
                                }
                                ?>

                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>