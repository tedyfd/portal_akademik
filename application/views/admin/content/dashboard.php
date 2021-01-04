            <div class="row">
                <?php
                $dashboard_menu_q = "SELECT * FROM sub_menu";
                $dashboard_menu = $this->db->query($dashboard_menu_q)->result_array();
                ?>
                <?php foreach ($dashboard_menu as $sm) : ?>
                <div class="col-xl-4">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <a class="nav-link" href="<?= base_url('admin/') ?><?= $sm['url'] ?>">
                            <div class="card-body">
                                <div class="row align-content-center">
                                    <div class="col text-center">
                                        <h5 class="card-title text-uppercase text-primary mb-0"><?= $sm['sub_menu'] ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>