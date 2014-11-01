<style>


  @import '<?php echo theme_url();?>/assets/icons/fontawesome/assets/css/font-awesome.min.css';
  @import '<?php echo theme_url();?>/assets/icons/glyphicons/assets/css/glyphicons_regular.css';
  @import '<?php echo theme_url();?>/assets/icons/glyphicons/assets/css/glyphicons_social.css';
  @import '<?php echo theme_url();?>/assets/icons/glyphicons/assets/css/glyphicons_filetypes.css';
  @import url(http://fonts.googleapis.com/css?family=Roboto:400,300,700);
  @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700);
  @import '<?php echo theme_url();?>/assets/plugins/forms_elements_bootstrap-datepicker/css/bootstrap-datepicker.css';

  @import '<?php echo theme_url();?>/assets/plugins/forms_elements_uniform/css/uniform.default.css';
  @import '<?php echo theme_url();?>/assets/css/custom_co.css';
  /* --- LOADING [css.bootstrap.min] from assets/library/bootstrap/css/bootstrap.min.css */
  /* --- LOADING [css.font-awesome.min] from assets/library/icons/fontawesome/assets/css/font-awesome.min.css */
  /* --- LOADING [css.glyphicons_regular] from assets/library/icons/glyphicons/assets/css/glyphicons_regular.css */
  /* --- LOADING [css.glyphicons_social] from assets/library/icons/glyphicons/assets/css/glyphicons_social.css */
  /* --- LOADING [css.glyphicons_filetypes] from assets/library/icons/glyphicons/assets/css/glyphicons_filetypes.css */
  /* --- LOADING [less.variables] from assets/components/core/variables.less */
  /* --- LOADING [less.mixins] from assets/components/core/mixins.less */
  /* --- LOADING [less.scaffolding] from assets/components/core/scaffolding.less */

  
</style>
<link rel="stylesheet" href="<?php echo theme_url();?>/assets/css/module.examples.page.timeline-project.min.css" />

<div class="row">
  <!-- Gallery , DETAILES DESCRIPTION-->
  <div class="col-md-3 ">
    <?php render_widgets('profile_menu');?>
  </div>
  <div class="col-md-9">
    <div class="detail-title"><i class="fa fa-home fa-4"></i>&nbsp;<?php echo lang_key('DBC_ALL_AGENTS');?></div>

    <div class="agent-container" id="panel">




     <!-- Widget -->
     <div class="widget widget-tabs widget-tabs-double-2 border-bottom-none">

      
      <div class="widget-body">

        <form class="form-horizontal">
          <div class="tab-content">

            <div class="tab-pane active widget-body-regular padding-none" id="overview">

              <div class="innerL row row-merge">
                <div class="col-md-3 center innerL innerTB">

                  <div class="innerR innerT">
                    <!-- Profile Photo -->
                    <a href="" class="thumb"><img src="<?php echo get_profile_photo_by_id($profile->id,'thumb');?>" alt="Profile" class="img-responsive" /></a>
                    <div class="separator bottom"></div>
                    <!-- // Profile Photo END -->

                    <!-- Social Icons -->
                    <a href="" class="glyphicons glyphicons-social standard primary facebook"><i></i></a>
                    <a href="" class="glyphicons glyphicons-social standard twitter"><i></i></a>
                    <a href="" class="glyphicons glyphicons-social standard linked_in"><i></i></a>
                    <div class="clearfix separator bottom"></div>
                    <!-- // Social Icons END -->

                    <!-- Twitter Section -->
                    <h5 class="glyphicons single twitter"><i></i> Latest from Twitter</h5>
                    <section class="twitter-feed">
                      <div class="tweet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc lorem, rutrum non porta. <span class="label label-inverse">01/11/2012</span></div>
                    </section>
                    <!-- Twitter Section END -->

                  </div>

                </div>
                <div class="col-md-9 containerBg innerTB">

                  <div class="innerLR">
                    <div class="row innerTB">
                      <div class="col-md-7">

                        <!-- About -->
                        <div class="widget widget-heading-simple widget-body-white margin-none">
                          <div class="widget-head"><h4 class="heading glyphicons user"><i></i><?php echo $profile->user_name;?></h4></div>
                          <div class="widget-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas convallis porta purus, pulvinar mattis nulla tempus ut. Curabitur quis dui orci. Ut nisi dolor, dignissim a aliquet quis, vulputate id dui. Proin ultrices ultrices ligula, dictum varius turpis faucibus non. Curabitur faucibus ultrices nunc, nec aliquet leo tempor cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                        </div>
                        <!-- // About END -->

                      </div>
                      <div class="col-md-5">

                        <!-- Bio -->
                        <div class="widget widget-heading-simple widget-body-white margin-none">
                          <div class="widget-head"><h4 class="heading glyphicons calendar"><i></i>Bio <span>Personal information</span></h4></div>
                          <div class="widget-body">
                            <ul class="unstyled icons margin-none">
                              <li class="glyphicons birthday_cake"><i></i> <span class="label label-default">10</span> <span class="label label-default">July</span> <span class="label label-default">1986</span></li>
                              <li class="glyphicons tie"><i></i> Working at <a href="http://www.mosaicpro.biz">MosaicPro</a></li>
                              <li class="glyphicons certificate"><i></i> Adobe Photoshop Certification</li>
                              <li class="glyphicons microphone"><i></i> English :: French :: Italian :: Romanian :: Polish</li>
                            </ul>
                          </div>
                        </div>
                        <!-- // Bio END -->

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-7">

                        <!-- Latest Orders/List Widget -->
                        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

                          <!-- Widget Heading -->
                          <div class="widget-head">
                            <h4 class="heading glyphicons shopping_cart"><i></i>Last orders</h4>
                            <a href="" class="details pull-right">view all</a>
                          </div>
                          <!-- // Widget Heading -->

                          <div class="widget-body list products">
                            <ul>
                             <?php 

                             $querys = get_notific($profile->id); 

                             $notifiche= count($querys);
