<footer class="main-footer">
   <strong>Copyright &copy; 2023 <a href="<?= base_url('dashboard') ?>">DiamondStore</a>.</strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
   </div>
</footer>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('confirmlogout'); ?></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body"><?php echo $this->lang->line('messagelogout'); ?></div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo $this->lang->line('cancel'); ?></button>
            <a class="btn btn-info" href="<?= base_url('auth/logout') ?>"><?php echo $this->lang->line('logout'); ?></a>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="logoutLabel"><?php echo $this->lang->line('headconfirmdelete'); ?></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body"><?php echo $this->lang->line('confirmdelete'); ?></div>
         <div class="modal-footer">
            <?= form_open('', 'class="d-inline" id="formLinkDelete"') ?>
            <input type="hidden" name="id" id="valueId">
            <button type="submit" class="btn btn-danger"> <?php echo $this->lang->line('yes'); ?> </button> <button class="btn btn-secondary" type="button" data-dismiss="modal"><?php echo $this->lang->line('no'); ?></button>
            <?= form_close(); ?>
         </div>
      </div>
   </div>
</div>
</div>
<!-- ./wrapper -->