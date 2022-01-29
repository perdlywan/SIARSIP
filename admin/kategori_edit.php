<?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-folder-open"></i> EDIT KATEGORI</h6>
                </div>
                <div class="card-body">
                    <?php
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori = '$id'");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <form action="kategori_update.php" method="POST">
                            <div class="form-group">
                                <label for="nama_kategori" class="font-weight-bold">Nama Kategori</label>
                                <input type="hidden" name="id" value="<?php echo $d['id_kategori']; ?>">
                                <input type="text" class="form-control" name="nama_kategori" required" value="<?php echo $d['kategori']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="keterangan" class="font-weight-bold">Keterangan</label>
                                <textarea name="keterangan" class="form-control" required><?php echo $d['keterangan']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <a href="kategori.php" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                        </form>
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