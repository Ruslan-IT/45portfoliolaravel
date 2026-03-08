<div class="d-menu-1 wow" data-wow-delay=".3s">
    <ul>
        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
            <a href="{{ route('about') }}">About Me</a>
        </li>
        <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
            <a href="{{ route('services') }}">What I Do</a>
        </li>
        <li class="{{ request()->routeIs('works.*') ? 'active' : '' }}">
            <a href="{{ route('works.index') }}">Works</a>
        </li>
        <li class="{{ request()->routeIs('blog.*') ? 'active' : '' }}">
            <a href="{{ route('blog.index') }}">Blog</a>
        </li>
        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
            <a href="{{ route('contact') }}">Hire Me</a>
        </li>
    </ul>
</div>
