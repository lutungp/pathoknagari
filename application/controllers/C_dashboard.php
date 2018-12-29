<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('templates/V_header');
    $this->load->view('V_dashboard');
    $this->load->view('templates/V_footer');
  }

  function goToLink()
  {
    echo "string";
  }

}
