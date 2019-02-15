<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kabar_addarajat_addarajat extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->is_logged_in();
    $this->load->model('M_kabar_addarajat');
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
    $this->kabar_list();
    $this->get_footer($this->load_plugin_foot);
  }

  function kabar_list()
  {

    $page_bar['data'][] = array(
                              'title_page' => 'Kabar Ad-darojat list',
                              'url'        => 'Kabar'
                            );
    $where  = " WHERE kabar_active = 'y' ";
    $select = " kabar_id, kabar_nama ";
    $data = array(
                  'title_page' 	=> $this->page_bar($page_bar),
                  'kabar'       => $this->select_config('m_kabar', $where, $select),
                  'action'      => "Kabar-Form",
                );

    $this->load->view('content/V_kabar', $data);
  }

  function kabar_form()
  {
    $page_bar['data'][] = array(
                              'title_page' => 'kabar list',
                              'url'        => 'kabar'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'kabar Form',
                              'url'        => 'kabar-Form'
                            );

    $where = '';
    $url   = "content/kabar_form";
    $data  = array(
               'title_page' 	=> $this->page_bar($page_bar),
               'action_add'   => "C_kabar_addarajat/kabar_add",
               'action_close' => "kabar",
               'kabar'       => $this->select_config('m_kabar', $where)
            );

    $this->get_page($data, $url, $this->load_plugin_head, $this->load_plugin_foot);
  }

  function kabar_add()
  {
    $kabar_summary = $this->input->post('kabar_summary');
    $kabar_nama    = $this->input->post('kabar_nama');
    $kabar_tanggal = $this->input->post('kabar_tanggal');
    $kabar_isi     = $this->input->post('kabar_isi');
    $kabar_penulis = $this->input->post('kabar_penulis');

    $data = array(
        'kabar_nama'     => $kabar_nama,
        'kabar_summary'  => $kabar_summary,
        'kabar_tanggal'  => date('Y-m-d', strtotime($kabar_tanggal)),
        'kabar_isi'      => $kabar_isi,
        'kabar_penulis'  => $kabar_penulis
    );

    $i_mg_file    = isset($_FILES['kabar_photo']['name']) ? $_FILES['kabar_photo']['name']: "";
    if ($i_mg_file <> "") {

        $data['kabar_photo'] = $i_mg_file;

        $config['upload_path']          = './assets/img/items/';
        $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip|jpeg';
        $config['max_size']             = '2048000';
        $config['remove_spaces']        = TRUE;  //it will remove all spaces

        $this->load->library('upload', $config);
        $this->upload->do_upload('kabar_photo');
    }

    $this->create_config('m_kabar', $data);

    redirect('kabar');
  }

  function kabar_edit($id){

    $page_bar['data'][] = array(
                              'title_page' => 'kabar list',
                              'url'        => '../kabar'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'kabar Form',
                              'url'        => '../kabar_edit/'.$id
                            );

    $where = '';
    $where_kabar_id  = "WHERE kabar_id = '$id'";
    $action           = "content/kabar_form";

    $data  = array(
             'title_page' 	    => $this->page_bar($page_bar),
             'action_add'       => "C_kabar_addarajat/kabar_update",
             'action_close'     => "kabar",
             'kabar_details'   => $this->select_config('m_kabar', $where_kabar_id)->row()
            );

    $this->get_page($data, $action, $this->load_plugin_head, $this->load_plugin_foot);

  }

  function kabar_update(){
    $kabar_id      = $this->input->post('kabar_id');
    $kabar_summary = $this->input->post('kabar_summary');
    $kabar_nama    = $this->input->post('kabar_nama');
    $kabar_tanggal = $this->input->post('kabar_tanggal');
    $kabar_isi     = $this->input->post('kabar_isi');
    $kabar_penulis = $this->input->post('kabar_penulis');
    $i_mg_file      = isset($_FILES['kabar_photo']['name']) ? $_FILES['kabar_photo']['name']: "";

    $data = array(
                    'kabar_id'       => $kabar_id,
                    'kabar_nama'     => $kabar_nama,
                    'kabar_summary'  => $kabar_summary,
                    'kabar_tanggal'  => date('Y-m-d', strtotime($kabar_tanggal)),
                    'kabar_isi'      => htmlentities($kabar_isi),
                    'kabar_penulis'  => $kabar_penulis
                );

    $where = array(
      'kabar_id' => $kabar_id
    );

    if ($i_mg_file <> "" && $i_mg_file <> null) {
        $data['kabar_photo']  = $i_mg_file;
        $config['upload_path']          = './assets/img/items/';
        $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip|jpeg';
        $config['max_size']             = '2048000';
        $config['remove_spaces']        = TRUE;  //it will remove all spaces


        $cek_img_old = $this->select_config_one('m_kabar', 'kabar_photo', $where);

        if ($cek_img_old->kabar_photo) { unlink($config['upload_path'].$cek_img_old->kabar_photo); }

        $this->load->library('upload', $config);
        $this->upload->do_upload('kabar_photo');

        $errors = $this->upload->display_errors();
    }

    $this->update_config('m_kabar', $data, $where);
    redirect('kabar');

  }

  function kabar_delete($id){
    $where = array(
      'kabar_id' => $id
    );

    $this->delete_config('m_kabar',$where);
    redirect('kabar');
  }

}
