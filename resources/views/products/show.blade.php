@php($title = 'Detail Produk')
<x-layout>
    <div class="card" style="max-width:900px;margin:0 auto">
        <div class="header">
            <h2 style="margin:0">{{ $product->name }}</h2>
            <div style="display:flex;gap:10px">
                <a class="btn" href="{{ route('products.edit',$product) }}">Edit</a>
                <a class="btn" href="{{ route('products.index') }}">Kembali</a>
            </div>
        </div>
        <div class="content grid" style="gap:16px">
            <div class="grid grid-cols-2">
                <div>
                    @if($product->image_path)
                        <img src="{{ asset('storage/'.$product->image_path) }}" alt="{{ $product->name }}" style="width:100%;border-radius:14px;object-fit:cover" />
                    @else
                        <div style="width:100%;height:240px;border-radius:14px;background:#0b1220;border:1px solid #1f2937"></div>
                    @endif
                </div>
                <div>
                    <div class="muted">Harga</div>
                    <div style="font-size:24px;font-weight:700">Rp {{ number_format($product->price,0,',','.') }}</div>
                    <div class="muted" style="margin-top:10px">Stok: {{ $product->stock }}</div>
                    <div class="muted" style="margin-top:10px">Asal: {{ $product->origin ?? '-' }}</div>
                    <div class="muted" style="margin-top:10px">Level Roast: {{ $product->roast_level ?? '-' }}</div>
                </div>
            </div>
            <div>
                <div class="muted">Deskripsi</div>
                <p>{{ $product->description ?? '-' }}</p>
            </div>
        </div>
    </div>
</x-layout>


