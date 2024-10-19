<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('students.index') }}" class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Students</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('ammavadis.index') }}" class="nav-link {{ Request::is('ammavadis*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Ammavadis</p>
    </a>
</li>
<hr/>
<li class="nav-item">
<form method="POST"  class="nav-link" action="{{ route('logout') }}">
    @csrf
    <i class="nav-icon fas fa-lock"></i>
    <a href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </a>
</form>
</li>