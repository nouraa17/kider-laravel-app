@extends('admin.dashboard')
@section('pageContent')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Appointments Trash</h4>
                </div>
                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Guardian Name
                                </th>
                                <th>
                                    Guardian Email
                                </th>
                                <th>
                                    Child Name
                                </th>
                                <th>
                                    Child Age
                                </th>
                                <th>
                                    Message
                                </th>
                                <th class="text-right">
                                    Restore
                                </th>
                                <th class="text-right">
                                    Force Delete
                                </th>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appointment)
                                <tr>
                                    <td>
                                        {{$appointment->guardianName}}
                                    </td>
                                    <td>
                                        {{$appointment->guardianEmail}}
                                    </td>
                                    <td>
                                        {{$appointment->childName}}
                                    </td>
                                    <td>{{$appointment->childAge}}
                                    </td>
                                    <td style="max-width:10px; overflow:hidden; text-overflow:ellipsis; white-space: nowrap;">
                                        {{$appointment->message}}
                                    </td>
                                    <td class="text-right">
                                        <a href="restoreAppointment/{{$appointment->id}}" class="btn btn-secondry"
                                            data-original-title="Edit Task"><i
                                                class="now-ui-icons arrows-1_refresh-69"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="FdeleteAppointment/{{$appointment->id}}" class="btn btn-danger"
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