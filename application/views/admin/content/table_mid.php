<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <h3 class="mb-0">Light table</h3>
            </div>
            <!-- modal button -->
            <div class="container mb-md-3">
                <div class="row">
                    <div class="col col-md-3">
                        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm modalbtn"><i
                                class="fas fa-upload fa-sm text-white-50"></i> Import CSV</button>

                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="tabel1" class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Semester</th>
                            <th>Tahun Ajaran</th>
                            <th>Level</th>
                            <th>Agama P</th>
                            <th>Agama K</th>
                            <th>Agama Mid</th>
                            <th>PKN P</th>
                            <th>PKN K</th>
                            <th>PKN Mid</th>
                            <th>B.Indo P</th>
                            <th>B.Indo K</th>
                            <th>B.Indo Mid</th>
                            <th>MTK P</th>
                            <th>MTK K</th>
                            <th>MTK Mid</th>
                            <th>IPA P</th>
                            <th>IPA K</th>
                            <th>IPA Mid</th>
                            <th>IPS P</th>
                            <th>IPS K</th>
                            <th>IPS Mid</th>
                            <th>B.Ing P</th>
                            <th>B.Ing K</th>
                            <th>B.Ing Mid</th>
                            <th>Seni P</th>
                            <th>Seni K</th>
                            <th>Seni Mid</th>
                            <th>Penjas P</th>
                            <th>Penjas K</th>
                            <th>Penjas Mid</th>
                            <th>Prakarya P</th>
                            <th>Prakarya K</th>
                            <th>Prakarya Mid</th>
                            <th>TIK P</th>
                            <th>TIK K</th>
                            <th>TIK Mid</th>
                            <th>Speaking P</th>
                            <th>Speaking K</th>
                            <th>Speaking Mid</th>
                            <th>Sakit</th>
                            <th>Izin</th>
                            <th>Alpha</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php $n = 1; ?>
                        <?php foreach ($mid as $m) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $m['nis'] ?></td>
                            <td><?= $m['kelas'] ?></td>
                            <td><?= $m['semester'] ?></td>
                            <td><?= $m['ta'] ?></td>
                            <td><?= $m['level'] ?></td>
                            <td><?= $m['agama_p'] ?></td>
                            <td><?= $m['agama_k'] ?></td>
                            <td><?= $m['agama_mid'] ?></td>
                            <td><?= $m['pkn_p'] ?></td>
                            <td><?= $m['pkn_k'] ?></td>
                            <td><?= $m['pkn_mid'] ?></td>
                            <td><?= $m['bindo_p'] ?></td>
                            <td><?= $m['bindo_k'] ?></td>
                            <td><?= $m['bindo_mid'] ?></td>
                            <td><?= $m['mtk_p'] ?></td>
                            <td><?= $m['mtk_k'] ?></td>
                            <td><?= $m['mtk_mid'] ?></td>
                            <td><?= $m['ipa_p'] ?></td>
                            <td><?= $m['ipa_k'] ?></td>
                            <td><?= $m['ipa_mid'] ?></td>
                            <td><?= $m['ips_p'] ?></td>
                            <td><?= $m['ips_k'] ?></td>
                            <td><?= $m['ips_mid'] ?></td>
                            <td><?= $m['bing_p'] ?></td>
                            <td><?= $m['bing_k'] ?></td>
                            <td><?= $m['bing_mid'] ?></td>
                            <td><?= $m['seni_p'] ?></td>
                            <td><?= $m['seni_k'] ?></td>
                            <td><?= $m['seni_mid'] ?></td>
                            <td><?= $m['penjas_p'] ?></td>
                            <td><?= $m['penjas_k'] ?></td>
                            <td><?= $m['penjas_mid'] ?></td>
                            <td><?= $m['prakarya_p'] ?></td>
                            <td><?= $m['prakarya_k'] ?></td>
                            <td><?= $m['prakarya_mid'] ?></td>
                            <td><?= $m['tik_p'] ?></td>
                            <td><?= $m['tik_k'] ?></td>
                            <td><?= $m['tik_mid'] ?></td>
                            <td><?= $m['speaking_p'] ?></td>
                            <td><?= $m['speaking_k'] ?></td>
                            <td><?= $m['speaking_mid'] ?></td>
                            <td><?= $m['sakit'] ?></td>
                            <td><?= $m['izin'] ?></td>
                            <td><?= $m['alpha'] ?></td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
                <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <i class="fas fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fas fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>