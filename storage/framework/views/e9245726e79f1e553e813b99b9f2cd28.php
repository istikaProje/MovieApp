<?php $__env->startSection('title', 'Movies'); ?>
<?php $__env->startSection('description', 'Movies page.'); ?>
<?php $__env->startSection('keywords', 'movies, admin, dashboard'); ?>

<?php $__env->startSection('content'); ?>

<div class="container h-screen mx-auto">
    <?php if(session('success')): ?>
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>
    <div class="flex justify-end mb-4">
        <a href="<?php echo e(route('admin.movies.create')); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add Movie
        </a>
    </div>
    <div class="overflow-hidden shadow md:rounded-lg">
      <table class="min-w-full divide-y divide-gray-300">
          <thead class="bg-gray-50">
              <tr>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Title</th>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Description</th>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Vote Average</th>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">YouTube Link</th>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Image</th>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Video</th>
                  <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Release Date</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Actions</th>
              </tr>
          </thead>
          <tbody>
              <?php $__empty_1 = true; $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <tr class="odd:bg-white even:bg-slate-50">
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                      <?php echo e($movie->title); ?>

                  </td>
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                      <?php echo e($movie->description); ?>

                  </td>
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                      <?php echo e($movie->vote_average); ?>

                  </td>
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                      <a href="<?php echo e($movie->youtube_link); ?>" target="_blank" class="text-blue-600 hover:text-blue-900"><?php echo e($movie->youtube_link); ?></a>
                  </td>
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                    <?php if($movie->image): ?>
                      <img src="<?php echo e(asset('storage/' . $movie->image)); ?>" alt="<?php echo e($movie->title); ?>" class="w-16 h-16 object-cover">
                    <?php endif; ?>
                  </td>
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                    <?php if($movie->video): ?>
                      <video width="320" height="240" controls>
                          <source src="<?php echo e(asset('storage/' . $movie->video)); ?>" type="video/mp4">
                          Your browser does not support the video tag.
                      </video>
                    <?php endif; ?>
                  </td>
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                      <?php echo e($movie->release_date); ?>

                  </td>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-500 sm:pl-6">
                      <a href="<?php echo e(route('admin.movies.edit', $movie->id)); ?>" class="text-indigo-600 mr-2 hover:text-indigo-900">Edit</a>
                      <form action="<?php echo e(route('admin.movies.destroy', $movie->id)); ?>" method="POST" class="inline-block">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('DELETE'); ?>
                          <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                      </form>
                  </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr>
                  <td colspan="8" class="py-4 pl-4 pr-3 text-sm font-medium text-gray-500 text-center">No movies found.</td>
              </tr>
              <?php endif; ?>
          </tbody>
      </table>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MovieApp\resources\views/layouts/sections/admin/_adminMovies.blade.php ENDPATH**/ ?>