if ($notifiche> 0){
                             foreach($querys as $notific) {
                              echo'
                              <li>
                                <img src="'.get_profile_photo_by_id($notific['user_id_created_by'], "thumb").'" width="50px">
                                <span class="title">10 items<br/><strong>'.$notific['user_notification_type'].'  &euro;5,900.00</strong></span>
                                <span class="count"></span>
                              </li>';

                            } }else{?>
                            <!-- List item -->
                            <li>
                              <span class="img">photo</span>
                              <span class="title">Product name<br/><strong>&euro;2,900</strong></span>
                              <span class="count"></span>
                            </li>
                            <!-- // List item END -->
                            <!-- List item -->
                            <li>
                              <span class="img">photo</span>
                              <span class="title">Product name<br/><strong>&euro;2,900</strong></span>
                              <span class="count"></span>
                            </li>
                            <!-- // List item END -->
<?} ?>
                          </ul>
                        </div>
                      </div>
                      <!-- // Latest Orders/List Widget END -->

                      <div class="alert alert-primary">
                        <a class="close" data-dismiss="alert">&times;</a>
                        <p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est. Pellentesque at justo urna, eu pharetra tortor. Aenean aliquam, tellus vel suscipit luctus.</p>
                      </div>

                    </div>
                    <div class="col-md-5">

                      <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

                        <!-- Widget Heading -->
                        <div class="widget-head">
                          <h4 class="heading glyphicons history"><i></i>Activity</h4>
                          <a href="" class="details pull-right">view all</a>
                        </div>
                        <!-- // Widget Heading END -->

                        <div class="widget-body list">
                          <ul>

                            <!-- List item -->
                            <li>
                              <span>Sales today</span>
                              <span class="count">&euro;5,900</span>
                            </li>
                            <!-- // List item END -->

                            <!-- List item -->
                            <li>
                              <span>Some other stats</span>
                              <span class="count">30,095</span>
                            </li>
                            <!-- // List item END -->
                            <!-- List item -->
                            <li>
                              <span>Some other stats</span>
                              <span class="count">22,320</span>
                            </li>
                            <!-- // List item END -->

                          </ul>
                        </div>
                      </div>

                      <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

                        <!-- Widget Heading -->
                        <div class="widget-head">
                          <h4 class="heading glyphicons history"><i></i>Widget</h4>
                        </div>
                        <!-- // Widget Heading END -->

                        <div class="widget-body">
                          Curabitur quis dui orci. Ut nisi dolor, dignissim a aliquet quis, vulputate id dui. Proin ultrices ultrices ligula, dictum varius turpis faucibus non. Curabitur faucibus ultrices nunc, nec aliquet leo tempor cursus.
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>

         
        </div>
      </form>
    </div>
  </div>
  <!-- // Widget END -->


<!-- Project -->
<div class="timeline-project">
    <div class="timeline-border">
        <a href="#" class="timeline-image"><img src="http://127.0.0.1/condivisi/test/assets/images/logo/Schermata_da_2014-08-04_17:51:34.png"></a>
        <!-- Heading -->
        <ul class="list-unstyled heading">
            <li class="timeline-heading">
                <div class="block">
                    <div class="caret"></div>
                    <div class="box-generic">
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
</div> <!-- col-md-9 -->


<!--DETAILS SUMMARY-->

</div>

<script src="<?php echo theme_url();?>/assets/plugins/forms_editors_wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"></script>
<script src="<?php echo theme_url();?>/assets/plugins/forms_elements_bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo theme_url();?>/assets/plugins/forms_elements_bootstrap-datepicker/bootstrap-datepicker.init.js"></script>
<script src="<?php echo theme_url();?>/assets/plugins/forms_elements_uniform/js/jquery.uniform.min.js"></script>
<script src="<?php echo theme_url();?>/assets/plugins/forms_elements_uniform/uniform.init.js"></script>