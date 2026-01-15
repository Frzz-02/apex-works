<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'Dashboard'); ?> - Admin Panel</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="<?php echo e(asset('assets/apex favicon.jpeg')); ?>">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="bg-gray-50" x-data="{ showMobileMenu: false, showUserMenu: false, openAppearance: false }">
    
    <!-- Navbar (Fixed Top) -->
    <?php echo $__env->make('backend.app.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <!-- Sidebar (Fixed Left) -->
    <?php echo $__env->make('backend.app.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <!-- Main Content Area (with left padding for sidebar) -->
    <main class="ml-64 pt-16">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH D:\laragon\www\apex-works\resources\views/backend/app/layout.blade.php ENDPATH**/ ?>