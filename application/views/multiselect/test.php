<?php echo form_open('/Multiselect/submit', 'class="container form-horizontal"'); ?>
    <div class="form-row form-group">
    <?php
        echo form_dropdown('multiselect[]', $items, $selection,
                           'id="example-multiselect" multiple="multiple"');
    ?>
    </div>
    <div class="form-row form-group">
    <?php
        echo form_submit('Submit', 'Submit', 'class="btn btn-primary"');
    ?>
    </div>
    <div class="form-row form-group">
    <?php
        if (isset($selection))
        {
            var_dump($selection);
        }
    ?>
    </div>
<?php echo form_close(); ?>


<!-- Initialize the Bootstrap Multiselect plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#example-multiselect').multiselect();
    });
</script>