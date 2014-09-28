<script src="<?php echo theme_url();?>/assets/js/top_follow.js"></script>

<link rel="stylesheet" href="<?php echo theme_url();?>/assets/css/module.examples.page.timeline-project.min.css" />


<link type="text/css" rel="stylesheet" href="<?php echo theme_url();?>/assets/css/easy-responsive-tabs.css" />
<script src="<?php echo theme_url();?>/assets/js/easyResponsiveTabs.js" type="text/javascript"></script>


<style type="text/css">
  .resp-tab-active {
    border: 1px solid #c1c1c1;
    margin-bottom: -1px !important;
    padding: 9px 14px 14px 14px !important;
    border-bottom: none;
    background-color: #fff;
    border-top: 4px solid #71AFFF;
  }







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

      




      <div id="horizontalTab">          
        <ul class="resp-tabs-list">
          <li> <?php echo lang_key('Timeline'); ?> </li>
          <li> <?php echo lang_key('Property'); ?> </li>
          <li> <?php echo lang_key('Special Offer'); ?></li>
        </ul> 

        <div class="resp-tabs-container">                                                        


         <!-- tab 1 -->

         <div> <!-- Project -->
          <div class="timeline-project">
            <div class="timeline-border">
              <a href="#" class="timeline-image"><img src="http://127.0.0.1/condivisi/test/assets/images/logo/Schermata_da_2014-08-04_17:51:34.png"></a>
              <!-- Heading -->
              <ul class="list-unstyled heading">
                <li class="timeline-heading">
                  <div class="block">
                    <div class="caret"></div>
                    <div class="box-generic">Contrnuto box fdgksgm
                      sfdsg
                      <div class="timeline-top-info content-filled ">
                        <i class="fa fa-comments"></i> <strong> 3 comments </strong> Posted in Project <a href="#" class="text-primary">QuickAdmin</a> 
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
    $('#horizontalTab').easyResponsiveTabs({
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

