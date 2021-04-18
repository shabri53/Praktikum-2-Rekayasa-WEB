<?php require 'curl_simak.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css", >
    <title>Data Mahasiswa TKJ PNUP</title>
</head>
<body>
    <h3>Data Mahasiswa Teknik Komputer dan Jaringan Angkatan 2017 Politeknik Negeri Ujung Pandang</h3>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Nim</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
    </table>
</body>
<script src="./test.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "ajax": './json.txt',
            "columns": [
        {"data": "nama"},
        {"data": "kelas"},
        {"data": "nim"},
        {"data": "jk"}
    ]
        } );
    } );
</script>
</html>