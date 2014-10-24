<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_notific'))
{
	function get_notific($user_id)
	{
		$CI = get_instance();
		$CI->load->database();
		$query = $CI->db->get_where('user_notification',array('user_id'=>$user_id, 'user_notification_read'=>'0' ));
		if ($query->num_rows() > 0)
		{
			return $query->result_array();

		}

		
	}
}






if ( ! function_exists('add_notific'))
{
	function add_notific($for_user , $type, $user_session)
	{
		$CI = get_instance();
		$CI->load->database();
		$user_session = $CI->session->userdata('user_id');
		// Create notification
		if(!$CI->db->insert('user_notification',
			array(
				'user_id' => $for_user,
				'user_id_created_by' => $user_session,
				'user_notification_type' => 'connect',
				'update_id' => 0,
				'user_notification_read' => 0,
				'user_notification_created' => date('Y-m-d H:i:s')
				)
			))
			log_message('error', "ajax_model->connect() - Insert into user_notification:".$CI->db->_error_message());

	}


}

if ( ! function_exists('read_notific'))
{
	function read_notific($user_id)
	{
		$CI = get_instance();
		return $CI->session->userdata('user_id');

		$data = array(
               
               
               'user_notification_read' => '1'
            );

$CI->db->where('user_id', $user_id);
$CI->db->update('user_notification', $data); 
	}


}





