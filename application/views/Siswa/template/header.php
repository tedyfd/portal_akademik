<?php
$count_siswa = $this->db->query("SELECT count(nis) AS count FROM siswa")->row_array();
$count_matpel = $this->db->query("SELECT count(id_matpel) AS count FROM matpel")->row_array();
$count_nilai = $this->db->query("SELECT count(id) AS count FROM nilai")->row_array();
$count_kelas = $this->db->query("SELECT count(kelas) AS count FROM kelas")->row_array();
?>
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('siswa/') ?>">Dashboards</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $page ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">

                </div>
            </div>
            <!-- Card stats -->
            <div class="row">

            </div>
        </div>
    </div>
</div>