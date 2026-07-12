<?php $__env->startSection('title', 'Dashboard'); ?>
    
<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid mb-5">

        <!-- Page Heading -->
        <div class="mb-4">
            <h3 class="admin-title py-2">Dashboard</h3>
        </div>

        <!-- Content Row -->
        <div class="row waste-admin">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">Total Berat Sampah</div>
                                <h4 class="mb-0 font-weight-bold text-gray-800"><?php echo e($weight_total); ?> <span class="fs-6">Kg</span></h4>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-trash3 fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-2">Total Jumlah Produk</div>
                                <h4 class="mb-0 font-weight-bold text-gray-800"><?php echo e($products); ?> <span class="fs-6">Item</span></h4>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-basket2-fill fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-2">Total Pengguna</div>
                                <h4 class="mb-0 font-weight-bold text-gray-800"><?php echo e($users); ?> <span class="fs-6">User</span></h4>
                            </div>
                            <div class="col-auto">
                                <i class="bi bi-person-lines-fill fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Berdasarkan Kategori -->
            <div class="col-12 waste-admin">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 bg-white">
                        <h6 class="m-0 fw-bold text-center text-green">Berat Sampah Berdasarkan Jenis</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="container">
                            <div class="row align-items-center text-center mb-auto">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <img src="<?php echo e(asset('images/waste-kertas.svg')); ?>" class="admin-sampah">
                                    <h6 class="card-title mt-3"><span class="fw-bold fs-5"><?php echo e($kertas); ?></span> Kg</h6>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <img src="<?php echo e(asset('images/waste-plastik.svg')); ?>" class="admin-sampah">
                                    <h6 class="card-title mt-3"><span class="fw-bold fs-5"><?php echo e($plastik); ?></span> Kg</h6>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <img src="<?php echo e(asset('images/waste-metal.svg')); ?>" class="admin-sampah">
                                    <h6 class="card-title mt-3"><span class="fw-bold fs-5"><?php echo e($kaleng); ?></span> Kg</h6>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <img src="<?php echo e(asset('images/waste-jelantah.svg')); ?>" class="admin-sampah">
                                    <h6 class="card-title mt-3"><span class="fw-bold fs-5"><?php echo e($jelantah); ?></span> Liter</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Berdasarkan Kategori -->
            <div class="col-12 waste-admin">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 bg-white">
                        <h6 class="m-0 fw-bold text-center text-green">Perlu Pembaruan Status</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <ul class="list-group list-group-flush fw-bold">
                            <li class="list-group-item d-flex align-items-center">
                                Penukaran Sampah <?php if($update_waste < 1): ?> <span class="text-green ps-1">(0)</span> <?php else: ?> <span class="text-danger ps-1">(<?php echo e($update_waste); ?>)</span> <?php endif; ?>
                                <a href="<?php echo e(Route('admin.data-penukaran-sampah')); ?>" class="btn btn-green ms-auto">Lihat Data</a>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                Penukaran Produk <?php if($update_product_exchange < 1): ?> <span class="text-green ps-1">(0)</span> <?php else: ?> <span class="text-danger ps-1">(<?php echo e($update_product_exchange); ?>)</span> <?php endif; ?>
                                <a href="<?php echo e(Route('admin.data-penukaran-produk')); ?>" class="btn btn-green ms-auto">Lihat Data</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>