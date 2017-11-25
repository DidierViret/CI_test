<div class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-4 well">
            <?php echo form_open("auth/login", 'id="loginform" name="loginform" class="form-horizontal"'); ?>
            <?php echo form_fieldset($this->lang->line('text_login')); ?>
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <?php echo form_label($this->lang->line('field_username'), 'username', 'class="control-label"'); ?>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php
                            $attributes = array(
                                'name'          => 'username',
                                'id'            => 'username',
                                'placeholder'   => $this->lang->line('field_username'),
                                'class'         => 'form-control',
                                'size'          => 50);

                            echo form_input($attributes, set_value('username')); ?>
                            <span class="text-danger"><?php echo form_error('username'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <?php echo form_label($this->lang->line('field_password'), 'password', 'class="control-label"'); ?>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <?php
                            $attributes = array(
                                'name'          => 'password',
                                'id'            => 'password',
                                'placeholder'   => $this->lang->line('field_password'),
                                'class'         => 'form-control',
                                'size'          => 50);

                            echo form_password($attributes, set_value('password')); ?>
                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>
                    </div>
                </div>
                                  
                <div class="form-group">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <?php
                        $attributes = array(
                                'name'          => 'btn_login',
                                'id'            => 'btn_login',
                                'class'         => 'btn btn-primary');
                        echo form_submit($attributes, $this->lang->line('btn_login')); ?>

                        <a id="btn_cancel" class="btn btn-default" href="<?php echo base_url(); ?>"><?php echo html_escape($this->lang->line('btn_cancel')); ?></a>
                    </div>
                </div>
            <?php
            echo form_fieldset_close();
            echo form_close();
            echo $this->session->flashdata('message');
            ?>
        </div>
    </div>
</div>