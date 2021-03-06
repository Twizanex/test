

<link rel="stylesheet" href="<?php echo theme_url();?>/assets/css/module.examples.page.timeline-project.min.css" />


<link type="text/css" rel="stylesheet" href="<?php echo theme_url();?>/assets/css/easy-responsive-tabs.css" />
<script src="<?php echo theme_url();?>/assets/js/easyResponsiveTabs.js" type="text/javascript"></script>


<script src="http://127.0.0.1/condivisi/social/js/scripts.js?v=1.15" type="text/javascript"></script>


<style type="text/css">
  .resp-tab-active {
    border: 1px solid #c1c1c1;
    margin-bottom: -1px !important;
    padding: 9px 14px 14px 14px !important;
    border-bottom: none;
    background-color: #fff;
    border-top: 4px solid #71AFFF;
  }



./* Share */
.updates-list-share{
    margin:5px;
    padding:10px;
    border:1px solid #ddd;
    border-radius: 10px;
    background: #eee;
    width:603px;
}
.updates-list-share .updates-list-header{
    width:455px;
}
.update-list-share-form{
    position:relative;
}
.updates-list-share textarea{
    margin-top:10px;
    width:593px;
    height:30px;
    float: right;
    -webkit-transition: -webkit-box-shadow 0.5s ease-out;
    -moz-transition: -moz-box-shadow 0.5s ease-out;
    -ms-transition: box-shadow 0.5s ease-out;
    -o-transition: box-shadow 0.5s ease-out;
    transition: box-shadow 0.5s ease-out;
}
.updates-list-share textarea.animate{
    -moz-box-shadow: 0 0 5px #333;
    -webkit-box-shadow: 0 0 5px #333;
    box-shadow: 0 0 5px #333;
}
#update-list-share-add{
    clear:both;
    display:inline-block;
    margin-top:2px;
    margin-bottom: -2px;
    width:505px;
    overflow:hidden;
    position:relative;
}
.updates-list-share input{
    display:inline-block;
    width:495px;
}
.updates-list-share input#photo-styled{
   position:absolute;
   left:0;
   top:0;
   background: #fff url(../images/icon/update-sprite.png) no-repeat 477px -14px;
   padding-right: 20px;
   width:475px;
   z-index: 1;
}
.updates-list-share input[type=file]{
    position: relative;
    text-align: right;
    opacity: 0;
    filter: alpha(opacity=0); /* msie */
    z-index: 2;
    margin-bottom: -4px;
}
.updates-list-share input[type=submit]{
    width:80px;
    float:right;
}
#update-list-share-btns{
    display:inline-block;
    float:right;
}
#update-list-share-btns a{
    margin:0;
    padding:2px;
    opacity: 0.5;
    filter: alpha(opacity=50); /* msie */
    width:24px;
    height: 24px;
    overflow:hidden;
    display:inline-block;
    border-radius:4px;
}
#update-list-share-btns a.selected, #update-list-share-btns a:hover{
    opacity : 1;
    filter: alpha(opacity=100); /* msie */
    background: #2b9b0c; /* Old browsers */
    box-shadow:0 0 2px #151;
}
.text-btn,.url-btn, .video-btn, .photo-btn{
    width:24px;
    height:24px;
    display:block;
}
.text-btn{ background: url(../images/icon/share-sprite.png) no-repeat center -24px; }
.url-btn{ background: url(../images/icon/share-sprite.png) no-repeat center -48px; }
.video-btn{ background: url(../images/icon/share-sprite.png) no-repeat center -72px; }
.photo-btn{ background: url(../images/icon/share-sprite.png) no-repeat center -96px; }
#update-share-form{
    position:relative;
    margin:5px;
}
#update-share-form textarea.full-screen{
    width: 920px;
    height: 100px;
    margin: 0;
}
#update-share-form textarea.popup-screen{
    width: 380px;
    height: 70px;
    margin: 0;
}
#update-share-form input[type=submit]{
    position:absolute;
    right:2px;
    bottom:7px;
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

      




      <div id="Tab">          
        <ul class="resp-tabs-list">
          <li> <?php echo lang_key('Timeline'); ?> </li>
          <li> <?php echo lang_key('Property'); ?> </li>
          <li> <?php echo lang_key('Special Offer'); ?></li>
        </ul> 

        <div class="resp-tabs-container">                                                        


         <!-- tab 1 -->


         <div>


