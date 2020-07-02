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


    <body onload="hidefield()">
            <div class="main-content">
            @if(Session::has('success'))
    <div class="alert-box alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                    </div>
               
                @endif
                
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
                                                <th>Registration No</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                @if(Request::is('dashboard'))
                                                    <th>Available date and time</th>
                                                @endif
                                                <th>Nature Of Problem</th>
                                                @if(Auth::user()->name=='Admin') 
                                                    @if(Request::is('dashboard'))
                                                        <th>Assign Staff</th>
                                                    @else
                                                        <th>Assigned Staff</th>
                                                    @endif
                                                @else
                                                   <th colspan="2"> Complaint Status </th>
                                                   <!-- <th></th> -->
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($complaints as $complaint)
                                                <tr>
                                                    <td>{{$complaint->student_id}}</td>
                                                    <td>{{$complaint->name}}</td>
                                                    <td>{{$complaint->regno}}</td>
                                                    <td>{{$complaint->hostel}}, Room No: {{$complaint->room}}</td>
                                                    <td>{{$complaint->phoneno}}</td>
                                                    @if(Request::is('dashboard'))
                                                        <td>{{$complaint->availabledate}} {{$complaint->availabletime}}</td>
                                                    @endif
                                                    <td>{{$complaint->nature}}</td>
                                                   
                                                    @if(Auth::user()->name=='Admin')
                                                        @if(Request::is('dashboard'))
                                                            <td><div class="dropdown" >
                                                                    <button class="btn btn-primary dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                                    Choose Staff
                                                                        <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu"  aria-labelledby="dropdownMenu1">
                                                                    @foreach($staffs as $staff)
                                                                        <li><a class="dropdown-item" href="staffassigned/{{$complaint->student_id}}/{{$staff->name}}"   >{{$staff->name}}</a></li>
                                                                    @endforeach
                                                                    </ul>
                                                                    
                                                                </div>
                                                            </td>
                                                        @else
                                                            <td>{{$complaint->staff}}</td>
                                                            
                                                        @endif
                                                    @else
                                                    <td ><div class="btn-group" name="status" id="status"><a class="btn btn-secondary text-white py-2 px-2" href="/actionedit/{{$complaint->student_id}}?success" type="submit" >Success</a> &nbsp; &nbsp;
                                                    <a  class="btn btn-primary btn-inline text-white py-2 px-3" type="submit" name="failed">Failed</a>
                                                    </div>
                                                    </td>
                                                    @endif
                                                </tr>
                                                <div id="div1"> <input type="text" class="form-control" placeholder="Reson of failure.." name="remark"/></div>
                                            @endforeach
                                        </tbody>
                                    </table>
                            
                                    <div class="text-center">
                                        {{ $complaints->links() }}
                                    </div>
                                </div>
                               
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
 </body>   
@stop