<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('NFC History')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('NFC History')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-sm-12 col-lg-12 col-xl-12 col-md-12">
       
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body table-border-style ">
                <h5></h5>
                <div class="table-responsive">
                    <table class="table" id="">
                        <thead>
                            <th>#</th>
                            <th><?php echo e(__('Business Card')); ?> </th>
                           
							<th><?php echo e(__('OS Name')); ?> </th>
                            <th><?php echo e(__('Browser')); ?> </th>
							<th><?php echo e(__('Date')); ?> </th>
                            
                           
                          
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $userlogdetail->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userlogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <tr>
                                <td><?php echo e($loop->index + 1); ?></td>
                                <td><?php echo e($userlogs->url); ?></td>
                               
                                <td><?php echo e($userlogs->platform); ?></td>
                                <td><?php echo e($userlogs->browser); ?></td>
                                <td><?php echo e($userlogs->created_at); ?></td>
                                
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\versedbc\resources\views/tap_history/index.blade.php ENDPATH**/ ?>