<?php $__env->startSection('title', 'My Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <section id="main-profile" class="mb-5">
        <div class="jumbotron bg-green rounded p-4 mt-4">
            <h2 class="fw-bold mb-2">Halo, <?php echo e(Auth::user()->name); ?> !</h2>
            <div class="d-md-flex align-items-center justify-content-between">
                <p class="mb-md-0 mb-2">Tukarkan sampahmu hanya dari rumah dan dapatkan poin dengan cepat.</p>
                <a href="<?php echo e(Route('riwayat-konversi-poin')); ?>" class="d-md-block d-md-inline-block btn btn-yellow py-2 px-3 rounded">Riwayat konversi poin</a>
            </div>
            <hr class="mt-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-start align-items-center">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0 fw-bold">Total WastePoin</p>
                                <img src="<?php echo e(asset('images/points.svg')); ?>" alt="point-logo">
                            </div>
                            <hr class="mb-3">
                            <h3 class="text-yellow fw-bold"><?php echo e(Auth::user()->waste_poins); ?> <span class="text-dark opacity-75 fs-6">Poin</span></h3> 
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="mb-0 fw-bold">Berat sampah ditukar</p>
                                <img src="<?php echo e(asset('images/trash.svg')); ?>" alt="trash-logo">
                            </div>
                            <hr class="mb-3">
                            <h3 class="text-green fw-bold"><?php echo e($weight); ?> <span class="text-dark opacity-75 fs-6">Kilogram</span></h3> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="waste-exchange" class="mb-5">
        <h4 class="fw-bold mb-4"><i class="bi bi-trash3-fill text-green me-2"></i>Penukaran Sampah</h4>
        <?php if($wastes->isEmpty()): ?>
            <p class="py-3 mb-0"><em>Belum ada riwayat penukaran sampah</em></p>
        <?php else: ?>
            <div class="card border rounded p-4">
                <?php $__currentLoopData = $wastes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $waste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mb-3">
                        <?php if($waste->status == 'Selesai'): ?>
                            <small class="text-success fw-bold py-2 px-3 rounded" style="background-color: rgb(25, 135, 84, 0.15)"><?php echo e($waste->status); ?></small>        
                        <?php elseif($waste->status == 'Dalam penjemputan'): ?>
                            <small class="text-primary fw-bold py-2 px-3 rounded" style="background-color: rgb(223, 230, 241)"><?php echo e($waste->status); ?></small>
                        <?php else: ?>
                            <small class="text-danger fw-bold py-2 px-3 rounded" style="background-color: rgb(220, 53, 69, 0.15)"><?php echo e($waste->status); ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="container bg-gray px-4 py-3 rounded">
                        <div class="d-md-flex d-block justify-content-between align-items-end">
                            <div class="mb-2">
                                <small><?php echo e($waste->created_at); ?></small>
                                <h6 class="mt-2">
                                    <span class="fw-bold"><?php echo e($waste->weight); ?></span> Kg 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                    </svg>
                                    <span class="fw-bold"><?php echo e($waste->category); ?></span>
                                </h6>
                                <?php if($waste->status == 'Selesai'): ?>
                                    <div class="mt-2">Total WastePoin 
                                        <img src="<?php echo e(asset('images/points.svg')); ?>" class="ms-2">
                                        <span class="fw-bold align-middle">
                                            <?php if($waste->category == $kategori[0]): ?>
                                                <?php echo e($waste->weight * 5); ?>

                                            <?php elseif($waste->category == $kategori[1]): ?>
                                                <?php echo e($waste->weight * 8); ?>

                                            <?php elseif($waste->category == $kategori[2]): ?>
                                                <?php echo e($waste->weight * 10); ?>

                                            <?php elseif($waste->category == $kategori[3]): ?>
                                                <?php echo e($waste->weight * 10); ?>

                                            <?php endif; ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <span>
                                <?php if($waste->status != 'Selesai'): ?>
                                    <a href="https://wa.me/08111761179" class="btn-link me-3">Hubungin admin</a>
                                    <a href="user/penukaran-sampah/detail/<?php echo e($waste->id); ?>" class="btn btn-green rounded px-4 mt-sm-0 mt-2">Lihat Detail</a>
                                <?php elseif($waste->status == 'Selesai' && !$waste->rating): ?>
                                    <a href="user/penukaran-sampah/detail/<?php echo e($waste->id); ?>" class="btn btn-green rounded px-4 mt-sm-0 mt-2">Beri ulasan</a>
                                <?php else: ?>
                                    <a href="user/penukaran-sampah/detail/<?php echo e($waste->id); ?>" class="btn btn-green rounded px-4 mt-sm-0 mt-2">Lihat Detail</a>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    <?php if($wastes->count() > 1): ?>
                        <hr class="my-4"> 
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <div class="pagination mt-3 text-center justify-content-end">
                    <?php echo e($wastes->links()); ?>

                </div>
            </div>
        <?php endif; ?>
    </section>

    <section id="waste-exchange">
        <h4 class="fw-bold mb-4"><i class="bi bi-bag-check-fill text-green me-2"></i>Penukaran Produk Pemilahan Sampah</h4>
        <?php if($product_exchanges->isEmpty()): ?>
            <p class="py-3 mb-0"><em>Belum ada riwayat penukaran produk</em></p>
        <?php else: ?>
            <div class="card border rounded p-4">
                <?php $__currentLoopData = $product_exchanges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_exchange): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mb-3">
                        <?php if($product_exchange->status == 'Selesai'): ?>
                            <small class="text-success fw-bold py-2 px-3 rounded" style="background-color: rgb(25, 135, 84, 0.15)"><?php echo e($product_exchange->status); ?></small>        
                        <?php elseif($product_exchange->status == 'Dalam pengiriman'): ?>
                            <small class="text-primary fw-bold py-2 px-3 rounded" style="background-color: rgb(223, 230, 241)"><?php echo e($product_exchange->status); ?></small>
                        <?php else: ?>
                            <small class="text-danger fw-bold py-2 px-3 rounded" style="background-color: rgb(220,53,69, 0.15)"><?php echo e($product_exchange->status); ?></small>
                        <?php endif; ?>
                    </div>
                    <div class="container bg-gray px-4 py-3 rounded">
                        <div class="d-md-flex d-block justify-content-between align-items-end">
                            <div class="mb-2">
                                <small><?php echo e($product_exchange->created_at); ?></small>
                                <h6 class="mt-3">
                                    <span class="fw-bold"><?php echo e($product_exchange->quantity); ?></span> Pcs
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                    </svg>
                                    <span class="fw-bold"><?php echo e($product_exchange->products->product_name); ?></span>
                                </h6>
                                <div class="mt-3"> 
                                    <img src="<?php echo e(asset('images/points.svg')); ?>">
                                    <span class="fw-bold align-middle"><?php echo e($product_exchange->total_points); ?></span>
                                </div>
                            </div>
                            <span>
                                <?php if($product_exchange->status != 'Selesai'): ?>
                                    <a href="https://wa.me/08111761179" class="btn-link me-3">Hubungin admin</a>
                                    <a href="user/penukaran-produk/detail/<?php echo e($product_exchange->id); ?>" class="btn btn-green rounded px-4 mt-sm-0 mt-2">Lihat Detail</a>
                                <?php elseif($product_exchange->status == 'Selesai' && !$product_exchange->rating): ?>
                                    <a href="user/penukaran-produk/detail/<?php echo e($product_exchange->id); ?>" class="btn btn-green rounded px-4 mt-sm-0 mt-2">Beri ulasan</a>
                                <?php else: ?>
                                    <a href="user/penukaran-produk/detail/<?php echo e($product_exchange->id); ?>" class="btn btn-green rounded px-4 mt-sm-0 mt-2">Lihat Detail</a>
                                <?php endif; ?>
                            </span>
                        </div>
                    </div>
                    <?php if($product_exchanges->count() > 1): ?>
                        <hr class="my-4"> 
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                <div class="pagination mt-3 text-center justify-content-end">
                    <?php echo e($product_exchanges->links()); ?>

                </div>
            </div>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/user/dashboarduser.blade.php ENDPATH**/ ?>