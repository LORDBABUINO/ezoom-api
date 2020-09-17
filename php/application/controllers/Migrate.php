<?php

class Migrate extends CI_Controller {

  public function index() {
    if($this->input->is_cli_request()) {
      $this->load->library('migration');
      if ($this->migration->current())
        echo "Migration completed.\n";
      else
        show_error($this->migration->error_string());
    }
    else
      show_error('Permission denied');
  }
}
