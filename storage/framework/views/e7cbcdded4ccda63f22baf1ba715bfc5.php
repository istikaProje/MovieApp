<?php $__env->startSection('title', 'Anasayfa'); ?>
<?php $__env->startSection('description', 'test.'); ?>
<?php $__env->startSection('keywords', 'test, test, test'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto">
    <h1 class="text-2xl font-bold"><?php echo e($category->name); ?></h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
        <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-xl font-semibold"><?php echo e($movie->title); ?></h2>
            <p><?php echo e($movie->description); ?></p>
            <!-- Add more movie details as needed -->
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MovieApp/resources/views/category/show.blade.php ENDPATH**/ ?>