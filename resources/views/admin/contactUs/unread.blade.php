@extends('admin.dashboard')
@section('pageContent')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Unread Messages</h4>
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
                                            data-original-title="View" onclick="markAsViewed({{ $contact->id }})"><i class="now-ui-icons business_bulb-63"></i></a>
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
<script>
    function markAsViewed(id) {
        fetch(`/markAsViewed/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to mark as viewed');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>


@endsection