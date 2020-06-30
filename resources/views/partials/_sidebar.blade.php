<aside class="menu-sidebar d-none d-lg-block">
            <div class="site-logo" style="margin-left: 45px; margin-top: 10px;">
                <a class="navbar-brand" href="{{ url('/dashboard')}}" >
                    <img src="images/logonew1.png" width="90%" height ="90%" alt="MNNIT"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="{{ Request::is('dashboard')? 'active':'' }}">
                            <a href="/dashboard">
                                New Complaints</a>
                        </li>
                        @if(Auth::user()->name=='Admin')
                        <li class="{{ Request::is('assigned')? 'active':'' }}">
                            <a href="/assigned">
                                Assigned Complaints</a>
                        </li>
                        <li class="{{ Request::is('review')? 'active':'' }}">
                            <a href="/review">
                                Review Complaints</a>
                        </li>
                        
                        @endif

                        <li class="{{ Request::is('closed')? 'active':'' }}">
                        <a href="/closed">
                                Closed Complaints</a>
                        </li>
                       
                </nav>
            </div>
        </aside>