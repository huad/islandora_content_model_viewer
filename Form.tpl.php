<div id="<?php print $wrapper_id; ?>" class="drupal-content">
   <?php $form = ''; ?>
   <?php switch($action):
case 'edit': ?>
   <?php $form = drupal_get_form('content_model_viewer_edit_metadata_form', $pid); ?>
   <?php break;?>
   <?php case 'ingest-concept': ?>
   <?php $form = drupal_get_form('content_model_viewer_ingest_concept_metadata_form', $pid); ?>
   <?php break;?>
   <?php case 'ingest-resource': ?>
   <?php $form =  drupal_get_form('content_model_viewer_ingest_resource_metadata_form', $pid); ?>
   <?php break;?>
   <?php endswitch; ?>
   <?php print theme_status_messages(); ?>
   <?php print $form; ?>
</div>
