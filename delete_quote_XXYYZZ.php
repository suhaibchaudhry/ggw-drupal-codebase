<?php
  include_once './includes/bootstrap.inc';
  drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

  global $user;

  drupal_set_header("Content-Type: text/plain");

  if ($user->uid == 1) {
    $result = db_query("SELECT order_id FROM uc_orders WHERE order_status = 'pos_quote'");
    while($row = db_fetch_object($result)){
      //# uncomment below to view an order and exit
      //# usefull to write a query to only delete certain orders
      //print_r($row);
      //exit;
      print "Deleting quote order $row->order_id\n";
      uc_order_delete($row->order_id); // comment this out for testing
    }
  } else {
    print "Only Administrater could deleter orders.";
  }
?>
