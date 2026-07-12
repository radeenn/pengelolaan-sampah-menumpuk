<?php $__env->startSection('title', 'Riwayat Konversi Poin'); ?>
    
<?php $__env->startSection('content'); ?>
    <?php if($conversions->isEmpty()): ?>
        <div class="text-center mt-5">
            <img src="<?php echo e(asset('images/coins.jpeg')); ?>" width="280" class="mb-2">
            <h6 class="mt-3 mb-5 fw-bold">Ooops, belum ada riwayat konversi poin pada akun Anda...</h6>
            <a href="<?php echo e(Route('konversi-poin')); ?>" class="btn btn-yellow">Konversi poin sekarang</a>
        </div>
    <?php else: ?>
        <div class="my-4">
            <h4 class="fw-bold mb-4">Riwayat Konversi Poin</h4>
        </div>
        <div class="table-responsive-md">
            <table class="table align-middle table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Waktu Konversi</th>
                        <th scope="col">WastePoin</th>
                        <th scope="col">Bank</th>
                        <th scope="col">Hasil Konversi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $conversions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                        <tr>
                            <td><?php echo e($conversion->created_at); ?></td>
                            <td><?php echo e($conversion->total_points); ?></td>
                            <td><?php echo e($conversion->bank); ?></td>
                            <td>Rp<?php echo e($conversion->conversion_result); ?></td>
                            <td>
                                <a href="riwayat-konversi-poin/detail/<?php echo e($conversion->id); ?>" class="btn-link">Lihat detail</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="pagination mt-3 text-center justify-content-end">
            <?php echo e($conversions->links()); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/user/riwayat_konversi_poin.blade.php ENDPATH**/ ?>