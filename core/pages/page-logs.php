<?php

class PR_logs_page {

  /**
   * constructor method
   * Add class functions to wordpress hooks
   *
   * @void
   */
  public function __construct() {

    if( !is_admin() ) {
      return;
    }

    add_action( 'admin_menu', array( $this, 'pr_add_admin_menu' ) );
  }

  /**
   * Add logs page to wordpress menu
   */
  public function pr_add_admin_menu() {

    add_submenu_page( 'pressroom', __( 'Logs' ), __( 'Logs' ), 'manage_options', 'pressroom-logs', array( $this, 'pr_logs_page' ) );
  }

  /**
   * Render logs page form
   *
   * @echo
   */
  public function pr_logs_page() {

    ?>
    <h2>Pressroom logs</h2>
    <?php
    $this->add_presslist_logs();
  }

  /**
  * Pressroom metabox callback
  * Render Wp list table
  *
  * @return void
  */
  public function add_presslist_logs() {

    $pr_table = new Pressroom_Logs_Table();
    $pr_table->prepare_items();
    $pr_table->display();
  }
}
$pr_logs_page = new PR_logs_page();
