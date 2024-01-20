@extends('admin.dashboard')
@section('pageContent')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Testimonials List</h4>
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
                                    Show
                                </th>
                                <th class="text-right">
                                    Edit
                                </th>
                                <th class="text-right">
                                    Delete
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
                                        <a href="viewTeacher/{{$teacher->id}}" class="btn btn-info" data-original-title="View"><i
                                                class="now-ui-icons business_bulb-63"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="editTeacher/{{$teacher->id}}" class="btn btn-secondry" data-original-title="Edit"><i
                                                class="now-ui-icons ui-2_settings-90"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{route('SdeleteTeacher',$teacher->id)}}" class="btn btn-danger" data-original-title="Remove"><i
                                                class="now-ui-icons ui-1_simple-delete"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{route('createTeacher')}}" style="font-size: 16px; color:white;"
                                    class="btn btn-primary w-100 py-3" type="submit">Add
                                    Teacher</a>
                                    <a href="{{route('trashTeacher')}}" style="font-size: 16px; color:white;"
                                    class="btn btn-primary w-100 py-3" type="submit"><i class="now-ui-icons files_box"></i> Trash</a>
                                    </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection