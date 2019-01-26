<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_berita extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->is_logged_in();
    $this->load->model('M_berita');
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
    $this->berita_list();
    $this->get_footer($this->load_plugin_foot);
  }

  function berita_list()
  {

    $page_bar['data'][] = array(
                              'title_page' => 'Berita list',
                              'url'        => 'Berita'
                            );
    $where  = " WHERE berita_active = 'y' ";
    $select = " berita_id, berita_nama ";
    $data = array(
                  'title_page' 	=> $this->page_bar($page_bar),
                  'berita'      => $this->select_config('m_berita', $where, $select),
                  'action'      => "Berita-Form",
                );

    $this->load->view('content/V_berita', $data);
  }

  function berita_form()
  {
    $page_bar['data'][] = array(
                              'title_page' => 'Berita list',
                              'url'        => 'Berita'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Berita Form',
                              'url'        => 'Berita-Form'
                            );

    $where = '';
    $url   = "content/berita_form";
    $data  = array(
               'title_page' 	=> $this->page_bar($page_bar),
               'action_add'   => "C_berita/berita_add",
               'action_close' => "Berita",
               'berita'       => $this->select_config('m_berita', $where)
            );

    $this->get_page($data, $url, $this->load_plugin_head, $this->load_plugin_foot);
  }

  function berita_add()
  {
    $berita_summary = $this->input->post('berita_summary');
    $berita_nama    = $this->input->post('berita_nama');

    $data = array(
        'berita_nama'     => $berita_nama,
        'berita_summary'  => $berita_summary,
        'berita_tanggal'  => $berita_tanggal,
        'berita_isi'      => $berita_isi,
    );
    $i_mg_file    = isset($_FILES['berita_photo']['name']) ? $_FILES['berita_photo']['name']: "";
    if ($i_mg_file <> "") {

        $data['berita_photo'] = $i_mg_file;

        $config['upload_path']          = './assets/img/items/';
        $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip|jpeg';
        $config['max_size']             = '2048000';
        $config['remove_spaces']        = TRUE;  //it will remove all spaces

        $this->load->library('upload', $config);
        $this->upload->do_upload('berita_photo');
    }

    $this->create_config('m_berita', $data);

    redirect('Berita');
  }

  function berita_edit($id){

    $page_bar['data'][] = array(
                              'title_page' => 'Berita list',
                              'url'        => '../berita_list'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Berita Form',
                              'url'        => '../berita_edit/'.$id
                            );

    $where = '';
    $where_berita_id  = "WHERE berita_id = '$id'";
    $action           = "content/berita_form";

    $data  = array(
             'title_page' 	    => $this->page_bar($page_bar),
             'action_add'       => "C_berita/berita_update",
             'action_close'     => "Berita",
             'berita_details'   => $this->select_config('m_berita', $where_berita_id)->row()
            );

    $this->get_page($data, $action, $this->load_plugin_head, $this->load_plugin_foot);

  }

  function berita_update(){
    $berita_id      = $this->input->post('berita_id');
    $berita_summary = $this->input->post('berita_summary');
    $berita_nama    = $this->input->post('berita_nama');
    $berita_tanggal = $this->input->post('berita_tanggal');
    $berita_isi   = $this->input->post('berita_isi');
    $i_mg_file    = isset($_FILES['berita_photo']['name']) ? $_FILES['berita_photo']['name']: "";

    $data = array(
                    'berita_id'       => $berita_id,
                    'berita_nama'     => $berita_nama,
                    'berita_summary'  => $berita_summary,
                    'berita_tanggal'  => date('Y-m-d', strtotime($berita_tanggal)),
                    'berita_isi'      => htmlentities($berita_isi)
                );

    $where = array(
      'berita_id' => $berita_id
    );

    if ($i_mg_file <> "" && $i_mg_file <> null) {
        $data['berita_photo']  = $i_mg_file;
        $config['upload_path']          = './assets/img/items/';
        $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip|jpeg';
        $config['max_size']             = '2048000';
        $config['remove_spaces']        = TRUE;  //it will remove all spaces


        $cek_img_old = $this->select_config_one('m_berita', 'berita_photo', $where);

        if ($cek_img_old->berita_photo) { unlink($config['upload_path'].$cek_img_old->berita_photo); }

        $this->load->library('upload', $config);
        $this->upload->do_upload('berita_photo');

        $errors = $this->upload->display_errors();
    }

    $this->update_config('m_berita', $data, $where);
    redirect('Berita');

  }

  function berita_delete($id){
    $where = array(
      'berita_id' => $id
    );

    $this->delete_config('m_berita',$where);
    redirect('Berita');
  }

}
