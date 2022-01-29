<?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow mb-3">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-user"></i> EDIT USER</h6>
                </div>
                <div class="card-body">
                    <?php
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
                    while ($u = mysqli_fetch_array($data)) {
                    ?>
                        <form action="user_update.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Nip</label>
                                <input type="hidden" name="id" value="<?php echo $u['id_user']; ?>">
                                <input type="text" class="form-control" name="nip" required="required" value="<?php echo $u['nip']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama Pegawai</label>
                                <input type="text" class="form-control" name="nama" required="required" value="<?php echo $u['nama_user']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" required="required" value="<?php echo $u['jabatan']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Pangkat</label>
                                <input type="text" class="form-control" name="pangkat" required="required" value="<?php echo $u['pangkat']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Golongan</label>
                                <input type="text" class="form-control" name="golongan" required="required" value="<?php echo $u['golongan']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                                <small>Kosongkan jika tidak ingin mengubah password.</small>
                            </div>

                            <div class="form-group">
                                <label>Foto</label><br>
                                <input type="file" name="foto"><br>
                                <small>Kosongkan jika tidak ingin mengubah foto.</small>
                            </div>

                            <div class="form-group">
                                <a href="user.php" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>