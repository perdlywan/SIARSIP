<?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-folder-open"></i> TAMBAH KATEGORI</h6>
                </div>
                <div class="card-body">
                    <form action="kategori_aksi.php" method="POST">
                        <div class="form-group">
                            <label for="nama_kategori" class="font-weight-bold">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" required">
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="font-weight-bold">Keterangan</label>
                            <textarea name="keterangan" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <a href="kategori.php" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>