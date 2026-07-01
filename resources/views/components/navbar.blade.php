<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">

                    <!-- LOGO COMPLESSIVO -->
                    <a href="{{ route('homepage') }}" class="logo">
                        <img class="logonav" src="{{ asset('/storage/images/logo.png') }}" alt="Logo Subirra">
                        <span class="logo-text">Subirra.it</span>
                    </a>

                    <!-- CONTENITORE DESTRO (MENU + SEARCH) -->
                    <div class="nav-container-right">
                        <ul class="nav">
                            <li><a href="{{ route('homepage') }}">{{ __('ui.home') }}</a></li>
                            <li><a href="{{ route('article.index') }}">{{ __('ui.articles') }}</a></li>

                            <li class="submenu">
                                <a href="javascript:;">{{ __('ui.categories') }}</a>
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                            <a class="text-capitalize"
                                                href="{{ route('byCategory', ['category' => $category]) }}">
                                                {{ __('ui.'.$category->name) }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            @auth
                                @if (Auth::user()->is_revisor)
                                    <li class="nav-item">
                                        <a class="position-relative" href="{{ route('revisor.index') }}">
                                            {{ __('ui.revisorZone') }}
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                {{ \App\Models\Article::toBeRevisedCount() }}
                                            </span>
                                        </a>
                                    </li>
                                @endif

                                <li class="submenu">
                                    <a href="javascript:;">{{ __('ui.hello') }}, {{ Auth::user()->name }}</a>
                                    <ul>
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li><a href="{{ route('create.article') }}">{{ __('ui.create') }}</a></li>
                                        @if (Auth::user()->is_revisor)
                                            <li><a href="{{ route('revisor.index') }}">{{ __('ui.revisorZone') }}</a></li>
                                        @endif
                                        <li>
                                            <a href="#"
                                                onclick="event.preventDefault(); document.querySelector('#form-logout').submit()">
                                                {{ __('ui.logout') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li class="submenu">
                                    <a href="javascript:;">{{ __('ui.hello') }}, utente!</a>
                                    <ul>
                                        <li><a href="{{ route('login') }}">{{ __('ui.login') }}</a></li>
                                        <li><a href="{{ route('register') }}">{{ __('ui.register') }}</a></li>
                                    </ul>
                                </li>
                            @endauth
                        </ul>

                        <!-- BARRA DI RICERCA -->
                        <form class="search-form-nav" role="search" action="{{ route('article.search') }}"
                            method="GET">
                            <div class="input-group input-group-sm">
                                <input type="search" name="query" class="form-control" placeholder="{{ __('ui.search') }}..."
                                    aria-label="search">
                                <button type="submit" class="btn btn-outline-success">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>

                        <!-- BANDIERE LINGUA -->
                        <div class="d-flex align-items-center gap-1">
                            <x-_locale lang="it"/>
                            <x-_locale lang="uk"/>
                            <x-_locale lang="es"/>
                        </div>

                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>

                </nav>
            </div>
        </div>
    </div>
</header>

<form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
    @csrf
</form>