
<?php $__env->startSection('content'); ?>

<br>
<br>
    <div class="card-body">
        <?php echo csrf_field(); ?>
        <?php echo e(method_field('PUT')); ?>

        <?php
            use App\Models\Post;
            $post = POST::all();
            
        ?>
        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        <p type="text" value="<?php echo e($p->title); ?>"></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@rsih-website\rsih-website1\resources\views/blog_single.blade.php ENDPATH**/ ?>