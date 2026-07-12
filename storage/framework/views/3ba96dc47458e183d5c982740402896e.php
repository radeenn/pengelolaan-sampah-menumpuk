<?php $__env->startSection('title', 'Register'); ?>
    
<?php $__env->startSection('content'); ?>
    <div class="card auth mx-auto p-3 rounded shadow-sm">
        <div class="card-body">
            <h2 class="fw-bold">Register</h2>
            <p class="mb-4">Silahkan mendaftar akun Waste Point untuk memulai aktivitas Anda.</p>
            <form action="<?php echo e(route('register')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bolder">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" autofocus value="<?php echo e(old('email')); ?>">
                    <?php $__errorArgs = ['email'];
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
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label fw-bolder">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" value="<?php echo e(old('name')); ?>">
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
                </div>
                <div class="mb-3">
                    <label for="nomorhp" class="form-label fw-bolder">Nomor HP</label>
                    <input type="text" class="form-control" id="nomorhp" name="nomorhp" placeholder="Masukkan nomor hp" value="<?php echo e(old('nomorhp')); ?>">
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
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label fw-bolder">Alamat</label>
                    <textarea class="form-control" id="address" name="address" placeholder="Contoh: Jl. Rusa raya No. 71, Kel. Sertajaya, Kec. Cikarang Timur, Kab. Bekasi, Jawa Barat" rows="3" value="<?php echo e(old('address')); ?>"></textarea>
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
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label fw-bolder">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" value="<?php echo e(old('password')); ?>">
                    <i class="fa-solid fa-eye-slash" id="togglePassword" onclick="togglePassword()"></i>
                    <?php $__errorArgs = ['password'];
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
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-green w-100 py-2 fw-bold rounded">Register</button>
                </div>
                <p class="text-center mb-0">Sudah punya akun?
                    <a href="<?php echo e(route('login')); ?>" class="text-decoration-none hover-none text-green fw-bold">Masuk</a>
                </p>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/auth/register.blade.php ENDPATH**/ ?>