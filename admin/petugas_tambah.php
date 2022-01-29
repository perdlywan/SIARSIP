<?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow mb-3">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-user-tie"></i> TAMBAH KOORDINATOR</h6>
                </div>
                <div class="card-body">
                    <form action="petugas_aksi.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" name="nip" required="required">
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" required="required">
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" required="required">
                        </div>

                        <div class="form-group">
                            <label>Pangkat</label>
                            <input type="text" class="form-control" name="pangkat" required="required">
                        </div>

                        <div class="form-group">
                            <label>Golongan</label>
                            <input type="text" class="form-control" name="golongan" required="required">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required="required">
                        </div>

                        <div class="form-group">
                            <label>Foto</label><br>
                            <input type="file" name="foto"><br>
                            <small>*Format file (gif, png, jpg, jpeg)</small>
                        </div>

                        <div class="form-group">
                            <a href="petugas.php" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
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