<div class="detail-title"><i class="fa fa-user"></i>&nbsp;<?php echo lang_key('confirmation'); ?></div>
<div class="row">
    <div class="col-md-12" style="min-height:300px">
        <p><?php echo lang_key('payment_notification'); ?></p>
        <?php
        $action = (get_settings('paypal_settings','enable_sandbox_mode','No')=='Yes')?'https://www.sandbox.paypal.com/cgi-bin/webscr':'https://www.paypal.com/cgi-bin/webscr';
        ?>



        form abbonamento test
        <form action="<?php echo $action;?>" method="post">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="info@amadall.it">

    <!-- Specify a Subscribe button. -->
    <input type="hidden" name="cmd" value="_xclick-subscriptions">

    <!-- Identify the subscription. -->
    <input type="hidden" name="item_name" value="Alice's Weekly Digest">
    <input type="hidden" name="item_number" value="DIG Weekly">

    <!-- Set the terms of the 1st trial period. -->
    <input type="hidden" name="currency_code" value="EUR">
    <input type="hidden" name="a1" value="0">
    <input type="hidden" name="p1" value="90">
    <input type="hidden" name="t1" value="D">

    
    <!-- Set the terms of the regular subscription. -->
    <input type="hidden" name="a3" value="5.00">
    <input type="hidden" name="p3" value="1">
    <input type="hidden" name="t3" value="M">

    <!-- Set recurring payments until canceled. -->
    <input type="hidden" name="src" value="1">

<input type="hidden" name="return" value="<?php echo site_url(get_settings('paypal_settings','finish_url','account/finish_url'));?>">
        <input type="hidden" name="cancel_return" value="<?php echo site_url(get_settings('paypal_settings','cancel_url','account/cancel_url'));?>">
    

    <!-- Display the payment button. -->
    <button type="submit" class="btn btn-primary">Go to Paypal</button>
</form>





        <?php echo $this->session->userdata('amount');?>
        <form action="<?php echo $action;?>" method="post" target="_top">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="<?php echo get_settings('paypal_settings','email','none');?>">
        <input type="hidden" name="lc" value="US">
        <input type="hidden" name="item_name" value="<?php echo get_settings('paypal_settings','item_name','Package');?>">
        <input type="hidden" name="amount" value="<?php echo $this->session->userdata('amount');?>">
        <input type="hidden" name="currency_code" value="<?php echo get_settings('paypal_settings','currency','USD');?>">
        <input type="hidden" name="no_note" value="1">
        <input type="hidden" name="no_shipping" value="1">
        <input type="hidden" name="rm" value="1">
        <input type="hidden" name="return" value="<?php echo site_url(get_settings('paypal_settings','finish_url','account/finish_url'));?>">
        <input type="hidden" name="cancel_return" value="<?php echo site_url(get_settings('paypal_settings','cancel_url','account/cancel_url'));?>">
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
        <input type="hidden" name="notify_url" value="<?php echo site_url('account/ipn_url');?>">
        <input type="hidden" name="custom" value="<?php echo $this->session->userdata('unique_id');?>">
        <button type="submit" class="btn btn-primary">Go to Paypal</button>
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
        </p>
        <?php if(get_settings('realestate_settings','enable_bank_transfer','No')=='Yes'){?>
        <div style="border-bottom:1px solid #aaa;font-weight:bold;font-size:14px;padding:0 0 5px 5px;"><?php echo lang_key('bank_transfer');?></div>
        <?php echo get_settings('realestate_settings','signup_payment_bank_instruction','');?>                
        <?php }?>
    </div>    
</div> <!-- /row -->
