@if (Route::has('login'))
<div class="topnav">
    @auth('admin')
    <a class="topnav-link" href="{{ route('brackets/admin-auth::admin') }}" target="_blank">Admin</a>
    <a class="topnav-link" href="{{ route('brackets/admin-auth::admin/logout') }}">Logout</a>
    @else
    <a class="topnav-link" href="{{ route('login') }}">Login</a>
    @if (Route::has('register'))
    <a class="topnav-link" href="{{ route('register') }}">Register</a>
    @endif
    @endauth
</div>
@endif
