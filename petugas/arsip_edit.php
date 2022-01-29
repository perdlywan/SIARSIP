<?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-cloud-upload-alt"></i> EDIT ARSIP</h6>
                </div>
                <div class="card-body">
                    <?php
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "SELECT * FROM arsip WHERE id_arsip='$id'");
                    while ($a = mysqli_fetch_array($data)) {
                    ?>
                        <form action="arsip_update.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Kode Arsip</label>
                                <input type="hidden" name="id" value="<?php echo $a['id_arsip']; ?>">
                                <input type="text" class="form-control" name="kode" value="<?php echo $a['kode_arsip']; ?>" required="required">
                            </div>

                            <div class="form-group">
                                <label>Nama File</label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $a['nama_file']; ?>" required="required">
                            </div>

                            <div class="form-group">
                                <label>Pemilik File</label>
                                <select name="pegawai" class="form-control" required>
                                    <option value="">-- Pilih Pegawai</option>
                                    <?php
                                    $pegawai = mysqli_query($koneksi, "SELECT * FROM user");
                                    while ($p = mysqli_fetch_assoc($pegawai)) {
                                    ?>
                                        <option <?php if ($p['id_user'] == $a['oleh']) {
                                                    echo "selected='selected'";
                                                } ?> value="<?php echo $p['id_user']; ?>"><?php echo $p['nama_user']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="">-- Pilih Kategori</option>
                                    <?php
                                    $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                    while ($k = mysqli_fetch_assoc($kategori)) {
                                    ?>
                                        <option <?php if ($k['id_kategori'] == $a['kategori_arsip']) {
                                                    echo "selected='selected'";
                                                } ?> value="<?php echo $k['id_kategori']; ?>"><?php echo $k['kategori']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" required="required"><?php echo $a['keterangan_arsip']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>File</label><br>
                                <input type="file" name="file"><br>
                                <small>Kosongkan jika tidak ingin mengubah file</small>
                            </div>

                            <div class="form-group">
                                <a href="arsip.php" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                        <?php
                    }
                        ?>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'; ?>