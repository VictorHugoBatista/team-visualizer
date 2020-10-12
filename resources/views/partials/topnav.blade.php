@if (Route::has('login'))
<div class="topnav">
    @auth
    <a class="topnav-link" href="{{ url('/home') }}">Home</a>
    @else
    <a class="topnav-link" href="{{ route('login') }}">Login</a>

    @if (Route::has('register'))
    <a class="topnav-link" href="{{ route('register') }}">Register</a>
    @endif
    @endauth
</div>
@endif
