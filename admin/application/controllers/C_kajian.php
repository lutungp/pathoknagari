<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kajian extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->is_logged_in();
    $this->load->model('M_kajian');
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
    $this->kajian_list();
    $this->get_footer($this->load_plugin_foot);
  }

  function kajian_list()
  {

    $page_bar['data'][] = array(
                              'title_page' => 'kajian list',
                              'url'        => 'kajian'
                            );
    $where  = " WHERE kajian_active = 'y' ";
    $select = " kajian_id, kajian_nama ";
    $data = array(
                  'title_page' 	=> $this->page_bar($page_bar),
                  'kajian'      => $this->select_config('m_kajian', $where, $select),
                  'action'      => "Kajian-Form",
                );

    $this->load->view('content/V_kajian', $data);
  }

  function kajian_form()
  {
    $page_bar['data'][] = array(
                              'title_page' => 'Kajian list',
                              'url'        => 'Kajian'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Kajian Form',
                              'url'        => 'Kajian-Form'
                            );

    $where = '';
    $url   = "content/kajian_form";
    $data  = array(
               'title_page' 	=> $this->page_bar($page_bar),
               'action_add'   => "C_kajian/kajian_add",
               'action_close' => "Kajian",
               'kajian'       => $this->select_config('m_kajian', $where)
            );

    $this->get_page($data, $url, $this->load_plugin_head, $this->load_plugin_foot);
  }

  function kajian_add()
  {
    $kajian_summary = $this->input->post('kajian_summary');
    $kajian_nama    = $this->input->post('kajian_nama');
    $kajian_tanggal = $this->input->post('kajian_tanggal');
    $kajian_isi     = $this->input->post('kajian_isi');
    $kajian_penulis = $this->input->post('kajian_penulis');

    $data = array(
        'kajian_nama'     => $kajian_nama,
        'kajian_summary'  => $kajian_summary,
        'kajian_tanggal'  => date('Y-m-d', strtotime($kajian_tanggal)),
        'kajian_isi'      => $kajian_isi,
        'kajian_penulis'  => $kajian_penulis
    );

    $i_mg_file    = isset($_FILES['kajian_photo']['name']) ? $_FILES['kajian_photo']['name']: "";
    if ($i_mg_file <> "") {

        $data['kajian_photo'] = $i_mg_file;

        $config['upload_path']          = './assets/img/items/';
        $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip|jpeg';
        $config['max_size']             = '2048000';
        $config['remove_spaces']        = TRUE;  //it will remove all spaces

        $this->load->library('upload', $config);
        $this->upload->do_upload('kajian_photo');
    }

    $this->create_config('m_kajian', $data);

    redirect('Kajian');
  }

  function kajian_edit($id){

    $page_bar['data'][] = array(
                              'title_page' => 'Kajian list',
                              'url'        => '../kajian'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Kajian Form',
                              'url'        => '../kajian_edit/'.$id
                            );

    $where = '';
    $where_kajian_id  = "WHERE kajian_id = '$id'";
    $action           = "content/kajian_form";

    $data  = array(
             'title_page' 	    => $this->page_bar($page_bar),
             'action_add'       => "C_kajian/kajian_update",
             'action_close'     => "Kajian",
             'kajian_details'   => $this->select_config('m_kajian', $where_kajian_id)->row()
            );

    $this->get_page($data, $action, $this->load_plugin_head, $this->load_plugin_foot);

  }

  function kajian_update(){
    $kajian_id      = $this->input->post('kajian_id');
    $kajian_summary = $this->input->post('kajian_summary');
    $kajian_nama    = $this->input->post('kajian_nama');
    $kajian_tanggal = $this->input->post('kajian_tanggal');
    $kajian_isi     = $this->input->post('kajian_isi');
    $kajian_penulis = $this->input->post('kajian_penulis');
    $i_mg_file      = isset($_FILES['kajian_photo']['name']) ? $_FILES['kajian_photo']['name']: "";

    $data = array(
                    'kajian_id'       => $kajian_id,
                    'kajian_nama'     => $kajian_nama,
                    'kajian_summary'  => $kajian_summary,
                    'kajian_tanggal'  => date('Y-m-d', strtotime($kajian_tanggal)),
                    'kajian_isi'      => htmlentities($kajian_isi),
                    'kajian_penulis'  => $kajian_penulis
                );

    $where = array(
      'kajian_id' => $kajian_id
    );

    if ($i_mg_file <> "" && $i_mg_file <> null) {
        $data['kajian_photo']  = $i_mg_file;
        $config['upload_path']          = './assets/img/items/';
        $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip|jpeg';
        $config['max_size']             = '2048000';
        $config['remove_spaces']        = TRUE;  //it will remove all spaces


        $cek_img_old = $this->select_config_one('m_kajian', 'kajian_photo', $where);

        if ($cek_img_old->kajian_photo) { unlink($config['upload_path'].$cek_img_old->kajian_photo); }

        $this->load->library('upload', $config);
        $this->upload->do_upload('kajian_photo');

        $errors = $this->upload->display_errors();
    }

    $this->update_config('m_kajian', $data, $where);
    redirect('Kajian');

  }

  function kajian_delete($id){
    $where = array(
      'kajian_id' => $id
    );

    $this->delete_config('m_kajian',$where);
    redirect('Kajian');
  }

}
