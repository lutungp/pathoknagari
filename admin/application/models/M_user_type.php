<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user_type extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function select_user_type_list()
 {
   $query = $this->db->query("SELECT * FROM user_type");
   return $query;
 }

 function select_permit_access($id)
 {
   $query = $this->db->query("  SELECT sidebar.*,
                                (
                                  SELECT
                                      permit_access
                                  FROM permits
                                  WHERE permits.sidebar = sidebar.sidebar_id
                                  AND permits.user_type = '$id'
                                ) AS permit_access
                                FROM sidebar
                                WHERE sidebar_level = 2
                                AND sidebar.sidebar_active = 'y' ");
   return $query;
 }
}
