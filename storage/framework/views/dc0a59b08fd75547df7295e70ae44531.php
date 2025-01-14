<?php $__env->startSection('title', 'Create Category'); ?>
<?php $__env->startSection('description', 'Create a new category.'); ?>
<?php $__env->startSection('keywords', 'create, category'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mx-auto h-screen">
    <h1 class="text-2xl text-white font-bold mt-4 mb-4">Create New Category</h1>
    
    <form action="<?php echo e(route('admin.categories.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-white">Category Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Create Category</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MovieApp/resources/views/admin/categories/create.blade.php ENDPATH**/ ?>