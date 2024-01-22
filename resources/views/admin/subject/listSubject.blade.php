@extends('admin.dashboard')
@section('pageContent')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Classes List</h4>
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
                                    <td><img src="{{ asset('assets/subjectImages/'.$subject->image)}}" width=70px
                                            height=70px alt="img">
                                    </td>
                                    <td class="text-right">
                                        <a href="viewSubject/{{$subject->id}}" class="btn btn-info"
                                            data-original-title="View"><i class="now-ui-icons business_bulb-63"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="editSubject/{{$subject->id}}" class="btn btn-secondry"
                                            data-original-title="Edit"><i class="now-ui-icons ui-2_settings-90"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{route('SdeleteSubject',$subject->id)}}" class="btn btn-danger"
                                            data-original-title="Remove"><i
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
                                <a href="{{route('createSubject')}}" style="font-size: 16px; color:white;"
                                    class="btn btn-primary w-100 py-3" type="submit">Add
                                    Class</a>
                                <a href="{{route('trashSubject')}}" style="font-size: 16px; color:white;"
                                    class="btn btn-primary w-100 py-3" type="submit"><i
                                        class="now-ui-icons files_box"></i> Trash</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection