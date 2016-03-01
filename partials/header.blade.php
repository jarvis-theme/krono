<header>
    <div id="topmenu">
        <nav>
            <ul>
                @if(is_login())
                <li><a href="{{url('member')}}">Selamat datang, {{short_description(user()->nama, 60)}}</a></li>
                <li><a>|</a></li>
                <li><a href="{{url('logout')}}">Logout</a></li>
                @else
                <li><a href="{{url('member/create')}}">Register</a></li>
                <li><a href="{{url('member')}}">Login</a></li>
                @endif
            </ul>

            <ul class="secondary-menu">
                <li>  
                    <div class="search-bar">
                        <form role="search" action="{{url('search')}}" method="post">
                            <input type="search" placeholder="Cari produk" name="search" required>
                            <button type="submit">
                                <i class="fi-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </li>
                <li id="shoppingcartplace">
                    {{shopping_cart()}}
                </li>
            </ul>
        </nav>
    </div>

    @if( logo_image_url() )
    <div class="logo">
        <a href="{{url('home')}}">
            <h1 id="logo" class="image-logo">
                <img src="{{url(logo_image_url())}}" alt="{{Theme::place('title')}}" />
            </h1>
        </a>
    </div>
    @else
    <h1 id="logo">
        <a href="{{url('home')}}"><span>{{ short_description(Theme::place('title'),30) }}</span></a>
    </h1>
    @endif

    <nav class="main">
        <div class="centered-navigation" role="banner">
            <div class="centered-navigation-wrapper">
                <div id="resp-logo">
                    <a href="/"><span>{{ short_description(Theme::place('title'),30) }}</span></a>
                </div>
                <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu"> <i class="fi-list-bullet"></i>  MENU</a>

                <nav role="navigation">
                    <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
                        @foreach(main_menu()->link as $menu)
                        <li class="nav-link"><a href="{{menu_url($menu)}}">{{$menu->nama}}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </nav>
</header>