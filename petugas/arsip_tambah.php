<?php
include 'header.php';
$query = mysqli_query($koneksi, "SELECT max(kode_arsip) as kodeTerbesar FROM arsip");
$data = mysqli_fetch_assoc($query);
$kodeArsip = $data['kodeTerbesar'];

$urutan = (int) substr($kodeArsip, 3, 3);

$urutan++;

$huruf = "KD-";
$kodeArsip = $huruf . sprintf("%03s", $urutan);
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow mb-5">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-cloud-upload-alt"></i> TAMBAH ARSIP</h6>
                </div>
                <div class="card-body">
                    <form action="arsip_aksi.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Kode Arsip</label>
                            <input type="text" class="form-control" name="kode" required="required" value="<?php echo $kodeArsip; ?>">
                        </div>

                        <div class="form-group">
                            <label>Nama File</label>
                            <input type="text" class="form-control" name="nama" required="required">
                        </div>

                        <div class="form-group">
                            <label>Pemilik File</label>
                            <select name="pegawai" class="form-control" required>
                                <option value="">-- Pilih Pegawai</option>
                                <?php
                                $pegawai = mysqli_query($koneksi, "SELECT * FROM user");
                                while ($p = mysqli_fetch_assoc($pegawai)) {
                                ?>
                                    <option value="<?php echo $p['id_user']; ?>"><?php echo $p['nama_user'] ?></option>
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
                                    <option value="<?php echo $k['id_kategori']; ?>"><?php echo $k['kategori']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" name="keterangan" required="required"></textarea>
                        </div>

                        <div class="form-group">
                            <label>File</label><br>
                            <input type="file" name="file" required><br>
                        </div>

                        <div class="form-group">
                            <a href="arsip.php" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
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