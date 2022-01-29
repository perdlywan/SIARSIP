<?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 border-right">
            <?php

            $id = $_SESSION['id'];
            $saya = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
            $s = mysqli_fetch_assoc($saya)
            ?>

            <div class="card">
                <div class="d-flex flex-column align-items-center text-center p-3">
                    <?php
                    if ($s['foto'] == "") {
                    ?>
                        <img src="<?= 'https://ui-avatars.com/api/?name=' . $_SESSION['nama'] . '&background=4e73df&color=ffffff&size=150'; ?>" class="img-profile rounded-circle">
                    <?php
                    } else {
                    ?>
                        <img src="../assets/img/user/<?php echo $s['foto']; ?>" class="img-profile rounded-circle" width="150">
                    <?php
                    }
                    ?>

                    <span class="font-weight-bold mt-3"><?php echo $_SESSION['nama']; ?></span><span class="text-black-50">Pegawai</span><span> </span>
                </div>
            </div>

        </div>
        <div class="col-md-9 mb-3">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "sukses") {
                    echo "<div class='alert alert-success'>Profile anda berhasil diupdate!</div>";
                }
            } else if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<div class='alert alert-warning'>Profile gagal diupdate!</div>";
                }
            }
            ?>

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold">Data Diri</h6>
                </div>
                <div class="card-body">
                    <form action="profile_act.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Nip</label>
                            <input type="text" class="form-control" name="nip" required="required" value="<?php echo $s['nip']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" required="required" value="<?php echo $s['nama_user']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" required="required" value="<?php echo $s['jabatan']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Pangkat</label>
                            <input type="text" class="form-control" name="pangkat" required="required" value="<?php echo $s['pangkat']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Golongan</label>
                            <input type="text" class="form-control" name="golongan" required="required" value="<?php echo $s['golongan']; ?>">
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
                            <a href="index.php" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
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