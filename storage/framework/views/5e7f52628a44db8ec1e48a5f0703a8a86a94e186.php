<?php if($role->action == 1): ?>
<?php echo e(Form::model($role,array('route' => array('approveNewUserAdmin', $role->id,), 'method' => 'POST', 'onsubmit' => 'disableButtons(this)'))); ?>

	<?php echo csrf_field(); ?>
    <div>
        <div class="row">
            <div class="col-md-6">
            <h6>Are you sure you want to approve this New User?</h6>

          </div>
        </div>
     </div>
    <div class="modal-footer">
        <input type="button" value="<?php echo e(__('Close')); ?>" class="btn btn-secondary btn-light" data-bs-dismiss="modal">
		 <button type="submit" name="action" value="reject" class="btn btn-danger ms-2" data-confirm-text="Approved"><?php echo e(__('Reject')); ?></button>
		 <button type="submit" name="action" value="approve" class="btn btn-primary ms-2" data-confirm-text="Approved"><?php echo e(__('Approve')); ?></button>
    </div>
<?php echo e(Form::close()); ?>

<?php elseif($role->action == 2): ?>
<?php echo e(Form::model($role,array('route' => array('approveUserDelete', $role->id,), 'method' => 'POST', 'onsubmit' => 'disableButtons(this)'))); ?>

<?php echo csrf_field(); ?>
    <div>
        <div class="row">
            <div class="col-md-6">
            <h6>Are you sure you want to delete this User?</h6>
		
		
          </div>
        </div>
     </div>
    <div class="modal-footer">
        <input type="button" value="<?php echo e(__('Close')); ?>" class="btn btn-secondary btn-light" data-bs-dismiss="modal">
		 <button type="submit" name="action" value="reject" class="btn btn-danger ms-2" data-confirm-text="Approved"><?php echo e(__('No!')); ?></button>
		 <button type="submit" name="action" value="approve" class="btn btn-primary ms-2" data-confirm-text="Approved"><?php echo e(__('Yes! Delete')); ?></button>
    </div>
<?php echo e(Form::close()); ?>	

<?php elseif($role->action == 4): ?>
<?php echo e(Form::model($role,array('route' => array('user.password.approve', $role->id,), 'method' => 'POST', 'onsubmit' => 'disableButtons(this)'))); ?>

<?php echo csrf_field(); ?>
    <div>
        <div class="row">
            <div class="col-md-12">
            <h6>Are you sure you want to reset this User password?</h6>
		
		
          </div>
        </div>
     </div>
    <div class="modal-footer">
        <input type="button" value="<?php echo e(__('Close')); ?>" class="btn btn-secondary btn-light" data-bs-dismiss="modal">
		 <button type="submit" name="action" value="reject" class="btn btn-danger ms-2" data-confirm-text="Approved"><?php echo e(__('No!')); ?></button>
		 <button type="submit" name="action" value="approve" class="btn btn-primary ms-2" data-confirm-text="Approved"><?php echo e(__('Yes! Reset')); ?></button>
    </div>
<?php echo e(Form::close()); ?>	
<?php elseif($role->action == 5): ?>
<?php echo e(Form::model($role,array('route' => array('approveLoginStatus', $role->id,), 'method' => 'POST', 'onsubmit' => 'disableButtons(this)'))); ?>

<?php echo csrf_field(); ?>
    <div>
        <div class="row">
            <div class="col-md-12">
            <h6>Are you sure you want to enable this account?</h6>
		
		
          </div>
        </div>
     </div>
    <div class="modal-footer">
        <input type="button" value="<?php echo e(__('Close')); ?>" class="btn btn-secondary btn-light" data-bs-dismiss="modal">
		 <button type="submit" name="action" value="reject" class="btn btn-danger ms-2" data-confirm-text="Approved"><?php echo e(__('No!')); ?></button>
		 <button type="submit" name="action" value="approve" class="btn btn-primary ms-2" data-confirm-text="Approved"><?php echo e(__('Yes! Enable')); ?></button>
    </div>
<?php echo e(Form::close()); ?>	
<?php elseif($role->action == 6): ?>
<?php echo e(Form::model($role,array('route' => array('approveLoginStatus', $role->id,), 'method' => 'POST', 'onsubmit' => 'disableButtons(this)'))); ?>

<?php echo csrf_field(); ?>
    <div>
        <div class="row">
            <div class="col-md-12">
            <h6>Are you sure you want to diable this account?</h6>
		
		
          </div>
        </div>
     </div>
    <div class="modal-footer">
        <input type="button" value="<?php echo e(__('Close')); ?>" class="btn btn-secondary btn-light" data-bs-dismiss="modal">
		 <button type="submit" name="action" value="reject" class="btn btn-danger ms-2"  data-confirm-text="Approved"><?php echo e(__('No!')); ?></button>
		 <button type="submit" name="action" value="approve" class="btn btn-primary ms-2" data-confirm-text="Approved"><?php echo e(__('Yes! Disable')); ?></button>
    </div>
<?php echo e(Form::close()); ?>

<?php elseif($role->action == 7): ?>
<?php echo e(Form::model($role, ['route' => ['approveMakerAdmin', $role->id], 'method' => 'POST', 'onsubmit' => 'disableButtons(this)'])); ?>

