<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title', 'MovieWatch - En İyi Filmleri Online İzle'); ?></title>
          <!-- Açıklama -->
        <meta name="description" content= "<?php echo $__env->yieldContent('description', 'MovieWatch ile en yeni filmleri, klasik başyapıtları ve popüler dizileri HD kalitede ücretsiz olarak izleyin. Film severler için tasarlanmış mükemmel bir platform.'); ?>">
        <!-- Anahtar Kelimeler -->
        <meta name="keywords" content="<?php echo $__env->yieldContent('keywords', 'film izle, film izleme sitesi, film izleme platformu, film izleme sitesi, film izleme platformu, film izleme sitesi, film izleme platformu, film izleme sitesi, film izleme platformu'); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />        <!-- Styles / Scripts -->
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

        
        <?php echo $__env->yieldPushContent('styles'); ?>

    </head>
    <link rel="stylesheet" href="<?php echo e(asset('Icons/style.css')); ?>">


    <body class="bg-gradient-to-b from-gray-800 to-gray-900  ">

        
        <?php echo $__env->make('layouts.adminHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts.adminFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        
        <?php echo $__env->yieldPushContent('scripts'); ?>

    </body>
</html>
<?php /**PATH C:\wamp64\www\MovieApp\resources\views/layouts/adminMaster.blade.php ENDPATH**/ ?>