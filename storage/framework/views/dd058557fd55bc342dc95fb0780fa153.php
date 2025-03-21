<?php
    
    $profile = \App\Models\Utility::get_file('uploads/avatar');
    
    $users = \Auth::user();
?>
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Profile Account')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-scripts'); ?>
    <script>
        var scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#useradd-sidenav',
            offset: 300
        })
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card sticky-top" style="top:30px">
                        <div class="list-group list-group-flush" id="useradd-sidenav">
                            
                            <a href="#useradd-3"
                                class="list-group-item list-group-item-action border-0"><?php echo e(__('Change Password')); ?>

                                <div class="float-end"><i class="ti ti-chevron-right"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    

                    <div id="useradd-3" class="card">
                        <div class="card-header">
                            <h5><?php echo e(__('Change Password')); ?></h5>
                            <small class="text-muted"><?php echo e(__('Edit details about your Password')); ?></small>
                        </div>
                        <?php echo e(Form::model($userDetail, ['route' => ['update.password', $userDetail->id], 'method' => 'post'])); ?>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <?php echo e(Form::label('current_password', __('Current Password'), ['class' => 'form-label'])); ?>

                                        <?php echo e(Form::password('current_password', ['class' => 'form-control', 'placeholder' => __('Enter Current Password')])); ?>

                                        <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-current_password" role="alert">
                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <?php echo e(Form::label('new_password', __('New Password'), ['class' => 'form-label'])); ?>

                                        <?php echo e(Form::password('new_password', ['class' => 'form-control', 'placeholder' => __('Enter New Password')])); ?>

                                        <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-new_password" role="alert">
                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <?php echo e(Form::label('confirm_password', __('Re-type New Password'), ['class' => 'form-label'])); ?>

                                        <?php echo e(Form::password('confirm_password', ['class' => 'form-control', 'placeholder' => __('Enter Re-type New Password')])); ?>

                                        <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-confirm_password" role="alert">
                                                <strong class="text-danger"><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <?php echo e(Form::submit(__('Save Change'), ['class' => 'btn btn-print-invoice  btn-primary'])); ?>

                        </div>
                        <?php echo e(Form::close()); ?>




                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\versedbc\resources\views/user/profile.blade.php ENDPATH**/ ?>