    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header align-items-center">
                <a class="navbar-brand" href="<?= base_url('admin') ?>">
                    <img src="<?= base_url() ?>assets/img/brand/blue.png" class="" style="height: 200px;" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">

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