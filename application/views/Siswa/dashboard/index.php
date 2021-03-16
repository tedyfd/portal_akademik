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
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" type="text/css">
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
            } else if ($page == 'Pengumuman') {
                $this->load->view('siswa/content/pengumuman');
            } else if ($page == 'Detail Pengumuman') {
                $this->load->view('siswa/content/detail_pengumuman');
            } else if ($page == 'Matpel') {
                $this->load->view('siswa/content/table_list_matpel');
            } else if ($page == 'Nilai') {
                $this->load->view('siswa/content/table_list_nilai');
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

    <?php if ($this->session->userdata('status_login_siswa') == "sukses_siswa") : ?>
    <script src="<?= base_url('assets/js/siswa.js') ?>"></script>
    <?php else : ?>
    <script src="<?= base_url('assets/js/admin.js') ?>"></script>
    <script src="<?= base_url('assets/js/admin2.js') ?>"></script>
    <?php endif; ?>
</body>

</html>