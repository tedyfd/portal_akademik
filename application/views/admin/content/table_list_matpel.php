<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">List Kelas</h3>
            </div>

            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">No</th>
                            <th scope="col" class="sort" data-sort="budget">ID</th>
                            <th scope="col" class="sort" data-sort="status">Nama Matpel</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($list_matpel as $l) : ?>
                        <tr>
                            <th scope="row">
                                <?= $n++; ?>
                            </th>
                            <td class="budget">
                                <?= $l['id_matpel'] ?>
                            </td>
                            <td class="budget">
                                <?= $l['matpel'] ?>
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