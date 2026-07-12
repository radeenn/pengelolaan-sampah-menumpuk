<?php $__env->startSection('title', 'Data Penukaran Sampah'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid mb-5">

        <!-- Page Heading -->
        <div class="mb-4">
            <h3 class="admin-title py-2">Data Penukaran Sampah</h3>
        </div>

        <?php if($wastes->isEmpty()): ?>
            <div class="text-center my-3 pb-4">
                <img src="<?php echo e(asset('images/waste-illustration.svg')); ?>" width="250" class="mb-2">
                <h6 class="mt-3 text-dark fw-bold">Data penukaran sampah masih kosong</h6>
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
                                        <th>Berat</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $wastes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $waste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($number++); ?></th>
                                            <td><?php echo e($waste->users->name); ?></td>
                                            <td><?php echo e($waste->weight); ?></td>
                                            <td><?php echo e($waste->category); ?></td>
                                            <?php if($waste->status == 'Selesai'): ?>
                                                <td class="text-success"><?php echo e($waste->status); ?></td>        
                                            <?php elseif($waste->status == 'Dalam penjemputan'): ?>
                                                <td class="text-primary"><?php echo e($waste->status); ?></td>
                                            <?php else: ?>
                                                <td class="text-danger"><?php echo e($waste->status); ?></td>
                                            <?php endif; ?>
                                            <td>
                                                <a href="data-penukaran-sampah/detail/<?php echo e($waste->id); ?>" class="btn btn-secondary mb-2 mb-lg-0">Detail</a>
                                                <form action="data-penukaran-sampah/delete/<?php echo e($waste->id); ?>" method="POST" class="d-inline">
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
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\NoxxalsGod\Documents\Pemograman Website\pengelolaan-sampah-menumpuk\resources\views/admin/penukaran_sampah.blade.php ENDPATH**/ ?>