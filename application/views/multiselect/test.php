<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?php //form_dropdown('example-getting-started', $items, '', 'multiple="multiple"'); ?>
            <select id="example-getting-started" multiple="multiple">
                <option value="cheese">Cheese</option>
                <option value="tomatoes">Tomatoes</option>
                <option value="mozarella">Mozzarella</option>
                <option value="mushrooms">Mushrooms</option>
                <option value="pepperoni">Pepperoni</option>
                <option value="onions">Onions</option>
            </select>
        </div>
    </div>
</div>

<!-- Initialize the Bootstrap Multiselect plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#example-getting-started').multiselect();
    });
</script>

