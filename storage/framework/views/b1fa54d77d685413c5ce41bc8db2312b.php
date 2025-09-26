<?php ($title = 'Dashboard'); ?>
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
    <div class="card">
        <div class="header">
            <div>
                <div class="muted">Selamat datang</div>
                <h2 style="margin:4px 0 0 0"><?php echo e($user->name); ?></h2>
            </div>
            <a class="btn btn-primary" href="<?php echo e(route('products.create')); ?>">Tambah Produk</a>
        </div>
        <div class="content grid grid-cols-2">
            <div>
                <div class="muted">Total Produk</div>
                <div style="font-size:28px;font-weight:700;margin-top:6px"><?php echo e(\App\Models\Product::count()); ?></div>
            </div>
            <div>
                <div class="muted">Stok Keseluruhan</div>
                <div style="font-size:28px;font-weight:700;margin-top:6px"><?php echo e(\App\Models\Product::sum('stock')); ?></div>
            </div>
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


<?php /**PATH C:\xampp\htdocs\LaravelCoba\web\resources\views/dashboard.blade.php ENDPATH**/ ?>