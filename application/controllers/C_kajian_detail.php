<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kajian_detail extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->API="http://admin.pathoknagari.id";
    // $this->API="http://localhost/pathoknagari_back";
    $this->load->library('session');
    $this->load->library('curl');
    $this->load->helper('form');
    $this->load->helper('url');
  }

  function index()
  {
    /* check apakah session sudah menyimpan id kajian */
    if ($this->session->userdata('kajian_id') == null ||
            ($this->session->userdata('kajian_id') <> $this->input->post('message') &&
            $this->input->post('message') || $this->session->userdata('kajian_id') <> $this->input->get('message') &&
            $this->input->get('message') )) {
        /*
        * jika belum maka disimpan terlebih dahulu
        * saat reload akan digunakan kembali
        */
        $id = $this->input->post('message');
        $newdata = array('kajian_id'  => $id);

        $this->session->set_userdata($newdata);
    } else {
        $id = $this->session->userdata('kajian_id');
    }

    $postData['id'] = $id;

    $kajian_detail = $this->http_request($this->API.'/C_api/kajiandetail', $postData, 1);

    $postData = [
      'start'   => 0,
      'limit'   => 3,
      'sortby'  => 'kajian_tanggal',
      'sorttype'=> ' DESC',
      'select'  => '*'
    ];

    $kajian_terbaru = $this->http_request($this->API.'/C_api/kajian', $postData, array(CURLOPT_BUFFERSIZE => 10));

    $data['kajian_detail']  = json_decode($kajian_detail, TRUE);
    $data['kajian_terbaru'] = json_decode($kajian_terbaru, TRUE);

    $wherewebprofile = array(
      'fieldname' => 'webprofile_name',
      'value'     => 'PATHOK NAGARI'
    );

    $postDataProfile = [
      'select'  => 'webprofile_runtext',
      'where'   => json_encode($wherewebprofile),
      'start'   => 0,
      'limit'   => 1
    ];

    $running_text = $this->http_request($this->API.'/C_api/webprofile', $postDataProfile, array(CURLOPT_BUFFERSIZE => 10));
    $running_text = json_decode($running_text, TRUE);
    if ($running_text['data'] == "") {
        $running_text['data'] = array();
    }

    $data['running_text'] = $running_text;

    $this->load->view('V_kajian_detail', $data);
  }


  function http_request($url, $data, $count){
      // persiapkan curl
      $ch = curl_init();

      // set url
      curl_setopt($ch, CURLOPT_URL, $url);
      // set user agent
      curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

      curl_setopt($ch, CURLOPT_POST, $count);

      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      // return the transfer as a string
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

      // $output contains the output string
      $output = curl_exec($ch);

      // tutup curl
      curl_close($ch);

      // mengembalikan hasil curl
      return $output;
  }

}
