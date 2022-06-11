
<?php $__env->startSection('content'); ?>

<form method="post" action="<?php echo e(url('update-mahasiswa', $Mhs->id)); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="row mt-3">
        <div class="col">
        <label for="nama" class="form-label"><h5>Nama Mahasiswa</h5></label>
        <input type="text" class="form-control form-control-lg" placeholder="Nama Lengkap" name="nama" value="<?php echo e($Mhs->nama); ?>">
        </div>
        <div class="col">
        <label for="email" class="form-label"><h5>Alamat Email</h5></label>
        <input type="text" class="form-control form-control-lg" placeholder="Email" name="email" value="<?php echo e($Mhs->email); ?>">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
        <label for="nim" class="form-label"><h5>NIM</h5></label>
        <input type="text" class="form-control form-control-lg" placeholder="NIM" id="nim" name="nim" value="<?php echo e($Mhs->nim); ?>">
        </div>
        <div class="col">
        <label for="alamat" class="form-label"><h5>Alamat Rumah</h5></label>
        <input type="text" class="form-control form-control-lg" placeholder="Alamat" name="alamat" value="<?php echo e($Mhs->alamat); ?>">
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary float-right" name="kirim">Update</button>
</form>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project paw\mahasiswa-app\resources\views//edit-mahasiswa.blade.php ENDPATH**/ ?>