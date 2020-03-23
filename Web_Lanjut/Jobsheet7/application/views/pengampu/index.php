<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>pengampu/tambah" class="btn btn-primary"> Tambah Data</a>
        </div>
    </div>

    <br>

    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">NO</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Matkul</th>
        <th scope="col">Kelas</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $nomor = 1; ?>
        <?php foreach ($mengampu as $mhs) : ?>
            <tr class="even gradeC">
                <td><?php echo $nomor; ?></td>
                <td><?php echo $mhs['nim'] ?></td>
                <td><?php echo $mhs['nama']; ?></td>
                <td><?php echo $mhs['nama_matkul']; ?></td>
                <td><?php echo $mhs['nama_kelas']; ?></td>
                <td>
                    <a href="<?= base_url(); ?>pengampu/ubah" class="btn btn-warning">Ubah</a>
                    <a href="" class="btn btn-danger">Hapus</a>
                </td>

            </tr>
            <?php $nomor++; ?>
        <?php endforeach; ?>
    </tbody>
    </table>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>