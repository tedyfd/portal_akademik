<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Nilai MID</h3>
            </div>
            <div class="container mb-md-3">
                <div class="row">
                    <div class="col col-md-3">
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">No</th>
                            <th scope="col" class="sort" data-sort="budget">Nilai</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($list_nilai_mid as $row) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td>
                                <a
                                    href="<?= base_url('siswa/nilai_mid_dtl/') . $row['id_th_kelas'] . "/" . $row['id_semester'] ?>">
                                    <?= "(" . $row['th_ajaran'] . ") " . $row['kelas'] . " - " . $row['semester'] . " - " . $row['matpel'] . "" ?>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Nilai Semester</h3>
            </div>
            <div class="container mb-md-3">
                <div class="row">
                    <div class="col col-md-3">

                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">No</th>
                            <th scope="col" class="sort" data-sort="budget">Nilai</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($list_nilai_semester as $row) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td>
                                <a
                                    href="<?= base_url('siswa/nilai_semester_dtl/') . $row['id_th_kelas'] . "/" . $row['id_semester'] ?>">
                                    <?= "(" . $row['th_ajaran'] . ") " . $row['kelas'] . " - " . $row['semester'] . " - " . $row['matpel'] . "" ?>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">

            </div>
        </div>
    </div>
</div>