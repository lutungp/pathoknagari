<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_user');
    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.css";
    $this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css";

    $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.js";
    $this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js";
  }

  function index()
  {
    $this->get_header($this->load_plugin_head);
    $this->user_list();
    $this->get_footer($this->load_plugin_foot);
  }

  function user_list(){
    $page_bar['data'][] = array(
                              'title_page' => 'User List',
                              'url'        => 'user_list'
                            );

    $data = array(
                  'title_page' 	=> $this->page_bar($page_bar),
                  'users'       => $this->M_user->select_user_list(),
                  'action'      => "user_form",
                );

    $this->load->view('master/user_master/V_userlist', $data);
  }

  function user_form()
  {

    $page_bar['data'][] = array(
                              'title_page' => 'User List',
                              'url'        => 'user_list'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'User Form',
                              'url'        => 'user_form'
                            );

    $where = '';
    $where_user_id = '';
    $url   = "master/user_master/user_form";

    $data  = array(
                   'title_page' 	=> $this->page_bar($page_bar),
                   'action_add'   => "C_user/user_add",
                   'action_close' => "C_user",
                   'user_details'  => false,
                   'user_type'    => $this->select_config('user_type'),
                  );
    $this->get_page($data, $url, $this->load_plugin_head);
  }

  function user_add(){
    $i_name       = $this->input->post('i_name');
    $i_img        = $this->input->post('i_img');
    $i_user_type  = $this->input->post('i_user_type');
    $i_user_password    = $this->input->post('i_password');
    $i_password_confirm = $this->input->post('i_password_confirm');
    $i_branch     = $this->input->post('i_branch');
    $i_mg_file    = isset($_FILES['i_img']['name']) ? $_FILES['i_img']['name']: " ";

    if ($i_user_password == $i_password_confirm) {
      $i_user_password = md5($i_user_password);
      if ($i_mg_file) {

        $data = array(
                      'user_name'      => $i_name,
                      'user_img'       => $i_mg_file,
                      'user_type'      => $i_user_type,
                      'user_password'  => $i_user_password
                    );

        $config['upload_path']          = './assets/img/users/';
        $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip';
        $config['max_size']             = '8192';
        $config['remove_spaces']        = TRUE;  //it will remove all spaces

        $this->load->library('upload', $config);
        $this->upload->do_upload('i_img');

      } else {

        $data = array(
                      'user_name'     => $i_name,
                      'user_img'      => '',
                      'user_type'      => $i_user_type,
                      'user_password' => $i_user_password,
                      'branch'        => $i_branch
                    );

      }

      $this->create_config('user', $data);
      redirect('user_list');
    } else {
      redirect('user_form');
    }
  }

  function user_edit($id){

    $page_bar['data'][] = array(
                              'title_page' => 'User List',
                              'url'        => '../user_list'
                            );

    $page_bar['data'][] = array(
                              'title_page' => 'User Form',
                              'url'        => '../user_form_edit/'.$id
                            );

    $where = '';
    $where_user_id  = "WHERE user_id = '$id'";
    $action         = "master/user_master/user_form";
    $data  = array(
               'title_page' 	  => $this->page_bar($page_bar),
               'action_add'     => "C_user/user_update",
               'action_close'   => "user_list",
               'user_details'   => $this->select_config('user', $where_user_id)->row(),
               'user_type'      => $this->select_config('user_type', $where)
            );

    $this->get_page($data, $action, $this->load_plugin_head);
  }

  function user_update(){
    $i_id             = $this->input->post('i_id');
    $i_nama           = $this->input->post('i_name');
    $i_user_password  = $this->input->post('i_password');
    $i_password_confirm = $this->input->post('i_password_confirm');
    $i_branch           = $this->input->post('i_branch');
    $i_mg_file          = isset($_FILES['i_img']['name']) ? $_FILES['i_img']['name']: "";

    if ($i_user_password!=null) {

      if ($i_user_password == $i_password_confirm) {
        $i_user_password = md5($i_user_password);
        $i_user_type = $this->input->post('i_user_type');


        $where = array(
          'user_id' => $i_id
        );
        if ($i_mg_file <> "") {
          $data = array(
            'user_name'       => $i_nama,
            'user_img'        => $i_mg_file,
            'user_type'       => $i_user_type,
            'user_password'   => $i_user_password,
            'branch'          => $i_branch
          );

          $config['upload_path']          = './assets/img/users/';
          $config['allowed_types']        = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip';
          $config['max_size']             = '8192';
          $config['remove_spaces']        = TRUE;  //it will remove all spaces

          $this->load->library('upload', $config);

          $cek_img_old = $this->select_config_one('user', 'user_img', $where);

          if ($cek_img_old->user_img) { unlink($config['upload_path'].$cek_img_old->user_img); }

          $this->upload->do_upload('i_img');

        } else {

          $data = array(
            'user_name'       => $i_nama,
            'user_type'       => $i_user_type,
            'user_password'   => $i_user_password,
            'branch'  => $i_branch
          );

        }

        $this->update_config('user',$data,$where);
        redirect('user_list');
      } else {
        redirect("C_user/user_edit/$i_id");
      }
    } else {
      redirect("C_user/user_edit/$i_id");
    }
  }

  function user_delete($id){
    $where = array(
      'user_id' => $id
    );

    $this->delete_config('user',$where);
    redirect('user_list');
  }

  function get_branch()
  {
    $where = '';
    $q_branch = $this->select_config('branches', $where);
    foreach ($q_branch->result() as $row) {
      $data[] = array(
                    'branch_id' => $row->branch_id,
                    'branch_name' => $row->branch_name
                  );
    }
    echo json_encode($data);
  }


}
 ?>
