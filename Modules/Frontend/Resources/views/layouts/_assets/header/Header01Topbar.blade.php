<header class="la-header-01-topbar">
    <div class="la-header-01-topbar-Topber">
        @for ($i = 1; $i <= 7; $i++)
        <a href="{{ url('/') }}">
            <img src="{{ Module::asset('frontend:img/icon/icontopbar'.$i.'.png') }}" alt="icon">
        </a>
        @endfor

    </div>
    <div class="la-header-01-topbar-navbar">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />

        <div class="la-header-01-topbar-navbar-content">
            <div class="la-header-01-topbar-navbar-content-all">
                <div class="la-header-01-topbar-navbar-content-hidden">
                    <label for="my-drawer-3" class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </label>
                </div>
                <div class="la-header-01-topbar-navbar-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ Module::asset('frontend:img/LOGO.png') }}" alt="logo">
                    </a>
                </div>
                <div class="la-header-01-topbar-navbar-content-block">
                    <ul class="la-header-01-topbar-navbar-content-horizontal">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/about')}}">About</a></li>
                        <li><a href="{{url('/new-events')}}">News&Events</a></li>
                        <li><a href="{{url('/products')}}">Products</a></li>
                        <li><a href="{{url('/contacts')}}">Contacts</a></li>
                    </ul>
                </div>
                <button>EN</button>

                
                
            </div>

        </div>
        <div class="la-header-01-topbar-navbar-side">
            <label for="my-drawer-3" class="drawer-overlay"></label> 
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/new-events')}}">News&Events</a></li>
                <li><a href="{{url('/products')}}">Products</a></li>
                <li><a href="{{url('/contacts')}}">Contacts</a></li>
            </ul>
        </div>

    </div>

</header>


