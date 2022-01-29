<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow mb-5">
                <div class="card-header bg-primary text-white">
                    <h6 class="m-0 font-weight-bold"><i class="fas fa-folder-open"></i> DATA KATEGORI</h6>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped display rsponesive wrap mt-3" cellspacing="0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Kategori</th>
                                <th>Katerangan</th>
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