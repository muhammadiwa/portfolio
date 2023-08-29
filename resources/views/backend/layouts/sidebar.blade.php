<div class="l-navbar bg-sidenav-primary-fill" id="nav-bar">
    <nav class="nav nav-content">
        <div>
            <!-- Brand here -->
            <a href="#" class="nav__logo">
                <img src="{{ url('public/template/assets/img/brand/logo-light.svg') }}" alt="brand" class="nav__logo-icon">
            </a>

            <div class="nav__list">

                <a href="{{ url('admin/dashboard') }}" class="nav__link @if (Request::segment(2) == 'dashboard')
                    active
                @endif">
                    <i class='bx bx-grid-alt nav__icon bx-tada-hover'></i>
                    <span class="nav__name">Dashboard</span>
                </a>

                <a href="{{ url('admin/home') }}" class="nav__link @if (Request::segment(2) == 'home')
                    active
                @endif">
                    <i class='bx bx-tada-hover nav__icon bx-home'></i>
                    <span class="nav__name">Home</span>
                </a>

                <a href="{{ url('admin/about') }}" class="nav__link @if (Request::segment(2) == 'about')
                    active
                @endif">
                    <i class='bx bx-tada-hover nav__icon bx-user'></i>
                    <span class="nav__name">About</span>
                </a>

                <a href="{{ url('admin/skill') }}" class="nav__link @if (Request::segment(2) == 'skill')
                    active
                @endif">
                    <i class='bi bi-code-square nav__icon bx-tada-hover'></i>
                    <span class="nav__name">Skill</span>
                </a>

                <a href="{{ url('admin/resume') }}" class="nav__link @if (Request::segment(2) == 'resume')
                    active
                @endif">
                    <i class='bx bx-file-blank nav__icon bx-tada-hover'></i>
                    <span class="nav__name">Resume</span>
                </a>

                <a href="{{ url('admin/portfolio') }}" class="nav__link @if (Request::segment(2) == 'portfolio')
                    active
                @endif">
                    <i class='bx bx-book-content nav__icon bx-tada-hover'></i>
                    <span class="nav__name">Portfolio</span>
                </a>

                <a href="{{ url('admin/contact') }}" class="nav__link @if (Request::segment(2) == 'contact')
                    active
                @endif">
                    <i class='bx bx-envelope nav__icon bx-tada-hover'></i>
                    <span class="nav__name">Contact</span>
                </a>

                <form method="POST" action="{{ url('admin/logout') }}">
                    @csrf
                    <button type="submit" class="nav__link" style="border: none; background: none; cursor: pointer;">
                        <i class='bx bx-log-out nav__icon bx-tada-hover'></i>
                        <span class="nav__name">Log Out</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
</div>