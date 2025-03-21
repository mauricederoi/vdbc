<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Activity Log')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Activity Log')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('action-btn'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body table-border-style ">
               
				<div class="d-flex align-items-center justify-content-between">
                    <ul class="list-unstyled">
                        
                    </ul>

                    
                    <a href="<?php echo e(route('activitylog.export')); ?>" class="btn btn-primary export-btn" style="margin-bottom:30px">
						Export Activity Log
					</a>
                </div>
                <div class="table-responsive">
                    <table class="table" id="pc-dt-simple">
                        <thead>
						<th><?php echo e(__('SN')); ?> </th>
                            <th><?php echo e(__('Action By')); ?> </th>
							<th><?php echo e(__('Remark')); ?> </th>
							<th><?php echo e(__('Created_at')); ?> </th>
                            
                            
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $log; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
							<td><?php echo e($loop->index + 1); ?></td>
                                <td><?php echo e(ucfirst($role->initiated_by)); ?></td>
                                <td><?php echo e(ucfirst($role->remark)); ?></td>
								<td><?php echo e(ucfirst($role->created_at)); ?></td>
                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-page'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\versedbc\resources\views/settings/activity_log.blade.php ENDPATH**/ ?>