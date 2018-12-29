<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

  public $load_plugin_head;
  public $load_plugin_foot;
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->helper(array('form', 'url'));
  }

  function get_header($load_plugin_head = null)
  {
      $data['plugin_head'] = $load_plugin_head;
  		$this->load->view('templates/V_header', $data);
  }

  function get_footer($load_plugin_foot = null)
  {
    $data['plugin_foot'] = $load_plugin_foot;
		$this->load->view('templates/V_footer');
  }

}
