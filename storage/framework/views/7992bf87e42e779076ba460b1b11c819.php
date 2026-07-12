<?php $__env->startSection('title', 'Login'); ?>
    
<?php $__env->startSection('content'); ?>
    <div class="card auth mx-auto p-3 rounded shadow-sm">
        <div class="card-body">
            <?php if(session('login-error')): ?>
                <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                        <?php echo e(session('login-error')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <h2 class="fw-bold">Login</h2>
            <p class="mb-4">Silahkan masuk menggunakan akun Waste Point untuk melanjutkan <span class="text-green">aktivitas</span> Anda.</p>
            <form action="<?php echo e(route('login')); ?>" method="POST">
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
                <div class="mb-2">
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
                <div class="float-start">
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-green w-100 py-2 fw-bold rounded">Login</button>
                </div>
                <p class="text-center mb-0">Belum punya akun?
                    <a href="<?php echo e(route('register')); ?>" class="text-decoration-none hover-none text-green fw-bold">Daftar</a>
                </p>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/auth/login.blade.php ENDPATH**/ ?>