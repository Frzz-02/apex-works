

<?php $__env->startSection('title', 'Create Hero Section'); ?>

<?php $__env->startSection('content'); ?>
<div class="p-6">
    <div class="mb-6">
        <div class="flex items-center space-x-2 text-sm text-slate-600 mb-2">
            <a href="<?php echo e(route('backend.dashboard')); ?>" class="hover:text-slate-900">Dashboard</a>
            <span>/</span>
            <a href="<?php echo e(route('backend.section-hero.index')); ?>" class="hover:text-slate-900">Hero Section</a>
            <span>/</span>
            <span class="text-slate-900">Create</span>
        </div>
        <h1 class="text-3xl font-bold text-slate-800">Create Hero Section</h1>
    </div>

    <form action="<?php echo e(route('backend.section-hero.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content Column -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Titles & Subtitles -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Titles & Subtitles</h3>
                    <div class="space-y-4">
                        <?php $__currentLoopData = range(1, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Title <?php echo e($i > 1 ? $i : ''); ?></label>
                                    <input type="text" name="<?php echo e($i > 1 ? 'title_' . $i : 'title'); ?>" value="<?php echo e(old($i > 1 ? 'title_' . $i : 'title')); ?>" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Subtitle <?php echo e($i); ?></label>
                                    <input type="text" name="subtitle_<?php echo e($i); ?>" value="<?php echo e(old('subtitle_' . $i)); ?>" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Descriptions -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Descriptions</h3>
                    <div class="space-y-4">
                        <?php $__currentLoopData = range(1, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Description <?php echo e($i > 1 ? $i : ''); ?></label>
                                <textarea name="<?php echo e($i > 1 ? 'description_' . $i : 'description'); ?>" rows="3" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"><?php echo e(old($i > 1 ? 'description_' . $i : 'description')); ?></textarea>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Call to Action</h3>
                    <div class="space-y-4">
                        <?php $__currentLoopData = range(1, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Button Label <?php echo e($i > 1 ? $i : ''); ?></label>
                                    <input type="text" name="<?php echo e($i > 1 ? 'action_label_' . $i : 'action_label'); ?>" value="<?php echo e(old($i > 1 ? 'action_label_' . $i : 'action_label')); ?>" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-slate-700 mb-2">Button URL <?php echo e($i > 1 ? $i : ''); ?></label>
                                    <input type="text" name="<?php echo e($i > 1 ? 'action_url_' . $i : 'action_url'); ?>" value="<?php echo e(old($i > 1 ? 'action_url_' . $i : 'action_url')); ?>" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Background Images -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Background Images</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <?php $__currentLoopData = ['image_background', 'image_background_2', 'image_background_3']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2"><?php echo e(str_replace('_', ' ', ucfirst($field))); ?></label>
                                <input type="file" name="<?php echo e($field); ?>" accept="image/*" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="space-y-6">
                <!-- Video URL -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Video</h3>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Video URL</label>
                    <input type="text" name="video_url" value="<?php echo e(old('video_url')); ?>" placeholder="https://youtube.com/..." class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Regular Images -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h3 class="text-lg font-bold text-slate-800 mb-4">Images (18 slots)</h3>
                    <div class="space-y-3">
                        <?php $__currentLoopData = range(1, 18); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <label class="block text-sm font-medium text-slate-600 mb-1">Image <?php echo e($i); ?></label>
                                <input type="file" name="<?php echo e($i === 1 ? 'image' : 'image_' . $i); ?>" accept="image/*" class="w-full px-3 py-2 text-sm border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <button type="submit" class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors shadow-lg hover:shadow-xl">
                        Create Hero Section
                    </button>
                    <a href="<?php echo e(route('backend.section-hero.index')); ?>" class="block w-full text-center px-6 py-3 mt-3 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300 transition-colors">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\apex-works\resources\views/backend/section-hero/create.blade.php ENDPATH**/ ?>