<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Social estate profile Controller
 *
 * This class handles user account related functionality
 *
 * @package		Profile
 * @subpackage	Profile
 * @author		Alex
 * @link		http://topsitoweb.it
 */



class Profile extends CI_controller {



	var $PER_PAGE = 2;

	var $active_theme = '';

	public function __construct()

	{

		parent::__construct();

		is_installed(); #defined in auth helper		

		$this->output->enable_profiler($this->config->item('debug_site'));	

		$this->PER_PAGE = get_per_page_value();#defined in auth helper

		$this->active_theme = get_active_theme();

		if (!is_loggedin()){
			redirect(site_url(''));
		}

		//$this->load->model('show_model');
		$this->load->model('profile_model');
        $this->load->model('user/user_model');

		$this->load->library('encrypt');
		$this->load->helper('text');


		if(isset($_POST['view_orderby']))

		{

			$this->session->set_userdata('view_orderby',$this->input->post('view_orderby'));

		}



		if(isset($_POST['view_ordertype']))

		{

			$this->session->set_userdata('view_ordertype',$this->input->post('view_ordertype'));

		}

        $system_currency_type = get_settings('site_settings','system_currency_type',0);

        if($system_currency_type == 0){

            $system_currency = get_currency_icon(get_settings('site_settings','system_currency','USD'));

        }

        else{

            $system_currency = get_settings('site_settings','system_currency','USD');

        }



        $this->session->set_userdata('system_currency',$system_currency);

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        
	}



	
	



	public function index($start='0')

	{

        $value['profile']	= $this->profile_model->get_user_profile($this->session->userdata('user_id'));  

		$data['content'] 	= load_view('profile_view',$value,TRUE);

		$data['alias']	    = 'agent';

		load_template($data,$this->active_theme);	

	}

	public function timeline($start='0')

	{

        $value['query']			= $this->profile_model->get_users_by_range($start,$this->PER_PAGE,'id');

        $total 					= $this->profile_model->count_users();

        $value['pages']			= configPagination('show/agent/',$total,4,$this->PER_PAGE);

		$data['content'] 	= load_view('timeline_view',$value,TRUE);

		$data['alias']	    = 'agent';

		load_template($data,$this->active_theme);	

	}


	public function subscription($start='0')

	{

        $this->load->model('admin/package_model');
		$value['packages']	= $this->package_model->get_all_packages_by_range('all');
        $data['content'] 	= load_view('pricing_view',$value,TRUE);
    	
        $data['alias']	    = 'signup';
        load_template($data,$this->active_theme);
		

	}


	public function editprofile()

	{



		$value['profile']	= $this->profile_model->get_user_profile($this->session->userdata('user_id'));  

		$data['title']		= 'Edit profile';

		$data['content'] 	= load_view('editprofile_view',$value,TRUE);

		load_template($data,$this->active_theme);
	}


	public function upload_profile_photo()

	{

		$date_dir = 'profile_photos/';

		$config['upload_path'] = './uploads/profile_photos/';

		$config['allowed_types'] = 'gif|jpg|png';

		$config['max_size'] = '5120';

		

		$this->load->library('upload', $config);

		$this->upload->display_errors('', '');	



		if($this->upload->do_upload('photoimg'))

		{

			$data = $this->upload->data();

			$this->load->helper('date');

			$format = 'DATE_RFC822';

			$time = time();

			

			$media['media_name'] 		= $data['file_name'];

			$media['media_url']  		= base_url().'uploads/profile_photos/'.$data['file_name'];

			$media['create_time'] 		= standard_date($format, $time);

			$media['status']			= 1;

			

			create_square_thumb('./uploads/profile_photos/'.$data['file_name'],'./uploads/profile_photos/thumb/');



			$status['error'] 	= 0;

			$name = array(
               'profile_photo' => $data['file_name']
            );
			
		}

		else

		{

			$errors = $this->upload->display_errors();

			$errors = str_replace('<p>','',$errors);

			$errors = str_replace('</p>','',$errors);

			$status = array('error'=>$errors,'name'=>'');

		}
		$id = $this->session->userdata('user_id');
		$this->profile_model->update_profile($name,$id);
		redirect(site_url('profile/editprofile'));

	}

	public function updateprofile()

	{

        $this->form_validation->set_rules('first_name',	'First Name', 		'required|xss_clean');

        $this->form_validation->set_rules('user_email',	'Email', 		'required|xss_clean');

        $this->form_validation->set_rules('last_name',	'last Name', 		'required|xss_clean');

        $this->form_validation->set_rules('gender',		'Gender', 			'required|xss_clean');

        $this->form_validation->set_rules('user_name', 	'Username', 		'required|callback_username_check|xss_clean');

        $this->form_validation->set_rules('company_name','Company name', 	'required|xss_clean');

        $this->form_validation->set_rules('phone','Phone', 	'required|xss_clean');

		

		if ($this->form_validation->run() == FALSE)

		{
			$id = $this->input->post('id');
			$this->editprofile($id);	

		}

		else

		{

			$id = $this->input->post('id');

            $userdata['user_email'] = $this->input->post('user_email');

            $userdata['first_name'] = $this->input->post('first_name');

            $userdata['last_name'] 	= $this->input->post('last_name');

            $userdata['gender'] 	= $this->input->post('gender');

            $userdata['user_name'] 	= $this->input->post('user_name');



            add_user_meta($id,'company_name',$this->input->post('company_name'));

            add_user_meta($id,'phone',$this->input->post('phone'));

            add_user_meta($id,'about_me',$this->input->post('about_me'));

            add_user_meta($id,'fb_profile',$this->input->post('fb_profile'));

            add_user_meta($id,'twitter_profile',$this->input->post('twitter_profile'));

            add_user_meta($id,'li_profile',$this->input->post('li_profile'));

            add_user_meta($id,'gp_profile',$this->input->post('gp_profile'));



			$this->profile_model->update_profile($userdata,$id);

			$this->session->set_flashdata('msg', '<div class="alert alert-success">Data updated</div>');

			
			redirect(site_url('profile/editprofile/'.$id));		
			
		}

	}

