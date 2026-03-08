<div class="d-menu-1 wow" data-wow-delay=".3s">
    <ul>
        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}">Главная</a>
        </li>
        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
            <a href="{{ route('about') }}">Обо мне</a>
        </li>
        <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
            <a href="{{ route('services') }}">Услуги</a>
        </li>
        <li class="{{ request()->routeIs('works.*') ? 'active' : '' }}">
            <a href="{{ route('works.index') }}">Работы</a>
        </li>
        <li class="{{ request()->routeIs('blog.*') ? 'active' : '' }}">
            <a href="{{ route('blog.index') }}">Блог</a>
        </li>
        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
            <a href="{{ route('contact') }}">Контакты</a>
        </li>
    </ul>
</div>
