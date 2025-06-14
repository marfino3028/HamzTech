<?php $__env->startSection('content'); ?>
<h1 class="text-3xl font-bold mb-4">Blog Afiliasi & Tips</h1>
<ul class="space-y-3">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="/blog/<?php echo e($post['slug']); ?>" class="text-blue-600 hover:underline"><?php echo e($post['title']); ?></a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<p class="mt-4">Untuk semua link rekomendasi saya, bisa cek di:</p>
<a href="https://lynk.id/marfino3028" target="_blank" class="text-blue-600 underline font-semibold">
    lynk.id/marfino3028
</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/freelance/portofolio-it/resources/views/blog/index.blade.php ENDPATH**/ ?>