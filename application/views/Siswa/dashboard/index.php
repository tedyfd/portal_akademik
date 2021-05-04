<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title><?= $title ?></title>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
</head>

<body>
    <div id="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
    <?php $this->load->view('siswa/template/sidenav') ?>
    <!-- Main content -->
    <div class="main-content" id="panel">

        <?php $this->load->view('siswa/template/topnav') ?>

        <!-- Header -->
        <?php $this->load->view('siswa/template/header') ?>

        <!-- Page content -->
        <div class="container-fluid mt-2">

            <!-- content -->
            <?php

            if ($page == 'Dashboard') {
                $this->load->view('siswa/content/dashboard');
            } else if ($page == 'Ganti Password') {
                $this->load->view('siswa/content/ganti_password');
            } else if ($page == 'Pengumuman') {
                $this->load->view('siswa/content/pengumuman');
            } else if ($page == 'Detail Pengumuman') {
                $this->load->view('siswa/content/detail_pengumuman');
            } else if ($page == 'Matpel') {
                $this->load->view('siswa/content/table_list_matpel');
            } else if ($page == 'Nilai') {
                $this->load->view('siswa/content/table_list_nilai');
            } else if ($page == 'Nilai MID Detail') {
                $this->load->view('siswa/content/table_list_nilai_mid_detail');
            } else if ($page == 'Nilai Semester Detail') {
                $this->load->view('siswa/content/table_list_nilai_semester_detail');
            }
            ?>

            <!-- Footer -->
            <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6">
                        <div class="copyright text-center  text-lg-left  text-muted">
                            &copy; <?= date("Y") ?> <a href="https://www.uib.ac.id/" class="font-weight-bold ml-1"
                                target="_blank">Universitas Internasional Batam</a>
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

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script src="<?= base_url('assets/js/siswa.js') ?>"></script>
    <script>
    $('.submit-btn').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Password akan diperbarui!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#ganti_password').submit();
            }
        })
    });
    const success = $('#flash-data').data('flashdata');
    if (success) {
        Swal.fire({
            title: 'SUCCESS',
            text: 'Data ' + success,
            icon: 'success'
        });
    }
    </script>
</body>

</html>