<?php echo csrf_field(); ?>
<div>
    <div class="row">
        <div class="col-md-12">
            <h6>Are you sure you want to enable this user as Maker Admin?</h6>
        </div>
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="<?php echo e(__('Close')); ?>" class="btn btn-secondary btn-light" data-bs-dismiss="modal">
    <button type="submit" name="action" value="reject" class="btn btn-danger ms-2" data-confirm-text="Approved"><?php echo e(__('No!')); ?></button>
    <button type="submit" name="action" value="approve" class="btn btn-primary ms-2" data-confirm-text="Approved"><?php echo e(__('Yes! Enable')); ?></button>
</div>
<?php echo e(Form::close()); ?>

<?php elseif($role->action == 8): ?>
<?php echo e(Form::model($role, ['route' => ['approveMakerAdmin', $role->id], 'method' => 'POST', 'onsubmit' => 'disableButtons(this)'])); ?>

<?php echo csrf_field(); ?>
<div>
    <div class="row">
        <div class="col-md-12">
            <h6>Are you sure you want to disable this user as Maker Admin?</h6>
        </div>
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="<?php echo e(__('Close')); ?>" class="btn btn-secondary btn-light" data-bs-dismiss="modal">
    <button type="submit" name="action" value="reject" class="btn btn-danger ms-2" data-confirm-text="Approved"><?php echo e(__('No!')); ?></button>
    <button type="submit" name="action" value="approve" class="btn btn-primary ms-2" data-confirm-text="Approved"><?php echo e(__('Yes! Disable')); ?></button>
</div>
<?php echo e(Form::close()); ?>


<?php else: ?>
	
<?php echo e(Form::model($role,array('route' => array('approveUserUpdate', $role->id,), 'method' => 'POST', 'onsubmit' => 'disableButtons(this)'))); ?>

<?php echo csrf_field(); ?>
    <div>
        <div class="row">
            <div class="col-md-6">
            <h6 style="margin-bottom:20px"> Old Data</h6>
			<?php if($role->name != ''): ?>
            <p><strong>Name:</strong> <?php echo e(__($role->name)); ?></p>
		<?php endif; ?>
		<?php if($role->old_email != ''): ?>
            <p><strong>Email:</strong> <?php echo e(__($role->email)); ?></p>
		<?php endif; ?>
		<?php if($role->old_designation != ''): ?>
            <p><strong>Designation:</strong> <?php echo e(__($role->designation)); ?></p>
		<?php endif; ?>
		<?php if($role->old_department != ''): ?>
            <p><strong>Department:</strong> <?php echo e(__($role->department)); ?></p>
		<?php endif; ?>


          </div>
          <div class="col-md-6">
            <h6 style="margin-bottom:20px">New Data</h6>
			<?php if($role->name != ''): ?>
            <p><strong>Name:</strong> <?php echo e(__($role->old_name)); ?></p>
			<?php echo e(Form::hidden('old_name', null)); ?>


			<?php endif; ?>
			<?php if($role->old_email != ''): ?>
            <p><strong>Email:</strong> <?php echo e(__($role->old_email)); ?></p>
			<?php echo e(Form::hidden('old_email', null)); ?>


			<?php endif; ?>
			<?php if($role->old_designation != ''): ?>
            <p><strong>Designation:</strong> <?php echo e(__($role->old_designation)); ?></p>
			<?php echo e(Form::hidden('old_designation', null)); ?>

			<?php endif; ?>
			<?php if($role->old_department != ''): ?>
            <p><strong>Department:</strong> <?php echo e(__($role->old_department)); ?></p>
			<?php echo e(Form::hidden('old_department', null)); ?>

			<?php endif; ?>
			
		
		
          </div>
        </div>
     </div>
    <div class="modal-footer">
        <input type="button" value="<?php echo e(__('Close')); ?>" class="btn btn-secondary btn-light" data-bs-dismiss="modal">
		 <button type="submit" name="action" value="reject" class="btn btn-danger ms-2" data-confirm-text="Approved"><?php echo e(__('No! Reject')); ?></button>
		 <button type="submit" name="action" value="approve" class="btn btn-primary ms-2"  data-confirm-text="Approved"><?php echo e(__('Yes! Update')); ?></button>
    </div>
<?php echo e(Form::close()); ?>


<?php endif; ?>
<script>

    $(document).ready(function () {
        // Checkbox toggle logic
        $("#checkall").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });

        $(".ischeck").click(function () {
            var ischeck = $(this).data('id');
            $('.isscheck_' + ischeck).prop('checked', this.checked);
        });
    });

function disableButtons(form) {
    // Ensure the form is submitted before disabling buttons
    setTimeout(() => {
        const buttons = form.querySelectorAll('button[type="submit"]');
        buttons.forEach(button => {
            // Disable all buttons after form submission
            button.disabled = true;
            button.textContent = "Processing..."; // Temporary text
        });
    }, 100); // Give a small delay before disabling buttons
    
    // Allow form submission to proceed
}






</script>
<?php /**PATH C:\wamp64\www\versedbc\resources\views/pending/viewuser.blade.php ENDPATH**/ ?>