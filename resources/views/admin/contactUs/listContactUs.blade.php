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
                                    <td
                                        style="max-width:10px; overflow:hidden; text-overflow:ellipsis; white-space: nowrap;">
                                        {{$contact->message}}
                                    </td>
                                    <td class="text-right">
                                        <a href="viewContactUs/{{$contact->id}}" class="btn btn-info"
                                            data-original-title="View" onclick="markAsViewed({{ $contact->id }})"><i
                                                class="now-ui-icons business_bulb-63"></i></a>
                                    </td>

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>


                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group" style="font-size: 13px; position: relative; text-align: center;">
                                {{ $contacts->links() }}
                            </div>
                        </div>
                    </div>



                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{route('unreadContactUs')}}" style="font-size: 16px; color:white;"
                                    class="btn btn-primary w-100 py-3" type="submit"><i
                                        class="now-ui-icons files_box"></i> Unread messages</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function markAsViewed(id) {
        fetch(`/markAsViewed/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
        })
    }
</script>

@endsection