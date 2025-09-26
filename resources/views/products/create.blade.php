@php($title = 'Tambah Produk')
<x-layout>
    <div class="card" style="max-width:800px;margin:0 auto">
        <div class="header"><h2 style="margin:0">Tambah Produk</h2></div>
        <div class="content">
            @if ($errors->any())
                <div class="alert">{{ $errors->first() }}</div>
            @endif
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" class="grid" style="gap:14px">
                @csrf
                <div class="grid grid-cols-2">
                    <div class="field">
                        <label class="muted">Nama</label>
                        <input type="text" name="name" value="{{ old('name') }}" required />
                    </div>
                    <div class="field">
                        <label class="muted">Harga (Rp)</label>
                        <input type="number" name="price" value="{{ old('price') }}" min="0" step="1" required />
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="field">
                        <label class="muted">Stok</label>
                        <input type="number" name="stock" value="{{ old('stock') }}" min="0" step="1" required />
                    </div>
                    <div class="field">
                        <label class="muted">Asal (Origin)</label>
                        <input type="text" name="origin" value="{{ old('origin') }}" />
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="field">
                        <label class="muted">Level Roast</label>
                        <input type="text" name="roast_level" value="{{ old('roast_level') }}" />
                    </div>
                    <div class="field">
                        <label class="muted">Gambar</label>
                        <input type="file" name="image" accept="image/*" />
                    </div>
                </div>
                <div class="field">
                    <label class="muted">Deskripsi</label>
                    <textarea name="description" rows="4">{{ old('description') }}</textarea>
                </div>
                <div style="display:flex;gap:10px;justify-content:flex-end">
                    <a class="btn" href="{{ route('products.index') }}">Batal</a>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>


