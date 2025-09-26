<?php ($title = 'Detail Produk'); ?>
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
    <div class="card" style="max-width:900px;margin:0 auto">
        <div class="header">
            <h2 style="margin:0"><?php echo e($product->name); ?></h2>
            <div style="display:flex;gap:10px">
                <a class="btn" href="<?php echo e(route('products.edit',$product)); ?>">Edit</a>
                <a class="btn" href="<?php echo e(route('products.index')); ?>">Kembali</a>
            </div>
        </div>
        <div class="content grid" style="gap:16px">
            <div class="grid grid-cols-2">
                <div>
                    <?php if($product->image_path): ?>
                        <img src="<?php echo e(asset('storage/'.$product->image_path)); ?>" alt="<?php echo e($product->name); ?>" style="width:100%;border-radius:14px;object-fit:cover" />
                    <?php else: ?>
                        <div style="width:100%;height:240px;border-radius:14px;background:#0b1220;border:1px solid #1f2937"></div>
                    <?php endif; ?>
                </div>
                <div>
                    <div class="muted">Harga</div>
                    <div style="font-size:24px;font-weight:700">Rp <?php echo e(number_format($product->price,0,',','.')); ?></div>
                    <div class="muted" style="margin-top:10px">Stok: <?php echo e($product->stock); ?></div>
                    <div class="muted" style="margin-top:10px">Asal: <?php echo e($product->origin ?? '-'); ?></div>
                    <div class="muted" style="margin-top:10px">Level Roast: <?php echo e($product->roast_level ?? '-'); ?></div>
                </div>
            </div>
            <div>
                <div class="muted">Deskripsi</div>
                <p><?php echo e($product->description ?? '-'); ?></p>
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


<?php /**PATH C:\xampp\htdocs\LaravelCoba\web\resources\views/products/show.blade.php ENDPATH**/ ?>