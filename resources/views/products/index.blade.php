@php($title = 'Produk')
<x-layout>
    <div class="card">
        <div class="header">
            <h2 style="margin:0">Daftar Produk</h2>
            <a class="btn btn-primary" href="{{ route('products.create') }}">Tambah</a>
        </div>
        <div class="content">
            @if (session('success'))
                <div class="alert">{{ session('success') }}</div>
            @endif
            @if ($products->count() === 0)
                <div class="empty">Belum ada produk.</div>
            @else
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
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <div style="display:flex;gap:12px;align-items:center">
                                        @if($product->image_path)
                                            <img src="{{ asset('storage/'.$product->image_path) }}" alt="{{ $product->name }}" width="44" height="44" style="border-radius:8px;object-fit:cover" />
                                        @else
                                            <div style="width:44px;height:44px;border-radius:8px;background:#0b1220;border:1px solid #1f2937"></div>
                                        @endif
                                        <div>
                                            <div style="font-weight:600">{{ $product->name }}</div>
                                            <div class="muted" style="font-size:12px">{{ $product->origin ?? '-' }} • {{ $product->roast_level ?? '-' }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>Rp {{ number_format($product->price,0,',','.') }}</td>
                                <td>{{ $product->stock }}</td>
                                <td style="text-align:right;white-space:nowrap">
                                    <a class="btn" href="{{ route('products.show',$product) }}">Detail</a>
                                    <a class="btn" href="{{ route('products.edit',$product) }}">Edit</a>
                                    <form action="{{ route('products.destroy',$product) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus produk ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div style="margin-top:12px">{{ $products->links() }}</div>
            @endif
        </div>
    </div>
</x-layout>


