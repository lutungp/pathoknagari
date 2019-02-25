<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_m_pemuda extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->is_logged_in();

    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.css";
    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css";
    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css";
    $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.js";
    $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js";
  }

  function index()
  {
    $this->get_header($this->load_plugin_head);
    $this->pemuda_list();
    $this->get_footer($this->load_plugin_foot);
  }

  function pemuda_list()
  {
    $page_bar['data'][] = array(
                              'title_page' => 'Pemuda list',
                              'url'        => 'Pemuda'
                            );
    $where  = " WHERE pegawai_aktif = 'y' AND pegawai_status = 'PEMUDA' ";
    $select = " pegawai_id, pegawai_nama, pegawai_jabatan, pegawai_photo";
    $data = array(
                  'title_page' 	=> $this->page_bar($page_bar),
                  'pemuda'      => $this->select_config('m_pegawai', $where, $select),
                  'action'      => "Pemuda-Form",
                );

    $this->load->view('master/pemuda_master/V_m_pemuda', $data);
  }

  function pemuda_form()
  {
    $page_bar['data'][] = array(
                              'title_page' => 'Pemuda list',
                              'url'        => 'Pemuda'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Pemuda Form',
                              'url'        => 'Pemuda-Form'
                            );

    $where = '';
    $url   = "master/pemuda_master/V_m_pemuda_form";
    $data  = array(
               'title_page' 	=> $this->page_bar($page_bar),
               'action_add'   => "C_m_pemuda/pemuda_add",
               'action_close' => "Pemuda",
               'pemuda_details' => $this->select_config('m_pegawai', $where)
            );

    $this->get_page($data, $url, $this->load_plugin_head, $this->load_plugin_foot);
  }

  function pemuda_delete($id)
  {
    $where = array(
      'pegawai_id' => $id
    );

    $this->delete_config('m_pegawai',$where);
    redirect('../Pemuda');
  }

  function pemuda_add()
  {
      $pegawai_id      = $this->input->post('pegawai_id');
      $pegawai_nama    = $this->input->post('pegawai_nama');
      $pegawai_jabatan = $this->input->post('pegawai_jabatan');

      $data = array(
        'pegawai_id'      => $pegawai_id,
        'pegawai_nama'    => $pegawai_nama,
        'pegawai_jabatan' => $pegawai_jabatan,
        'pegawai_status'  => 'PEMUDA'
      );

      $i_mg_file    = isset($_FILES['pegawai_photo']['name']) ? $_FILES['pegawai_photo']['name']: "";
      if ($i_mg_file <> "") {

          $data['pegawai_photo'] = $i_mg_file;

          $config['upload_path']          = './assets/img/items/';
          $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip|jpeg';
          $config['max_size']             = '2048000';
          $config['remove_spaces']        = TRUE;  //it will remove all spaces

          $this->load->library('upload', $config);
          $this->upload->do_upload('pegawai_photo');
      }

      $this->create_config('m_pegawai', $data);

      redirect('../Pemuda');
  }

  function pemuda_edit($id){

    $page_bar['data'][] = array(
                              'title_page' => 'Pemuda list',
                              'url'        => '../Pemuda'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Pemuda Form',
                              'url'        => '../Pemuda-Edit/'.$id
                            );

    $where = '';
    $where_pegawai_id  = "WHERE pegawai_id = '$id'";
    $action           = "master/pemuda_master/V_m_pemuda_form";

    $data  = array(
             'title_page' 	    => $this->page_bar($page_bar),
             'action_add'       => "C_m_pemuda/pegawai_update",
             'action_close'     => "Pemuda",
             'pemuda_details'   => $this->select_config('m_pegawai', $where_pegawai_id)->row()
            );

    $this->get_page($data, $action, $this->load_plugin_head, $this->load_plugin_foot);

  }

  function pegawai_update()
  {
    $pegawai_id      = $this->input->post('pegawai_id');
    $pegawai_nama    = $this->input->post('pegawai_nama');
    $pegawai_jabatan = $this->input->post('pegawai_jabatan');
    $i_mg_file       = isset($_FILES['pegawai_photo']['name']) ? $_FILES['pegawai_photo']['name']: "";

    $data = array(
                    'pegawai_id'       => $pegawai_id,
                    'pegawai_nama'     => $pegawai_nama,
                    'pegawai_jabatan'  => $pegawai_jabatan,
                    'pegawai_status'   => 'PEMUDA'
                );

    $where = array('pegawai_id' => $pegawai_id);

    if ($i_mg_file <> "" && $i_mg_file <> null) {
        $data['pegawai_photo']   = $i_mg_file;
        $config['upload_path']   = './assets/img/items/';
        $config['allowed_types'] = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip|jpeg';
        $config['max_size']      = '2048000';
        $config['remove_spaces'] = TRUE;  //it will remove all spaces


        $cek_img_old = $this->select_config_one('m_pegawai', 'pegawai_photo', $where);

        if ($cek_img_old->pegawai_photo) { unlink($config['upload_path'].$cek_img_old->pegawai_photo); }

        $this->load->library('upload', $config);
        $this->upload->do_upload('pegawai_photo');

        $errors = $this->upload->display_errors();
        echo $errors;
    }

    $this->update_config('m_pegawai', $data, $where);
    redirect('../Pemuda');

  }

}
