<?php $__env->startSection('content'); ?>
<h1 class="text-3xl font-bold mb-4">Portofolio</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(url('/portofolio/' . $project['slug'])); ?>" class="block bg-white rounded-2xl shadow p-4 hover:shadow-xl transition transform hover:-translate-y-1">
        <img src="<?php echo e(asset('images/portfolio/' . $project['image'])); ?>" alt="<?php echo e($project['title']); ?>" class="w-full h-48 object-cover rounded-md mb-3">
        <h2 class="text-xl font-semibold"><?php echo e($project['title']); ?></h2>
        <p class="text-gray-600 text-sm"><?php echo e($project['desc']); ?></p>
    </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="bg-yellow-100 border-l-4 border-yellow-400 p-4 rounded mb-6">
    <p class="font-medium text-yellow-800">
        Cek semua rekomendasi produk terbaik saya di sini:
        <a href="https://lynk.id/marfino3028" target="_blank"
           class="text-blue-600 underline font-semibold">lynk.id/marfino3028</a>
    </p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/freelance/portofolio-it/resources/views/portofolio/index.blade.php ENDPATH**/ ?>