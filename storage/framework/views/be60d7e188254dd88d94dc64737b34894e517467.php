
<?php $__env->startSection('content'); ?>
    

         <?php $__currentLoopData = $dtMahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6">
            <div class="course">
              <div class="card-body">
                    <div class="row">
                      <div class="col">
                          <h5 class="card-title"><?php echo e($item->nama); ?></h5>
                          <p class="card-text"><?php echo e($item->nim); ?></p>
                          <p> <?php echo e($item->alamat); ?> </p>
                      </div>
                      <div class="col">
                      </div>
                      <div class="col">
                          <a href="<?php echo e(url('edit-mahasiswa', $item->id)); ?>" ><i class="fa-solid fa-lg fa-pen-to-square" style="color: #5161ce"></i></a> 
                          <a href="<?php echo e(url('delete-mahasiswa', $item->id)); ?>" ><i class="fa-solid fa-lg fa-trash-can" style="color: red;"></i></a>
                          <div>
                          <span><?php echo e($item->email); ?></span>
                          </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project paw\mahasiswa-app\resources\views//data-mahasiswa.blade.php ENDPATH**/ ?>