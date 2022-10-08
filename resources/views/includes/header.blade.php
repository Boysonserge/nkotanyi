<div class="desktop-nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{route('/')}}">
                <img src="{{asset('assets/images/white-logo.png')}}" alt="logo">
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{route('/')}}" class="nav-link {{request()->routeIs('/') ? 'active' : ''}} ">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('events.index')}}" class="nav-link {{request()->routeIs('events.show') || request()->routeIs('events.index')  ? 'active' : ''}}">
                            Events
                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="{{route('subscriptions.index')}}" class="nav-link {{request()->routeIs('subscriptions.index')  ? 'active' : ''}}">
                            Subscriptions
                        </a>
                    </li>

                 {{--   <li class="nav-item">
                        <a href="" class="nav-link">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Contact Us</a>
                    </li>--}}

                    <li class="nav-item">
                        <a href="{{route('dashboard')}}" class="nav-link {{request()->routeIs('dashboard') ? 'active' : ''}}">
                            @auth()
                                {{auth()->user()->name}}
                            @else
                                Get started

                            @endauth

                        </a>
                    </li>

                    @auth()

                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>

                        </li>

                    @endauth
                </ul>


            </div>
        </nav>
    </div>
</div>
