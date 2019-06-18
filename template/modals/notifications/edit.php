<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title"><?php _e('Edit Notification Template'); ?></h4></div>
<div class="modal-body">
    <h4><?php echo $template['name']; ?></h4><br>
    <div class="form-group">
        <label for="subject"><?php _e('Subject'); ?> *</label>
        <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $template['subject']; ?>" required>
    </div>

    <div class="form-group">
        <label for="message" class="control-label"><?php _e('Message'); ?></label>
        <textarea class="form-control summernote2" id="message" name="message"><?php echo $template['message']; ?></textarea>
    </div>

    <p><?php echo $template['info']; ?></p>


    <input type="hidden" name="id" value="<?php echo $template['id']; ?>">
    <input type="hidden" name="action" value="editNotification">
    <input type="hidden" name="route" value="<?php echo $_GET['reroute']; ?>">
    <input type="hidden" name="routeid" value="">
    <input type="hidden" name="section" value="<?php echo $_GET['section']; ?>">
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> <?php _e('Cancel'); ?></button>
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> <?php _e('Save'); ?></button>
</div>

<script type="text/javascript">
        $(function() {
            $(".select2").select2();
        });

        $(document).ready(function() { $('.summernote2').summernote({height: 300}); });
</script>
