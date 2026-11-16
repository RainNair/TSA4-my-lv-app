<?php $__env->startSection('content'); ?>
<div class="auth-card"><h1>Register</h1><p class="muted">Create an account to manage the POS records.</p>
<form method="POST" action="<?php echo e(route('register')); ?>"><?php echo csrf_field(); ?>
<label for="name">Name</label><input id="name" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
<label for="email">Email</label><input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required>
<label for="password">Password</label><input id="password" type="password" name="password" required>
<label for="password_confirmation">Confirm password</label><input id="password_confirmation" type="password" name="password_confirmation" required>
<div class="form-actions"><button type="submit">Register</button><a href="<?php echo e(route('login')); ?>">Already registered?</a></div>
</form></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\my-lv-app\resources\views/auth/register.blade.php ENDPATH**/ ?>