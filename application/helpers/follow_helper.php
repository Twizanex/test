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



/**
 * Share Button
 *
 * Share button for facebook, google+
 *
 * @access	public
 * @param	string	username
 * @param	int	update ID
 * @return	string
 */
if ( ! function_exists('share_button'))
{
    function share_button($target, $username, $update, $site_title = false, $comment = false, $image = false, $twitter = false)
    {
        if($comment)
            if($username == $twitter)
                $url_comment = htmlspecialchars_decode(strip_tags($comment));
            else {
                $url_comment = preg_replace('#@([^>]*)#i', '$1', strip_tags($comment));
                $url_comment = htmlspecialchars_decode($url_comment);
            }
        
        switch ($target) {
            case 'styh':
                $link = base_url()."share/local/".$update;
                $title = lang_key('home_share_showthatyouhelp');
                return '<a href="'.$link.'" title="'.$title.'" class="entry-btn gradient-btn local-share-action"><i class="styh-btn"></i></a>';
            
            case 'facebook':
                $link = 'http://www.facebook.com/dialog/feed?app_id=251130335006292&link='.
                    urlencode(user_update($username, $update, false)).
                    ($image?'&picture='.urlencode($image):'').
                    ($site_title?'&name='.urlencode($site_title):'').
                    ('&caption='.urlencode($username.'\'s update on showthatyouhelp.com')).
                    ($comment?'&description='.urlencode($url_comment):'').
                    '&redirect_uri='.urlencode(user_update($username, $update, false));
                $title = lang_key('home_share_facebook');

                return '<a href="'.$link.'" title="'.$title.'" class="glyphicons glyphicons-social standard primary facebook" target="_blank"><i></i>Facebook</a>';

            case 'gplus':
                $link = "https://plus.google.com/share?url=".urlencode(user_update($username, $update, false));
                $title = lang_key('home_share_google');
                return '<a href="'.$link.'" title="'.$title.'" class="entry-btn gradient-btn remote-share-action" target="_blank"><i class="gplus-btn"></i>Google</a>';
            
            case 'twitter':
                if($comment){
                    $text = character_limiter($url_comment, 90, '...');
                } else {
                    $text = $username.'\'s update';
                }
                
                $link = "https://twitter.com/share?url=".urlencode(user_update($username, $update, false)).
                        '&via=showthatyouhelp'.
                        ($text?'&text='.urlencode($text):'');
                $title = lang_key('home_share_twitter');
                return '<a href="'.$link.'" title="'.$title.'" class="entry-btn gradient-btn remote-share-action" target="_blank"><i class="twitter-btn"></i>Twitter</a>';
        }
    }
}





