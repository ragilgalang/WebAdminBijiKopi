@php($title = 'Login')
<x-layout>
    <div class="card" style="max-width:520px;margin:40px auto 0">
        <div class="header"><h2 style="margin:0">Masuk</h2></div>
        <div class="content">
            @if ($errors->any())
                <div class="alert">
                    {{ $errors->first() }}
                </div>
            @endif
            <form method="POST" action="{{ url('/login') }}" class="grid" style="gap:14px">
                @csrf
                <div class="field">
                    <label class="muted">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus />
                </div>
                <div class="field">
                    <label class="muted">Password</label>
                    <input type="password" name="password" required />
                </div>
                <label style="display:flex;align-items:center;gap:8px" class="muted">
                    <input type="checkbox" name="remember" value="1" /> Ingat saya
                </label>
                <button class="btn btn-primary" type="submit">Login</button>
                <div class="muted">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></div>
            </form>
        </div>
    </div>
</x-layout>


