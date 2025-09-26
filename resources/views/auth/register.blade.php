@php($title = 'Register')
<x-layout>
    <div class="card" style="max-width:520px;margin:40px auto 0">
        <div class="header"><h2 style="margin:0">Daftar</h2></div>
        <div class="content">
            @if ($errors->any())
                <div class="alert">
                    {{ $errors->first() }}
                </div>
            @endif
            <form method="POST" action="{{ url('/register') }}" class="grid" style="gap:14px">
                @csrf
                <div class="field">
                    <label class="muted">Nama</label>
                    <input type="text" name="name" value="{{ old('name') }}" required />
                </div>
                <div class="field">
                    <label class="muted">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required />
                </div>
                <div class="field">
                    <label class="muted">Password</label>
                    <input type="password" name="password" required />
                </div>
                <div class="field">
                    <label class="muted">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" required />
                </div>
                <button class="btn btn-primary" type="submit">Buat Akun</button>
                <div class="muted">Sudah punya akun? <a href="{{ route('login') }}">Login</a></div>
            </form>
        </div>
    </div>
</x-layout>


