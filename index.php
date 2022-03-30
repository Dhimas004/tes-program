<?php
include './header.php';
?>
<div class="d-flex justify-content-around">
    <div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Tambah Data</h5>
            </div>
            <div class="card-body">
                <form action="function/insert.php" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Peserta</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="nilai_x" class="form-label">Nilai X</label>
                        <input type="number" class="form-control" name="nilai_x" id="nilai_x" min=1 max=33>
                    </div>
                    <div class="mb-3">
                        <label for="nilai_y" class="form-label">Nilay Y</label>
                        <input type="number" class="form-control" name="nilai_y" id="nilai_y" min=1 max=23>
                    </div>
                    <div class="mb-3">
                        <label for="nilai_z" class="form-label">Nilai Z</label>
                        <input type="number" class="form-control" name="nilai_z" id="nilai_z" min=1 max=18>
                    </div>
                    <div class="mb-3">
                        <label for="nilai_w" class="form-label">Nilai W</label>
                        <input type="number" class="form-control" name="nilai_w" id="nilai_w" min=1 max=13>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <?php
        ?>
        <table class="table table-bordered">
            <tr>
                <td style="vertical-align: middle; text-align:center;" rowspan="2">Nama</td>
                <td style="vertical-align: middle; text-align:center;" rowspan="2">Email</td>
                <td style="text-align: center" colspan="4">Nilai</td>
                <td style="vertical-align: middle; text-align:center;" rowspan="2">Action</td>
            </tr>
            <tr>
                <td>X</td>
                <td>Y</td>
                <td>Z</td>
                <td>W</td>
            </tr>
            <?php
            foreach ($peserta->get() as $valuePeserta) :
            ?>
                <tr>
                    <td style="vertical-align: middle;"><?= $valuePeserta['nama_peserta']; ?></td>
                    <td style="vertical-align: middle;"><?= $valuePeserta['email_peserta']; ?></td>
                    <td style="vertical-align: middle;"><?= $valuePeserta['nilai_x']; ?></td>
                    <td style="vertical-align: middle;"><?= $valuePeserta['nilai_y']; ?></td>
                    <td style="vertical-align: middle;"><?= $valuePeserta['nilai_z']; ?></td>
                    <td style="vertical-align: middle;"><?= $valuePeserta['nilai_w']; ?></td>
                    <td>
                        <a class="btn btn-primary" href="laporan.php?id=<?= $valuePeserta['id_peserta'] ?>" onclick="window.open(this.href,'targetWindow',
                                   `toolbar=no,
                                    location=no,
                                    status=no,
                                    menubar=no,
                                    scrollbars=yes,
                                    resizable=yes,
                                    width=500,
                                    height=500`);
 return false;">Lihat Laporan</a>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
            <tr>
        </table>
    </div>
</div>
<?php
include './footer.php';
?>