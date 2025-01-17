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


        <!-- Styles / Scripts -->
            <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

        
        <?php echo $__env->yieldPushContent('styles'); ?>

    </head>
    <body class="bg-primary  ">

        
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <?php echo $__env->yieldPushContent('scripts'); ?>

    </body>
</html>
<?php /**PATH /Users/ahmetseker/Desktop/movieproject/MovieApp/resources/views/layouts/master.blade.php ENDPATH**/ ?>