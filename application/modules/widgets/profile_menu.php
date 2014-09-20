<?php
$CI = get_instance();
$curr_lang = ($CI->uri->segment(1)!='')?$CI->uri->segment(1):'en';
?>
<div class="recent-grid"><i class="fa fa-puzzle-piece"></i> Type Filters</div>

<div class="well">
                <ul class="nav nav-pills nav-stacked">
                                        <li class="">
                        <a href="<?= base_url().$curr_lang; ?>/profile/editprofile">
                            <i class="fa fa-home"></i> <?php echo lang_key('Profile'); ?>                   </a>
                    </li>
                                        <li class="">
                        <a href="<?= base_url().$curr_lang; ?>/profile/subscription">
                            <i class="fa fa-indent"></i> <?php echo lang_key('Subscription'); ?>                      </a>
                    </li>
                                        <li class="">
                        <a href="<?= base_url().$curr_lang; ?>/profile/allestatesagent">
                            <i class="fa fa-indent"></i> <?php echo lang_key('Property'); ?></a>
                    </li>
                                        <li class="">
                        <a href="http://127.0.0.1/realcon3-8/index.php/en/show/type/DBC_TYPE_COMSPACE">
                            <i class="fa fa-indent"></i> Commercial Space                        </a>
                    </li>
                                        <li class="">
                        <a href="http://127.0.0.1/realcon3-8/index.php/en/show/type/DBC_TYPE_CONDO">
                            <i class="fa fa-indent"></i> Condo                        </a>
                    </li>
                                        <li class="">
                        <a href="http://127.0.0.1/realcon3-8/index.php/en/show/type/DBC_TYPE_VILLA">
                            <i class="fa fa-indent"></i> Villa                        </a>
                    </li>
                                    </ul>
            </div>




<div class="recent-grid"><i class="fa fa-puzzle-piece"></i> Type Filters</div>

<div class="well">
                <ul class="nav nav-pills nav-stacked">
                                        <li class="">
                        <a href="<?= base_url().$curr_lang; ?>/profile/editprofile">
                            <i class="fa fa-home"></i> <?php echo lang_key('Profile'); ?>                   </a>
                    </li>
                                        <li class="">
                        <a href="http://127.0.0.1/realcon3-8/index.php/en/show/type/DBC_TYPE_HOUSE">
                            <i class="fa fa-indent"></i> House                        </a>
                    </li>
                                        <li class="">
                        <a href="http://127.0.0.1/realcon3-8/index.php/en/show/type/DBC_TYPE_LAND">
                            <i class="fa fa-indent"></i> Land                        </a>
                    </li>
                                        <li class="">
                        <a href="http://127.0.0.1/realcon3-8/index.php/en/show/type/DBC_TYPE_COMSPACE">
                            <i class="fa fa-indent"></i> Commercial Space                        </a>
                    </li>
                                        <li class="">
                        <a href="http://127.0.0.1/realcon3-8/index.php/en/show/type/DBC_TYPE_CONDO">
                            <i class="fa fa-indent"></i> Condo                        </a>
                    </li>
                                        <li class="">
                        <a href="http://127.0.0.1/realcon3-8/index.php/en/show/type/DBC_TYPE_VILLA">
                            <i class="fa fa-indent"></i> Villa                        </a>
                    </li>
                                    </ul>
            </div>
