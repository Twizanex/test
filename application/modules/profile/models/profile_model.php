<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 *
 * 
 * @package		Profile
 * @subpackage	Profile Model
 * @author		Alex
 * @link		http://topsitoweb.it
 */

class Profile_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get_user_profile($user_name)
	{
		$query = $this->db->get_where('users',array('user_name'=>$user_name));
		return $query->row();
	}
	
	function update_profile($data,$id)
	{
		$this->db->update('users',$data,array('id'=>$id));
		$this->session->set_userdata('user_name',$data['user_name']);
	}

	function get_users_by_range($start,$limit='',$sort_by='',$sort='asc')

    {

        $this->db->order_by($sort_by, $sort);

        $this->db->where('status',1);

        if($start==='all')

        {

            $query = $this->db->get('users');

        }

        else

        {

            $query = $this->db->get('users',$limit,$start);

        }

        return $query;

    }

    function count_users()

    {

        $this->db->where('status',1);

        $query = $this->db->get('users');

        return $query->num_rows();

    }

    
}

/* End of file admin_model_core.php */
/* Location: ./system/application/modules/profile/models/profile_model.php */