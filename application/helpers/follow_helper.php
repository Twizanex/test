<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('follow_button'))
{
	function follow_button($user_id)
	{

		if (is_loggedin()){
			if (user_session_id()!=$user_id){

					echo '<script src="'.theme_url().'/assets/js/top_follow.js"></script>
<style type="text/css">

.follow_b
{
    border:#dedede solid 2px;
    background-color:#f5f5f5;
    color:#000;
    font-size:12px;
    font-weight:bold;
    padding: 5px;
    -moz-border-radius: 6px; -webkit-border-radius: 6px; 
}
.youfollowing_b
{
    font-size:14px; color:#006600; font-weight:bold;
}
.remove_b
{
    border:#dedede solid 2px;
    background-color:#f5f5f5;
    color:#CC3333;
    font-size:12px;
    padding-left:4px ;
    padding-right:4px ;
    font-weight:bold;
    margin-left:240px;
    -moz-border-radius: 6px; -webkit-border-radius: 6px; 
}


</style>';

                if (user_follow($user_id)==1) {
                    echo'	<script>
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





if ( ! function_exists('user_follow'))
{
	function user_follow($user_id)
	{
		$CI = get_instance();
		$CI->load->database();
		$user_session=$CI->session->userdata('user_id');
		$query = $CI->db->get_where('follow',array('user_session'=>$user_session, 'user_two'=>$user_id ));
		if ($query->num_rows() > 0)
		{
			return 1;

		}else{
            return 0;
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

if ( ! function_exists('user_update'))
{
    function user_update($username, $update, $pos = 'entry')
    {
        if($pos)
            return base_url("p/$username/$update#{$pos}");
        else
            return base_url("p/$username/$update");
    }
}






