<?php $__env->startSection('title', 'Yang Dicari Gaada'); ?>

<?php $__env->startSection('content'); ?>
    <section id="not-found">
        <div class="my-5">
            <div class="row justify-content-center">
                <div class="col-md-4 col-12">
                    <img src="<?php echo e(asset('images/404.svg')); ?>" class="w-100">
                </div>
                <h4 class="mt-4 mb-5 fw-bold text-center">Gaada apa-apa disini</h4>
                <div class="col-md-4 col-12">
                    <a href="/" class="btn btn-green rounded w-100 fw-bold">Kembali ke Dashboard</a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/not-found.blade.php ENDPATH**/ ?>