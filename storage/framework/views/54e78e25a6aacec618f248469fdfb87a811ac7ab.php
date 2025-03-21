<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Card Updates')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Card Updates')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('action-btn'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body table-border-style ">
                <h5></h5>
                <div class="table-responsive">
                    <table class="table" id="pc-dt-simple">
                        <thead>
						<th><?php echo e(__('SN')); ?> </th>
                            <th><?php echo e(__('Staff Name')); ?> </th>
							<th><?php echo e(__('Department')); ?> </th>
							<th><?php echo e(__('Requested By')); ?> </th>
							<th><?php echo e(__('Remark')); ?> </th>
							 <th><?php echo e(__('Status')); ?> </th>
                            <?php if(Auth::user()->name == 'Super Admin'): ?>
                            <th width="200px"><?php echo e(__('Action')); ?> </th>
						<?php endif; ?>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $pending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
							<td><?php echo e($loop->index + 1); ?></td>
                                <td><?php echo e(ucfirst($role->old_name)); ?></td>
								<td><?php echo e(ucfirst($role->old_department)); ?></td>
								<td><?php echo e(ucfirst($role->admin_name)); ?></td>
								<td><?php echo e(ucfirst($role->remark)); ?></td>
								<td>
								 <?php if(ucfirst($role->status) ==  1): ?>
                                        <span class="badge btn--warning" style="background: #ff8400;color: #ffffff;font-size: .8rem"><?php echo app('translator')->get('Pending'); ?></span>
                                  <?php elseif(ucfirst($role->status) ==  2): ?>
                                          <span class="badge badge--success" style="background: #00b246;color: #fffff;font-size: .8rem"><?php echo app('translator')->get('Approved'); ?></span>
								<?php else: ?>
									 <span class="badge badge--danger" style="background: #ff0303;color: #ffffff;font-size: .8rem"><?php echo app('translator')->get('Rejected'); ?></span>
                                <?php endif; ?>
                                </td>
								<?php if(Auth::user()->name == 'Super Admin'): ?>
                                <td>
                                   
                                        <div class="action-btn bg-info ms-2">
                                            <a href="#" class="mx-3 btn btn-sm d-inline-flex align-items-center " data-url="<?php echo e(route('showPending',$role->id)); ?>" data-size="lg" data-ajax-popup="true"  data-title="<?php echo e(__('Pending Approval')); ?>" title="<?php echo e(__('Update')); ?>" data-bs-toggle="tooltip" data-bs-placement="top"><span class="text-white"><i class="ti ti-edit text-white"></i></span></a>
                                        </div>

                                </td>
								<?php endif; ?>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\versedbc\resources\views/pending/index.blade.php ENDPATH**/ ?>