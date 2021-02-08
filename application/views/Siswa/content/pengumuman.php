<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Light table</h3>
            </div>
            <!-- modal button -->
            <div class="container mb-md-3">

            </div>
            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">No</th>
                            <th scope="col" class="sort" data-sort="budget">Judul</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($list_pengumuman as $l) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><a href="<?= base_url('siswa/pengumuman_detail/') . $l['id'] ?>"><?= $l['title'] ?></a>
                            </td>
                            <td><?= $l['created'] ?></td>
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