<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_majelisilmu extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->is_logged_in();
    $this->load->model('M_majelisilmu');
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
    $this->majelisilmu_list();
    $this->get_footer($this->load_plugin_foot);
  }

  function majelisilmu_list()
  {
    $page_bar['data'][] = array(
                              'title_page' => 'Majelis Ilmu List',
                              'url'        => 'Majelis'
                            );

    $where  = " WHERE majelisilmu_active = 'y' ";
    $select = " majelisilmu_id, majelisilmu_judul, majelisilmu_urutan ";
    $data = array(
                  'title_page' 	=> $this->page_bar($page_bar),
                  'majelisilmu' => $this->select_config('m_majelisilmu', $where, $select),
                  'action'      => "Majelisilmu-Form",
                );

    $this->load->view('content/V_majelisilmu', $data);
  }

  function majelisilmu_form()
  {
    $page_bar['data'][] = array(
                              'title_page' => 'Majelis Ilmu List',
                              'url'        => 'majelisilmu'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Majelis Ilmu Form',
                              'url'        => 'Majelisilmu-Form'
                            );

    $where = '';
    $url   = "content/V_majelisilmu_form";
    $data  = array(
               'title_page' 	=> $this->page_bar($page_bar),
               'action_add'   => "C_majelisilmu/majelisilmu_add",
               'action_close' => "Majelisilmu",
               'majelisilmu'  => $this->select_config('m_majelisilmu', $where)
            );

    $this->get_page($data, $url, $this->load_plugin_head, $this->load_plugin_foot);
  }

  function majelisilmu_add()
  {
    $majelisilmu_judul        = $this->input->post('majelisilmu_judul');
    $majelisilmu_narasumber   = $this->input->post('majelisilmu_narasumber');
    $majelisilmu_isi          = $this->input->post('majelisilmu_isi');
    $majelisilmu_keterangan   = $this->input->post('majelisilmu_keterangan');
    $majelisilmu_urutan       = $this->input->post('majelisilmu_urutan');

    $data = array(
        'majelisilmu_judul'     => $majelisilmu_judul,
        'majelisilmu_narasumber'=> $majelisilmu_narasumber,
        'majelisilmu_keterangan'=> $majelisilmu_keterangan,
        'majelisilmu_isi'       => $majelisilmu_isi,
        'majelisilmu_urutan'    => $majelisilmu_urutan
    );

    $this->create_config('m_majelisilmu', $data);

    redirect('Majelisilmu');
  }

  function majelisilmu_edit($id){

    $page_bar['data'][] = array(
                              'title_page' => 'majelisilmu list',
                              'url'        => '../majelisilmu'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'Majelis ilmu Form',
                              'url'        => '../majelisilmu_edit/'.$id
                            );

    $where = '';
    $where_majelisilmu_id  = "WHERE majelisilmu_id = '$id'";
    $action           = "content/V_majelisilmu_form";

    $data  = array(
             'title_page' 	    => $this->page_bar($page_bar),
             'action_add'       => "C_majelisilmu/majelisilmu_update",
             'action_close'     => "Majelisilmu",
             'majelisilmu_details'   => $this->select_config('m_majelisilmu', $where_majelisilmu_id)->row()
            );

    $this->get_page($data, $action, $this->load_plugin_head, $this->load_plugin_foot);

  }


  function majelisilmu_update(){
    $majelisilmu_id          = $this->input->post('majelisilmu_id');
    $majelisilmu_judul       = $this->input->post('majelisilmu_judul');
    $majelisilmu_narasumber  = $this->input->post('majelisilmu_narasumber');
    $majelisilmu_isi         = $this->input->post('majelisilmu_isi');
    $majelisilmu_urutan      = $this->input->post('majelisilmu_urutan');
    $majelisilmu_keterangan  = $this->input->post('majelisilmu_keterangan');

    $data = array(
              'majelisilmu_judul'       => $majelisilmu_judul,
              'majelisilmu_narasumber'  => $majelisilmu_narasumber,
              'majelisilmu_keterangan'  => $majelisilmu_keterangan,
              'majelisilmu_isi'         => $majelisilmu_isi,
              'majelisilmu_urutan'      => $majelisilmu_urutan
            );

    $where = array(
      'majelisilmu_id' => $majelisilmu_id
    );

    $this->update_config('m_majelisilmu', $data, $where);

    redirect('Majelisilmu');
  }

  function majelisilmu_delete($id){
    $where = array(
      'majelisilmu_id' => $id
    );

    $this->delete_config('m_majelisilmu', $where);
    redirect('Majelisilmu');
  }

}
