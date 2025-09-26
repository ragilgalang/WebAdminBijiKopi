@php($title = 'Dashboard')
<x-layout>
    <div class="card">
        <div class="header">
            <div>
                <div class="muted">Selamat datang</div>
                <h2 style="margin:4px 0 0 0">{{ $user->name }}</h2>
            </div>
            <a class="btn btn-primary" href="{{ route('products.create') }}">Tambah Produk</a>
        </div>
        <div class="content grid grid-cols-2">
            <div>
                <div class="muted">Total Produk</div>
                <div style="font-size:28px;font-weight:700;margin-top:6px">{{ \App\Models\Product::count() }}</div>
            </div>
            <div>
                <div class="muted">Stok Keseluruhan</div>
                <div style="font-size:28px;font-weight:700;margin-top:6px">{{ \App\Models\Product::sum('stock') }}</div>
            </div>
        </div>
    </div>
</x-layout>


