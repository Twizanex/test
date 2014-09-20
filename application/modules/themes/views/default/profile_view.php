<div class="row">
    <!-- Gallery , DETAILES DESCRIPTION-->
     <div class="col-md-3 ">
        <?php render_widgets('profile_menu');?>
    </div>
    <div class="col-md-9">
        <div class="detail-title"><i class="fa fa-home fa-4"></i>&nbsp;<?php echo lang_key('DBC_ALL_AGENTS');?></div>

        <div class="agent-container" id="panel">
            <?php foreach($query->result() as $user){ ?>
            <div class="agent-holder clearfix">
                <h4><?php echo $user->first_name.' '.$user->last_name; ?></h4>
                <div class="agent-image-holder">
                    <a href="<?php echo site_url('show/agentproperties/'.$user->id);?>"><img width="150" height="150" src="<?php echo get_profile_photo_by_id($user->id,'thumb');?>"></a>
                </div>

                <div class="detail">
                    <p><?php echo get_user_meta($user->id, 'about_me'); ?></p>
                    <p class="contact-types">
                        <strong><?php echo lang_key('DBC_PHONE'); ?>:</strong> <?php echo get_user_meta($user->id, 'phone'); ?> <strong>Email:</strong> <a href="mailto:<?php echo $user->user_email; ?>"><?php echo $user->user_email; ?></a>
                    </p>
                    <div class="agent-properties"><a href="<?php echo site_url('show/agentproperties/'.$user->user_name);?>" style="color:#fff;"><?php echo get_user_properties_count($user->id);?> <?php echo lang_key('DBC_PROPERTIES');?></a></div>
                </div>

                <div class="follow-agent clearfix">
                    <ul class="social-networks clearfix">
                        <li class="fb">
                            <a href="https://<?php echo get_user_meta($user->id, 'fb_profile'); ?>" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                        </li>
                        <li class="twitter">
                            <a href="https://<?php echo get_user_meta($user->id, 'twitter_profile'); ?>" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                        </li>
                        <li class="linkedin">
                            <a href="https://<?php echo get_user_meta($user->id, 'li_profile'); ?>" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                        </li>
                        <li class="gplus">
                            <a href="https://<?php echo get_user_meta($user->id, 'gp_profile'); ?>" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php } ?>
            <div class="clearfix"></div>
            <div style="text-align:center">
                <ul class="pagination">
                <?php echo (isset($pages))?$pages:'';?>
                </ul>
            </div>
        </div>
    </div> <!-- col-md-9 -->


    <!--DETAILS SUMMARY-->
   
</div>

          