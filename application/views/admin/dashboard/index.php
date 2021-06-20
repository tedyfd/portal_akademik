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
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
</head>

<body>
    <div id="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
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

            if ($page == 'Dashboard') {
                $this->load->view('admin/content/dashboard');
            } else if ($page == 'Setting') {
                $this->load->view('admin/content/setting');
            } else if ($page == 'Raport Mid') {
                $this->load->view('admin/content/table_mid');
            } else if ($page == 'Raport Mid Edit') {
                $this->load->view('admin/content/edit/mid_edit.php');
            } else if ($page == 'Raport Semester') {
                $this->load->view('admin/content/table_semester');
            } else if ($page == 'Raport Semester Edit') {
                $this->load->view('admin/content/edit/semester_edit');
            } else if ($page == 'Data Siswa') {
                $this->load->view('admin/content/table_siswa');
            } else if ($page == 'Data Siswa Edit') {
                $this->load->view('admin/content/edit/siswa_edit');
            } else if ($page == 'Data Siswa Kelas') {
                $this->load->view('admin/content/table_siswa_kelas');
            } else if ($page == 'Siswa Kelas add') {
                $this->load->view('admin/content/table_siswa_kelas_add');
            } else if ($page == 'Siswa Kelas edit') {
                $this->load->view('admin/content/edit/siswa_kelas_edit');
            } else if ($page == 'Pengumuman') {
                $this->load->view('admin/content/table_pengumuman');
            } else if ($page == 'Pengumuman_add') {
                $this->load->view('admin/content/table_pengumuman_add');
            } else if ($page == 'Tahun Ajaran') {
                $this->load->view('admin/content/table_list_ta');
            } else if ($page == 'Tahun Ajaran Edit') {
                $this->load->view('admin/content/edit/ta_edit');
            } else if ($page == 'Kelas') {
                $this->load->view('admin/content/table_list_kelas');
            } else if ($page == 'Kelas Edit') {
                $this->load->view('admin/content/edit/kelas_edit');
            } else if ($page == 'Matpel') {
                $this->load->view('admin/content/table_list_matpel');
            } else if ($page == 'Mata Pelajaran Edit') {
                $this->load->view('admin/content/edit/matpel_edit');
            } else if ($page == 'Semester') {
                $this->load->view('admin/content/table_list_semester');
            } else if ($page == 'Kelas Tahun Ajaran') {
                $this->load->view('admin/content/table_kelas_ta');
            } else if ($page == 'Kelas Tahun Ajaran Edit') {
                $this->load->view('admin/content/edit/kelas_ta_edit');
            } else if ($page == 'Kelas Tahun Ajaran add') {
                $this->load->view('admin/content/table_kelas_ta_add');
            } else if ($page == 'Batch Kelas Tahun Ajaran add') {
                $this->load->view('admin/content/table_kelas_ta_batch');
            } else if ($page == 'Matpel Tahun Ajaran') {
                $this->load->view('admin/content/table_matpel_ta');
            } else if ($page == 'Matpel Tahun Ajaran Edit') {
                $this->load->view('admin/content/edit/matpel_ta_edit');
            } else if ($page == 'Matpel Tahun Ajaran add') {
                $this->load->view('admin/content/table_matpel_ta_add');
            } else if ($page == 'Batch Matpel Ta add') {
                $this->load->view('admin/content/table_matpel_ta_batch');
            } else if ($page == 'Jadwal Matpel') {
                $this->load->view('admin/content/table_jadwal');
            } else if ($page == 'Jadwal Matpel add') {
                $this->load->view('admin/content/table_jadwal_add');
            } else if ($page == 'Jadwal Matpel Edit') {
                $this->load->view('admin/content/edit/jadwal_matpel_edit');
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

    <?php
    if ($page == 'Matpel') {
        $this->load->view('admin/modal/modal_matpel');
    } else if ($page == 'Kelas') {
        $this->load->view('admin/modal/modal_kelas');
    } else if ($page == 'Tahun Ajaran') {
        $this->load->view('admin/modal/modal_ta');
    } else if ($page == 'Data Siswa') {
        $this->load->view('admin/modal/modal_siswa');
        $this->load->view('admin/modal/modal_import_siswa');
    } else if ($page == 'Raport Mid') {
        $this->load->view('admin/modal/import_ujian');
        $this->load->view('admin/modal/modal_add_mid');
    } else if ($page == 'Raport Semester') {
        $this->load->view('admin/modal/modal_add_semester');
    }
    ?>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?= base_url() ?>assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="<?= base_url() ?>assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url() ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-scroll-lock@3.1.3/jquery-scrollLock.min.js"></script>

    <!-- Optional JS -->
    <!-- <script src="<?= base_url() ?>assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/chart.js/dist/Chart.extension.js"></script> -->
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
    <script>
    $(document).ready(function() {

        $('.modalbtn').on('click', function() {
            $('#editmodal').modal('show');
        });
        $('#siswa_add_btn').on('click', function() {
            $('#siswa_modal').modal('show');
        });
        $('.matpel_add_btn').on('click', function() {
            $('#matpel_modal').modal('show');
        });
        $('#kelas_add_btn').on('click', function() {
            $('#kelas_modal').modal('show');
        });
        $('#ta_add_btn').on('click', function() {
            $('#ta_modal').modal('show');
        });
        $('#mid_add_btn').on('click', function() {
            $('#mid_modal').modal('show');
        });
        $('#semester_add_btn').on('click', function() {
            $('#semester_modal').modal('show');
        });


    });
    var table = '';
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
                location.reloads();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("Gagal menyimpan");
            }
        })
    });

    $('.submit-btn').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data akan disimpan ke database!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#form').submit();
            }
        })
    });

    $('#matpel_submmit').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data akan disimpan ke database!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#form').submit();
            }
        })
    });

    $('#kelas_submmit').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data akan disimpan ke database!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#form').submit();
            }
        })
    });
    $('#siswa_submmit').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data akan disimpan ke database!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#form').submit();
            }
        })
    });

    $('.delete-btn-conf').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value == true) {
                document.location.href = href;
            }
        })
    });

    $('.reset-btn-conf').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Reset password ?',
            text: "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Reset'
        }).then((result) => {
            if (result.value == true) {
                document.location.href = href;
            }
        })
    });

    $("#raport_semester_edit_btn").on('click', function() {
        let id = $(this).data('id');
        let nis = $(this).data('nis');
        let semester = $(this).data('semester');
        let matpel = $(this).data('matpel');
        let nilai_p = $(this).data('nilai_p');
        let nilai_k = $(this).data('nilai_k');
        let nilai_s = $(this).data('nilai_s');

        $(".modal-body #id_edit").val(id);
        $(".modal-body #nis_edit").val(nis);
        $(".modal-body #semester_edit").val(semester);
        $(".modal-body #matpel_edit").val(matpel);
        $(".modal-body #nilai_p_edit").val(nilai_p);
        $(".modal-body #nilai_k_edit").val(nilai_k);
        $(".modal-body #nilai_s_edit").val(nilai_s);
    });

    $("#raport_mid_edit_btn").on('click', function() {
        let id = $(this).data('id');
        let nis = $(this).data('nis');
        let semester = $(this).data('semester');
        let matpel = $(this).data('matpel');
        let nilai_p = $(this).data('nilai_p');
        let nilai_k = $(this).data('nilai_k');
        let nilai_mid = $(this).data('nilai_mid');

        $(".modal-body #id_edit").val(id);
        $(".modal-body #nis_edit").val(nis);
        $(".modal-body #semester_edit").val(semester);
        $(".modal-body #matpel_edit").val(matpel);
        $(".modal-body #nilai_p_edit").val(nilai_p);
        $(".modal-body #nilai_k_edit").val(nilai_k);
        $(".modal-body #nilai_mid_edit").val(nilai_mid);
    });

    $("#matpel_edit_btn").on('click', function() {
        let id = $(this).data('id');
        let matpel = $(this).data('matpel');

        $(".modal-body #id_edit").val(id);
        $(".modal-body #matpel_edit").val(matpel);
    });
    </script>
    <script>
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