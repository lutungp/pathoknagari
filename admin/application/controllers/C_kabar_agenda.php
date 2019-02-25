<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kabar_agenda extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->is_logged_in();
    $this->load->model('M_kabar_agenda');
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
    $this->agenda_list();
    $this->get_footer($this->load_plugin_foot);
  }

  function agenda_list()
  {

    $page_bar['data'][] = array(
                              'title_page' => 'Kabar Agenda List',
                              'url'        => 'Kabar_agenda'
                            );
    $where  = " WHERE agenda_active = 'y' ";
    $select = " agenda_id, agenda_nama ";
    $data = array(
                  'title_page' 	=> $this->page_bar($page_bar),
                  'agenda_details'=> $this->select_config('m_agenda', $where, $select),
                  'action'      => "Kabar_agenda_form",
                );

    $this->load->view('content/V_kabar_agenda', $data);
  }

  function agenda_form()
  {
    $page_bar['data'][] = array(
                              'title_page' => 'Kabar Agenda List',
                              'url'        => 'Kabar_agenda'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Kabar Agenda Form',
                              'url'        => 'Kabar_agenda_form'
                            );

    $where = '';
    $url   = "content/V_kabar_agenda_form";
    $data  = array(
               'title_page' 	=> $this->page_bar($page_bar),
               'action_add'   => "C_kabar_agenda/agenda_add",
               'action_close' => "Kabar_agenda",
               'agenda_details' => $this->select_config('m_agenda', $where)
            );

    $this->get_page($data, $url, $this->load_plugin_head, $this->load_plugin_foot);
  }

  function agenda_add()
  {
    $agenda_summary = $this->input->post('agenda_summary');
    $agenda_nama    = $this->input->post('agenda_nama');
    $agenda_tanggal = $this->input->post('agenda_tanggal');
    $agenda_isi     = $this->input->post('agenda_isi');
    $agenda_penulis = $this->input->post('agenda_penulis');

    $data = array(
        'agenda_nama'     => $agenda_nama,
        'agenda_summary'  => $agenda_summary,
        'agenda_tanggal'  => date('Y-m-d', strtotime($agenda_tanggal)),
        'agenda_isi'      => $agenda_isi,
        'agenda_penulis'  => $agenda_penulis
    );

    $i_mg_file    = isset($_FILES['agenda_photo']['name']) ? $_FILES['agenda_photo']['name']: "";
    if ($i_mg_file <> "") {

        $data['agenda_photo'] = $i_mg_file;

        $config['upload_path']          = './assets/img/items/';
        $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip|jpeg';
        $config['max_size']             = '2048000';
        $config['remove_spaces']        = TRUE;  //it will remove all spaces

        $this->load->library('upload', $config);
        $this->upload->do_upload('agenda_photo');

        $errors = $this->upload->display_errors();

        echo $errors;
    }

    $this->create_config('m_agenda', $data);

    redirect('Kabar_agenda');
  }

  function agenda_edit($id){

    $page_bar['data'][] = array(
                              'title_page' => 'Kabar Agenda List',
                              'url'        => '../agenda_list'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Kabar Agenda Form',
                              'url'        => '../agenda_edit/'.$id
                            );

    $where = '';
    $where_agenda_id  = "WHERE agenda_id = '$id'";
    $action           = "content/V_kabar_agenda_form";

    $data  = array(
             'title_page' 	    => $this->page_bar($page_bar),
             'action_add'       => "C_kabar_agenda/agenda_update",
             'action_close'     => "Kabar_agenda",
             'agenda_details'   => $this->select_config('m_agenda', $where_agenda_id)->row()
            );

    $this->get_page($data, $action, $this->load_plugin_head, $this->load_plugin_foot);

  }

  function agenda_update(){
    $agenda_id      = $this->input->post('agenda_id');
    $agenda_summary = $this->input->post('agenda_summary');
    $agenda_nama    = $this->input->post('agenda_nama');
    $agenda_tanggal = $this->input->post('agenda_tanggal');
    $agenda_isi     = $this->input->post('agenda_isi');
    $agenda_penulis = $this->input->post('agenda_penulis');
    $i_mg_file      = isset($_FILES['agenda_photo']['name']) ? $_FILES['agenda_photo']['name']: "";

    $data = array(
                    'agenda_id'       => $agenda_id,
                    'agenda_nama'     => $agenda_nama,
                    'agenda_summary'  => $agenda_summary,
                    'agenda_tanggal'  => date('Y-m-d', strtotime($agenda_tanggal)),
                    'agenda_isi'      => htmlentities($agenda_isi),
                    'agenda_penulis'  => $agenda_penulis
                );

    $where = array(
      'agenda_id' => $agenda_id
    );

    if ($i_mg_file <> "" && $i_mg_file <> null) {
        $data['agenda_photo']  = $i_mg_file;
        $config['upload_path']          = './assets/img/items/';
        $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip|jpeg';
        $config['max_size']             = '2048000';
        $config['remove_spaces']        = TRUE;  //it will remove all spaces


        $cek_img_old = $this->select_config_one('m_agenda', 'agenda_photo', $where);

        if ($cek_img_old->agenda_photo) { unlink($config['upload_path'].$cek_img_old->agenda_photo); }

        $this->load->library('upload', $config);
        $this->upload->do_upload('agenda_photo');

        $errors = $this->upload->display_errors();
    }

    $this->update_config('m_agenda', $data, $where);
    redirect('Kabar_agenda');

  }

  function agenda_delete($id){
    $where = array(
      'agenda_id' => $id
    );

    $this->delete_config('m_agenda',$where);
    redirect('Kabar_agenda');
  }

}
