<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow mb-5">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-user"></i> DATA PEGAWAI</h6>
                </div>
                <div class="card-body">
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $user = mysqli_query($koneksi, "SELECT * FROM user ORDER BY nama_user ASC");
                            while ($u = mysqli_fetch_assoc($user)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>
                                        <?php
                                        if ($u['foto'] == "") {
                                        ?>
                                            <img class="img-user" src="../assets/img/user.png" style="width: 50px;">
                                        <?php
                                        } else {
                                        ?>
                                            <img class="img-user" style="width: 50px;" src="../assets/img/user/<?php echo $u['foto']; ?>">
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $u['nip'] ?></td>
                                    <td><?php echo $u['nama_user'] ?></td>
                                    <td><?php echo $u['jabatan'] ?></td>
                                    <td><?php echo $u['pangkat'] ?></td>
                                    <td><?php echo $u['golongan'] ?></td>
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