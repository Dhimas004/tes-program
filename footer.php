<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

<script>
    $(document).ready(function() {
        $('.edit-peserta').click(function() {
            let id_peserta = $(this).data('id');
            let nama = $(this).data('nama');
            let email = $(this).data('email');
            let id_nilai = $(this).data('nilai');
            let nilai_x = $(this).data('nilai-x');
            let nilai_y = $(this).data('nilai-y');
            let nilai_z = $(this).data('nilai-z');
            let nilai_w = $(this).data('nilai-w');
            $('#edit-peserta input[name="id_nilai"]').val(id_nilai);
            $('#edit-peserta input[name="id_peserta"]').val(id_peserta);
            $('#edit-peserta input[name="nama"]').val(nama);
            $('#edit-peserta input[name="email_peserta"]').val(email);
            $('#edit-peserta input[name="nilai_x"]').val(nilai_x);
            $('#edit-peserta input[name="nilai_y"]').val(nilai_y);
            $('#edit-peserta input[name="nilai_z"]').val(nilai_z);
            $('#edit-peserta input[name="nilai_w"]').val(nilai_w);
        })
    })
</script>
</body>

</html>