<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">List Matapelajaran</h3>
            </div>
            <div class="container mb-md-3">
                <div class="row">
                    <div class="col col-md-3">
                        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm matpel_add_btn"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Tambah Matpel</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">No</th>
                            <th scope="col" class="sort" data-sort="budget">Mata Pelajaran</th>
                            <th scope="col" class="sort" data-sort="budget">Nilai Pengetahuan</th>
                            <th scope="col" class="sort" data-sort="budget">Nilai Keterampilan</th>
                            <th scope="col" class="sort" data-sort="budget">Nilai MID</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($list_nilai as $row) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $row['matpel'] ?></td>
                            <td><?= $row['nilai_p'] ?></td>
                            <td><?= $row['nilai_k'] ?></td>
                            <td><?= $row['nilai_mid'] ?></td>
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