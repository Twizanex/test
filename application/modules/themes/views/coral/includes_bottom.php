 <script src="<?php echo theme_url();?>/assets/library/jquery/jquery.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/library/jquery/jquery-migrate.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/library/modernizr/modernizr.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/plugins/core_less-js/less.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/plugins/charts_flot/excanvas.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/plugins/core_browser/ie/ie.prototype.polyfill.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>    <script>if (/*@cc_on!@*/false && document.documentMode === 10) { document.documentElement.className+=' ie ie10'; }</script>

 <script src="<?php echo theme_url();?>/assets/library/bootstrap/js/bootstrap.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/plugins/core_nicescroll/jquery.nicescroll.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/plugins/core_breakpoints/breakpoints.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/plugins/core_preload/pace.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/components/core_preload/preload.pace.init.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/plugins/media_blueimp/js/blueimp-gallery.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/plugins/media_blueimp/js/jquery.blueimp-gallery.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/plugins/media_image-preview/image-preview.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/components/admin_menus/sidebar.main.init.js?v=v2.0.0-rc1"></script>
<script src="<?php echo theme_url();?>/assets/components/admin_menus/sidebar.collapse.init.js?v=v2.0.0-rc1"></script>
<script src="<?php echo theme_url();?>/assets/plugins/forms_elements_bootstrap-select/js/bootstrap-select.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/components/forms_elements_bootstrap-select/bootstrap-select.init.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/components/admin_menus/sidebar.kis.init.js?v=v2.0.0-rc1"></script>
<script src="<?php echo theme_url();?>/assets/plugins/charts_easy_pie/js/jquery.easy-pie-chart.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/components/charts_easy_pie/easy-pie.init.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/components/core/core.init.js?v=v2.0.0-rc1"></script>


<script src="<?php echo theme_url();?>/assets/plugins/tables_responsive/js/footable.min.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>
<script src="<?php echo theme_url();?>/assets/components/tables_responsive/tables-responsive-footable.init.js?v=v2.0.0-rc1&amp;sv=v0.0.1.2"></script>











    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->

    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <script src="<?php echo theme_url();?>/assets/js/headroom.min.js"></script>

    <script src="<?php echo theme_url();?>/assets/js/jQuery.headroom.min.js"></script>

    <script src="<?php echo theme_url();?>/assets/js/template.js"></script>






    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                <h4 class="modal-title" id="myModalLabel">Signin </h4>

            </div>

            <div class="modal-body">


                <?php
                $fb_enabled = get_settings('realestate_settings','enable_fb_login','No');
                $gplus_enabled = get_settings('realestate_settings','enable_gplus_login','No');
                if($fb_enabled=='Yes' || $gplus_enabled=='Yes'){
                ?>

                <!-- Social Logins-->
                <div style="height: 1px; background-color: #fff; text-align: center">
                  <span style="background-color:#fff; position: relative; top: -12px; font-size:16px;padding:0px 8px;">
                    Login with social account
                  </span>
                </div>
                <div style="text-align:center;">
                    <br>
                    <?php if($fb_enabled=='Yes'){?>
                    <a href="<?php echo site_url('account/newaccount/fb');?>">
                        <img src="<?php echo theme_url();?>/assets/social-icons/facebook_login.png"
                        data-toggle="tooltip" data-placement="top" data-original-title="Login with facebook"/>
                    </a>
                    <?php }?>
                    <?php if($gplus_enabled=='Yes'){?>
                    <a href="<?php echo site_url('account/newaccount/google_plus');?>">
                        <img src="<?php echo theme_url();?>/assets/social-icons/google+.png"
                        data-toggle="tooltip" data-placement="top" data-original-title="Login with google"/>
                    </a>
                    <?php }?>
                </div>
                <hr>
                <?php 
                }
                ?>
                
                <!-- Email Logins-->

                

                <form action="<?php echo site_url('account/login');?>" method="post">

                     <div class="row">

                        <div class="col-sm-3" style="padding-top:7px; font-weight:bold;">

                            Email

                        </div>

                        <div class="col-sm-12">

                            <input type="text" class="form-control" name="useremail" placeholder="" autofocus>

                        </div>

                     </div>

                     <br>

                     <div class="row">

                        <div class="col-sm-3" style="padding-top:7px;font-weight:bold;">

                            Password

                        </div>

                        <div class="col-sm-12">

                            <input type="password" class="form-control" name="password" placeholder="">

                        </div>

                     </div>

                     <?php if(constant("ENVIRONMENT")=='demo'){?>
                      <div class="row">

                        <div class="col-sm-12" style="padding-top:7px;font-weight:bold;">

                            demo user : agent@dbcinfotech.com pass: 12345

                        </div>
                     </div>
                     <?php }?>
                     
                     <br>

                     <div class="row">

                        <div class="col-sm-12">

                            <button type="submit" class="btn btn-primary pull-left"> Log in</button>

                            <a style="margin:10px 0 0 10px;" href="<?php echo site_url('account/signup');?>">Signup</a><a style="margin-left:10px;" href="<?php echo site_url('account/recoverpassword');?>">Recover</a>

                        </div>

                     </div>

                </form>

            </div>

            <div class="modal-footer">

            </div>

        </div>

        <!-- /.modal-content -->

    </div>

    <!-- /.modal-dialog -->

</div>

<script type="text/javascript">

jQuery(document).ready(function(){

    jQuery('.view-filters').change(function(){
        var val = jQuery('select[name=view_orderby]').val();
        if(val!='')
        jQuery(this).parent().submit();

    });

});

</script>
    <?php
    $ga_tracking_code = get_settings('site_settings','ga_tracking_code','');

    if($ga_tracking_code != ''){
        echo $ga_tracking_code;
    }

    ?>

