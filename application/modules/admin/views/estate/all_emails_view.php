<?php
$this->load->helper('text'); 
$curr_page = $this->uri->segment(5);
if($curr_page=='')
  $curr_page = 0;
$dl = default_lang();
?>
<div class="row">
   
  <div class="col-md-12">

    <div class="box">

      <div class="box-title">

        <h3><i class="fa fa-bars"></i> <?php echo lang_key('all_email_to_agent'); ?></h3>

        <div class="box-tool">

          <a href="#" data-action="collapse"><i class="fa fa-chevron-up"></i></a>


        </div>

      </div>

      <div class="box-content">

        <?php echo $this->session->flashdata('msg');?>

        <?php if($posts->num_rows()<=0){?>

        <div class="alert alert-info">No Emails</div>

        <?php }else{?>

        <div id="no-more-tables">

        <table class="table table-hover">

           <thead>

               <tr>

                  <th class="numeric">#</th>

                  <th class="numeric">From</th>

                  <th class="numeric"><?php echo lang_key('name'); ?></th>

                  <th class="numeric"><?php echo lang_key('subject'); ?></th>

                  <th class="numeric"><?php echo lang_key('message'); ?></th>

                  <th class="numeric"><?php echo lang_key('actions'); ?></th>

               </tr>

           </thead>

           <tbody>

        	<?php $i=$start+1;foreach($posts->result() as $row):  
                  $val = $row->value;
                  $val = json_decode($val);
          ?>

               <tr>

                  <td data-title="#" class="numeric"><?php echo $i;?></td>

                  <td data-title="From" class="numeric"><?php echo $val->sender_email;?></td>

                  <td data-title="Name" class="numeric"><?php echo $val->sender_name;?></td>

                  <td data-title="Subject" class="numeric"><?php echo $val->subject;?></td>

                  <td data-title="Message" class="numeric"><?php echo character_limiter($val->msg,20);?></td>

                  <td data-title="Action" class="numeric">

                    <div class="btn-group">

                      <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-cog"></i> Action <span class="caret"></span></a>

                      <ul class="dropdown-menu dropdown-info">
                          <li><a class="detail" msg="<?php echo $val->msg;?>" href="<?php echo site_url('admin/realestate/editestate/'.$curr_page.'/'.$row->id);?>">Detail</a></li>
                          <?php if(is_admin()){?>
                          <?php }?>
                      </ul>

                    </div>

                  </td>

               </tr>

            <?php $i++;endforeach;?>   

           </tbody>

        </table>

        </div>

        <div class="pagination"><ul class="pagination pagination-colory"><?php echo $pages;?></ul></div>

        <?php }?>

        <a href="<?php echo site_url('admin/realestate/bulkemailform');?>" class="btn btn-success bulk-email">Send Bulk Email</a>
        </div>

    </div>

  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="location-model" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="border-bottom:0px;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><?php echo lang_key('email_detail'); ?></h4>
          </div>
            <div class="modal-body"  style="padding-top:0px;">
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery('.filters').change(function(){
        jQuery('#filter_form').submit();
    });

    jQuery(".detail").click(function(event){
        event.preventDefault();
        var msg = jQuery(this).attr("msg");
        jQuery('#location-model .modal-body').html(msg);
        jQuery('#location-model').modal('show');
        
    });

});
</script>
