<?php ($title = 'Login'); ?>
<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="card" style="max-width:520px;margin:40px auto 0">
        <div class="header"><h2 style="margin:0">Masuk</h2></div>
        <div class="content">
            <?php if($errors->any()): ?>
                <div class="alert">
                    <?php echo e($errors->first()); ?>

                </div>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(url('/login')); ?>" class="grid" style="gap:14px">
                <?php echo csrf_field(); ?>
                <div class="field">
                    <label class="muted">Email</label>
                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus />
                </div>
                <div class="field">
                    <label class="muted">Password</label>
                    <input type="password" name="password" required />
                </div>
                <label style="display:flex;align-items:center;gap:8px" class="muted">
                    <input type="checkbox" name="remember" value="1" /> Ingat saya
                </label>
                <button class="btn btn-primary" type="submit">Login</button>
                <div class="muted">Belum punya akun? <a href="<?php echo e(route('register')); ?>">Daftar</a></div>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>


<?php /**PATH C:\xampp\htdocs\LaravelCoba\web\resources\views/auth/login.blade.php ENDPATH**/ ?>