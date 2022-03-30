<?php
include './header.php';
$id_peserta = $_GET['id'];
$peserta = $database->queryAssoc("SELECT * FROM tbl_peserta pa JOIN tbl_nilai nl ON pa.nilai = nl.id_nilai WHERE pa.id_peserta = '$id_peserta'");
$aspek_intelegensi = round((((40 / 100) * $peserta['nilai_x'] + (60 / 100) * $peserta['nilai_y']) / 2));
$aspek_numerical_ability = round((((30 / 100) * $peserta['nilai_z']) + (70 / 100) * $peserta['nilai_w']) / 2);
?>
<div class="row d-flex justify-content-center">
    <div class="col-11 ">
        <div class="row">
            <div class="col-6">
                <table class="table" id="peserta">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $peserta['nama_peserta']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?= $peserta['email_peserta']; ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <table class="mt-2 table table-bordered">
            <tr>
                <td>Aspek</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Aspek Intelegensi</td>
                <td style="vertical-align: middle; text-align: center;"><?= ($aspek_intelegensi == 1 ? 'v' : ''); ?></td>
                <td style="vertical-align: middle; text-align: center;"><?= ($aspek_intelegensi == 2 ? 'v' : ''); ?></td>
                <td style="vertical-align: middle; text-align: center;"><?= ($aspek_intelegensi == 3 ? 'v' : ''); ?></td>
                <td style="vertical-align: middle; text-align: center;"><?= ($aspek_intelegensi == 4 ? 'v' : ''); ?></td>
                <td style="vertical-align: middle; text-align: center;"><?= ($aspek_intelegensi == 5 ? 'v' : ''); ?></td>
            </tr>
            <tr>
                <td>Aspek Numerical Ability</td>
                <td style="vertical-align: middle; text-align: center;"><?= ($aspek_numerical_ability == 1 ? 'v' : ''); ?></td>
                <td style="vertical-align: middle; text-align: center;"><?= ($aspek_numerical_ability == 2 ? 'v' : ''); ?></td>
                <td style="vertical-align: middle; text-align: center;"><?= ($aspek_numerical_ability == 3 ? 'v' : ''); ?></td>
                <td style="vertical-align: middle; text-align: center;"><?= ($aspek_numerical_ability == 4 ? 'v' : ''); ?></td>
                <td style="vertical-align: middle; text-align: center;"><?= ($aspek_numerical_ability == 5 ? 'v' : ''); ?></td>
            </tr>
        </table>
    </div>
</div>


<?php include './footer.php'; ?>