<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow mb-5">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"> <i class="fas fa-envelope-open-text"></i> DATA ARSIP</h6>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped display rsponesive wrap mt-3" cellspacing="0" style="width: 100%;">
                        <thead>
                            <tr class="text-center">
                                <th width="1%">No</th>
                                <th>Waktu Upload</th>
                                <th>Arsip</th>
                                <th>Kategori</th>
                                <th>Pengupload</th>
                                <th>Keterangan</th>
                                <th width="15%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $arsip = mysqli_query($koneksi, "SELECT * FROM arsip,kategori,petugas,user WHERE petugas_arsip=id_petugas AND kategori_arsip=id_kategori AND oleh=id_user ORDER BY id_arsip DESC");
                            while ($a = mysqli_fetch_assoc($arsip)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo date('H:i:s d-m-Y', strtotime($a['waktu_arsip'])) ?></td>
                                    <td>
                                        <b>KODE</b> : <?php echo $a['kode_arsip'] ?><br>
                                        <b>Nama</b> : <?php echo $a['nama_file'] ?><br>
                                        <b>Jenis</b> : <?php echo $a['jenis_file'] ?><br>
                                        <b>Pemilik</b> : <?php echo $a['nama_user'] ?><br>
                                    </td>
                                    <td><?php echo $a['kategori'] ?></td>
                                    <td><?php echo $a['nama_petugas'] ?></td>
                                    <td><?php echo $a['keterangan_arsip'] ?></td>
                                    <td>
                                        <a target="_blank" class="btn btn-primary btn-sm" href="../assets/arsip/<?php echo $a['file_arsip']; ?>"><i class="fa fa-download"></i></a>
                                        <a href="arsip_preview.php?id=<?php echo $a['id_arsip']; ?>" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                        <a href="arsip_hapus.php?id=<?php echo $a['id_arsip']; ?>" onclick='return confirm("Yakin Hapus file <?php echo $a['nama_file'] ?> ?")'' class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
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