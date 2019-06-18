<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><?php _e('Add Check Alert'); ?></h4>
</div>

<div class="modal-body">

    <div class="row">



        <div class="col-md-6">
            <div class="form-group">
                <label for="type"><?php _e('Alert Type'); ?> *</label>
                <select class="form-control select2 select2-hidden-accessible" id="type" name="type" style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                        <option></option>
                        <?php if($check['type'] == "tcp" || $check['type'] == "udp" || $check['type'] == "icmp") { ?>
                            <option value='offline'><?php _e('Check Offline'); ?></option>
                            <option value='responsetime'><?php _e('Response Time'); ?></option>
                        <?php } ?>

                        <?php if($check['type'] == "blacklist") { ?>
                            <option value='blacklisted'><?php _e('Listed In Blacklist'); ?></option>
                        <?php } ?>

                        <?php if($check['type'] == "dns") { ?>
                            <option value='dnsfailed'><?php _e('DNS Lookup Failed'); ?></option>
                        <?php } ?>
                </select>
            </div>
        </div>

        <div class="col-md-2" >
            <div class="form-group" id="comparison-div">
                <label for="comparison"><?php _e('Comparison'); ?></label>
                <select class="form-control select2 select2-hidden-accessible" id="comparison" name="comparison" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option value='=='>==</option>
                    <option value='>='>>=</option>
                    <option value='<='><=</option>
                    <option value='>'>></option>
                    <option value='<'><</option>
                    <option value='!='>!=</option>
                </select>
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group" id="comparison_limit-div">
                <label for="comparison_limit"><?php _e('Limit'); ?></label>
                <input type="text" class="form-control" id="comparison_limit" name="comparison_limit">
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="status"><?php _e('Status'); ?></label>
                <select class="form-control select2 select2-hidden-accessible" id="status" name="status" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option value='1'><?php _e('Active'); ?></option>
                    <option value='0'><?php _e('Inactive'); ?></option>
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="occurrences"><?php _e('Occurrences'); ?> <i class="fa fa-info-circle fa-fw" data-toggle="tooltip" title="<?php _e('If the problem occurs for more than this value an incident will be opened and the selected contacts will be notified.'); ?>"></i></label>
                <input type="text" class="form-control" id="occurrences" name="occurrences" required value="2">
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-group">
                <label for="contacts"><?php _e('Contacts'); ?> <i class="fa fa-info-circle fa-fw" data-toggle="tooltip" title="<?php _e('Contacts selected here will receive notifications for this alert.'); ?>"></i></label>
                <select class="form-control select2tags select2-hidden-accessible" id="contacts" name="contacts[]" style="width: 100%;" multiple>
                    <?php foreach ($contacts as $contact) { ?>
                        <option value='<?php echo $contact['id']; ?>'><?php echo $contact['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>



    </div>


    <input type="hidden" name="checkid" value="<?php echo $_GET['routeid']; ?>">

    <input type="hidden" name="action" value="addCheckAlert">
    <input type="hidden" name="route" value="<?php echo $_GET['reroute']; ?>">
    <input type="hidden" name="routeid" value="<?php echo $_GET['routeid']; ?>">
    <input type="hidden" name="section" value="alerting">
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-flat btn-default" data-dismiss="modal"><i class="fa fa-times"></i> <?php _e('Cancel'); ?></button>
    <button type="submit" class="btn btn-flat btn-primary"><i class="fa fa-check"></i> <?php _e('Add Alert'); ?></button>
</div>


<script type="text/javascript">

	$(".select2").select2({
        placeholder: "<?php _e('Please select'); ?>"
    });

    $(function() { $(".select2tags").select2({
        tags: true
    }); });

    $("#type").on("change", function (e) {
        var value = $("#type").val();

        if(value == "responsetime") { $("#comparison-div").fadeIn(); $("#comparison_limit-div").fadeIn(); }
        if(value != "responsetime") { $("#comparison-div").fadeOut(); $("#comparison_limit-div").fadeOut(); }

        //alert(value);
    });

</script>
