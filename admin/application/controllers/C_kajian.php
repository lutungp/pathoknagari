<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kajian extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Kajian_m');
    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.css";
    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css";

    $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.js";
    $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js";
  }

  function index()
  {
    $this->get_header($this->load_plugin_head);
    $this->kajian_list();
    $this->get_footer($this->load_plugin_foot);
  }

  function kajian_list()
  {
    $page_bar['data'][] = array(
                  'title_page' => 'Kajian',
                  'url'        => 'kajian_list'
                );

    $data = array(
          'title_page' 	=> $this->page_bar($page_bar),
          'action'      => "kajian_form",
        );

    $this->load->view('content/V_kajian', $data);
  }

  function kajian_form()
  {
    
  }

}
