


<!-- ====== Movie Section Start -->
<section class="flex w-full mt-4 items-start">
    <div class="w-full px-4">
        <div class="flex flex-wrap px- items-end justify-between sm:flex-nowrap sm:space-x-4">
            <h2 class="mb-4 text-2xl font-semibold text-white">
                Movie Add
            </h2>
        </div>
        <form  action="<?php echo e(route('admin.movies.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="flex w-full md:space-x-4 flex-col md:flex-row">
                <div class="mb-8 rounded-lg border border-stroke bg-white w-full">
                    <h3 class="border-b border-stroke py-4 px-7 text-base font-medium text-black">
                        Movie Information
                    </h3>
                    <div class="p-7">
                        <div class="flex flex-wrap">
                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label for="title" class="mb-[10px] block text-base font-medium text-black">
                                        Movie Title
                                    </label>
                                    <div class="relative">
                                        <input type="text" type="text" name="title" id="title" value="<?php echo e(old('title')); ?>"  placeholder="Movie Title"
                                            class="h-[46px] w-full rounded-md border border-[#E0E0E0] pl-12 pr-5 text-base text-black outline-none focus:border-primary" />

                                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <span class="absolute left-[18px] top-1/2 -translate-y-1/2">
                                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path fill="#637381"
                                                    d="M19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM16.09,4l-4,4H7.91l4-4ZM4,5A1,1,0,0,1,5,4H9.09l-4,4H4ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V10H20ZM20,8H14.91l4-4H19a1,1,0,0,1,1,1Z">
                                                </path>
                                            </svg>
                                        </span>
                                        <?php $__errorArgs = ['movie_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label  for="vote_average" class="mb-[10px] block text-base font-medium text-black">
                                        Vote Average
                                    </label>
                                    <div class="relative">
                                        <input type="number" name="vote_average" id="vote_average" min="1" max="5"
                                            class="h-[46px] w-full rounded-md border border-[#E0E0E0] pl-12 pr-5 text-base text-black outline-none focus:border-primary" />
                                        <span class="absolute left-[18px] top-1/2 -translate-y-1/2">
                                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                                xml:space="preserve" id="star" x="0" y="0" version="1.1"
                                                viewBox="0 0 29 29">
                                                <path fill="#637381"
                                                    d="m15.397 4.687 2.579 5.225a1 1 0 0 0 .753.547l5.766.838a1 1 0 0 1 .554 1.706l-4.173 4.067c-.236.23-.343.561-.288.885l.985 5.743a1 1 0 0 1-1.451 1.054l-5.158-2.712a1.002 1.002 0 0 0-.931 0l-5.158 2.712a1 1 0 0 1-1.451-1.054l.985-5.743a.999.999 0 0 0-.288-.885l-4.173-4.067a1 1 0 0 1 .554-1.706l5.766-.838a1 1 0 0 0 .753-.547L13.6 4.687c.37-.743 1.43-.743 1.797 0z">
                                                </path>
                                            </svg>
                                        </span>
                                        <?php $__errorArgs = ['vote_average'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label for="youtube_link" class="mb-[10px] block text-base font-medium text-black">
                                        YouTube Fragman Link
                                    </label>
                                    <div class="relative">
                                        <input type="url" name="youtube_link" id="youtube_link" placeholder="https://www.youtube.com/watch?v=example"
                                            class="h-[46px] w-full rounded-md border border-[#E0E0E0] pl-12 pr-5 text-base text-black outline-none focus:border-primary" />
                                        <span class="absolute left-[18px] top-1/2 -translate-y-1/2">
                                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path fill="#637381"
                                                    d="M19.615,3.184c-0.203-0.76-0.797-1.354-1.557-1.557C16.5,1.25,12,1.25,12,1.25s-4.5,0-6.058,0.377c-0.76,0.203-1.354,0.797-1.557,1.557C4,4.742,4,8.5,4,8.5s0,3.758,0.385,5.316c0.203,0.76,0.797,1.354,1.557,1.557C7.5,15.75,12,15.75,12,15.75s4.5,0,6.058-0.377c0.76-0.203,1.354-0.797,1.557-1.557C20,12.258,20,8.5,20,8.5S20,4.742,19.615,3.184z M9.75,11.5V5.5l5.25,3L9.75,11.5z">
                                                </path>
                                            </svg>
                                        </span>
                                        <?php $__errorArgs = ['youtube_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label for="description" class="mb-[10px] block text-base font-medium text-black">
                                        Description
                                    </label>
                                    <textarea name="description" id="description"  rows="4"
                                        class="w-full rounded-md border border-[#E0E0E0] p-3 text-base text-black outline-none focus:border-primary"><?php echo e(old('description')); ?></textarea>
                                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label for="image" class="mb-[10px] block text-base font-medium text-black">
                                        Movie Image
                                    </label>
                                    <input type="file" name="image" id="image"
                                        class="w-full rounded-md border border-[#E0E0E0] p-3 text-base text-black outline-none focus:border-primary" />
                                    <?php $__errorArgs = ['movie_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label for="video" class="mb-[10px] block text-base font-medium text-black">
                                        Movie Video
                                    </label>
                                    <input type="file" name="video" id="video"
                                        class="w-full rounded-md border border-[#E0E0E0] p-3 text-base text-black outline-none focus:border-primary" />
                                    <?php $__errorArgs = ['movie_video'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label class="mb-[10px] block text-base font-medium text-black">
                                        Categories
                                    </label>
                                    
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="flex items-center mb-2">
                                            <input type="checkbox" id="category_<?php echo e($category->id); ?>" name="categories[]" value="<?php echo e($category->id); ?>"
                                                class="mr-2">
                                            <label for="category_<?php echo e($category->id); ?>" class="text-base text-black"><?php echo e($category->name); ?></label>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__errorArgs = ['categories'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Add Movie</button>
        </form>
    </div>
</section>
<!-- ====== Movie Section End -->


<?php /**PATH /var/www/MovieApp/resources/views/layouts/sections/admin/_createMovies.blade.php ENDPATH**/ ?>