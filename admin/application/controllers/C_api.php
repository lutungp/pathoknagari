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
        $sorttype = $this->post('sorttype') <> "" ? $this->post('sorttype') : " ASC";

        $where  = " WHERE berita_active = 'y' ";

        if ($sortby <> "") {
            $sortby = " ORDER BY " . $sortby . $sorttype;
        }

        $response['status'] = 200;
        $response['img_url'] = base_url('assets/img/items/');
        $result = $this->Global_m->select_config('m_berita', $where, '*', $start, $limit, $sortby)->result();
        $nbrows = Count($this->Global_m->select_config('m_berita', $where, '*')->result());
        $response['nbrows'] = ($nbrows - 4);
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
      $where  = " WHERE pegawai_aktif = 'y' ";
      $select = $this->post('select');

      $result = $this->Global_m->select_config('m_pegawai', $where, $select)->result();
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

      $result = $this->Global_m->select_config('m_kajian', $where, $select)->result();
      foreach ($result as $key => $value) {
        $response['data'][] = $value;
      }

      $this->response($response);
    }
}
?>
