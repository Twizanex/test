<!-- Fixed navbar -->

<div class="navbar navbar-inverse navbar-fixed-top headroom" >

    <div class="container">

        <div class="navbar-header">

            <!-- Button for smallest screens -->

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

            <a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo get_site_logo();?>" alt="Logo" style="height:50px"></a>

        </div>

        <div class="navbar-collapse collapse">



            <ul class="nav navbar-nav pull-right">

                

                <?php

                $CI = get_instance();

                $CI->load->model('admin/page_model');

                $CI->page_model->init();

                ?>



                <?php 

                $alias = (isset($alias))?$alias:'';

                foreach ($CI->page_model->get_menu() as $li) 

                {

                    if($li->parent==0)

                        $CI->page_model->render_top_menu($li->id,0,$alias);

                }

                ?>



                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <?php echo lang_key('type');?> <b class="caret"></b>

                    </a>

                    <ul class="dropdown-menu">

                        <?php

                        $filter_options = array();

                        $this->load->config('realcon');
                        $custom_types = $this->config->item('property_types');
                        if(is_array($custom_types)) foreach ($custom_types as $key => $custom_type) {
                            if($custom_type['title']=='DBC_TYPE_APARTMENT')
                                $filter_options[$custom_type['title']] = 'apartment';
                            else if($custom_type['title']=='DBC_TYPE_HOUSE')
                                $filter_options[$custom_type['title']] = 'house';
                            else if($custom_type['title']=='DBC_TYPE_LAND')
                                $filter_options[$custom_type['title']] = 'land';
                            else if($custom_type['title']=='DBC_TYPE_COMSPACE')
                                $filter_options[$custom_type['title']] = 'com_space';
                            else if($custom_type['title']=='DBC_TYPE_CONDO')
                                $filter_options[$custom_type['title']] = 'condo';
                            else if($custom_type['title']=='DBC_TYPE_VILLA')
                                $filter_options[$custom_type['title']] = 'villa';
                            else
                              $filter_options[$custom_type['title']] = urlencode($custom_type['title']);
                      }

                      foreach ($filter_options as $k=>$v) {

                        ?>

                        <li class="<?php echo is_active_menu('show/type/'.$v);?>">

                            <a href="<?php echo site_url('show/type/'.$v);?>">

                            </i>&nbsp;<?php echo lang_key($k);?>

                        </a>

                    </li>

                    <?php

                }

                ?>

                <li style="border-bottom:1px solid #fff;height:0px;"></li>

                <?php

                $filter_options = array('DBC_PURPOSE_SALE'=>'sale',
                    'DBC_PURPOSE_RENT'=>'rent',
                    'DBC_PURPOSE_BOTH'=>'sale_rent');



                foreach ($filter_options as $k=>$v) {

                    ?>

                    <li class="<?php echo is_active_menu('show/purpose/'.$v);?>">

                        <a href="<?php echo site_url('show/purpose/'.$v);?>">

                        </i>&nbsp;<?php echo lang_key($k);?>

                    </a>

                </li>

                <?php

            }

            ?>

        </ul>    

    </li>    

    

    

                   <!--  <li class="active"><a href="#">Home</a></li>

                    <li><a href="<?php echo site_url('show/detail');?>">Detail</a></li>

                    <li><a href="<?php echo site_url('show/search');?>">Advance Search</a></li>

                    <li><a href="<?php echo site_url('show/list_view');?>">List View</a></li> -->

                    <!--li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>

                        <ul class="dropdown-menu">

                            <li><a href="sidebar-left.html">Left Sidebar</a></li>

                            <li class="active"><a href="sidebar-right.html">Right Sidebar</a></li>

                        </ul>

                    </li-->

                    <!--li><a href="<?php echo site_url('show/contact');?>">Contact</a></li-->

                    <?php if(!is_loggedin()){?>

                    <?php if(get_settings('realestate_settings','enable_signup','Yes')=='Yes'){?>

                    <li><a class="btn" data-toggle="modal" href="#myModal"><?php echo lang_key('sign_in'); ?></a></li>

                    <li><a class="btn" href="<?php echo site_url('account/signup');?>"><?php echo lang_key('sign_up'); ?></a></li>

                    <?php }?>

                    <?php }else{?>

                    

                    <li class="dropdown" id="secondary-nav">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-comment"></i>

                            <?php 

                            $querys = get_notific(user_session_id()); 
                            
                            $notifiche= count($querys);
                           
                             if ($notifiche > 0){?> 
                            <span class="label label-info"><?= $notifiche; ?></span>
                            <?php } ?>
                        </a>
 <?php 
                            if ($notifiche > 0){
?>
                        <ul class="dropdown-menu" id="secondary-nav">
                           
                               <?php
                                foreach ($querys as $notific) {   

                                    

                                    echo '<li class="">

                                    <a href="'.site_url().'/p/'.get_user_name_by_id($notific['user_id_created_by']).'">

                                    </i> '.get_user_fullname_by_id($notific['user_id_created_by']).' '.lang_key($notific['user_notification_type']).'

                                    </a>

                                    </li>';

                                }
                           
                            

                echo'</ul>';
                 }
                            ?>

                <?php 


                

                if(!is_admin()){?>
               
<li><a href="<?php echo site_url('profile/timeline');?>" ><img style="width: 2em;" src="<?php echo get_profile_photo_by_id(user_session_id(),'thumb');?>" alt="Profile" class="img-responsive-mini"></a></li>
 <li class="dropdown" id="secondary-nav">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo get_user_fullname_by_id(user_session_id()); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu" >
                <li><a class="" href="<?php echo site_url('profile');?>"><?php echo lang_key('Profile'); ?></a></li>
                <li><a class="" href="<?php echo site_url('admin/realestate/allestatesagent');?>"><?php echo lang_key('DBC_AGENT_PANEL'); ?></a></li>

                <?php }else{?>
                
<li><a href="<?php echo site_url('profile/timeline');?>" ><img style="width: 2em;" src="<?php echo get_profile_photo_by_id(user_session_id(),'thumb');?>" alt="Profile" class="img-responsive-mini"></a></li>
 <li class="dropdown" id="secondary-nav">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo get_user_fullname_by_id(user_session_id()); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu" >
                        <li><a class="" href="<?php echo site_url('profile');?>"><?php echo lang_key('Profile'); ?></a></li>
                <li><a class="" href="<?php echo site_url('admin');?>"><?php echo lang_key('DBC_ADMIN_PANEL'); ?></a></li>

                <?php }?>

                <li><a class="" href="<?php echo site_url('account/logout');?>"><?php echo lang_key('logout'); ?></a></li>
</ul>
                <?php }?>

            </ul>

        </div><!--/.nav-collapse -->

    </div>

</div> 

<!-- /.navbar -->


<script>
$(document).ready(function(){
    $("#secondary-nav").click(function(){
        



        $.ajax({
            type: "POST",
            url: "/condivisi/test/index.php/en/ajax/read_notific",

            success: function(){
              
            }

        });
    });
});


</script>