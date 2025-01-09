<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

{{-- <li class="nav-item">
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
</li> --}}
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

<li class="nav-item">
    <a href="{{ route('cms.index') }}" class="nav-link {{ Request::is('cms*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Cms</p>
    </a>
</li>
{{-- 
<li class="nav-item">
    <a href="{{ route('serviceCategories.index') }}" class="nav-link {{ Request::is('serviceCategories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Service Categories</p>
    </a>
</li> --}}

<li class="nav-item">
    <a href="{{ route('services.index') }}" class="nav-link {{ Request::is('services*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Services</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('products.index') }}" class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Products</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('productCategories.index') }}" class="nav-link {{ Request::is('productCategories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Product Categories</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('serviceCategories.index') }}" class="nav-link {{ Request::is('serviceCategories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Service Categories</p>
    </a>
</li>
