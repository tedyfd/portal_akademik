    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="<?= base_url() ?>assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.html">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="profile.html">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tables.html">
                                <i class="ni ni-bullet-list-67 text-default"></i>
                                <span class="nav-link-text">Tables</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">

                    <?php
                    $menu_q = "SELECT * FROM menu";
                    $menu = $this->db->query($menu_q)->result_array();
                    ?>
                    <?php foreach ($menu as $m) : ?>
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal"> <?= $m['menu'] ?></span>
                    </h6>
                    <ul class="navbar-nav mb-md-3">
                        <?php
                            $menuid = $m['id'];
                            $sub_q = "SELECT * FROM sub_menu INNER JOIN menu on sub_menu.menu_id = menu.id WHERE sub_menu.menu_id=$menuid";
                            $sub = $this->db->query($sub_q)->result_array();
                            ?>
                        <?php foreach ($sub as $s) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo (base_url('admin/') . $s['url']) ?>" target="">
                                <i class="<?= $s['icon'] ?>"></i>
                                <span class="nav-link-text"><?= $s['sub_menu'] ?></span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <hr class="my-3">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </nav>