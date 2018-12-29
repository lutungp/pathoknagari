<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    //Codeigniter : Write Less Do More
    $this->API="http://admin.pathoknagari.id";
    $this->load->library('session');
    $this->load->library('curl');
    $this->load->helper('form');
    $this->load->helper('url');
  }

  function index()
  {
    $data['ringkas_berita'] = $this->curl->simple_get($this->API.'/C_api/berita');
    $this->load->view('templates/V_header');
    $this->load->view('V_dashboard', $data);
    $this->load->view('templates/V_footer');
  }

  function goToLink()
  {
    echo "string";
  }

}
