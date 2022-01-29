<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-5">
            <div class="card border-0 shadow">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-user-tie"></i> DATA KOORDINATOR</h6>
                </div>
                <div class="card-body">
                    <a href="petugas_tambah.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Koordinator</a> <br> <br>

                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "<div class='alert alert-danger mt-2'>Maaf format gambar tidak didukung, silahkan coba lagi!</div>";
                        }
                    }
                    ?>
                    <table id="example" class="table table-striped display rsponesive wrap mt-3" cellspacing="0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Foto</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Pangkat</th>
                                <th>Golongan</th>
                                <th width="10%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $petugas = mysqli_query($koneksi, "SELECT * FROM petugas ORDER BY nama_petugas ASC");
                            while ($p = mysqli_fetch_assoc($petugas)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>
                                        <?php
                                        if ($p['foto'] == "") {
                                        ?>
                                            <img class="img-user" src="../assets/img/user.png" style="width: 50px;">
                                        <?php
                                        } else {
                                        ?>
                                            <img class="img-user" style="width: 50px;" src="../assets/img/petugas/<?php echo $p['foto']; ?>">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $p['nip'] ?></td>
                                    <td><?php echo $p['nama_petugas'] ?></td>
                                    <td><?php echo $p['jabatan'] ?></td>
                                    <td><?php echo $p['pangkat'] ?></td>
                                    <td><?php echo $p['golongan'] ?></td>
                                    <td>
                                        <a href="petugas_edit.php?id=<?php echo $p['id_petugas']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="petugas_hapus.php?id=<?php echo $p['id_petugas']; ?>" onclick='return confirm("Yakin Hapus <?php echo $p['nama_petugas'] ?> ?")'' class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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