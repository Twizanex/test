<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Memento admin Controller
 *
 * This class handles user account related functionality
 *
 * @package		User
 * @subpackage	UserCore
 * @author		dbcinfotech
 * @link		http://dbcinfotech.net
 */

class Ajax_core extends CI_Controller {
	
	var $active_theme = '';
	var $per_page = 2;
	public function __construct()
	{
		parent::__construct();
		is_installed(); #defined in auth helper
		

		$this->load->database();
		$this->active_theme = get_active_theme();
		$this->load->model('ajax_model');
		//$this->load->model('show/post_model');
		$this->load->helper('dbcvote');
		$this->form_validation->set_error_delimiters('<label class="col-lg-2 control-label">&nbsp;</label><div class="col-lg-8"><div class="alert alert-danger" style="margin-bottom:0;">', '</div></div>');
		//$this->output->enable_profiler(TRUE);

	}
	
	public function index()

	{

		echo 'ciao';	

	}

	

	public function follow()
    {
    	$user_id = $this->input->post('id');
        
        $user_session = $this->session->userdata('user_id');
        $result = $this->ajax_model->connect($user_session, $user_id);
        add_notific($user_id , 'connect', $user_session);
        log_message('debug', "FOLLOW BUTTON user_session ".$user_session);
        
    }

    public function un_follow()
    {
    	
        $user_id = $this->input->post('id');
        $user_session = $this->session->userdata('user_id');
        $result = $this->ajax_model->disconnect($user_session, $user_id);
        log_message('debug', "UN_FOLLOW BUTTON user_session ".$user_session);
    }
public function read_notific()
	{
		
		$user_id = $this->session->userdata('user_id');

		$data = array(
               
               
               'user_notification_read' => '1'
            );

$this->db->where('user_id', $user_id);
$this->db->update('user_notification', $data); 
	}
}
/* End of file install.php */
/* Location: ./application/modules/user/controllers/user_core.php */