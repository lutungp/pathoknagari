<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user_type extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
      $this->is_logged_in();
      $this->load->model('M_user_type');
      $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.css";
      $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css";

      $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.js";
      $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js";

  }

  function index()
  {
    $this->get_header($this->load_plugin_head);
    $this->user_type_list();
    $this->get_footer($this->load_plugin_foot);
  }

  function user_type_list(){

    $page_bar['data'][] = array(
                              'title_page' => 'User List',
                              'url'        => 'user_list'
                            );

    $data = array(
                  'title_page' 	=> $this->page_bar($page_bar),
                  'user_type'   => $this->M_user_type->select_user_type_list(),
                  'action'      => "C_user_type/user_type_form",
                );

    $this->load->view('master/user_type_master/user_type_list_v', $data);
  }

  function user_type_form()
  {
    $page_bar['data'][] = array(
                              'title_page' => 'User Type List',
                              'url'        => '../user_list'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'User Type Form',
                              'url'        => '../user_type_form'
                            );

    $where = " WHERE sidebar_active = 'y' AND sidebar_level = 2 ";
    $where_user_type_id = '';
    $url   = "master/user_type_master/user_type_form";

    $data  = array(
                   'title_page' 	      => $this->page_bar($page_bar),
                   'action_add'         => "C_user_type/user_type_add",
                   'action_close'       => "C_user_type",
                   'user_type_details'  => false,
                   'sidebar_menu'       => $this->select_config('sidebar', $where)->result()
                 );
    $this->get_page($data,$url);
  }

  function user_type_add(){
    $i_name = $this->input->post('i_name');
    $data = array('user_type_name' => $i_name);

    $this->create_config('user_type', $data);

    $q_sidebar_account = $this->select_config('sidebar', '');
    foreach ($q_sidebar_account->result() as $row) {

      $crud = $this->input->post('permit_'.$row->sidebar_id);
      if (is_array($crud)) {
        $crud_value = implode(',',$crud);
      } else {
        $crud_value = '';
      }

      $data = array(
                    'user_type'     => '',
                    'sidebar'       => $row->sidebar_id,
                    'permit_access' => $crud_value,
            );

      $this->create_config('permits', $data);

    }
    redirect('user_type_list');
  }

  function user_type_edit($id)
  {
    $page_bar['data'][] = array(
                              'title_page' => 'User Type List',
                              'url'        => '../user_list'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'User Type Form',
                              'url'        => '../user_type_form_edit/'.$id
                            );
    $where = '';
    $where_user_type_id  = "WHERE user_type_id = '$id'";
    $action         = "master/user_type_master/user_type_form";
    $data  = array(
                   'title_page' 	=> $this->page_bar($page_bar),
                   'action_add'     => "C_user_type/user_type_update",
                   'action_close'   => "user_type_list",
                   'user_type_details'   => $this->select_config('user_type', $where_user_type_id)->row(),
                   'user_type'  => $this->select_config('user_type', $where),
                   'sidebar_menu'  => $this->M_user_type->select_permit_access($id)->result()
                );
    $this->get_page($data, $action);
  }

  function user_type_update(){
    $i_id = $this->input->post('i_id');
    $i_nama = $this->input->post('i_name');

    $q_sidebar_account = $this->select_config('sidebar', '');
    foreach ($q_sidebar_account->result() as $row) {
      $crud = $this->input->post('permit_'.$row->sidebar_id);
      if (is_array($crud)) {
        $crud_value = implode(',',$crud);
      } else {
        $crud_value = '';
      }

      $data = array(
                    'user_type'     => $i_id,
                    'sidebar'       => $row->sidebar_id,
                    'permit_access' => $crud_value,
            );

      $where_user_type_id_sidebar_id = array('user_type'   => $i_id,
                                             'sidebar'  => $row->sidebar_id);

      $val = $this->select_config_one('permits', 'count(*) as jml',$where_user_type_id_sidebar_id);

      if ($val->jml == 0) {
        $this->create_config('permits', $data);
      } else {
        $this->update_config('permits', $data, $where_user_type_id_sidebar_id);
      }
    }
    redirect('user_type_list');
  }

  function user_type_delete($id){
    $where = array(
      'user_type_id' => $id
    );

    $this->delete_config('user_type',$where);
    redirect('user_type_list');
  }


}
 ?>
