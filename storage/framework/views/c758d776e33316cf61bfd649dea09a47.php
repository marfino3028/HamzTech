<?php $__env->startSection('content'); ?>
<h1 class="text-3xl font-bold mb-4">Layanan Jasa IT</h1>

<div class="grid md:grid-cols-2 gap-6">
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white rounded-xl shadow p-5 hover:shadow-md transition">
            <h2 class="text-xl font-semibold mb-1"><?php echo e($service['title']); ?></h2>
            <p class="text-gray-600"><?php echo e($service['desc']); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/freelance/portofolio-it/resources/views/services.blade.php ENDPATH**/ ?>