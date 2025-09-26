<?php ($title = 'Produk'); ?>
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
            <h2 style="margin:0">Daftar Produk</h2>
            <a class="btn btn-primary" href="<?php echo e(route('products.create')); ?>">Tambah</a>
        </div>
        <div class="content">
            <?php if(session('success')): ?>
                <div class="alert"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
            <?php if($products->count() === 0): ?>
                <div class="empty">Belum ada produk.</div>
            <?php else: ?>
                <div style="overflow:auto">
                    <table>
                        <thead>
                        <tr>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div style="display:flex;gap:12px;align-items:center">
                                        <?php if($product->image_path): ?>
                                            <img src="<?php echo e(asset('storage/'.$product->image_path)); ?>" alt="<?php echo e($product->name); ?>" width="44" height="44" style="border-radius:8px;object-fit:cover" />
                                        <?php else: ?>
                                            <div style="width:44px;height:44px;border-radius:8px;background:#0b1220;border:1px solid #1f2937"></div>
                                        <?php endif; ?>
                                        <div>
                                            <div style="font-weight:600"><?php echo e($product->name); ?></div>
                                            <div class="muted" style="font-size:12px"><?php echo e($product->origin ?? '-'); ?> • <?php echo e($product->roast_level ?? '-'); ?></div>
                                        </div>
                                    </div>
                                </td>
                                <td>Rp <?php echo e(number_format($product->price,0,',','.')); ?></td>
                                <td><?php echo e($product->stock); ?></td>
                                <td style="text-align:right;white-space:nowrap">
                                    <a class="btn" href="<?php echo e(route('products.show',$product)); ?>">Detail</a>
                                    <a class="btn" href="<?php echo e(route('products.edit',$product)); ?>">Edit</a>
                                    <form action="<?php echo e(route('products.destroy',$product)); ?>" method="POST" style="display:inline" onsubmit="return confirm('Hapus produk ini?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-danger" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div style="margin-top:12px"><?php echo e($products->links()); ?></div>
            <?php endif; ?>
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


<?php /**PATH C:\xampp\htdocs\LaravelCoba\web\resources\views/products/index.blade.php ENDPATH**/ ?>