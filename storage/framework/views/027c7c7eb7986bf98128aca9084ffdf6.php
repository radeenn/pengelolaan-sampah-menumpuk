<?php $__env->startSection('title'); ?> <?php echo e('Edit Profil - '.Auth::user()->name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-10 col-12">
            <h4 class="fw-bold my-4">Profil User</h4>
            <?php if(session('update_success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('update_success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <div class="border rounded p-4">
                <form action="" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <section id="avatar" class="mb-4">
                                <label for="file" class="fw-bold form-label">Avatar</label>
                                <div class="d-flex flex-column">
                                    <?php if(!Auth::user()->avatar): ?>
                                        <img src="<?php echo e(asset('images/avatar-default.png')); ?>" alt="avatar-user" class="avatar-update border rounded">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('avatars/'.Auth::user()->avatar)); ?>" alt="avatar-user" class="avatar-update border rounded">
                                    <?php endif; ?>
                                    <input type="file" name="avatar" id="avatar" class="mt-4">
                                    <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger mt-2">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <p class="mt-2"><small>Gambar berukuran tidak lebih dari 4MB dan berasio 1:1 untuk hasil yang maksimal.</small></p>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-8 col-12">
                            <section id="nama" class="mb-3">
                                <label for="name" class="fw-bold form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" value="<?php echo e(Auth::user()->name); ?>">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger mt-2">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </section>
                            <section id="email" class="mb-3">
                                <label for="email" class="fw-bold form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" value="<?php echo e(Auth::user()->email); ?>" disabled>
                                <p class="mt-2 text-muted"><small>Silahkan hubungi <a href="https://wa.me/08111761179" class="text-green hover-none">admin</a> jika ingin mengubah email Anda.</small></p>
                            </section>
                            <section id="nomor_hp" class="mb-3">
                                <label for="nomorhp" class="fw-bold form-label">Nomor Hp</label>
                                <input type="text" class="form-control" id="nomorhp" name="nomorhp" placeholder="Masukkan nomor hp" value="<?php echo e(Auth::user()->nomorhp); ?>">
                                <?php $__errorArgs = ['nomorhp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger mt-2">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </section>
                            <section id="alamat" class="mb-4">
                                <label for="address" class="fw-bold form-label">Alamat</label>
                                <textarea class="form-control" id="address" name="address" placeholder="Contoh: Jl. Rusa raya No. 71, Kel. Sertajaya, Kec. Cikarang Timur, Kab. Bekasi, Jawa Barat" rows="3"><?php echo e(Auth::user()->address); ?></textarea>
                                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger mt-2">
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </section>
                            <button type="submit" class="btn btn-green w-20 py-2 px-4 fw-bolder rounded exchange">Simpan Perubahan</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/user/update_profil.blade.php ENDPATH**/ ?>