<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CC queries</title>
  <style>
    .table-data3 thead {
    background: #3490dc;
    }

    .table-data3 thead tr th {
        font-size: 12px;
        color: #fff;
        font-weight: 400;
        text-transform: capitalize;
        padding: 10px 20px;
        padding-right: 10px;
    }

    .table-data3 tbody tr {
        border-left: 1px solid #e5e5e5;
        border-right: 1px solid #e5e5e5;
    }

    .table-data3 tbody td {
        border-bottom: 1px solid #f5f5f5;
        background: #fff;
        font-size: 10px;
        color: black;
        padding: 9px 20px;
        padding-right: 10px;
    }

      </style>
  </head>
<body>
    <div class="text-center">
        <h1 style="color:darkorange; align:center">Complaint records</h1>
    </div>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container">
                        <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-bordered table-data3">
                        <thead>
                            <tr>
                                <th>Complaint Number</th>
                                <th>Student Name</th>
                                <th>Registration No</th>
                                <th>Address</th>
                                <th>Nature Of Problem</th>
                                <th>Assigned Staff</th>
                                <th colspan="2"> Staff Remark</th>
                                <th> Complaint Status </th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($complaints as $complaint)
                                <tr>
                                <td>{{$complaint->student_id}}</td>
                                <td>{{$complaint->name}}</td>
                                <td>{{$complaint->regno}}</td>
                                <td>{{$complaint->hostel}}, Room No: {{$complaint->room}}</td>
                                <td>{{$complaint->nature}}</td>
                                <td>{{$complaint->staff}}</td>
                                <td colspan="2">{{$complaint->remark}}</td>
                                @if($complaint->status==3)
                                <td><div style="color:#3490dc;">Successfully closed</div></td>
                                @else
                                <td><div style="color:darkorange;">Failed complaint</div></td>
                                @endif
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>