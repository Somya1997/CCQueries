<aside class="menu-sidebar d-none d-lg-block">
            <div class="site-logo" style="margin-left: 45px; margin-top: 10px;">
                <a class="navbar-brand" href="{{ url('/dashboard')}}" >
                    <img src="images/logonew1.png" width="90%" height ="90%" alt="MNNIT"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="table.html">
                                New Complaints</a>
                        </li>
                        @if(Auth::user()->name=='Admin')
                        <li>
                            <a href="{{route('complaints.update')}}">
                                Assigned Complaints</a>
                        </li>
                        <li>
                            <a href="table.html">
                                Review Complaints</a>
                        </li>
                        
                        @endif

                        <li>
                            <a href="form.html">
                                Closed Complaints</a>
                        </li>
                       
                </nav>
            </div>
        </aside>