<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('follow_button'))
{
	function follow_button($user_id)
	{

		if (is_loggedin()){
			if (user_session_id()!=$user_id){
				if (user_follow($user_id)) {
					echo '
					<script>
					$(function() 
					{
						$("#remove"+'.$user_id.').fadeOut(2000).show();
					});
</script>';
}else{ 
	echo '          <script>
	$(function() 
	{

		$("#follow"+'.$user_id.').fadeOut(2000).show();
	});
</script>';
}
echo '  <div id="follow'.$user_id.'" style="display:none">
<a href="#" class="follow" id="'.$user_id.'">
<span class="follow_b">'.lang_key('Follow').' </span></a>
</div>


<div class="youfollowing_b" id="remove'.$user_id.'" style="display:none"> 
'.lang_key('Your Following').' <a href="#" class="remove" id="'.$user_id.'">
<span class="remove_b"> '.lang_key('Unfollow').' </span></a>
</div>';
}}}
}





if ( ! function_exists('follower'))
{
	function user_follow($user_id)
	{
		$CI = get_instance();
		$CI->load->database();
		$user_session=$CI->session->userdata('user_id');
		$query = $CI->db->get_where('follow',array('user_session'=>$user_session, 'user_two'=>$user_id ));
		if ($query->num_rows() > 0)
		{
			return TRUE;

		}
	}


}

if ( ! function_exists('user_session_id'))
{
	function user_session_id()
	{
		$CI = get_instance();
		return $CI->session->userdata('user_id');

		
	}


}





