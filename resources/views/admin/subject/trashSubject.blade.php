@extends('admin.dashboard')
@section('pageContent')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Teachers Trash</h4>
                </div>
                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                    Full Name
                                </th>
                                <th>
                                    Designation
                                </th>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Facebook
                                </th>
                                <th>
                                    Twitter
                                </th>
                                <th>
                                    Instagram
                                </th>
                                <th class="text-right">
                                    Restore
                                </th>
                                <th class="text-right">
                                    Force Delete
                                </th>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>
                                        {{$teacher->fullName}}
                                    </td>
                                    <td>
                                        {{$teacher->designation}}
                                    </td>
                                    <td><img src="{{ asset('assets/teacherImages/'.$teacher->image)}}"
                                            width=70px height=70px alt="img">
                                    </td>
                                    <td><a href="{{$teacher->fb}}" target="_blank" style="color:blue;">Go to Facebook</a>
                                    </td>
                                    <td><a href="{{$teacher->tw}}" target="_blank" style="color:darkcyan;">Go to Twitter</a>
                                    </td>
                                    <td><a href="{{$teacher->inst}}" target="_blank" style="color:purple;">Go to Instagram</a>
                                    </td>
                                    <td class="text-right">
                                        <a href="restoreTeacher/{{$teacher->id}}" class="btn btn-secondry" data-original-title="Edit Task"><i
                                                class="now-ui-icons arrows-1_refresh-69"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{route('FdeleteTeacher',$teacher->id)}}" class="btn btn-danger" data-original-title="Remove" onclick="return confirm('Are you sure you want to delete?')"><i
                                                class="now-ui-icons ui-1_simple-remove"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection