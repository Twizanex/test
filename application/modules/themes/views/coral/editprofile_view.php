


<script src="<?php echo base_url();?>assets/admin/js/jquery.form.js"></script>




<div class="row">
    <!-- Gallery , DETAILES DESCRIPTION-->
     <div class="col-md-3 ">
        <?php render_widgets('profile_menu');?>
    </div>


    <div class="col-md-9">
        <div class="detail-title"><i class="fa fa-home fa-4"></i>&nbsp;<?php echo lang_key("Edit Profile") ?></div>

        <div class="agent-container" id="panel">
          


                <?php echo $this->session->flashdata('msg'); ?>

                <?php echo validation_errors(); ?>

                




                    <div class="form-group">

                        


                <div class="row">

                        <label class="col-sm-3"><?php echo lang_key('DBC_PROFILE_PHOTO'); ?></label>


                        <div class="col-sm-3">

                            <img class="thumbnail"  src="<?php echo get_profile_photo_by_id($profile->id,'thumb');?>"  style="width:100px;" />

                            <span id="profile_photo_error"><?php echo form_error('profile_photo'); ?></span>

                        </div>

                    
                    
                        


                    <div class="col-sm-3 ">

                            <input type="hidden" name="profile_photo" id="profile_photo" value="<?php echo get_profile_photo_name_by_username($profile->user_name);?>">

                            <form action="<?php echo site_url('profile/upload_profile_photo');?>" method="post" enctype="multipart/form-data">

                            <ol class="filelist">

                            </ol>   

                            <input type="file" name="photoimg" style="height:auto;" >

                            <input type="submit" class="btn btn-info" value="Upload" style="margin-top:10px;">

                            </form>    
                    </div>
                </div>

                <div class="row">

<form class="form-horizontal" action="<?php echo site_url('profile/updateprofile'); ?>" method="post">


                            <span class="help-inline">&nbsp;</span>                            

                       <?php echo site_url('profile/updateprofile'); ?>

                    </div>



                    <div class="form-group">

                        <?php if(is_admin()){?>
                    
                    <input type="hidden" name="id" value="<?php echo $this->session->userdata('user_id'); ?>"/>
                    <?php }else{?>
                    <input type="hidden" name="id" value="<?php echo $profile->id; ?>"/><?php echo $profile->id; ?>
                    <?php }?>


                        <label class="col-sm-3 "><?php echo lang_key('DBC_USER_NAME'); ?></label>



                        <div class="col-sm-9 ">

                            <input type="text" name="user_name" value="<?php echo $profile->user_name; ?>"

                                   placeholder="User Name" class="form-control">

                            <span class="help-inline">&nbsp;</span>

                            <?php echo form_error('user_name'); ?>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-sm-3 "><?php echo lang_key('DBC_FIRST_NAME'); ?></label>



                        <div class="col-sm-9 ">

                            <input type="text" name="first_name" value="<?php echo $profile->first_name; ?>"

                                   placeholder="User Name" class="form-control">

                            <span class="help-inline">&nbsp;</span>

                            <?php echo form_error('first_name'); ?>

                        </div>

                    </div>


                    <div class="form-group">

                        <label class="col-sm-3 "><?php echo lang_key('EMAIL'); ?></label>



                        <div class="col-sm-9 ">

                            <input type="text" name="user_email" value="<?php echo $profile->user_email; ?>"

                                   placeholder="Email" class="form-control">

                            <span class="help-inline">&nbsp;</span>

                            <?php echo form_error('user_email'); ?>

                        </div>

                    </div>




                    <div class="form-group">

                        <label class="col-sm-3 "><?php echo lang_key('DBC_LAST_NAME'); ?></label>



                        <div class="col-sm-9">

                            <input type="text" name="last_name" value="<?php echo $profile->last_name; ?>"

                                   placeholder="User Name" class="form-control">

                            <span class="help-inline">&nbsp;</span>

                            <?php echo form_error('last_name'); ?>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-sm-3">Gender</label>



                        <div class="col-sm-9">

                            <?php $curr_value=(set_value('gender')!='')?set_value('gender'):$profile->gender;?>

                            <select class="form-control" name="gender">

                                <?php $sel=($curr_value=='male')?'selected="selected"':'';?>

                                <option value="male" <?php echo $sel;?>>Male</option>

                                <?php $sel=($curr_value=='female')?'selected="selected"':'';?>

                                <option value="female" <?php echo $sel;?>>Female</option>

                            </select>

                            <span class="help-inline">&nbsp;</span>

                            <?php echo form_error('gender'); ?>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-sm-3"><?php echo lang_key('DBC_PHONE'); ?></label>

                        <?php $v = (set_value('phone')) ? set_value('phone') : get_user_meta($profile->id, 'phone'); ?>

                        <div class="col-sm-9">

                            <input type="text" name="phone" value="<?php echo $v; ?>"

                                   placeholder="Phone" class="form-control">

                            <span class="help-inline">&nbsp;</span>

                            <?php echo form_error('phone'); ?>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-sm-3"><?php echo lang_key('DBC_COMPANY_NAME'); ?></label>

                        <?php $v = (set_value('company_name')) ? set_value('company_name') : get_user_meta($profile->id, 'company_name'); ?>

                        <div class="col-sm-9">

                            <input type="text" name="company_name" value="<?php echo $v; ?>"

                                   placeholder="Company Name" class="form-control">

                            <span class="help-inline">&nbsp;</span>

                            <?php echo form_error('company_name'); ?>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-sm-3"><?php echo lang_key('DBC_ABOUT_ME'); ?></label>

                        <?php $v = (set_value('about_me')) ? set_value('about_me') : get_user_meta($profile->id, 'about_me'); ?>

                        <div class="col-sm-9">

                            <textarea name="about_me"

                                   placeholder="About" class="form-control"><?php echo $v; ?></textarea>

                            <span class="help-inline">&nbsp;</span>

                            <?php echo form_error('about_me'); ?>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-sm-3">Facebook Profile</label>

                        <?php $v = (set_value('fb_profile')) ? set_value('fb_profile') : get_user_meta($profile->id, 'fb_profile'); ?>

                        <div class="col-sm-9">

                            <input type="text" name="fb_profile" value="<?php echo $v; ?>"

                                   placeholder="Facebook Profile Link" class="form-control">

                            <span class="help-inline">Please enter the FB profile link, without http:// </span>

                            <?php echo form_error('fb_profile'); ?>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-sm-3">Twitter Account</label>

                        <?php $v = (set_value('twitter_profile')) ? set_value('twitter_profile') : get_user_meta($profile->id, 'twitter_profile'); ?>

                        <div class="col-sm-9">

                            <input type="text" name="twitter_profile" value="<?php echo $v; ?>"

                                   placeholder="Twitter Profile Link" class="form-control">

                            <span class="help-inline">Please enter the twitter profile link, without http:// </span>

                            <?php echo form_error('twitter_profile'); ?>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-sm-3">LinkedIn Account</label>

                        <?php $v = (set_value('li_profile')) ? set_value('li_profile') : get_user_meta($profile->id, 'li_profile'); ?>

                        <div class="col-sm-9">

                            <input type="text" name="li_profile" value="<?php echo $v; ?>"

                                   placeholder="LinkedIn Account Link" class="form-control">

                            <span class="help-inline">Please enter the linkedin profile link, without http:// </span>

                            <?php echo form_error('li_profile'); ?>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-sm-3">Google+ Account</label>

                        <?php $v = (set_value('gp_profile')) ? set_value('gp_profile') : get_user_meta($profile->id, 'gp_profile'); ?>

                        <div class="col-sm-9">

                            <input type="text" name="gp_profile" value="<?php echo $v; ?>"

                                   placeholder="Google+ Profile Link" class="form-control">

                            <span class="help-inline">Please enter the google+ profile link, without http:// </span>

                            <?php echo form_error('gp_profile'); ?>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-sm-3"></label>



                        <div class="col-sm-9">

                            <button class="btn btn-primary" type="submit"><i

                                    class="fa fa-check"></i><?php echo lang_key("Update") ?></button>

                        </div>

                    </div>



                </form>

            </div>


            </div>
        </div>
    </div> <!-- col-md-9 -->


    <!--DETAILS SUMMARY-->
   
