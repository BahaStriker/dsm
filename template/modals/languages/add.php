<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title"><?php _e('Create New Language'); ?></h4></div>
<div class="modal-body">
    <div class="form-group">
        <label for="code"><?php _e('Code'); ?> *</label>
        <input type="text" class="form-control" id="code" name="code" required>
        <p class="help-block"><?php _e('2-Letter language code (example: en, fr, it).'); ?></p>
    </div>
    <div class="form-group">
        <label for="name"><?php _e('Name'); ?> *</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <input type="hidden" name="action" value="addLanguage">
    <input type="hidden" name="route" value="<?php echo $_GET['reroute']; ?>">
    <input type="hidden" name="routeid" value="">
    <input type="hidden" name="section" value="<?php echo $_GET['section']; ?>">
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-times"></i> <?php _e('Cancel'); ?></button>
    <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-check"></i> <?php _e('Add'); ?></button>
</div>
