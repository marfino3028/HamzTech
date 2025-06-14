<?php $__env->startSection('content'); ?>
<div x-data="{ showModal: false, modalImg: '' }">
    <h2 class="text-2xl font-bold mb-4"><?php echo e($item['title']); ?></h2>
    <p class="mb-6 text-gray-600"><?php echo e($item['desc']); ?></p>

    <div class="grid md:grid-cols-3 gap-4">
        <?php $__currentLoopData = $item['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img 
            src="<?php echo e(asset('images/portfolio/' . $img)); ?>" 
            alt="Screenshot <?php echo e($img); ?>" 
            class="rounded shadow cursor-pointer hover:scale-105 transition"
            @click="showModal = true; modalImg = '<?php echo e(asset('images/portfolio/' . $img)); ?>'"
        >
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Modal -->
    <div 
        x-show="showModal" 
        x-transition 
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-80 z-50"
        @click.away="showModal = false"
        @keydown.escape.window="showModal = false"
        style="display: none;"
    >
        <div class="relative">
            <img :src="modalImg" class="max-h-[90vh] rounded shadow-lg">
            <button 
                @click="showModal = false" 
                class="absolute top-2 right-2 text-white text-3xl font-bold"
                aria-label="Close"
            >&times;</button>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/freelance/portofolio-it/resources/views/portofolio/show.blade.php ENDPATH**/ ?>