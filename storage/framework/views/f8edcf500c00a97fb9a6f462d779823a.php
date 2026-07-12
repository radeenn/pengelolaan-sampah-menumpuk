<?php $__env->startSection('title', 'Dashboard'); ?>
    
<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="admin-title mb-2 mb-sm-0">Data Produk</h3>
            <a href="data-produk-pemilahan/create" class="d-sm-block d-sm-inline-block btn btn-sm btn-green shadow-sm py-2 px-3 rounded">
                Tambah Produk <i class="bi bi-file-plus"></i>
            </a>
        </div>

        <?php if(session('create_success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('create_success')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        <?php endif; ?>

        <?php if($products->isEmpty()): ?>
            <div class="text-center my-3 pb-4">
                <img src="<?php echo e(asset('images/product-illustration.png')); ?>" width="350" class="mb-2">
                <h6 class="mt-3 text-dark fw-bold">Belum ada produk yang ditambahkan</h6>
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
                                            <th>Nama Produk</th>
                                            <th>Jumlah Poin</th>
                                            <th>Stok Tersedia</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($number++); ?></td>
                                            <td><?php echo e($product->product_name); ?></td>
                                            <td><?php echo e($product->price_point); ?></td>
                                            <td><?php echo e($product->stock); ?></td>
                                            <td>
                                                <a href="data-produk-pemilahan/detail/<?php echo e($product->id); ?>" class="btn btn-secondary mb-2 mb-lg-0">Detail</a>
                                                <form action="data-produk-pemilahan/delete/<?php echo e($product->id); ?>" class="d-inline" method="POST">
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
            </div>
        <?php endif; ?>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/admin/produk_pemilahan.blade.php ENDPATH**/ ?>