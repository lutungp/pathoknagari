<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends MY_Controller{

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
    $postData = [
      'start'   => 0,
      'limit'   => 4,
    ];

    $countData = count($postData);

    $slide_berita = $this->http_request($this->API.'/C_api/slide_berita', $postData, array(CURLOPT_BUFFERSIZE => 10));

    $postData = [
      'start'   => 5,
      'limit'   => 7,
    ];

    $countData = count($postData);

    $kilas_berita = $this->http_request($this->API.'/C_api/berita', $postData, array(CURLOPT_BUFFERSIZE => 10));

    // // ubah string JSON menjadi array
    $slide_berita = json_decode($slide_berita, TRUE);
    if ($slide_berita == "") {
        $slide_berita['data'] = array();
    }
    $data['slide_berita'] = $slide_berita;

    $kilas_berita = json_decode($kilas_berita, TRUE);
    if ($kilas_berita['data'] == "") {
        $kilas_berita['data'] = array();
    }
    $data['kilas_berita'] = $kilas_berita;
    /*
    $postData = ['select'   => 'pegawai_nama, pegawai_jabatan, pegawai_photo'];

    $countData = count($postData);

    $data_pegawai = $this->http_request($this->API.'/C_api/pegawai', $postData, array(CURLOPT_BUFFERSIZE => 10));
    $data_pegawai = json_decode($data_pegawai, TRUE);
    if ($data_pegawai == "") {
        $data_pegawai['data'] = array();
    }

    $data['data_pegawai'] = $data_pegawai;
    */

    /* Kajian */
    $postData = [
      'select'  => 'kajian_id, kajian_photo, kajian_nama',
      'start'   => 0,
      'limit'   => 3
    ];

    $countData = count($postData);

    $slide_kajian = $this->http_request($this->API.'/C_api/kajian', $postData, array(CURLOPT_BUFFERSIZE => 10));
    $slide_kajian = json_decode($slide_kajian, TRUE);
    if ($slide_kajian['data'] == "") {
        $slide_kajian['data'] = array();
    }
    $data['slide_kajian'] = $slide_kajian;

    $postData = [
      'select'  => 'kajian_id, kajian_photo, kajian_nama, kajian_summary, kajian_tanggal',
      'start'   => 0,
      'limit'   => 6
    ];

    $countData = count($postData);

    $kilas_kajian = $this->http_request($this->API.'/C_api/kajian', $postData, array(CURLOPT_BUFFERSIZE => 10));
    $kilas_kajian = json_decode($kilas_kajian, TRUE);
    if ($kilas_kajian['data'] == "") {
        $kilas_kajian['data'] = array();
    }

    $data['kilas_kajian'] = $kilas_kajian;

    $this->load->view('templates/V_header');
    $this->load->view('V_dashboard', $data);
    $this->load->view('templates/V_kontak');
    $this->load->view('templates/V_footer');
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

  function get_berita()
  {
    $start = $this->input->post('start');
    $end   = $this->input->post('end');
    $postData = [
      'start'   => $start,
      'limit'   => $end,
    ];

    $countData = count($postData);

    $profile = $this->http_request($this->API.'/C_api/berita', $postData, $countData);

    echo $profile;
  }

}
