<?php $__env->startSection('title', 'Movies'); ?>
<?php $__env->startSection('description', 'Movies page.'); ?>
<?php $__env->startSection('keywords', 'movies, admin, dashboard'); ?>

<?php $__env->startSection('content'); ?>

<div class="container mx-auto">
    <?php echo $__env->make('layouts.sections.admin._createMovies', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MovieApp/resources/views/admin/movies/create.blade.php ENDPATH**/ ?>