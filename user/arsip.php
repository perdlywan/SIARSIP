<?php include 'header.php'; ?>
<div class="container-fluid">
    <form method="GET" action="#">
        <div class="row">
            <div class="col-lg-4 mb-2">
                <div class="form-group">
                    <select class="form-control" name="kategori" required="required">
                        <option value="">-- Pilih kategori</option>
                        <?php
                        $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                        while ($k = mysqli_fetch_array($kategori)) {
                        ?>
                            <option <?php if (isset($_GET['kategori'])) {
                                        if ($_GET['kategori'] == $k['id_kategori']) {
                                            echo "selected='selected'";
                                        }
                                    } ?> value="<?php echo $k['id_kategori']; ?>"><?php echo $k['kategori']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <input type="submit" class="btn btn-primary" value="Tampilkan">
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow mb-5">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"> <i class="fas fa-envelope-open-text"></i> DATA ARSIP</h6>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                    ?>
                            <div class="alert alert-danger">File arsip gagal diupload. krena demi keamanan file .php tidak diperbolehkan.</div>
                        <?php
                        } else {
                        ?>
                            <div class="alert alert-success">Arsip berhasil tersimpan.</div>
                    <?php
                        }
                    }
                    ?>
                    <table id="example" class="table table-striped display rsponesive wrap mt-3" cellspacing="0" style="width: 100%;">
                        <thead>
                            <tr class="text-center">
                                <th width="1%">No</th>
                                <th>Waktu Upload</th>
                                <th>Arsip</th>
                                <th>Kategori</th>
                                <th>Koordinator</th>
                                <th>Keterangan</th>
                                <th width="10%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            if (isset($_GET['kategori'])) {
                                $kategori = $_GET['kategori'];
                                $arsip = mysqli_query($koneksi, "SELECT * FROM arsip,kategori,petugas,user WHERE petugas_arsip=id_petugas AND kategori_arsip=id_kategori AND id_kategori='$kategori' AND oleh=id_user ORDER BY kode_arsip ASC");
                            } else {
                                $arsip = mysqli_query($koneksi, "SELECT * FROM arsip,kategori,petugas,user WHERE petugas_arsip=id_petugas AND kategori_arsip=id_kategori AND oleh=id_user ORDER BY kode_arsip ASC");
                            }

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
                                        <a target="_blank" class="btn btn-primary btn-sm" href="arsip_download.php?id=<?php echo $a['id_arsip']; ?>"><i class="fa fa-download"></i></a>
                                        <a href="arsip_preview.php?id=<?php echo $a['id_arsip']; ?>" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
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