<?php $__env->startSection('title', 'Penukaran Produk'); ?>
    
<?php $__env->startSection('content'); ?>
    <section id="main-view" class="py-5 mb-4">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-12 mt-lg-3 mt-0">
                <h2 class="fw-bold mb-md-3 mb-2">Penukaran <span class="text-green">Produk</span></h2>
                <p class="mb-4">Tukarkan point yang Anda miliki dengan berbagai produk dengan 
                    <span class="d-xl-block d-inline">berbagai pilihan produk pemilahan sampah berkualitas</span> 
                    <span class="d-xl-block d-inline">untuk mendukung pemilahan sampah rumah tangga.</span> 
                </p>
                <a href="#list_product" class="btn btn-green py-2 px-4 mb-lg-0 mb-5 rounded">
                    <span class="align-middle">Lihat Produk</span>
                    <span class="fa fa-arrow-down ms-2 align-middle" aria-hidden="true"></span>
                </a>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo e(asset('images/product-illustration.png')); ?>" alt="waste-illustration" class="w-100">
            </div>
        </div>
    </section>

    <section id="flow-view" class="py-4 mb-5">
        <div class="text-center mb-5">
            <h4 class="fw-bold">Alur Penukaran</h4>
            <p class="opacity-75">Alur penukaran point menjadi produk mulai dari awal proses hingga akhir</p>
        </div>
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-4 col-12 mb-md-0 mb-4 text-center">
                <img src="<?php echo e(asset('images/number-one.svg')); ?>" class="mb-3">
                <h5 class="fw-bold">Pilih produk</h5>
                <p class="opacity-75">Pilih produk-produk yang tersedia 
                    <span class="d-xl-block d-inline">sesuai keinginan Anda untuk</span> 
                    <span class="d-xl-block d-inline">memulai aksi pemilahan sampah</span>
                </p>
            </div>
            <div class="col-lg-4 col-12 mb-md-0 mb-4 text-center">
                <img src="<?php echo e(asset('images/number-two.svg')); ?>" class="mb-3">
                <h5 class="fw-bold">Lengkapi form</h5>
                <p class="opacity-75">Lengkapi data yang diperlukan seperti   
                    <span class="d-xl-block d-inline">kode pos, jumlah dan catatan jika</span> 
                    <span class="d-xl-block d-inline">dibutukan untuk melakukan penukaran</span>
                </p>
            </div>
            <div class="col-lg-4 col-12 text-center">
                <img src="<?php echo e(asset('images/number-three.svg')); ?>" class="mb-3">
                <h5 class="fw-bold">Pesanan diproses</h5>
                <p class="opacity-75">Produk yang Anda pilih akan langsung
                    <span class="d-xl-block d-inline">kami proses langsung dan dilakukan</span> 
                    <span class="d-xl-block d-inline">pengiriman ke lokasi Anda</span>
                </p>
            </div>
        </div>
    </section>

    <section id="list_product" class="pt-5 pb-4 mb-2">
        <div class="mb-5 pt-5">
            <div class="row justify-content-between mb-5">
                <div class="col-lg-4 col-12 mb-lg-0 mb-4">
                    <div class="sticky-top">
                        <h4 class="fw-bold">Pilihan produk</h4>
                        <p>Produk pemilahan sampah yang bisa ditukarkan dengan point hasil akumulasi penukaran sampah</p>
                        <?php if(auth()->guard()->check()): ?>
                            <div class="card rounded">
                                <div class="card-body d-flex">
                                    <p class="mb-0">WastePoin</p>
                                    <div class="ms-auto">
                                        <img src="<?php echo e(asset('images/points.svg')); ?>"> 
                                        <span class="align-middle">
                                            <?php if(!Auth::user()->waste_poins == null): ?> <?php echo e(Auth::user()->waste_poins); ?> <?php else: ?> 0 <?php endif; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php echo e(Route('penukaran-sampah')); ?>" class="btn btn-green w-100">Dapatkan poin lagi</a>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="card rounded">
                                <p class="mb-0 py-3 text-center">Sepertinya kamu belum masuk menggunakan akun Waste Point, Yuk login dulu!</p>
                                <div class="card-footer">
                                    <a href="<?php echo e(Route('login')); ?>" class="btn btn-green w-100">Login sekarang</a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <form action="<?php echo e(Route('penukaran-produk.search')); ?>" method="get" class="d-flex">
                        <div class="input-group mb-2 shadow-sm rounded">
                            <input type="search" class="form-control" placeholder="Cari nama produk.." name="keyword" value="<?php echo e(request('keyword')); ?>">
                            <button type="submit" class="btn btn-green text-white fw-bold">Cari</button>
                        </div>
                    </form>
                    <?php if($products->isEmpty()): ?>
                        <div class="text-center my-5">
                            <h5 class="fw-bold py-4">Saat ini produk belum tersedia</h5>
                        </div>
                    <?php else: ?>
                        <div class="row justify-content-between mt-4">
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="card rounded">
                                        <img src="/products/<?php echo e($product->image); ?>" class="card-img-top">
                                        <div class="card-body">
                                            <h6 class="card-title fw-bold"><?php echo e($product->product_name); ?></h6>
                                            <p class="card-text">
                                                <img src="<?php echo e(asset('images/points.svg')); ?>" alt="">
                                                <span class="align-middle"><?php echo e($product->price_point); ?></span>
                                            </p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item btn-gray">
                                                <?php if(Route::is('penukaran-produk.search')): ?>
                                                    <a href="<?php echo e($product->slug); ?>" class="w-100 btn fw-bold">Tukarkan</a>
                                                <?php else: ?>
                                                    <a href="penukaran-produk/<?php echo e($product->slug); ?>" class="w-100 btn fw-bold">Tukarkan</a>
                                                <?php endif; ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/penukaran/produk.blade.php ENDPATH**/ ?>