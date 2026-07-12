<?php $__env->startSection('title', 'Detail Konversi Poin'); ?>
    
<?php $__env->startSection('content'); ?>
    <div class="p-md-3 p-auto my-4">
        <h3 class="fw-bold mb-5 text-center">Konversi Poin Berhasil</h3>
        <div class="text-center mb-5">
            <img src="<?php echo e(asset('images/success-convert.svg')); ?>" class="success">
        </div> 
        <div class="p-3 mb-5">
            <hr class="my-3 hr-dashboard">
            <div class="container">
                <div class="d-md-flex d-block justify-content-between">
                    <p class="opacity-75 mb-3">Waktu Konversi</p>
                    <p class="mb-md-2 mb-4"><?php echo e($conversion->created_at); ?></p>
                </div>
                <div class="d-md-flex d-block justify-content-between">
                    <p class="opacity-75 mb-3">Sisa WastePoin</p>
                    <p class="mb-md-2 mb-4">
                        <img src="<?php echo e(asset('images/points.svg')); ?>">
                        <span class="align-middle">
                            <?php echo e(Auth::user()->waste_poins); ?>

                        </span>
                    </p>
                </div>
                <div class="d-md-flex d-block justify-content-between">
                    <p class="opacity-75 mb-3">Jumlah Ditukar</p>
                    <p class="mb-md-2 mb-4">
                        <img src="<?php echo e(asset('images/points.svg')); ?>">
                        <span class="align-middle">
                            - <?php echo e($conversion->total_points); ?>

                        </span>
                    </p>
                </div>
                <div class="d-md-flex d-block justify-content-between">
                    <p class="opacity-75 mb-3">Bank</p>
                    <p class="mb-md-2 mb-4"><?php echo e($conversion->bank); ?></p>
                </div>
                <div class="d-md-flex d-block justify-content-between">
                    <p class="opacity-75 mb-3">Nomor Rekening</p>
                    <p class="mb-md-2 mb-4"><?php echo e($conversion->account_number); ?></p>
                </div>
                <hr class="mt-0 hr-dashboard">
                <div class="d-md-flex d-block justify-content-between">
                    <p class="opacity-75 mb-3">Total Hasil Konversi</p>
                    <p class="mb-md-2 mb-4">Rp<?php echo e($conversion->conversion_result); ?></p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="<?php echo e(Route('konversi-poin')); ?>" class="btn btn-yellow rounded px-3 me-md-2 me-0 d-md-inline d-block">Konversi poin lagi</a>
            <button class="btn btn-green rounded px-3 mt-md-0 mt-2 button-full" onclick="window.print()">Cetak detail konversi</button>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/user/detail_konversi_poin.blade.php ENDPATH**/ ?>