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
  {;
    // $ch   = curl_init();
    // $url  = $this->API.'/C_api/berita';
    $postData = [
      'end'     => 0,
      'limit'   => 6,
    ];

    $countData = count($postData);

    $profile = $this->http_request($this->API.'/C_api/berita', $postData, $countData);

    // ubah string JSON menjadi array
    $profile = json_decode($profile, TRUE);
    $data['ringkas_berita'] = $profile;

    $this->load->view('templates/V_header');
    $this->load->view('V_dashboard', $data);
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

}
