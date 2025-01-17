<?php $__env->startSection('title', 'Users'); ?>
<?php $__env->startSection('description', 'test.'); ?>
<?php $__env->startSection('keywords', 'test, test, test'); ?>
<?php $__env->startSection('content'); ?>


                <div class="container mx-auto">
                  
                        <div class="h-screen">
                            <?php echo $__env->make('layouts.sections.admin._adminUsers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MovieApp\resources\views/admin/users.blade.php ENDPATH**/ ?>