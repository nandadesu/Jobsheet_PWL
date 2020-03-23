<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>
            <?= $title ?>
        </title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/css/dataTables.min.css"/>
        <script src="https://cdn.datatables.net/v/dt/dt-1.10.13/dataTables.min.js"></script>
    </head>
    <body>
        <nav class="navar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navar-brand" href="#">CI</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-control="naarNavAllMarkup" aria-expended="false" aria-label="Toogle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div  class="navbar-nav">
                        <a class="nav-item nav-link" href="<?= base_url();?>user/laporan_pdf">Cetak Laporan</a>
                        <a class="nav-item nav-link" href="<?= base_url();?>login/logut">Logout</a>
                    </div>
                </div>
            </div>
        
        </nav>
