<?php
    // import library dari REST_Controller
    require APPPATH . 'libraries/REST_Controller.php';
    // extends class dari REST_Controller
    class C_api extends REST_Controller{
    // constructor
    public function __construct(){
      parent::__construct();
    }

    public function index_get(){
    // testing response
        $response['status']=200;
        $response['error']=false;
        $response['message']='Hai from response';
    // tampilkan response
        $this->response($response);
    }

    public function berita_get(){
        $where  = " WHERE berita_active = 'y' ";

        $response['status'] = 200;
        $response['img_url'] = base_url('assets/img/items/');
        $result = $this->Global_m->select_config('m_berita', $where)->result();
        foreach ($result as $key => $value) {
          $response['data'][] = $value;
        }

        $this->response($response);
    }

    public function berita_post(){
        $start    = (integer)$this->post('start');
        $limit    = (integer)$this->post('limit');
        $sortby   = $this->post('sortby');
        $select   = $this->post('select') <> "" ? $this->post('select') : "*";

        $where  = " WHERE berita_active = 'y' ";

        if ($sortby <> "") {
            $sortby = " ORDER BY " . $sortby;
        }

        $response['status'] = 200;
        $response['img_url'] = base_url('assets/img/items/');
        $result = $this->Global_m->select_config('m_berita', $where, $select, $start, $limit, $sortby)->result();
        $nbrows = Count($this->Global_m->select_config('m_berita', $where, '*')->result());
        $response['nbrows'] = $nbrows;
        foreach ($result as $key => $value) {
          $response['data'][] = $value;
        }

        $this->response($response);
    }


    function slide_berita_post()
    {
      $where  = " WHERE berita_active = 'y' ";
      $sortby = " ORDER BY berita_tanggal DESC ";
      $start = (integer)$this->post('start');
      $limit = (integer)$this->post('limit');

      $response['status'] = 200;
      $response['img_url'] = base_url('assets/img/items/');
      $result = $this->Global_m->select_config('m_berita', $where, "*", $start, $limit, $sortby)->result();
      foreach ($result as $key => $value) {
        $response['data'][] = $value;
      }

      $nbrows = Count($this->Global_m->select_config('m_berita', $where, '*', $start, $limit)->result());
      $response['nbrows'] = $nbrows;

      $this->response($response);
    }

    public function beritadetail_post(){
        $berita_id = $this->input->post('id');
        $where  = " WHERE berita_active = 'y' AND berita_id = $berita_id ";

        $response['status'] = 200;
        $response['img_url'] = base_url('assets/img/items/');
        $result = $this->Global_m->select_config('m_berita', $where, '*')->result();
        $nbrows = Count($this->Global_m->select_config('m_berita', $where, '*')->result());
        $response['nbrows'] = $nbrows;
        foreach ($result as $key => $value) {
          $response['data'][] = $value;
        }


        $this->response($response);
    }

    function pegawai_post()
    {
      $start  = (integer)$this->post('start');
      $limit  = (integer)$this->post('limit');
      $wherearr  = json_decode($this->post('where'));

      $where  = " WHERE pegawai_aktif = 'y' ";
      if ($wherearr->fieldname  <> "") {
          $where .= " AND $wherearr->fieldname = '$wherearr->value' ";
      }
      $sortby = " ORDER BY pegawai_id ASC ";
      $select = $this->post('select');
      $result = $this->Global_m->select_config('m_pegawai', $where, $select, 0, 0, $sortby)->result();
      foreach ($result as $key => $value) {
        $response['data'][] = $value;
      }

      $this->response($response);
    }

    function kajian_post()
    {
      $start  = (integer)$this->post('start');
      $limit  = (integer)$this->post('limit');
      $sortby = " ORDER BY kajian_tanggal DESC ";
      $where  = " WHERE kajian_active = 'y' ";
      $select = $this->post('select');

      $result = $this->Global_m->select_config('m_kajian', $where, $select, $start, $limit, $sortby)->result();
      foreach ($result as $key => $value) {
        $response['data'][] = $value;
      }

      $this->response($response);
    }

    public function kajiandetail_post(){
        $kajian_id = $this->input->post('id');
        $where  = " WHERE kajian_active = 'y' AND kajian_id = $kajian_id ";

        $response['status'] = 200;
        $response['img_url'] = base_url('assets/img/items/');
        $result = $this->Global_m->select_config('m_kajian', $where, '*')->result();
        $nbrows = Count($this->Global_m->select_config('m_kajian', $where, '*')->result());
        $response['nbrows'] = $nbrows;
        foreach ($result as $key => $value) {
          $response['data'][] = $value;
        }


        $this->response($response);
    }

    function majelisilmu_post()
    {
      $start  = (integer)$this->post('start');
      $limit  = (integer)$this->post('limit');
      $sortby = " ORDER BY majelisilmu_urutan ASC ";
      $where  = " WHERE majelisilmu_active = 'y' ";
      $select = $this->post('select');

      $result = $this->Global_m->select_config('m_majelisilmu', $where, $select, $start, $limit, $sortby)->result();
      foreach ($result as $key => $value) {
        $response['data'][] = $value;
      }

      $this->response($response);
    }

    function webprofile_post()
    {
      $start  = (integer)$this->post('start');
      $limit  = (integer)$this->post('limit');
      $select = $this->post('select');
      $wherearr  = json_decode($this->post('where'));

      $where  = " WHERE webprofile_id IS NOT NULL ";
      if ($wherearr->fieldname  <> "") {
          $where .= " AND $wherearr->fieldname = '$wherearr->value' ";
      }

      $result = $this->Global_m->select_config('s_webprofile', $where, $select, $start, $limit)->result();
      foreach ($result as $key => $value) {
        $response['data'][] = $value;
      }

      $this->response($response);
    }

    function kabar_post()
    {
      $start  = (integer)$this->post('start');
      $limit  = (integer)$this->post('limit');
      $sortby = " ORDER BY kabar_tanggal ASC ";
      $where  = " WHERE kabar_active = 'y' ";
      $select = $this->post('select');

      $result = $this->Global_m->select_config('m_kabar', $where, $select, $start, $limit, $sortby)->result();
      foreach ($result as $key => $value) {
        $response['data'][] = $value;
      }

      $this->response($response);
    }

    function kabardetail_post()
    {
        $kabar_id = $this->input->post('id');
        $where  = " WHERE kabar_active = 'y' AND kabar_id = $kabar_id ";

        $response['status'] = 200;
        $response['img_url'] = base_url('assets/img/items/');
        $result = $this->Global_m->select_config('m_kabar', $where, '*')->result();
        $nbrows = Count($this->Global_m->select_config('m_kabar', $where, '*')->result());
        $response['nbrows'] = $nbrows;
        foreach ($result as $key => $value) {
          $response['data'][] = $value;
        }


        $this->response($response);
    }

    function agenda_post()
    {
      $start  = (integer)$this->post('start');
      $limit  = (integer)$this->post('limit');
      $sortby = " ORDER BY agenda_tanggal ASC ";
      $where  = " WHERE agenda_active = 'y' ";
      $select = $this->post('select');

      $result = $this->Global_m->select_config('m_agenda', $where, $select, $start, $limit, $sortby)->result();
      foreach ($result as $key => $value) {
        $response['data'][] = $value;
      }

      $this->response($response);
    }

    function iklan_post()
    {
      $start  = (integer)$this->post('start');
      $limit  = (integer)$this->post('limit');
      $sortby = " ORDER BY iklan_tanggal ASC ";
      $where  = " WHERE iklan_active = 'y' ";
      $select = $this->post('select');

      $result = $this->Global_m->select_config('m_iklan', $where, $select, $start, $limit, $sortby)->result();
      foreach ($result as $key => $value) {
        $response['data'][] = $value;
      }

      $this->response($response);
    }

}
?>
