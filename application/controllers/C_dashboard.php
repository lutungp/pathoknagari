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
      'start'   => 0,
      'limit'   => 4,
      'select'  => " berita_id, berita_nama, berita_photo, DATE_FORMAT(berita_tanggal, '%d %M %Y') AS berita_tanggal, berita_summary ",
      'sortby'  => ' berita_tanggal DESC, berita_created_date DESC'
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
      'limit'   => 4
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

    /* Majelis Ilmu */
    $postData = [
      'select'  => 'majelisilmu_id, majelisilmu_judul, majelisilmu_narasumber, majelisilmu_urutan, majelisilmu_keterangan',
      'start'   => 0,
      'limit'   => 6
    ];

    $countData = count($postData);

    $majelisilmu_details = $this->http_request($this->API.'/C_api/majelisilmu', $postData, array(CURLOPT_BUFFERSIZE => 10));
    $majelisilmu_details = json_decode($majelisilmu_details, TRUE);
    if ($majelisilmu_details['data'] == "") {
        $majelisilmu_details['data'] = array();
    }

    $data['majelisilmu_details'] = $majelisilmu_details;

    $wherewebprofile = array(
      'fieldname' => 'webprofile_name',
      'value'     => 'PATHOK NAGARI'
    );

    $postData = [
      'select'  => 'webprofile_runtext',
      'where'   => json_encode($wherewebprofile),
      'start'   => 0,
      'limit'   => 1
    ];

    $running_text = $this->http_request($this->API.'/C_api/webprofile', $postData, array(CURLOPT_BUFFERSIZE => 10));
    $running_text = json_decode($running_text, TRUE);
    if ($running_text['data'] == "") {
        $running_text['data'] = array();
    }

    $dataheader['running_text'] = $running_text;

    $wherewebprofile = array(
      'fieldname' => 'webprofile_name',
      'value'     => 'PATHOK CONTENT'
    );

    $postData = [
      'select'  => 'webprofile_runtext',
      'where'   => json_encode($wherewebprofile),
      'start'   => 0,
      'limit'   => 1
    ];

    $running_text = $this->http_request($this->API.'/C_api/webprofile', $postData, array(CURLOPT_BUFFERSIZE => 10));
    $running_text = json_decode($running_text, TRUE);
    if ($running_text['data'] == "") {
        $running_text['data'] = array();
    }

    $dataheader['running_text'] = $running_text;

    /* Kabar Ad-Darojat */
    $postDataKbr = [
      'select'  => 'kabar_id, kabar_nama, kabar_penulis, kabar_summary, kabar_photo, kabar_tanggal ',
      'start'   => 0,
      'limit'   => 24
    ];

    $countData = count($postData);

    $kabar_details = $this->http_request($this->API.'/C_api/kabar', $postDataKbr, array(CURLOPT_BUFFERSIZE => 10));
    $kabar_details = json_decode($kabar_details, TRUE);
    if ($kabar_details['data'] == "") {
        $kabar_details['data'] = array();
    }

    $data['kabar_details'] = $kabar_details;

    /* Kabar Agenda */
    $postAgenda = [
      'select'  => 'agenda_id, agenda_photo ',
      'start'   => 0,
      'limit'   => 24
    ];

    $countData = count($postData);

    $agenda_details = $this->http_request($this->API.'/C_api/agenda', $postAgenda, array(CURLOPT_BUFFERSIZE => 10));
    $agenda_details = json_decode($agenda_details, TRUE);
    if ($agenda_details['data'] == "") {
        $agenda_details['data'] = array();
    }

    $data['agenda_details'] = $agenda_details;

    $this->load->view('templates/V_header', $dataheader);
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
      'select'  => " berita_id, berita_nama, berita_photo, DATE_FORMAT(berita_tanggal, '%d %M %Y') AS berita_tanggal, berita_summary ",
      'sortby'  => ' berita_tanggal DESC'
    ];

    $countData = count($postData);

    $profile = $this->http_request($this->API.'/C_api/berita', $postData, $countData);

    echo $profile;
  }

}
