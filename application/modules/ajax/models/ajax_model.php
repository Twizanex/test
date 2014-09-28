<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**

 * Memento admin Controller

 *

 * This class handles user account related functionality

 *

 * @package		Show

 * @subpackage	ShowModelCore

 * @author		dbcinfotech

 * @link		http://dbcinfotech.net

 */



class Ajax_model extends CI_Model 

{



	function __construct()

	{

		parent::__construct();

		$this->load->database();

	}


public function index($type='all',$start=0)

    {           
       
        $data['content']        = load_view('posts_view',$value,TRUE);
        load_template($data,$this->active_theme);

    }
    


    public function connect($user_session, $user_two)
    {
        $data = array(
            'user_session' => $user_session,
            'user_two' => $user_two,
            'date' => date('Y-m-d H:i:s')
        );
        
        $this->db->insert('follow', $data);
        
        // Create notification
        if(!$this->db->insert('user_notification',
                array(
                    'user_id' => $user_two,
                    'user_id_created_by' => $user_session,
                    'user_notification_type' => 'connect',
                    'update_id' => 0,
                    'user_notification_read' => 0,
                    'user_notification_created' => date('Y-m-d H:i:s')
                    )
                ))
            log_message('error', "ajax_model->connect() - Insert into user_notification:".$this->db->_error_message());
        
        
    }

    public function disconnect($user_session, $user_two)
    {
                if(!$this->db->where('user_session', $user_session)->
                where('user_two', $user_two)->
                delete('follow'))
                log_message('error', "ajax_model->disconnect() - Insert into user_notification:".$this->db->_error_message());
        // Create notification
        if(!$this->db->insert('user_notification',
                array(
                    'user_id' => $user_two,
                    'user_id_created_by' => $user_session,
                    'user_notification_type' => 'disconnect',
                    'update_id' => 0,
                    'user_notification_read' => 0,
                    'user_notification_created' => date('Y-m-d H:i:s')
                    )
                ))
            log_message('error', "ajax_model->connect() - Insert into user_notification:".$this->db->_error_message());
        
    }




}



/* End of file install.php */

/* Location: ./application/modules/ajax/models/ajax_model.php */