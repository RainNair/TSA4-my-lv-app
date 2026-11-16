<?php $__env->startSection('content'); ?>
<div class="auth-card"><h1>Log in</h1><p class="muted">Sign in to manage tasks.</p>
<form method="POST" action="<?php echo e(route('login')); ?>"><?php echo csrf_field(); ?>
<label for="email">Email</label><input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
<label for="password">Password</label><input id="password" type="password" name="password" required>
<label class="checkbox"><input type="checkbox" name="remember"> Remember me</label>
<div class="form-actions"><button type="submit">Log in</button><a href="<?php echo e(route('register')); ?>">Create an account</a></div>
</form></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\my-lv-app\resources\views/auth/login.blade.php ENDPATH**/ ?>