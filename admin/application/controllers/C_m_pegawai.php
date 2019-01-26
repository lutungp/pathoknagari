<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_m_pegawai extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->is_logged_in();
    $this->load->model('m_m_pegawai');

    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.css";
    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css";
    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css";
    $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.js";
    $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js";
  }

  function index()
  {
    $this->get_header($this->load_plugin_head);
    $this->pegawai_list();
    $this->get_footer($this->load_plugin_foot);
  }

  function pegawai_list()
  {

    $page_bar['data'][] = array(
                              'title_page' => 'Pegawai list',
                              'url'        => 'Pegawai'
                            );
    $where  = " WHERE pegawai_aktif = 'y' ";
    $select = " pegawai_id, pegawai_nama ";
    $data = array(
                  'title_page' 	=> $this->page_bar($page_bar),
                  'pegawai'     => $this->select_config('m_pegawai', $where, $select),
                  'action'      => "Pegawai-Form",
                );

    $this->load->view('master/pegawai_master/V_m_pegawai', $data);
  }

  function pegawai_form()
  {
    $page_bar['data'][] = array(
                              'title_page' => 'Pegawai list',
                              'url'        => 'Pegawai'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Pegawai Form',
                              'url'        => 'Pegawai-Form'
                            );

    $where = '';
    $url   = "content/berita_form";
    $data  = array(
               'title_page' 	=> $this->page_bar($page_bar),
               'action_add'   => "C_m_pegawai/pegawai_add",
               'action_close' => "Pegawai",
               'berita'       => $this->select_config('m_pegawai', $where)
            );

    $this->get_page($data, $url, $this->load_plugin_head, $this->load_plugin_foot);
  }

  function pegawai_delete()
  {

  }

  function pegawai_add()
  {
    // code...
  }

}
