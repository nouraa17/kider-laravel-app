@extends('admin.dashboard')
@section('pageContent')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Contact Us List</h4>
                </div>
                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Subject
                                </th>
                                <th>
                                    Message
                                </th>
                                <th class="text-right">
                                    Show
                                </th>
                                
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>
                                        {{$contact->name}}
                                    </td>
                                    <td>
                                        {{$contact->email}}
                                    </td>
                                    <td>{{$contact->subject}}
                                    </td>
                                    <td style="max-width:10px; overflow:hidden; text-overflow:ellipsis; white-space: nowrap;">
                                        {{$contact->message}}
                                    </td>
                                    <td class="text-right">
                                        <a href="viewContactUs/{{$contact->id}}" class="btn btn-info"
                                            data-original-title="View"><i class="now-ui-icons business_bulb-63"></i></a>
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