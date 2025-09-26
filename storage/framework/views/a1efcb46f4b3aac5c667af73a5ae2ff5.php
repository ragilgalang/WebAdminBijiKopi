<?php /** @var string|null $title */ ?>
<?php $title = $title ?? null; ?>
<?php /** @var \Illuminate\View\ComponentSlot $slot */ ?>
<?php echo $__env->make('layouts.app', ['title' => $title, 'slot' => $slot], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<?php /**PATH C:\xampp\htdocs\LaravelCoba\web\resources\views/components/layout.blade.php ENDPATH**/ ?>