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
                                            <tr>
                                                <td>1</td>
                                                <td>Siddharth</td>
                                                <td>PG hostel</td>
                                                <td>44</td>
                                                <td class="process">Processed</td>
                                                <td>8381825891</td>
                                                <td>wifi not working</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-28 01:22</td>
                                                <td>Mobile</td>
                                                <td>Samsung S8 Black</td>
                                                <td>44</td>
                                                <td class="process">Processed</td>
                                                <td>$756.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>Game</td>
                                                <td>Game Console Controller</td>
                                                <td>44</td>
                                                <td class="denied">Denied</td>
                                                <td>$22.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td>44</td>
                                                <td class="denied">Denied</td>
                                                <td>$1199.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-25 19:03</td>
                                                <td>Accessories</td>
                                                <td>USB 3.0 Cable</td>
                                                <td>44</td>
                                                <td class="process">Processed</td>
                                                <td>$10.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>Accesories</td>
                                                <td>Smartwatch 4.0 LTE Wifi</td>
                                                <td>44</td>
                                                <td class="denied">Denied</td>
                                                <td>$199.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-24 19:10</td>
                                                <td>Camera</td>
                                                <td>Camera C430W 4k</td>
                                                <td>44</td>
                                                <td class="process">Processed</td>
                                                <td>$699.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-22 00:43</td>
                                                <td>Computer</td>
                                                <td>Macbook Pro Retina 2017</td>
                                                <td>44</td>
                                                <td class="process">Processed</td>
                                                <td>$10.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td>44</td>
                                                <td class="denied">Denied</td>
                                                <td>$1199.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td>44</td>
                                                <td class="denied">Denied</td>
                                                <td>$1199.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td>44</td>
                                                <td class="denied">Denied</td>
                                                <td>$1199.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td>44</td>
                                                <td class="denied">Denied</td>
                                                <td>$1199.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td>44</td>
                                                <td class="denied">Denied</td>
                                                <td>$1199.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td>44</td>
                                                <td class="denied">Denied</td>
                                                <td>$1199.00</td>
                                                <td>lan</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>Mobile</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td>44</td>
                                                <td class="denied">Denied</td>
                                                <td>$1199.00</td>
                                                <td>lan</td>
                                            </tr>
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