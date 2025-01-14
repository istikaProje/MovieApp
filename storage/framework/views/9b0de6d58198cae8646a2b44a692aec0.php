<?php $__env->startSection('title', 'Anasayfa'); ?>
<?php $__env->startSection('description', 'test.'); ?>
<?php $__env->startSection('keywords', 'test, test, test'); ?>
<?php $__env->startSection('content'); ?>

    <div class="flex w-full bg-gray-900">
        <div class="md:w-64"> <!-- Sidebar genişliği -->
            <?php echo $__env->make('layouts.sections.admin._adminSidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="container flex-grow justify-center">
            <?php echo $__env->make('layouts.sections.admin._adminCategories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MovieApp\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>