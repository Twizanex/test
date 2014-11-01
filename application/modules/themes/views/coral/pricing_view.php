<div class="detail-title"><i class="fa fa-user"></i>&nbsp;<?php echo lang_key('choose_a_package'); ?></div>
<div class="row">
    <div class="col-md-12">
        <?php 
        if($packages->num_rows()<=0){
        ?>
            <div class="alert alert-danger"><?php echo lang_key('no_package_found'); ?></div>
        <?php    
        }
        else
        {
        ?>
        <?php echo $this->session->flashdata('msg');?>
        <?php foreach($packages->result() as $package):?>
            <?php $action = (isset($alias) && $alias=='renew')?site_url('account/renewpackage'):site_url('account/takepackage');?>
            <form action="<?php echo $action;?>" method="post">
                <input type="hidden" name="package_id" value="<?php echo $package->id;?>">
                <div class="col-md-4 col-sm-4">
                    <div class="thumbnail thumb-shadow">
                        
                        <div class="caption">
                            <h4><?php echo $package->title;?></h4> 
                            <p style="min-height:25px;"><?php echo $package->description;?></p>                       
                            <div style="clear:both;">
                                <span style="float:left; font-weight:bold;"><?php echo lang_key('price'); ?>:</span>
                                <span style="float:right; "><?php echo $package->price;?> <?php echo get_currency_icon(get_settings('paypal_settings','currency','USD')).'('.get_settings('paypal_settings','currency','USD').')';?></span>
                            </div>
                            <div style="clear:both; border-bottom:1px solid #ccc; margin:10px 0px;"></div>
                            <div style="clear:both;">
                                <span style="float:left; font-weight:bold;"><?php echo lang_key('limit'); ?>:</span>
                                <span style="float:right; "><?php echo $package->expiration_time;?> <?php echo lang_key('days'); ?></span>
                            </div>
                            <div style="clear:both; border-bottom:1px solid #ccc; margin:10px 0px;"></div>
                            <div style="clear:both;">
                                <span style="float:left; font-weight:bold;"><?php echo lang_key('usage'); ?>:</span>
                                <span style="float:right; "><?php echo $package->max_post;?> <?php echo lang_key('posts'); ?></span>
                            </div>
                            <div style="clear:both; border-bottom:1px solid #ccc; margin:10px 0px;"></div>
                            <p>
                                <button type="submit" href="<?php echo site_url('show/registerinfo');?>" class="btn btn-primary  btn-labeled">
                                    <?php echo lang_key('subscribe'); ?>
                                    <span class="btn-label btn-label-right">
                                       <i class="fa  fa-arrow-right"></i>
                                    </span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </form>    
        <?php endforeach;?>
        <?php
        }
        ?>
    </div>    
</div> <!-- /row -->
