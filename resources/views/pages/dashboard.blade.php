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

    
            <div class="main-content">
            <!-- @if(Session::has('success'))
    <div class="alert-box alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                    </div>
               
                @endif -->
                
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
                                                    @elseif(Request::is('assigned'))
                                                        <th>Assigned Staff</th>
                                                    @else
                                                        <th>Assigned Staff</th>
                                                        <th> Staff Remark</th>
                                                        @if(Request::is('review'))
                                                        <th> Complaints Status</th>
                                                        @endif 
                                                    @endif

                                                @elseif(Request::is('pending'))
                                                    <th>Staff Remark</th>

                                                @else    
                                                    @if(Request::is('dashboard'))
                                                    <th> Complaint Status </th>
                                                    @else
                                                    <th>Staff Remark</th>
                                                    @endif
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
<!-- --------------------------------------------  Admin Dashboard Properties ------------------------------------------------------------------ -->
                                                    @if(Auth::user()->name=='Admin')
                                                        <!-- New Complaints -->
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

                                                        @elseif(Request::is('assigned'))
                                                            <td>{{$complaint->staff}}</td>
                                                        <!-- For review And closed of admin -->
                                                        @else
                                                            <td>{{$complaint->staff}}</td>
                                                            <td >
                                                            @if($complaint->status==3)
                                                               <a href="" onclick="remarkfunc('{{$complaint->remark}}')" style="color:darkorange;">{{ substr($complaint->remark,0,50) }}{{ strlen($complaint->remark)>50 ? "...":"" }}</a>
                                                            @else
                                                            <div style="color:darkorange;">Failed complaint</div>
                                                            @endif      
                                                            </td>
                                                            @if(Request::is('review'))
                                                            <td >
                                                                <div class="btn-group" name="status" id="status">
                                                                    <a class="btn btn-secondary text-white py-2 px-2" href="/actionedit/{{$complaint->student_id}}?success" type="submit" >Success</a> &nbsp; &nbsp;
                                                                    <a  class="btn btn-primary btn-inline text-white py-2 px-3" type="submit" href="/actionedit/{{$complaint->student_id}}?fail" name="failed">Failed</a>
                                                                 </div>
                                                            </td>
                                                            @endif
                                                        @endif
<!-- ------------------------------------------------ Staff Dashboard Property --------------------------------------------------------------- -->
                                                    @else
                                                    @if(Request::is('dashboard'))
                                                    <td ><div class="btn-group" name="status" id="status">
                                                            <a class="btn btn-secondary text-white py-2 px-2" href="/actionedit/{{$complaint->student_id}}?success"  >Success</a> &nbsp; &nbsp;
                                                            <a  class="btn btn-primary btn-inline text-white py-2 px-3"  onclick="myFunction('{{$complaint->student_id}}')" name="failed">Failed</a>
                                                        </div>
                                                         <div id="{{$complaint->student_id}}" style="display:none;" >
                                                            <form action="{{url('actionedit/'.$complaint->student_id)}}" method="GET"> 
                                                                <input type="text" class="form-control" placeholder="Reason of failure.." name="remark"/> 
                                                                 <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    @elseif(Request::is('pending'))
                                                        <td>
                                                            @if($complaint->status==2)
                                                            <div style="color:#3490dc;">Successfully closed</div>
                                                            @elseif($complaint->status==-1)
                                                            <a href="" onclick="remarkfunc('{{$complaint->remark}}')" style="color:darkorange;">{{ substr($complaint->remark,0,50) }}{{ strlen($complaint->remark)>50 ? "...":"" }}</a>
                                                            @endif
                                                        </td> 
                                                    @else
                                                        <td>
                                                            @if($complaint->status==3)
                                                            <div style="color:#3490dc;">Successfully closed</div>
                                                            @else
                                                            <a href="" onclick="remarkfunc('{{$complaint->remark}}')" style="color:darkorange;">{{ substr($complaint->remark,0,50) }}{{ strlen($complaint->remark)>50 ? "...":"" }}</a>
                                                             @endif
                                                        </td>
                                                    @endif
                                                    @endif
                                                    
                                                </tr>
                                                 @endforeach
                                        </tbody>
                                    </table>
                            
                                    <div class="inline">
                                        <div class="text-left">
                                        {{ $complaints->links() }}
                                        </div>
                                        @if(Request::is('closed') && Auth::user()->name=='Admin')
                                        <div class="text-right">
                                        <a href='/pdfview' class="btn btn-primary">Export PDF</a>
                                        </div>
                                        @endif
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
<script>

    function remarkfunc(remark)
    {
    console.log('oohh');
        alert(remark);
    }
    function myFunction( student_id)
    {
        console.log('register is set');
        document.getElementById(student_id).style.display="block";
    }
</script>
@stop