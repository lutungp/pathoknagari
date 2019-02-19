<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sejarah_detail extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->API="http://admin.pathoknagari.id";
    //Codeigniter : Write Less Do More
    $this->load->library('session');
    $this->load->library('curl');
    $this->load->helper('form');
    $this->load->helper('url');
  }

  function index()
  {
    $postData = [
      'start'   => 0,
      'limit'   => 3,
      'sortby'  => 'berita_tanggal',
      'sorttype'=> ' DESC'
    ];

    $berita_terbaru = $this->http_request($this->API.'/C_api/berita', $postData, array(CURLOPT_BUFFERSIZE => 10));

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

    $postData = ['select'   => 'pegawai_nama, pegawai_jabatan, pegawai_photo'];

    $countData = count($postData);

    $data_pegawai = $this->http_request($this->API.'/C_api/pegawai', $postData, array(CURLOPT_BUFFERSIZE => 10));
    $data_pegawai = json_decode($data_pegawai, TRUE);
    if ($data_pegawai == "") {
        $data_pegawai['data'] = array();
    }

    $data['data_pegawai'] = $data_pegawai;

    $data['berita_terbaru'] = json_decode($berita_terbaru, TRUE);
    $this->load->view('V_sejarah_detail', $data);
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
