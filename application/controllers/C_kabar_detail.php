<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kabar_detail extends CI_Controller{

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
      /* check apakah session sudah menyimpan id kabar */
      if ($this->session->userdata('kabar_id') == null ||
              ($this->session->userdata('kabar_id') <> $this->input->post('message') &&
              $this->input->post('message'))) {
          /*
          * jika belum maka disimpan terlebih dahulu
          * saat reload akan digunakan kembali
          */
          $id = $this->input->post('message');
          $newdata = array('kabar_id'  => $id);

          $this->session->set_userdata($newdata);
      } else {
          $id = $this->session->userdata('kabar_id');
      }

      $postData['id'] = $id;

      $kabar_detail = $this->http_request($this->API.'/C_api/kabardetail', $postData, 1);

      $postData = [
        'start'   => 0,
        'limit'   => 3,
        'select'  => ' kabar_id, kabar_tanggal, kabar_nama, kabar_isi, kabar_penulis, kabar_summary, kabar_photo ',
        'sortby'  => 'kabar_tanggal',
        'sorttype'=> ' DESC'
      ];

      $kabar_terbaru = $this->http_request($this->API.'/C_api/kabar', $postData, array(CURLOPT_BUFFERSIZE => 10));
      
      $data['kabar_detail']  = json_decode($kabar_detail, TRUE);
      $data['kabar_terbaru'] = json_decode($kabar_terbaru, TRUE);

      $postData = [
        'select'  => 'webprofile_runtext',
        'start'   => 0,
        'limit'   => 1
      ];

      $running_text = $this->http_request($this->API.'/C_api/webprofile', $postData, array(CURLOPT_BUFFERSIZE => 10));
      $running_text = json_decode($running_text, TRUE);
      if ($running_text['data'] == "") {
          $running_text['data'] = array();
      }

      $data['running_text'] = $running_text;

      $this->load->view('V_kabar_detail', $data);
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
