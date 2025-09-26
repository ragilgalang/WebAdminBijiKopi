<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Admin Kopi'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root{--bg:#0f172a;--panel:#111827;--muted:#94a3b8;--text:#e5e7eb;--primary:#22c55e;--danger:#ef4444}
        *{box-sizing:border-box}
        html,body{margin:0;padding:0;height:100%}
        body{font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,sans-serif;background:linear-gradient(180deg,#0b1220, #0f172a 30%, #0b1220);color:var(--text)}
        a{color:inherit;text-decoration:none}
        .container{max-width:1100px;margin:0 auto;padding:24px}
        header{display:flex;align-items:center;justify-content:space-between;margin-bottom:24px}
        .brand{display:flex;gap:10px;align-items:center}
        .brand .logo{width:36px;height:36px;border-radius:10px;background:radial-gradient(circle at 30% 30%, #22c55e 0 40%, transparent 41%),linear-gradient(135deg,#16a34a,#22c55e);box-shadow:0 0 40px rgba(34,197,94,.2)}
        .brand h1{font-size:18px;margin:0;font-weight:700;letter-spacing:.3px}
        nav{display:flex;gap:10px}
        .btn{padding:10px 14px;border:1px solid #1f2937;background:#0b1220;border-radius:10px;color:#d1d5db;transition:all .2s}
        .btn:hover{border-color:#374151;transform:translateY(-1px)}
        .btn-primary{background:linear-gradient(180deg,#16a34a,#22c55e);color:#05140b;border-color:transparent}
        .btn-danger{border-color:#ef4444;color:#fecaca}
        .card{background:rgba(17,24,39,.6);backdrop-filter:blur(8px);border:1px solid #1f2937;border-radius:16px;box-shadow:0 10px 40px rgba(0,0,0,.25)}
        .card .header{display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid #1f2937;padding:18px 20px}
        .card .content{padding:20px}
        .grid{display:grid;gap:16px}
        @media(min-width:768px){.grid-cols-2{grid-template-columns:1fr 1fr}}
        table{width:100%;border-collapse:separate;border-spacing:0}
        th,td{padding:12px 10px;border-bottom:1px solid #1f2937}
        th{text-align:left;color:#cbd5e1;font-weight:600}
        .muted{color:var(--muted)}
        .field{display:flex;flex-direction:column;gap:6px}
        input,textarea,select{padding:12px 12px;border-radius:12px;border:1px solid #1f2937;background:#0b1220;color:#e5e7eb}
        .empty{padding:10px;color:#94a3b8}
        footer{margin-top:30px;color:#6b7280;text-align:center;font-size:12px}
        .alert{padding:12px 14px;border-radius:12px;border:1px solid #14532d;background:#052e1a;color:#86efac;margin-bottom:12px}
    </style>
    
</head>
<body>
<div class="container">
    <header>
        <div class="brand">
            <div class="logo"></div>
            <h1>Admin Kopi</h1>
        </div>
        <nav>
            <?php if(auth()->guard()->check()): ?>
                <a class="btn" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                <a class="btn" href="<?php echo e(route('products.index')); ?>">Produk</a>
                <form action="<?php echo e(route('logout')); ?>" method="POST" style="display:inline">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            <?php else: ?>
                <a class="btn" href="<?php echo e(route('login')); ?>">Login</a>
                <a class="btn btn-primary" href="<?php echo e(route('register')); ?>">Daftar</a>
            <?php endif; ?>
        </nav>
    </header>

    <main>
        <?php echo e($slot); ?>

    </main>

    <footer>
        © <?php echo e(date('Y')); ?> Admin Penjual Biji Kopi
    </footer>
</div>
</body>
</html>


<?php /**PATH C:\xampp\htdocs\LaravelCoba\web\resources\views/layouts/app.blade.php ENDPATH**/ ?>