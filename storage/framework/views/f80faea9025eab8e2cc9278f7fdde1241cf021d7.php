<?php echo e(Form::model($role,array('route' => array('approveChanges', $role->business_id, $role->id,), 'method' => 'POST'))); ?>

    <div>
        <div class="row">
            <div class="col-md-6">
            <h6 style="margin-bottom:20px"> Old Data</h6>
			<?php if($role->name != ''): ?>
            <p><strong>Name:</strong> <?php echo e(__($role->old_name)); ?></p>
		<?php endif; ?>
		<?php if($role->department != ''): ?>
            <p><strong>Department:</strong> <?php echo e(__($role->old_department)); ?></p>
		<?php endif; ?>
		<?php if($role->designation != ''): ?>
            <p><strong>Designation:</strong> <?php echo e(__($role->old_designation)); ?></p>
		<?php endif; ?>
		<?php if($role->bio != ''): ?>
			<p><strong>Bio:</strong> <?php echo e(__($role->old_bio)); ?></p>
		<?php endif; ?>
		<?php if($role->slug != ''): ?>
			<p><strong>Url:</strong> <?php echo e(__($role->old_slug)); ?></p>
		<?php endif; ?>
		<?php if($role->secret_code != ''): ?>
			<p><strong>Secret Code:</strong> <?php echo e(__($role->old_secret_code)); ?></p>
		<?php endif; ?>
          </div>
          <div class="col-md-6">
            <h6 style="margin-bottom:20px">New Data</h6>
			<?php if($role->name != ''): ?>
            <p><strong>Name:</strong> <?php echo e(__($role->name)); ?></p>
			<?php echo e(Form::hidden('name', null)); ?>


			<?php endif; ?>
			<?php if($role->department != ''): ?>
            <p><strong>Department:</strong> <?php echo e(__($role->department)); ?></p>
			<?php echo e(Form::hidden('department', null)); ?>


			<?php endif; ?>
			<?php if($role->designation != ''): ?>
            <p><strong>Designation:</strong> <?php echo e(__($role->designation)); ?></p>
			<?php echo e(Form::hidden('designation', null)); ?>

			<?php endif; ?>
			<?php if($role->bio != ''): ?>
			<p><strong>Bio:</strong> <?php echo e(__($role->bio)); ?></p>
			<?php echo e(Form::hidden('bio', null)); ?>

			<?php endif; ?>
			<?php if($role->slug != ''): ?>
			<p><strong>Url:</strong> <?php echo e(__($role->slug)); ?></p>
			<?php echo e(Form::hidden('slug', null)); ?>

			<?php endif; ?>
			<?php if($role->secret_code != ''): ?>
			<p><strong>Secret Code:</strong> <?php echo e(__($role->secret_code)); ?></p>
			<?php echo e(Form::hidden('secret_code', null)); ?>

		<?php endif; ?>
		
		
          </div>
        </div>
     </div>
    <div class="modal-footer">
        <input type="button" value="<?php echo e(__('Close')); ?>" class="btn btn-secondary btn-light" data-bs-dismiss="modal">
		 <button type="submit" name="action" value="reject" class="btn btn-danger ms-2"><?php echo e(__('Reject')); ?></button>
		 <button type="submit" name="action" value="approve" class="btn btn-primary ms-2"><?php echo e(__('Approve')); ?></button>
    </div>
<?php echo e(Form::close()); ?>


<script>
    $(document).ready(function () {
           $("#checkall").click(function(){
                $('input:checkbox').not(this).prop('checked', this.checked);
            });
           $(".ischeck").click(function(){
                var ischeck = $(this).data('id');
                $('.isscheck_'+ ischeck).prop('checked', this.checked);
            });
        });
</script>
<?php /**PATH C:\wamp64\www\versedbc\resources\views/pending/edit.blade.php ENDPATH**/ ?>