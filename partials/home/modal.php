<!-- Modal -->
<div class="modal fade modal-fullscreen" id="<?php echo 'modal-id-' . $postid_str ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><?php the_field('website_name') ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col">

          <?php if( get_field('website_image_large') ): ?>
          <img class="img-fluid d-block mx-auto" src="<?php the_field('website_image_large'); ?>" />
          <?php endif; ?>                           
            
          </div>                            
        </div>                          
      </div>
    </div>                      
    </div>
  </div>
</div>
<!-- modal -->