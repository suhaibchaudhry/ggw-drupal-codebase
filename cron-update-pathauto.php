<?php
include_once './includes/bootstrap.inc';
include_once './sites/all/modules/pathauto/pathauto.inc';
include_once './sites/all/modules/pathauto/pathauto_node.inc';
 
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

_pathauto_include();
node_pathauto_bulkupdate();
?>
