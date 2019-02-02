
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $table = 'sidebar';
    $query = $this->db->query("SELECT * FROM sidebar where sidebar_level = 1;");
  }
   function select_user_list($branch = "")
  {
    $query = $this->db->query("SELECT
                                  user.*,
                                  user_type.user_type_name
                               FROM user
                               LEFT JOIN user_type ON user_type_id = user.user_type ");
    return $query;
  }
}
 ?>
