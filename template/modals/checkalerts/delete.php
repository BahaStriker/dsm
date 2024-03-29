<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title"><?php _e('Delete Alert'); ?></h4>
</div>

<div class="modal-body">
    <?php _e('Are you sure you want to delete this alert?'); ?>

    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="action" value="deleteCheckAlert">
    <input type="hidden" name="route" value="<?php echo $_GET['reroute']; ?>">
    <input type="hidden" name="routeid" value="<?php echo $_GET['routeid']; ?>">
    <input type="hidden" name="section" value="<?php echo $_GET['section']; ?>">
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-flat btn-default" data-dismiss="modal"><?php _e('No'); ?></button>
    <button type="submit" class="btn btn-flat btn-danger" ><?php _e('Yes'); ?></button>
</div>
