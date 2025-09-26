<?php ($title = 'Tambah Produk'); ?>
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
    <div class="card" style="max-width:800px;margin:0 auto">
        <div class="header"><h2 style="margin:0">Tambah Produk</h2></div>
        <div class="content">
            <?php if($errors->any()): ?>
                <div class="alert"><?php echo e($errors->first()); ?></div>
            <?php endif; ?>
            <form method="POST" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data" class="grid" style="gap:14px">
                <?php echo csrf_field(); ?>
                <div class="grid grid-cols-2">
                    <div class="field">
                        <label class="muted">Nama</label>
                        <input type="text" name="name" value="<?php echo e(old('name')); ?>" required />
                    </div>
                    <div class="field">
                        <label class="muted">Harga (Rp)</label>
                        <input type="number" name="price" value="<?php echo e(old('price')); ?>" min="0" step="1" required />
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="field">
                        <label class="muted">Stok</label>
                        <input type="number" name="stock" value="<?php echo e(old('stock')); ?>" min="0" step="1" required />
                    </div>
                    <div class="field">
                        <label class="muted">Asal (Origin)</label>
                        <input type="text" name="origin" value="<?php echo e(old('origin')); ?>" />
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="field">
                        <label class="muted">Level Roast</label>
                        <input type="text" name="roast_level" value="<?php echo e(old('roast_level')); ?>" />
                    </div>
                    <div class="field">
                        <label class="muted">Gambar</label>
                        <input type="file" name="image" accept="image/*" />
                    </div>
                </div>
                <div class="field">
                    <label class="muted">Deskripsi</label>
                    <textarea name="description" rows="4"><?php echo e(old('description')); ?></textarea>
                </div>
                <div style="display:flex;gap:10px;justify-content:flex-end">
                    <a class="btn" href="<?php echo e(route('products.index')); ?>">Batal</a>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
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


<?php /**PATH C:\xampp\htdocs\LaravelCoba\web\resources\views/products/create.blade.php ENDPATH**/ ?>