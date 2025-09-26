@php($title = 'Edit Produk')
<x-layout>
    <div class="card" style="max-width:800px;margin:0 auto">
        <div class="header"><h2 style="margin:0">Edit Produk</h2></div>
        <div class="content">
            @if ($errors->any())
                <div class="alert">{{ $errors->first() }}</div>
            @endif
            <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data" class="grid" style="gap:14px">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-2">
                    <div class="field">
                        <label class="muted">Nama</label>
                        <input type="text" name="name" value="{{ old('name', $product->name) }}" required />
                    </div>
                    <div class="field">
                        <label class="muted">Harga (Rp)</label>
                        <input type="number" name="price" value="{{ old('price', $product->price) }}" min="0" step="1" required />
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="field">
                        <label class="muted">Stok</label>
                        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" min="0" step="1" required />
                    </div>
                    <div class="field">
                        <label class="muted">Asal (Origin)</label>
                        <input type="text" name="origin" value="{{ old('origin', $product->origin) }}" />
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="field">
                        <label class="muted">Level Roast</label>
                        <input type="text" name="roast_level" value="{{ old('roast_level', $product->roast_level) }}" />
                    </div>
                    <div class="field">
                        <label class="muted">Gambar</label>
                        <input type="file" name="image" accept="image/*" />
                        @if($product->image_path)
                            <div class="muted" style="font-size:12px;margin-top:6px">Gambar saat ini: {{ $product->image_path }}</div>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label class="muted">Deskripsi</label>
                    <textarea name="description" rows="4">{{ old('description', $product->description) }}</textarea>
                </div>
                <div style="display:flex;gap:10px;justify-content:flex-end">
                    <a class="btn" href="{{ route('products.index') }}">Batal</a>
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>