	public function allestatesagent($start=0)

	{

		$this->load->model('realestate_model');

		if(isset($_POST['filter_purpose']))

		{

			$this->session->set_userdata('filter_purpose',$this->input->post('filter_purpose'));

		}



		if(isset($_POST['filter_type']))

		{

			$this->session->set_userdata('filter_type',$this->input->post('filter_type'));

		}



		if(isset($_POST['filter_condition']))

		{

			$this->session->set_userdata('filter_condition',$this->input->post('filter_condition'));

		}



		if(isset($_POST['filter_status']))

		{

			$this->session->set_userdata('filter_status',$this->input->post('filter_status'));

		}



		if(isset($_POST['filter_orderby']))

		{

			$this->session->set_userdata('filter_orderby',$this->input->post('filter_orderby'));

		}



		if(isset($_POST['filter_ordertype']))

		{

			$this->session->set_userdata('filter_ordertype',$this->input->post('filter_ordertype'));

		}



		$value['posts']  	= $this->realestate_model->get_all_estates_agent($start,$this->PER_PAGE,'create_time','desc');

		$total 				= $this->realestate_model->count_all_estates_agent();

		$value['pages']		= configPagination('profile/allestatesagent',$total,15,$this->PER_PAGE);

		$value['start']     = $start;

        $data['title'] 		= 'All estates';

        $data['content'] 	= load_view('all_estates_view',$value,TRUE);

		//$data['content'] 	= $this->load->view('admin/estate/all_estates_view',$value,TRUE);

		load_template($data,$this->active_theme);

		//$this->load->view('admin/template/template_view',$data);		

	}



	function editestate($page=0,$id='',$msg='')

	{

		$this->load->model('realestate_model');
		if($msg=='error')
			$msg = '<div class="alert alert-danger">Error Occured. Please check the form below.</div>';


        $data['title'] 	 = 'Edit estate';

        $value['page']	 = $page;
        $value['msg']	 = $msg;
        $value['estate'] = $this->realestate_model->get_estate_by_id($id);

        $value['distance_info'] = $this->get_distance_info($id);

        $data['content'] = load_view('edit_estate_view',$value,TRUE);

        load_template($data,$this->active_theme);


		//$this->load->view('admin/template/template_view',$data);

	}

	#feature a service

	public function featurepost($page='0',$id='',$confirmation='')

	{
		if(!is_admin())
		{
			echo 'You don\'t have permission for this action';
			die;
		}

		$this->realestate_model->update_post_by_id(array('featured'=>1),$id);

		$this->session->set_flashdata('msg', '<div class="alert alert-success">Post Featured</div>');

		redirect(site_url('profile/allestates/'.$page));		

	}



	#feature a service

	public function removefeaturepost($page='0',$id='',$confirmation='')

	{

		if(!is_admin())
		{
			echo 'You don\'t have permission for this action';
			die;
		}

		$this->realestate_model->update_post_by_id(array('featured'=>0),$id);

		$this->session->set_flashdata('msg', '<div class="alert alert-success">Post Un-Featured</div>');

		redirect(site_url('profile/allestates/'.$page));		

	}

	public function featurepayment($page='0',$id='')

	{
		$this->load->helper('date');
		$datestring = "%Y-%m-%d";
		$time = time();
		$request_date = mdate($datestring, $time);

		$data = array();
		$data['unique_id']      = uniqid();
		$data['amount'] 		= get_settings('realestate_settings','feature_charge','0');
		$data['currency']   	= get_settings('paypalsettings','currency','USD');
		$data['daylimit']   	= get_settings('realestate_settings','feature_day_limit','0');
		$data['requestdate']    = $request_date;
		$data['activation_date']= '';
		$data['expirtion_date'] = '';
		$data['user_id']      	= $this->session->userdata('user_id');
		$data['medium']      	= 'paypal';
		$data['is_active']      = 0;
		
		$this->session->set_userdata('unique_id',$data['unique_id']);
		add_post_meta($id,'featurepayment_'.$data['unique_id'],json_encode($data));

		$value['post'] 		= $this->realestate_model->get_estate_by_id($id);

	    $data['title'] 		= 'Pay for feature';

        $data['content']  	= $this->load->view('admin/estate/feature_payment_view',$value,TRUE);

		$this->load->view('admin/template/template_view',$data);			

	}


	public function get_distance_info($post_id) {

		$this->load->model('distance_info_model');
		$info = $this->distance_info_model->get_distance_info_of_a_post($post_id);
		
		if($info=='error')
			return array();
		
		return $info;
	}



}





/* End of file install.php */

/* Location: ./application/modules/show/controllers/show_core.php */
