
<?php $__env->startSection('content'); ?>
<link href="assets/css/style.css" rel="stylesheet">
<br>
<br>
<h1>hello world</h1>
<h1 style="color: red"><?php echo e($post->title); ?></h1>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@rsih-website\rsih-website\resources\views/blog_single.blade.php ENDPATH**/ ?>