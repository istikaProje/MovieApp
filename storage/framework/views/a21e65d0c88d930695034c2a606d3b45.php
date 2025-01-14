<?php $__env->startSection('title', 'Edit User'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mx-auto">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Edit User</h2>
        <form action="<?php echo e(route('admin.users.update', $user->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="<?php echo e($user->name); ?>" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="<?php echo e($user->email); ?>" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password Confirmation</label>
                <input type="password" name="password_confirmation"
                placeholder="Confirm Password" id="password" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700">Role</label>
                <select name="role" id="role" class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="customer" <?php echo e($user->role == 'customer' ? 'selected' : ''); ?>>Customer</option>
                    <option value="admin" <?php echo e($user->role == 'admin' ? 'selected' : ''); ?>>Admin</option>
                </select>
            </div>

 
            <div class="mb-4">
                <label for="status" class="block text-gray-700">Status</label>
                <input type="text" name="status" id="status" value="<?php echo e($user->status); ?>" class="w-full p-2 border border-gray-300 rounded-lg">
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Update User</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MovieApp/resources/views/admin/users/edit.blade.php ENDPATH**/ ?>