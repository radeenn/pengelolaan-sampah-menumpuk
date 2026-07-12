<?php $__env->startSection('title', 'Data Penukaran Produk'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid mb-5">

        <!-- Page Heading -->
        <div class="mb-4">
            <h3 class="admin-title py-2">Data Penukaran Produk</h3>
        </div>

        <?php if($product_exchanges->isEmpty()): ?>
            <div class="text-center my-3 pb-4">
                <img src="<?php echo e(asset('images/product-illustration.png')); ?>" width="300" class="mb-2">
                <h6 class="mt-3 text-dark fw-bold">Data penukaran produk masih kosong</h6>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-dark" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pengguna</th>
                                        <th>Produk</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $product_exchanges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_exchange): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($number++); ?></th>
                                            <td><?php echo e($product_exchange->users->name); ?></td>
                                            <td><?php echo e($product_exchange->products->product_name); ?></td>
                                            <td><?php echo e($product_exchange->quantity); ?></td>
                                            <?php if($product_exchange->status == 'Selesai'): ?>
                                                <td class="text-success"><?php echo e($product_exchange->status); ?></td>        
                                            <?php elseif($product_exchange->status == 'Dalam pengiriman'): ?>
                                                <td class="text-primary"><?php echo e($product_exchange->status); ?></td>
                                            <?php else: ?>
                                                <td class="text-danger"><?php echo e($product_exchange->status); ?></td>
                                            <?php endif; ?>
                                            <td>
                                                <a href="data-penukaran-produk/detail/<?php echo e($product_exchange->id); ?>" class="btn btn-secondary mb-lg-0 mb-2 me-lg-1 me-0">Detail</a>
                                                <form action="data-penukaran-produk/delete/<?php echo e($product_exchange->id); ?>" method="POST" class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/admin/penukaran_produk.blade.php ENDPATH**/ ?>