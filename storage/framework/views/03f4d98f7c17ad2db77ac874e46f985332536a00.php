<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Simple Siakad | <?php echo e($title); ?></title>

    <!-- icons -->
    <link href="/fontawesome/css/all.min.css" rel="stylesheet">

    <!-- styles -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <!-- Nav -->
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Nav -->

      <!-- Content -->
      <div class="container-sm card-container">
          <div class="row mt-3">
            <h2><?php echo e($title); ?></h2>
            
            <!-- The Yield for the Content -->

            <?php echo $__env->yieldContent('content'); ?>

            <!-- The Yield for the Content -->

          </div>
      </div>
      <!-- Content -->

      <!-- Footer -->
      <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- Footer -->

</body>

<!-- Sweetalert -->
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Sweetalert -->



</html><?php /**PATH D:\project paw\mahasiswa-app\resources\views/layouts/master.blade.php ENDPATH**/ ?>