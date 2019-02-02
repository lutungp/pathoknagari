<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends My_controller {


		public function __construct()
		{
			parent::__construct();
			$this->is_logged_in();

			$this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/css/components-rounded.min.css";
			$this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.css";
			$this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css";
			$this->load_plugin_head[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css";

			$this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/scripts/datatable.js";
			$this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/datatables.min.js";
			$this->load_plugin_foot[] = base_url()."assets/metronic_v4.5.6/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js";

		}

	public function index($load_plugin_head = null, $load_plugin_foot = null )
	{
			$data['plugin_head'] = $this->load_plugin_head;
			$data['plugin_foot'] = $this->load_plugin_foot;
			$where = " WHERE user_id = " . $_SESSION['user_id'] . " ";
	    $data['user_data']   = $this->select_config('user', $where, 'user_id, user_name, user_img')->row();

			$this->load->view('template/head_admin_interface', $data);
			$this->load->view('template/topbar');
			$this->sidebar();
			$this->load->view('V_dashboard');
			$this->load->view('template/js_admin_interface', $data);
			$this->load->view('template/foot');
	}

}
