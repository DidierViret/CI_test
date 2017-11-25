<div id="login_bar" class="container">
    <div class="row">
        <a href="<?php echo base_url(); ?>" >
            <div class="col-lg-2 col-sm-2">
                <img id="application_logo" src="<?php echo base_url("assets/images/logo.png"); ?>" alt="Logo de l'application" >
            </div>
            <div class="col-lg-4 col-sm-4">
                <h1><?php echo $this->lang->line('app_title'); ?></h1>
            </div>
        </a>
        <div class="col-lg-6 col-sm-6">
            <ul class="nav nav-pills pull-right" style="margin-top:20px">
                <?php
                /*var_dump($_SESSION);*/
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {

                    /* Admin part, for admins only */
                    if ($_SESSION['access_level'] >= ADMIN_MINIMUM_LEVEL) { ?>
                        <li><a class="btn-warning" href="<?php echo base_url("admin/"); ?>" ><?php echo $this->lang->line('btn_admin'); ?></a></li>
                    <?php
                    /* End of the admin-only part */ } ?>
                  
                    <li><a class="btn-primary" href="<?php echo base_url("auth/logout"); ?>" ><?php echo $this->lang->line('btn_logout'); ?></a></li>
                <?php } else { ?>
                    <li><a class="btn-primary" href="<?php echo base_url("auth/login"); ?>" ><?php echo $this->lang->line('btn_login'); ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
