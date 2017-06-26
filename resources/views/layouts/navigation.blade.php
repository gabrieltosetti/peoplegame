    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ asset('media/profile_small.jpg') }}" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="{{ Request::fullUrl() === route('home') ? 'active' : '' }}" >
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Página Inicial</span></a>
                </li>
                <!--
                                            JOGOS
                -->
                <li class="{{ Request::segment(1) === 'jogos' ? 'active' : '' }}" >
                    <a href="#"><i class="fa fa-wrench"></i> <span class="nav-label">Jogos</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ Request::fullUrl() === route('lol') ? 'active' : '' }}" ><a href="{{ route('lol') }}">LOL</a></li>
                        <li class="{{ Request::fullUrl() === route('cs') ? 'active' : '' }}" ><a href="{{ route('cs') }}">CS</a></li>
                        <li class="{{ Request::fullUrl() === route('just_dance') ? 'active' : '' }}" ><a href="{{ route('just_dance') }}">Just Dance</a></li>
                        <li class="{{ Request::fullUrl() === route('fifa') ? 'active' : '' }}" ><a href="{{ route('fifa') }}">FIFA</a></li>
                    </ul>
                </li>
                <!--/JOGOS-->
            </ul>

        </div>
    </nav>