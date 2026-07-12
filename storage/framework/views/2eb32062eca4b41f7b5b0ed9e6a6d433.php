<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Local CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- Page Icon -->
        <link rel="icon" href="<?php echo e(asset('images/icon-logo.png')); ?>" type="image/icon type">

        <title><?php echo $__env->yieldContent('title'); ?> | Waste Point</title>
    </head>
    <body class="d-flex flex-column min-vh-100">
        <?php echo $__env->make('components.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <div class="container my-5 py-md-5 py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <?php echo $__env->make('components.bottombar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/layouts/user.blade.php ENDPATH**/ ?>