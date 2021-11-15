<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home','detail') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('trend') }}" class="nav-link {{ request()->routeIs('trend') ? 'active' : '' }}">
        <i class="nav-icon fas fa-poll"></i>
        <p>Trend</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
        <i class="nav-icon far fa-bell"></i>
        <p>Alarm</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-database"></i>
        <p>Master Data</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('setting') }}" class="nav-link {{ request()->routeIs('setting') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cogs"></i>
        <p>Pengaturan</p>
    </a>
</li>