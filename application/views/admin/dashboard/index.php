<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/argon.css?v=1.2.0" type="text/css">
    <!-- datatable -->
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" type="text/css">
</head>

<body>
    <?php $this->load->view('admin/template/sidenav') ?>
    <!-- Main content -->
    <div class="main-content" id="panel">

        <?php $this->load->view('admin/template/topnav') ?>

        <!-- Header -->
        <?php $this->load->view('admin/template/header') ?>

        <!-- Page content -->
        <div class="container-fluid mt-2">

            <!-- content -->
            <?php

            if ($page == 'Raport (semua jenis)') {
                $this->load->view('admin/content/dashboard');
            } else if ($page == 'Mid Gasal') {
                $this->load->view('admin/content/table_mid');
            } else if ($page == 'Data Siswa') {
                $this->load->view('admin/content/table_siswa');
            }
            ?>

            <!-- Footer -->
            <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="copyright text-center  text-lg-left  text-muted">
                            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                                target="_blank">Creative Tim</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">

                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">


                    <p class="modal-title font-weight-bold" id="modaltitle"><?= $page ?></p>
                </div>
                <div class="modal-body ">
                    <form action="<?= base_url('admin/import_') ?><?= $modal ?>" method="post"
                        id="import_csv_<?= $modal ?>" enctype="multipart/form-data">
                        <label>Select CSV File</label>
                        <input type="file" name="csv_file" id="csv_file" required accept=".csv" />
                        <button name="import_csv_<?= $modal ?>" id="import_<?= $modal ?>_btn"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm modalbtn"><i
                                class="fas fa-upload fa-sm "></i> Import CSV</button>
                    </form>

                    <p>Contoh file excel untuk mid (xlsx)<a href="<?= base_url('excel') ?>/templates_mid.xlsx">klik</a>
                    </p>
                    <p>Contoh file excel untuk mid (csv)<a href="<?= base_url('excel') ?>/templates_mid.csv">klik</a>
                    </p>
                    <p>Contoh file excel untuk SEMESTER 1 (xlsx)<a
                            href="<?= base_url('excel') ?>/templates_semester1.xlsx">klik</a></p>
                    <p>Contoh file excel untuk SEMESTER 1 (csv)<a
                            href="<?= base_url('excel') ?>/templates_semester1.csv">klik</a></p>
                    <p>Contoh file excel untuk list siswa (xlsx)<a
                            href="<?= base_url('excel') ?>/templates_siswa.xlsx">klik</a></p>
                    <p>Contoh file excel untuk list siswa (csv)<a
                            href="<?= base_url('excel') ?>/templates_siswa.csv">klik</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?= base_url() ?>assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url() ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="<?= base_url() ?>assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="<?= base_url() ?>assets/js/argon.js?v=1.2.0"></script>

    <!-- DATATABLE JAVASCRIPT LIBRARY -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>

    <script>
    $(document).ready(function() {
        $('.modalbtn').on('click', function() {
            $('#editmodal').modal('show');
        });
    });

    // DataTable, untuk Pencarian
    var table = $('#tabel1').DataTable({
        initComplete: function() {
            // Apply the search
            this.api().columns().every(function() {
                var that = this;

                $('input', this.footer()).on('keyup change clear', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        }
    });

    //untuk tampilkan button export 
    $('#tabel1').DataTable({
        destroy: true,
        dom: 'Bfrtip',
        buttons: [
            'pageLength',
            'excelHtml5',
            'csvHtml5',
        ],
        "lengthMenu": [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, "All"]
        ],
    });

    $('#import_csv_mid').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url(); ?>admin/import_mid",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#import_mid_btn').html('Importing...');
            },
            success: function(data) {
                $('#import_csv_mid')[0].reset();
                $('#import_mid_btn').attr('disabled', false);
                $('#import_mid_btn').html('Import Done');
                alert("Import berhasil!");
                location.reload();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("Gagal Menyimpan");
            }
        })
    });

    $('#import_csv_semester').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url(); ?>admin/import_semester",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#import_semester_btn').html('Importing...');
            },
            success: function(data) {
                $('#import_csv_semester')[0].reset();
                $('#import_semester_btn').attr('disabled', false);
                $('#import_semester_btn').html('Import Done');
                alert("Import berhasil!");
                location.reload();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("Gagal menyimpan");
            }
        })
    });
    $('#import_csv_siswa').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url(); ?>admin/import_siswa",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#import_siswa_btn').html('Importing...');
            },
            success: function(data) {
                $('#import_csv_siswa')[0].reset();
                $('#import_siswa_btn').attr('disabled', false);
                $('#import_siswa_btn').html('Import Done');
                alert("Import berhasil!");
                location.reload();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("Gagal menyimpan");
            }
        })
    });
    </script>
</body>

</html>