</div>
</div>





<script type="text/javascript">

jQuery(document).ready(function(){

    var tab = 'trainingrecords-attachments';

    var target = jQuery('#'+tab).attr('target');

    var bar = jQuery('#'+tab+' > .progress > .bar');

    var percent = jQuery('#'+tab+' > .progress > .percent');

    var progress = jQuery('#'+tab+' > .progress');   

    jQuery('#'+tab+' > form').ajaxForm({

        beforeSend: function() {

            progress.show();

            var percentVal = '0%';

            bar.width(percentVal)

            percent.html(percentVal);

        },

        uploadProgress: function(event, position, total, percentComplete) {

            var percentVal = percentComplete + '%';

            bar.width(percentVal)

            percent.html(percentVal);

            //console.log(percentVal, position, total);

        },

        success: function() {

            var percentVal = '100%';

            bar.width(percentVal)

            percent.html(percentVal);

        },

        complete: function(xhr) {

            //alert(xhr.responseText);

            var response = jQuery.parseJSON(xhr.responseText);

            if(response.error==0)

            {

                var base_url = "<?php echo base_url();?>uploads/profile_photos/thumb/";

                

                window.parent.jQuery('#user_photo').attr("src",base_url+response.name);

                window.parent.jQuery('#profile_photo').attr("value",response.name);

            }

            else

            {



                var error = '<label class="col-lg-2 control-label">&nbsp;</label><div class="col-lg-8"><div class="alert alert-danger" style="margin-bottom:0;">'+response.error+'</div></div>';

                window.parent.jQuery('#profile_photo_error').html(error);

            }





            var percentVal = '0%';

            bar.width(percentVal)

            percent.html(percentVal);

            progress.hide();

            //status.html(xhr.responseText);

        }

    });

});

</script>