<div class="updates-list-share">
            <div class="update-list-share-form">
            <div class="updates-list-header">
                <h2><?php echo lang_key('home_share_title'); ?></h2>
            </div>

            <?php $sharing = 'text'; ?>

            <div id="update-list-share-btns">
                <?php echo anchor('home/share/text', '<i class="text-btn"></i>', 'title="'.lang_key('home_share_text').'" class="share-btn-action share-text'.(($sharing == 'text')?' selected':'').'"'); ?>
                <?php echo anchor('home/share/link', '<i class="url-btn"></i>', 'title="'.lang_key('home_share_link').'" class="share-btn-action share-link'.(($sharing == 'link')?' selected':'').'"'); ?>
                <?php echo anchor('home/share/video', '<i class="video-btn"></i>', 'title="'.lang_key('home_share_video').'" class="share-btn-action share-video'.(($sharing == 'video')?' selected':'').'"'); ?>
                <?php echo anchor('home/share/photo', '<i class="photo-btn"></i>', 'title="'.lang_key('home_share_photo').'" class="share-btn-action share-photo'.(($sharing == 'photo')?' selected':'').'"'); ?>
            </div>
                <?php echo form_open_multipart('home/share', 'id="home-share-form"'); ?>
                <?php echo form_textarea(array('name' => 'comment'), '', 'placeholder="'.lang_key('home_share_place_text').'" id="home-share-comment"'); ?>
                <div id="update-list-share-add" <?php if($sharing == 'text') echo 'style="display:none"'; ?>>
                <?php if($sharing == 'link') : ?>
                    <div id="update-list-share-add">
                    <?php echo form_input('url', '','id="url" placeholder="'.lang_key('home_share_place_link').'"'); ?>
                    </div>
                <?php endif; ?>
                <?php if($sharing == 'video') : ?>
                    <div id="update-list-share-add">
                    <?php echo form_input('video', '','id="video" placeholder="'.lang_key('home_share_place_video').'"'); ?>
                    </div>
                <?php endif; ?>
                <?php if($sharing == 'photo') : ?>
                    <div id="update-list-share-add">
                    <?php echo form_input('photo_styled', '','id="photo-styled" placeholder="'.lang_key('home_share_place_photo').'"'); ?>
                    <?php echo form_upload('photo', '', 'id="photo"'); ?>
                    </div>
                <?php endif; ?>
                </div>

                <?php echo form_hidden('remote', ''); ?>
                <?php echo form_hidden('title', ''); ?>
                <?php echo form_hidden('description', ''); ?>
                <?php echo form_hidden('image', ''); ?>
                <?php echo form_hidden('icon', ''); ?>
                <?php echo form_hidden('domain', ''); ?>
                <?php echo form_hidden('site_name', ''); ?>
                <?php echo form_hidden('player', ''); ?>

                <?php echo form_hidden('type', $sharing); ?>
                <?php echo form_submit('share', lang_key('home_share_submit'),'id="submit" class="gradient-btn"'); ?>
                <?php echo form_close(); ?>
                <div class="clear"></div>
                <div id="updates-list-share-answer" <?php if(!isset($error_msg)) echo 'style="display:none;"'; ?>>
                    <?php if(isset($error_msg)) : ?>
                    <p class="error-msg"><?php echo $error_msg; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>








          <?php  if($updates) : ?>
            <?php foreach ($updates as $item) { ?>
            <div id="update-<?php echo $item['update_id']; ?>" class="updates-list-item">








             <?php if($this->session->userdata('logged_in') && $item['username'] != $this->session->userdata('username')) : ?>
              <?php if(isset($item['user_show'])) : ?>
                <?php if($item['user_show']) : ?>
                  <?php echo anchor("user/disconnect/{$item['username']}", '<i class="disconnect-btn"></i>', 'title="'.sprintf(lang_key('home_update_disconnect_long'), $item['username']).'" class="entry-btn gradient-btn gradient-red disconnect-action connect-'.$item['username'].'"'); ?>
                <?php else : ?>
                  <?php echo anchor("user/connect/{$item['username']}", '<i class="connect-btn"></i>', 'title="'.sprintf(lang_key('home_update_connect_long'), $item['username']).'" class="entry-btn gradient-btn connect-action connect-'.$item['username'].'"'); ?>
                <?php endif; ?>
              <?php elseif(isset($viewing_current)) : ?>
                <?php if($viewing_current) : ?>
                  <?php echo anchor("user/disconnect/{$item['username']}", '<i class="disconnect-btn"></i>', 'title="'.sprintf(lang_key('home_update_disconnect_long'), $item['username']).'" class="entry-btn gradient-btn gradient-red disconnect-action connect-'.$item['username'].'"'); ?>
                <?php else : ?>
                  <?php echo anchor("user/connect/{$item['username']}", '<i class="connect-btn"></i>', 'title="'.sprintf(lang_key('home_update_connect_long'), $item['username']).'" class="entry-btn gradient-btn connect-action connect-'.$item['username'].'"'); ?>
                <?php endif; ?>
              <?php endif; ?>
            <?php else : ?>
              <?php echo anchor(base_url('home/remove/'.$item['update_id']), '<i class="remove-btn"></i>', 'title="'.lang_key('home_update_remove').'" class="entry-btn gradient-btn gradient-red remove-update-action"'); ?>
            <?php endif; ?>

            
    // Main information about the update is encapsulated in this view

            <div class="profile-image-small">
<a href="<?php //echo user_profile($item['user_name']); ?>" title="<?php printf(lang_key('home_view_profile'), $item['user_name']); ?>">
    <img src="<?php //echo user_profile_image($item['user_name'], $item['image_name'], $item['image_ext'], 'small'); ?>"
        alt="<?php printf(lang_key('home_profile_image'), $item['user_name']); ?>" /></a>
</div>
<h2><?php // echo anchor(user_profile($item['user_name']), $item['user_name']); ?></h2>
<small class="time-since" stamp="<?php echo strtotime($item['update_created']); ?>"><?php // echo timeSince(strtotime($item['update_created'])); ?></small>

<?php if($item['reshare_username']) : ?>
<small>
    -
    <?php echo anchor(user_update($item['reshare_username'], $item['update_reshare_update_id']), lang('home_update_previous')); ?>
    <?php echo lang_key('home_update_by'); ?>
    <?php echo anchor(user_profile($item['reshare_username']), '@'.$item['reshare_username']); ?>
</small>
<?php endif; ?>

<div class="clear"></div>
<?php if($item['comment']) : ?>

    <hr class="updates-item-divider" />

    <?php if(isset($is_single)) : ?>
    <p><?php echo $item['comment']; ?></p>
    <?php else : ?>
    <p><?php echo character_limiter($item['comment'], 500, '...<br />'.anchor(user_update($item['user_name'], $item['update_id']), lang_key('home_update_read_more'))); ?></p>
    <?php endif; ?>

<?php endif; ?>

<?php if($item['type'] != 'text') : ?>
<hr class="updates-item-divider" />
<?php endif; ?>

<?php if($item['type'] == 'link') : ?>
<?php //print_r($item); ?>
<div class="updates-list-item-link">
    <?php //$this->load->view('update/link', array('item' => $item)); ?>
</div>
<?php endif; ?>

<?php if($item['type'] == 'video') : ?>
<div class="updates-list-item-video <?php echo (!isset($is_popup))?'':'popup'; ?>">
    <?php if($item['original']) : ?>
        <?php if(preg_match('#^http:\/\/(.*)\.(gif|png|jpg|jpeg)$#i', $item['original'])) : ?>
        <p><?php echo anchor($item['link'], $item['title']); ?></p>
        <a href="<?php echo $item['link']; ?>" title="<?php echo $item['title']; ?>">
            <img src="<?php echo $item['original']; ?>" alt="<?php echo $item['title']; ?>" /></a>
        <?php else : ?>
        
            <?php if(isset($is_single)) : ?>
            <iframe width="880" height="495" src="<?php echo $item['original']; ?>" frameborder="0" allowfullscreen></iframe>
            <?php elseif(isset($is_popup)) : ?>
            <iframe width="340" height="190" src="<?php echo $item['original']; ?>" frameborder="0" allowfullscreen></iframe>
            <?php else : ?>
            <iframe width="580" height="330" src="<?php echo $item['original']; ?>" frameborder="0" allowfullscreen></iframe>
            <?php endif; ?>
        
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php endif; ?>
<?php if($item['type'] == 'photo') : ?>
<div class="updates-list-item-photo <?php echo (!isset($is_popup))?'':'popup'; ?>">
    <?php if(isset($is_single)) : ?>
    <a href="<?php echo image_url($item); ?>" target="_blank">
        <img src="<?php echo image_url($item, 'large'); ?>" alt="<?php echo lang_key('home_update_users_photo'); ?>" /></a>
    <?php else : ?>
    <a href="<?php echo user_update($item['username'], $item['update_id']); ?>">
        <img src="<?php echo image_url($item, 'small'); ?>" alt="<?php echo lang_key('home_update_users_photo'); ?>" /></a>
    <?php endif; ?>
</div>
<?php endif; ?>












            <hr id="comments" class="updates-item-divider" />

            <?php if(!isset($is_single)) : ?>
              <?php // echo viewComments($item); ?>
            <?php endif; ?>

            

            <?php if(!isset($is_single)) : ?>
              <?php if(is_loggedin()) : ?>
                <?php echo anchor(user_update($item['user_name'], $item['update_id']), '<i class="comment-btn"></i>', 'title="'.lang_key('home_comment').'" class="entry-btn gradient-btn comment-btn-click"'); ?>
              <?php endif; ?>

              <?php echo anchor(user_update($item['user_name'], $item['update_id']), '<i class="view-btn"></i>', 'title="'.lang_key('home_view').'" class="entry-btn gradient-btn"'); ?>
            <?php endif; ?>

            <div class="clear"></div>

            <?php if(isset($is_single) && $item['update_comment_count']) : ?>
              <div class="updates-item-comments-wrap">
                <?php foreach($comments as $key => $comment) { ?>


                <div class="update-item-comment <?php echo ($key == 0)?'first':''; ?>">
                  <div class="profile-image-thumb">
                    <a href="<?php echo user_profile($comment['username']); ?>" title="<?php printf(lang('home_view_profile'), $comment['username']); ?>">
                      <img src="<?php echo user_profile_image($comment['username'], $comment['image_name'], $comment['image_ext'], 'thumb'); ?>"
                      alt="<?php printf(lang('home_profile_image'), $comment['username']); ?>" /></a>
                    </div>

                    <?php if($this->session->userdata('id') == $comment['user_id']) : ?>
                      <?php echo anchor('share/remove_comment/'.$comment['update_comment_id'], icon_img_tag('remove.png'), 'title="'.lang('home_comment_remove').'" class="update-comment-remove comment-remove-action"'); ?>
                    <?php endif; ?>

                    <?php echo anchor(user_profile($comment['username']), $comment['username']); ?> (<small><?php echo timeSince(strtotime($comment['update_comment_created'])); ?></small>):
                    <?php echo $comment['update_comment_content']; ?>
                    <div class="clear"></div>
                  </div>
                  <?php } ?>
                </div>


              <?php endif; ?>

             








            </div>
           









            <div class="timeline-project">
              <div class="timeline-border">
                <a href="#" class="timeline-image"><img src="http://127.0.0.1/condivisi/test/assets/images/logo/Schermata_da_2014-08-04_17:51:34.png"></a>
                <!-- Heading -->
                <ul class="list-unstyled heading">
                  <li class="timeline-heading">
                    <div class="block">
                      <div class="caret"></div>
                      <div class="box-generic">

                       <?php // if(isset($is_single) && is_loggedin()) : ?>



                <div class="updates-item-comment-form">
                  <div class="updates-item-comment-form-answer" style="display:none;">
                  </div>
                  <?php echo form_open("share/comment", array('id' => 'comment_form')); ?>
                  <?php echo form_input(array('name' => 'content'), '', 'placeholder="'.lang_key('home_comment_placeholder').'" '.(!isset($list)?' class="form-control" id="comment-textarea"':'')); ?>
                  <?php echo form_hidden('update_id', $item['update_id']); ?>
                  <?php echo form_submit('comment', lang_key('home_comment_submit'),'id="comment" class="comment-submit gradient-btn"'); ?>
                  <?php echo form_close(); ?>
                </div>
              <?php //endif; ?>
                        sfdsg
                        <div class="timeline-top-info content-filled ">
                          <i class="fa fa-comments"></i> <strong> 3 comments </strong> Posted in Project <a href="#" class="text-primary">QuickAdmin</a> 
                          <?php echo share_button('gplus', $item['user_name'], $item['update_id']); ?>
            
            <?php echo share_button('facebook', $item['user_name'], $item['update_id'], 'showthatyouhelp.com', $item['comment']); ?>
            <?php echo share_button('twitter', $item['user_name'], $item['update_id'], 'showthatyouhelp.com', $item['comment']); ?>
            <?php echo share_button('styh', $item['user_name'], $item['update_id']); ?>

                          <div class="dropdown pull-right">
                            <a href="#" role="button" class="dropdown-toggle " data-toggle="dropdown"><i class="fa fa-caret-down text-primary"></i></a>
                            <ul class="dropdown-menu " role="menu" >
                              <li><a href="#">Last comments</a></li>
                              <li><a href="#">Older comments</a></li>
                              <li><a href="#">Important comments</a></li>
                              <li><a href="#">Something Else</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- // End Heading -->

                <div class="row ">

                  <div class="col-sm-12">
                    <!--  Comments -->
                    <h4 class="innerTB"> Comments for this <strong class="text-primary">Project</strong></h4>
                    <ul class=" list-unstyled comments">
                      <li>
                        <a href="#" class="list-image"><img src="http://127.0.0.1/condivisi/test/assets/images/logo/Schermata_da_2014-08-04_17:51:34.png"></a>
                        <div class="block block-inline">
                          <div class="caret"></div>
                          <div class="box-generic">
                            <div class="timeline-top-info">
                              <i class="fa fa-user"></i> 
                              <a href="#">Mosaicpro</a> posted 
                              <a href="#" class="text-primary">Check Out the new Icons in this project</a>
                            </div>
                            <div class="media margin-none">
                              <div class="row innerLR innerB">
                                <i class="icon-comment-star-fill fa-3x innerLR pull-left"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, aspernatur ut fuga eum cumque delectus voluptate impedit quaerat sapiente officiis fugit voluptates sit neque quibusdam beatae est modi repudiandae unde.</p>
                              </div>
                            </div>      
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="list-image"><img src="http://127.0.0.1/condivisi/test/assets/images/logo/Schermata_da_2014-08-04_17:51:34.png"></a>
                        <div class="block block-inline">
                          <div class="caret"></div>
                          <div class="box-generic">
                            <div class="timeline-top-info">
                              <i class="fa fa-user"></i> <a href="#">Mosaicpro</a> wrote a <a href="#" class="text-primary">comment</a> to <a href="">Jane S.</a>
                              <div class="timeline-bottom">
                                <i class="fa fa-clock-o"></i> 6 days ago  
                              </div>
                            </div>
                            <div class="content-filled">Good Job. Congrats and hope to see you soon.</div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="list-image"><img src="http://127.0.0.1/condivisi/test/assets/images/logo/Schermata_da_2014-08-04_17:51:34.png"></a>
                        <div class="block block-inline">
                          <div class="caret"></div>
                          <div class="box-generic">
                            <div class="timeline-top-info">
                              <i class="fa fa-user"></i> <a href="#">John </a> has uploaded 5 pages in <a href="#" class="text-primary"><i class="text-primary fa fa-location-arrow"></i> This Project</a>
                            </div>
                            <div class="innerLR innerB">

                              <a href="#" class=""><i class="fa fa-file innerLR half"></i></a>    

                              <a href="#" class=""><i class="fa fa-file innerLR half"></i></a>    

                              <a href="#" class=""><i class="fa fa-file innerLR half"></i></a>    

                              <a href="#" class=""><i class="fa fa-file innerLR half"></i></a>    

                              <a href="#" class=""><i class="fa fa-file innerLR half"></i></a>    
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <!-- // End Comments -->
                  </div>          
                </div>
              </div>
            </div>
            <!-- // End Project -->
            <!--  Project -->
            <div class="timeline-project">
              <div class="timeline-border">
                <a href="#" class="timeline-image"><img src="../../assets/images/people/80/2.jpg"></a>
                <!-- Heading -->
                <ul class="list-unstyled heading">
                  <li class="timeline-heading">
                    <div class="block">
                      <div class="caret"></div>
                      <div class="box-generic">
                        <div class="timeline-top-info content-filled ">
                          <i class="fa fa-comments"></i> <strong> 5 comments </strong> Posted in Project <a href="#" class="text-primary">FlatPlus</a> 
                          <div class="dropdown pull-right">
                            <a href="#" role="button" class="dropdown-toggle " data-toggle="dropdown"><i class="fa fa-caret-down text-primary"></i></a>
                            <ul class="dropdown-menu " role="menu" >
                              <li><a href="#">Last comments</a></li>
                              <li><a href="#">Older comments</a></li>
                              <li><a href="#">Important comments</a></li>
                              <li><a href="#">Something Else</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- // End Heading -->
                <div class="row ">
                  <div class="col-sm-4 ">
                    <div class="innerAll">
                      <a href="../../assets/images/preview-2.jpg" class="project-preview"><img  src="../../assets/images/preview-2.jpg" class="img-responsive"/></a>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <!--  Comments -->
                    <h4 class="innerTB"> Comments for this <strong class="text-primary">Project</strong></h4>
                    <ul class=" list-unstyled comments">
                      <li>
                        <a href="#" class="list-image"><img src="../../assets/images/people/80/15.jpg"></a>
                        <div class="block block-inline">
                          <div class="caret"></div>
                          <div class="box-generic">
                            <div class="timeline-top-info">
                              <i class="fa fa-user"></i> 
                              <a href="#">Mosaicpro</a> posted 
                              <a href="#" class="text-primary">New animations in this project!</a>
                            </div>
                            <div class="media margin-none">
                              <div class="row innerLR innerB">
                                <i class="icon-refresh-star fa-3x innerLR pull-left"></i>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, aspernatur ut fuga eum cumque delectus voluptate impedit quaerat sapiente officiis fugit voluptates sit neque quibusdam beatae est modi repudiandae unde.</p>
                              </div>
                            </div>      
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="list-image"><img src="../../assets/images/people/80/14.jpg"></a>
                        <div class="block block-inline">
                          <div class="caret"></div>
                          <div class="box-generic">
                            <div class="timeline-top-info">
                              <i class="fa fa-user"></i> <a href="#">John</a> wrote a <a href="#" class="text-primary">review</a> about <a href="">This Project</a>
                              <div class="timeline-bottom">
                                <i class="fa fa-clock-o"></i> 2 Days Ago
                              </div>
                            </div>
                            <div class="content-filled">It's amazing. I love this project! Everything is awesome!</div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="list-image"><img src="../../assets/images/people/80/11.jpg"></a>
                        <div class="block block-inline">
                          <div class="caret"></div>
                          <div class="box-generic">
                            <div class="timeline-top-info">
                              <i class="fa fa-user"></i> <a href="#">Mosaicpro</a> wrote a <a href="#" class="text-primary">comment</a> to <a href="">John Doe</a>
                              <div class="timeline-bottom">
                                <i class="fa fa-clock-o"></i> Today
                              </div>
                            </div>
                            <div class="content-filled">It's up. check it out! <a href="#">Live demo</a></div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="list-image"><img src="../../assets/images/people/80/16.jpg"></a>
                        <div class="block block-inline">
                          <div class="caret"></div>
                          <div class="box-generic">
                            <div class="timeline-top-info">
                              <i class="fa fa-user"></i> <a href="#">John </a> has uploaded 7 photos in <a href="#" class="text-primary"><i class="text-primary fa fa-location-arrow"></i> Photo Gallery</a>
                            </div>
                            <div class="innerLR innerB">

                              <a href="#" class="thumbnail pull-left margin-none"><img src="../../assets/images/people/80/1.jpg" alt="photo" width="35"/></a> 

                              <a href="#" class="thumbnail pull-left margin-none"><img src="../../assets/images/people/80/2.jpg" alt="photo" width="35"/></a> 

                              <a href="#" class="thumbnail pull-left margin-none"><img src="../../assets/images/people/80/3.jpg" alt="photo" width="35"/></a> 

                              <a href="#" class="thumbnail pull-left margin-none"><img src="../../assets/images/people/80/4.jpg" alt="photo" width="35"/></a> 

                              <a href="#" class="thumbnail pull-left margin-none"><img src="../../assets/images/people/80/5.jpg" alt="photo" width="35"/></a> 

                              <a href="#" class="thumbnail pull-left margin-none"><img src="../../assets/images/people/80/6.jpg" alt="photo" width="35"/></a> 

                              <a href="#" class="thumbnail pull-left margin-none"><img src="../../assets/images/people/80/7.jpg" alt="photo" width="35"/></a> 
                              <div class="clearfix"></div>
                            </div>

                            <div class="innerAll">
                              <input class="form-control" placeholder="Comment here...">
                            </div>


                          </div>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="list-image"><img src="../../assets/images/people/80/16.jpg"></a>
                        <div class="block block-inline">
                          <div class="caret"></div>
                          <div class="box-generic">
                            <div class="timeline-top-info">
                              <i class="fa fa-user"></i> <a href="#">John </a> has uploaded another 3 photos in <a href="#" class="text-primary"><i class="text-primary fa fa-location-arrow"></i> Photo Gallery</a>
                            </div>
                            <div class="innerLR innerB">

                              <a href="#" class="thumbnail pull-left margin-none"><img src="../../assets/images/people/80/9.jpg" alt="photo" width="35"/></a> 

                              <a href="#" class="thumbnail pull-left margin-none"><img src="../../assets/images/people/80/10.jpg" alt="photo" width="35"/></a>    

                              <a href="#" class="thumbnail pull-left margin-none"><img src="../../assets/images/people/80/11.jpg" alt="photo" width="35"/></a>    
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <!-- // End Comments -->
                  </div>          
                </div>
              </div>
            </div>
            <!-- // End Project -->
 <?php } ?>
          <?php else : ?>
            <div class="updates-list-item">
              <h2><?php  echo lang_key('home_no_updates'); ?></h2>
            </div>
          <?php endif; ?>



          </div>

          <!--Tab2 -->

          <div>  

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




          </div>
          <!--tab 3 -->
          <div>

            <!-- Special Offers Widget -->
            <div class="widget widget-heading-simple widget-body-gray widget-offers">

              <!-- Widget Heading -->
              <div class="widget-head">
                <h4 class="heading glyphicons gift"><i></i>Special Offers</h4>
              </div>
              <!-- // Widget Heading END -->

              <div class="widget-body">

                <!-- Media item -->
                <div class="media">

                  <img class="media-object pull-left thumb" width="150" height="150" src="http://127.0.0.1/condivisi/test/uploads/profile_photos/thumb/Selezione_002.png" alt="Image" />
                  <div class="media-body">
                    <h5><a href="">Product or Service Name</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae accumsan mauris. Donec vitae nibh</p>
                    <div class="row">
                      <div class="col-md-6 tablet-column-reset">
                        <span class="price">Price: <strong>&dollar;29.90</strong></span>
                      </div>
                      <div class="col-md-6 text-right tablet-column-reset">
                        <button type="button" class="btn btn-inverse btn-icon glyphicons shopping_cart btn-sm"><i></i>Purchase</button>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- // Media item END -->

              </div>

            </div>
            <!-- // Special Offers Widget END -->

          </div>
        </div>
      </div>   

      <!-- /Thumbnails container -->

    </div>
  </div>




  <div class="col-md-3">

    <?php render_widgets('right_bar_agent_properties');?>

  </div>



</div> <!-- /row -->

<?php

}

?>

<script type="text/javascript">
  $(document).ready(function () {
    $('#Tab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view

            activate: function(event) { // Callback function if tab is switched

              var $tab = $(this);
              var $info = $('#tabInfo');
              var $name = $('span', $info);

              $name.text($tab.text());

              $info.show();


            }

          });

    $('#verticalTab').easyResponsiveTabs({
      type: 'vertical',
      width: 'auto',
      fit: true
    });
  });



</script>

