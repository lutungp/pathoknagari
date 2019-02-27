<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_m_iklan extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->is_logged_in();
    $this->load->model('M_m_iklan');
    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.css";
    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css";

    // $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css";
    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css";
    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-summernote/summernote.css";
    // $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css";
    // $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css";

    $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.js";
    $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js";

    // $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js";
    $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js";
    // $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js";

    $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/bootstrap-summernote/summernote.min.js";
  }

  function index()
  {
    $this->get_header($this->load_plugin_head);
    $this->iklan_list();
    $this->get_footer($this->load_plugin_foot);
  }

  function iklan_list()
  {

    $page_bar['data'][] = array(
                              'title_page' => 'Iklan list',
                              'url'        => 'Iklan'
                            );
    $where  = " WHERE iklan_active = 'y' ";
    $select = " iklan_id, iklan_nama ";
    $data = array(
                  'title_page' 	=> $this->page_bar($page_bar),
                  'iklan'      => $this->select_config('m_iklan', $where, $select),
                  'action'      => "Iklan-Form",
                );

    $this->load->view('content/V_m_iklan', $data);
  }

  function iklan_form()
  {
    $page_bar['data'][] = array(
                              'title_page' => 'Iklan list',
                              'url'        => 'Iklan'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Iklan Form',
                              'url'        => 'Iklan-Form'
                            );

    $where = '';
    $url   = "content/V_iklan_form";
    $data  = array(
               'title_page' 	=> $this->page_bar($page_bar),
               'action_add'   => "C_m_iklan/iklan_add",
               'action_close' => "Iklan",
               'iklan'       => $this->select_config('m_iklan', $where)
            );

    $this->get_page($data, $url, $this->load_plugin_head, $this->load_plugin_foot);
  }

  function iklan_add()
  {
    $iklan_summary = $this->input->post('iklan_summary');
    $iklan_nama    = $this->input->post('iklan_nama');
    $iklan_tanggal = $this->input->post('iklan_tanggal');
    $iklan_isi     = $this->input->post('iklan_isi');
    $iklan_penulis = $this->input->post('iklan_penulis');

    $data = array(
        'iklan_nama'     => $iklan_nama,
        'iklan_summary'  => $iklan_summary,
        'iklan_tanggal'  => date('Y-m-d', strtotime($iklan_tanggal)),
        'iklan_isi'      => $iklan_isi,
        'iklan_penulis'  => $iklan_penulis
    );

    $i_mg_file    = isset($_FILES['iklan_photo']['name']) ? $_FILES['iklan_photo']['name']: "";
    if ($i_mg_file <> "") {

        $data['iklan_photo'] = $i_mg_file;

        $config['upload_path']          = './assets/img/items/';
        $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip|jpeg';
        $config['max_size']             = '2048000';
        $config['remove_spaces']        = TRUE;  //it will remove all spaces

        $this->load->library('upload', $config);
        $this->upload->do_upload('iklan_photo');
    }

    $this->create_config('m_iklan', $data);

    redirect('../Iklan');
  }

  function iklan_edit($id){

    $page_bar['data'][] = array(
                              'title_page' => 'Iklan list',
                              'url'        => '../Iklan'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Iklan Form',
                              'url'        => '../iklan_edit/'.$id
                            );

    $where = '';
    $where_iklan_id  = "WHERE iklan_id = '$id'";
    $action           = "content/V_iklan_form";

    $data  = array(
             'title_page' 	    => $this->page_bar($page_bar),
             'action_add'       => "C_m_iklan/iklan_update",
             'action_close'     => "Iklan",
             'iklan_details'   => $this->select_config('m_iklan', $where_iklan_id)->row()
            );

    $this->get_page($data, $action, $this->load_plugin_head, $this->load_plugin_foot);

  }

  function iklan_update(){
    $iklan_id      = $this->input->post('iklan_id');
    $iklan_summary = $this->input->post('iklan_summary');
    $iklan_nama    = $this->input->post('iklan_nama');
    $iklan_tanggal = $this->input->post('iklan_tanggal');
    $iklan_isi     = $this->input->post('iklan_isi');
    $iklan_penulis = $this->input->post('iklan_penulis');
    $i_mg_file      = isset($_FILES['iklan_photo']['name']) ? $_FILES['iklan_photo']['name']: "";

    $data = array(
                    'iklan_id'       => $iklan_id,
                    'iklan_nama'     => $iklan_nama,
                    'iklan_summary'  => $iklan_summary,
                    'iklan_tanggal'  => date('Y-m-d', strtotime($iklan_tanggal)),
                    'iklan_isi'      => htmlentities($iklan_isi),
                    'iklan_penulis'  => $iklan_penulis
                );

    $where = array(
      'iklan_id' => $iklan_id
    );

    if ($i_mg_file <> "" && $i_mg_file <> null) {
        $data['iklan_photo']  = $i_mg_file;
        $config['upload_path']          = './assets/img/items/';
        $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip|jpeg';
        $config['max_size']             = '2048000';
        $config['remove_spaces']        = TRUE;  //it will remove all spaces


        $cek_img_old = $this->select_config_one('m_iklan', 'iklan_photo', $where);

        if ($cek_img_old->iklan_photo) { unlink($config['upload_path'].$cek_img_old->iklan_photo); }

        $this->load->library('upload', $config);
        $this->upload->do_upload('iklan_photo');

        $errors = $this->upload->display_errors();
    }

    $this->update_config('m_iklan', $data, $where);
    redirect('../Iklan');

  }

  function iklan_delete($id){
    $where = array(
      'iklan_id' => $id
    );

    $this->delete_config('m_iklan',$where);
    redirect('../Iklan');
  }

}
