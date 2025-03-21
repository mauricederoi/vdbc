<?php echo e(Form::open(array('url'=>'users','method'=>'post'))); ?>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo e(Form::label('name',__('Name*'),['class'=>'form-label'])); ?>

            <?php echo e(Form::text('name',null,array('class'=>'form-control','placeholder'=>__('Enter User Name'),'required'=>'required'))); ?>

            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="invalid-name" role="alert">
                <strong class="text-danger"><?php echo e($message); ?></strong>
            </small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php echo e(Form::label('email',__('Email*'),['class'=>'form-label'])); ?>

            <?php echo e(Form::text('email',null,array('class'=>'form-control','placeholder'=>__('Enter User Email'),'required'=>'required'))); ?>

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="invalid-email" role="alert">
                <strong class="text-danger"><?php echo e($message); ?></strong>
            </small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
	<div class="col-md-6">
        <div class="form-group">
            <?php echo e(Form::label('mobile',__('Mobile*'),['class'=>'form-label'])); ?>

            <?php echo e(Form::text('mobile',null,array('class'=>'form-control','placeholder'=>__('Enter Mobile Number'),'required'=>'required'))); ?>

            <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="invalid-email" role="alert">
                <strong class="text-danger"><?php echo e($message); ?></strong>
            </small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
	<div class="col-md-6">
        <div class="form-group">
            <?php echo e(Form::label('designation',__('Designation*'),['class'=>'form-label'])); ?>

            <?php echo e(Form::text('designation',null,array('class'=>'form-control','placeholder'=>__('Enter Designation'),'required'=>'required'))); ?>

            <?php $__errorArgs = ['designation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="invalid-email" role="alert">
                <strong class="text-danger"><?php echo e($message); ?></strong>
            </small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>

		 
        <div class="form-group col-md-6">
            <?php echo e(Form::label('role', __('Department*'),['class'=>'form-label'])); ?>

            <?php echo Form::select('role', $roles, null,array('class' => 'form-control select2','required'=>'required')); ?>

            <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="invalid-role" role="alert">
                <strong class="text-danger"><?php echo e($message); ?></strong>
            </small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
   
	
	<div class="col-md-12">
		<div class="form-group">
			<?php echo e(Form::label('brief_bio', __('Brief Bio*'), ['class' => 'form-label'])); ?>

			<?php echo e(Form::textarea('brief_bio', null, ['class' => 'form-control', 'placeholder' => __('Enter Brief Bio'), 'required' => 'required', 'style' => 'height: 80px;'])); ?>

			<?php $__errorArgs = ['brief_bio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<small class="invalid-email" role="alert">
					<strong class="text-danger"><?php echo e($message); ?></strong>
				</small>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		</div>


    </div>
    
   
</div>
<div class="modal-footer p-0 pt-3">
    <button type="button" class="btn btn-secondary btn-light" data-bs-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
    <input class="btn btn-primary" type="submit" value="<?php echo e(__('Create')); ?>">
</div>
<?php echo e(Form::close()); ?>

<?php /**PATH C:\wamp64\www\versedbc\resources\views/user/create.blade.php ENDPATH**/ ?>