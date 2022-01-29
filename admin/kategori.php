<?php
include 'header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow mb-5">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-folder-open"></i> DATA KATEGORI</h6>
                </div>
                <div class="card-body">
                    <a href="kategori_tambah.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Kategori</a><br><br>

                    <table id="example" class="table table-striped display rsponesive wrap mt-3" cellspacing="0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Kategori</th>
                                <th>Katerangan</th>
                                <th width="10%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                            while ($k = mysqli_fetch_assoc($kategori)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $k['kategori'] ?></td>
                                    <td><?php echo $k['keterangan'] ?></td>
                                    <td>
                                        <a href="kategori_edit.php?id=<?php echo $k['id_kategori']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="kategori_hapus.php?id=<?php echo $k['id_kategori']; ?>" onclick='return confirm("Yakin Hapus Kategori <?php echo $k['kategori'] ?> ?")' class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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