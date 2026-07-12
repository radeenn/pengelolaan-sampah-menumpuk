<?php $__env->startSection('title', 'Data Penukaran Sampah'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="mb-4">
            <h3 class="admin-title text-center py-2">Detail Data Sampah</h3>
        </div>

        <?php if(session('update_success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('update_success')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        <?php elseif(session('update_fail')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e(session('update_fail')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        <?php elseif(session('update_warning')): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo e(session('update_warning')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div> 
        <?php endif; ?>
        
        <div class="row">
            <div class="col-12">
                <div id="detail" class="card shadow mb-4 p-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <?php $__currentLoopData = $wastes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $waste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-5 col-12">
                                    <div class="border rounded p-4 mb-4">
                                        <h5 class="fw-bold mb-3">Data Penukar</h5>
                                        <p class="mb-2"><?php echo e($waste->users->name); ?></p>
                                        <p class="mb-2"><?php echo e($waste->users->nomorhp); ?></p>
                                        <p class="mb-0"><?php echo e($waste->users->address); ?></p>
                                    </div>
                                    <div class="border rounded p-4 mb-4 mb-lg-0">
                                        <img src="/wastes/<?php echo e($waste->image); ?>" class="w-100" alt="gambar-sampah">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 ms-auto">
                                    <form action="" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="mb-4">
                                            <label for="weight" class="form-label fw-bolder">Berat sampah</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="weight" name="weight" min="1" value="<?php echo e($waste->weight); ?>">
                                                <span class="input-group-text">Kg</span>
                                                <?php $__errorArgs = ['weight'];
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
                                        </div>
                                        <div class="mb-4">
                                            <label for="category" class="form-label fw-bolder">Kategori sampah</label>
                                            <input type="text" class="form-control" id="category" name="category" value="<?php echo e($waste->category); ?>" readonly>
                                        </div>
                                        <div class="mb-4">
                                            <label for="note" class="form-label fw-bolder">Catatan</label>
                                            <input type="text" class="form-control" id="note" name="note" value="<?php echo e($waste->note); ?>" readonly>
                                        </div>
                                        <div class="mb-4">
                                            <label for="status" class="form-label fw-bolder">Status</label>
                                            <select class="form-select" id="status" name="status" aria-label="Default select example">
                                                <option <?php if($waste->status == "Belum diverifikasi"): ?> <?php echo e("selected"); ?> value="Belum diverifikasi" <?php endif; ?> value="Belum diverifikasi">Belum diverifikasi</option> 
                                                <option <?php if($waste->status == "Dalam penjemputan"): ?> <?php echo e("selected"); ?>  value="Dalam penjemputan" <?php endif; ?> value="Dalam penjemputan">Dalam penjemputan</option>
                                                <option <?php if($waste->status == "Selesai"): ?> <?php echo e("selected"); ?> value="Selesai" <?php endif; ?> value="Selesai">Selesai</option> 
                                            </select>
                                            <?php $__errorArgs = ['status'];
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
                                            <button type="submit" class="btn btn-green w-100 py-2 px-4 fw-bold rounded">Update Data Sampah</button>                            
                                        </div>
                                    </form>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/admin/detail_sampah.blade.php ENDPATH**/ ?>