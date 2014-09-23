<script src="<?php echo theme_url();?>/assets/js/top_follow.js"></script>
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


</style>

<?php 

$curr_lang = ($this->uri->segment(1)!='')?$this->uri->segment(1):'en';

if($user->num_rows()<=0){

?>

<div class="alert alert-danger"><?php echo lang_key('agent_not_found'); ?></div>

<?php

}else{

  $user = $user->row();

?>

<div class="row">



  <?php $current_url = base64_encode(current_url().'/#data-content');?>

  <div id="data-content" class="col-md-9"  style="-webkit-transition: all 0.7s ease-in-out; transition: all 0.7s ease-in-out;">

      

        <div class="agent-container" id="panel">

            <div class="agent-holder clearfix">

                <h4><?php echo $user->first_name.' '.$user->last_name; ?></h4>

                <div class="agent-image-holder">

                    <img width="150" height="150" src="<?php echo get_profile_photo_by_id($user->id,'thumb');?>">                   </a>

                </div>



                <div class="detail">

                   <p><?php $about_me = get_user_meta($user->id, 'about_me','');echo ($about_me!='')?$about_me:''; ?></p>

                    <p class="contact-types">

                        <strong><?php echo lang_key('phone'); ?>:</strong> <?php echo get_user_meta($user->id, 'phone'); ?> <strong>Email:</strong> <a href="mailto:<?php echo $user->user_email; ?>"><?php echo $user->user_email; ?></a>

                    </p>

                    <div class="agent-properties"><a href="<?php echo site_url('show/agentproperties/'.$user->id);?>" style="color:#fff;"><?php echo get_user_properties_count($user->id);?> <?php echo lang_key('estates');?></a></div>

                </div>

 <?php follow_button($user->id); ?>

                <div class="follow-agent clearfix">
                    <ul class="social-networks clearfix">
                        <?php if(get_user_meta($user->id, 'fb_profile')!='n/a'){?>
                        <li class="fb">
                            <a href="https://<?php echo get_user_meta($user->id, 'fb_profile'); ?>" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                        </li>
                        <?php }?>
                        <?php if(get_user_meta($user->id, 'twitter_profile')!='n/a'){?>
                        <li class="twitter">
                            <a href="https://<?php echo get_user_meta($user->id, 'twitter_profile'); ?>" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                        </li>
                        <?php }?>
                        <?php if(get_user_meta($user->id, 'li_profile')!='n/a'){?>
                        <li class="linkedin">
                            <a href="https://<?php echo get_user_meta($user->id, 'li_profile'); ?>" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                        </li>
                        <?php }?>
                        <?php if(get_user_meta($user->id, 'gp_profile')!='n/a'){?>
                        <li class="gplus">
                            <a href="https://<?php echo get_user_meta($user->id, 'gp_profile'); ?>" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                        </li>
                        <?php }?>
                    </ul>
                </div>

            </div>

        </div>





        <div class="recent-grid"><i class="fa fa-home fa-4"></i>&nbsp;<?php echo lang_key($page_title); ?>

            <?php require'switcher_view.php';?>

        </div>                    



      <!-- Thumbnails container -->

      <?php             

      if($this->session->userdata('view_style')=='list')

      {

          require'list_view.php';

      }

      else if($this->session->userdata('view_style')=='map')

      {

          require'map_view.php';

      }

      else

      {

          require'grid_view.php';

      }

      ?>

      <div class="clearfix"></div>

      <div style="text-align:center">

        <ul class="pagination">

        <?php echo (isset($pages))?$pages:'';?>

        </ul>

      </div>  

      <!-- /Thumbnails container -->

  </div>





<div class="col-md-3">

    <?php render_widgets('right_bar_agent_properties');?>

</div>



</div> <!-- /row -->

<?php

}

?>

