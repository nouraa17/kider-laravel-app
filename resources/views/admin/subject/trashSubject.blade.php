@extends('admin.dashboard')
@section('pageContent')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Classes Trash</h4>
                </div>
                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Class Name
                                </th>
                                <th>
                                    Teacher Name
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Age
                                </th>
                                <th>
                                    Time
                                </th>
                                <th>
                                    Capacity
                                </th>
                                <th>
                                    Image
                                </th>
                               
                                <th class="text-right">
                                    Restore
                                </th>
                                <th class="text-right">
                                Force Delete
                                </th>
                            </thead>
                            <tbody>
                                @foreach($subjects as $subject)
                                <tr>
                                    <td>
                                        {{$subject->subjectName}}
                                    </td>
                                    <td>
                                        {{$subject->teacherId ? $subject->teacher->fullName : 'N/A'}}
                                    </td>
                                    <td>
                                        {{$subject->price}}
                                    </td>
                                    <td>
                                        {{$subject->age}}
                                    </td>
                                    <td>
                                        {{$subject->time}}
                                    </td>
                                    <td>
                                        {{$subject->capacity}}
                                    </td>
                                    <td><img src="{{ asset('assets/subjectImages/'.$subject->image)}}"
                                            width=70px height=70px alt="img">
                                    </td>
                                    <td class="text-right">
                                        <a href="restoreSubject/{{$subject->id}}" class="btn btn-secondry"
                                            data-original-title="Edit Task"><i
                                                class="now-ui-icons arrows-1_refresh-69"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="FdeleteSubject/{{$subject->id}}" class="btn btn-danger"
                                            data-original-title="Remove"
                                            onclick="return confirm('Are you sure you want to delete?')"><i
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