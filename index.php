<?php
include './class.php';
$database = new database;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="d-flex justify-content-around">
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
        <table class="table table-bordered">
            <tr>
                <td style="vertical-align: middle;" rowspan="2">Nama</td>
                <td style="vertical-align: middle;" rowspan="2">Email</td>
                <td style="text-align: center" colspan="4">Nilai</td>
                <td style="vertical-align: middle;" rowspan="2">Action</td>
            </tr>
            <tr>
                <td>X</td>
                <td>Y</td>
                <td>Z</td>
                <td>W</td>
            </tr>
            <tr>
                <td>Dhimas Yudhatama</td>
                <td>dimasyudhatama98@gmail.com</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>12</td>
                <td>Lihat Laporan|Edit|Hapus</td>
            </tr>
            <tr>
        </table>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>