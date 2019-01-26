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
                              'title_page' => 'Takmir list',
                              'url'        => 'Pegawai'
                            );
    $where  = " WHERE pegawai_aktif = 'y' ";
    $select = " pegawai_id, pegawai_nama, pegawai_jabatan, pegawai_photo";
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
                              'title_page' => 'Takmir list',
                              'url'        => 'Pegawai'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Takmir Form',
                              'url'        => 'Pegawai-Form'
                            );

    $where = '';
    $url   = "master/pegawai_master/V_m_pegawai_form";
    $data  = array(
               'title_page' 	=> $this->page_bar($page_bar),
               'action_add'   => "C_m_pegawai/pegawai_add",
               'action_close' => "Pegawai",
               'pegawai_details' => $this->select_config('m_pegawai', $where)
            );

    $this->get_page($data, $url, $this->load_plugin_head, $this->load_plugin_foot);
  }

  function pegawai_delete($id)
  {
    $where = array(
      'pegawai_id' => $id
    );

    $this->delete_config('m_pegawai',$where);
    redirect('Pegawai');
  }

  function pegawai_add()
  {
      $pegawai_id      = $this->input->post('pegawai_id');
      $pegawai_nama    = $this->input->post('pegawai_nama');
      $pegawai_jabatan = $this->input->post('pegawai_jabatan');

      $data = array(
        'pegawai_id'      => $pegawai_id,
        'pegawai_nama'    => $pegawai_nama,
        'pegawai_jabatan' => $pegawai_jabatan
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

      redirect('Pegawai');
  }

  function pegawai_edit($id){

    $page_bar['data'][] = array(
                              'title_page' => 'Takmir list',
                              'url'        => '../Pegawai'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Takmir Form',
                              'url'        => '../Pegawai_edit/'.$id
                            );

    $where = '';
    $where_pegawai_id  = "WHERE pegawai_id = '$id'";
    $action           = "master/pegawai_master/V_m_pegawai_form";

    $data  = array(
             'title_page' 	    => $this->page_bar($page_bar),
             'action_add'       => "C_m_pegawai/pegawai_update",
             'action_close'     => "Pegawai",
             'pegawai_details'   => $this->select_config('m_pegawai', $where_pegawai_id)->row()
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
                    'pegawai_jabatan'  => $pegawai_jabatan
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
    redirect('Pegawai');

  }

}
