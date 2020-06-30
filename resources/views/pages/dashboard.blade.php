@extends('main')

@section('heading')
@include('partials._sidebar')
<div class="page-container">
        <!-- Header -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-6 text-left ml-auto ">
                    <h2 style="font-size: 300%;color:darkorange;margin-top:3%"> CC QUERIES</h2>
                </div>
                <div class="col-6 text-right ml-auto">
                    <ul class="navbar-nav ml-auto">
<!-- Authentication Links -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                @if(Auth::user()->name=='Admin')
                                    <a class="dropdown-item" href="{{ route('register') }}">
                                        {{ __('Register a staff') }}
                                    </a>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
@section('body')

        <!-- MENU SIDEBAR-->
        <!-- @include('partials._sidebar') -->
        <!-- END MENU SIDEBAR-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Complaint Number</th>
                                                <th>Student Name</th>
                                                <th>Hostel</th>
                                                <th>Room </th>
                                                <th>Contact</th>
                                                <th>Availability</th>
                                                <th>Nature Of Problem</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($complaints as $complaint)
                                            <tr>
                                                <td>{{$complaint->id}}</td>
                                                <td>{{$complaint->name}}</td>
                                                <td>{{$complaint->hostel}}</td>
                                                <td>{{$complaint->room}}</td>
                                                <td>{{$complaint->phoneno}}</td>
                                                <td >{{$complaint->availabledate}}{{$complaint->availabletime}}</td>
                                        
                                                <td>{{$complaint->nature}}</td>
                                            </tr>
                                            @endforeach
                                       </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop