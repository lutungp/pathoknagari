<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_berita extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('templates/V_header');
    $this->load->view('V_berita');
    $this->load->view('templates/V_footer');
  }

}
