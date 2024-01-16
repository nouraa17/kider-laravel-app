@extends('admin.dashboard')
@section('pageContent')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Appointments List</h4>
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
                                    Show
                                </th>
                                <th class="text-right">
                                    Delete
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
                                        <a href="viewAppointment/{{$appointment->id}}" class="btn btn-info"
                                            data-original-title="View"><i class="now-ui-icons business_bulb-63"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="SdeleteAppointment/{{$appointment->id}}" class="btn btn-danger"
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
                                <a href="{{route('trashAppointment')}}" style="font-size: 16px; color:white;"
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