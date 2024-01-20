@extends('admin.dashboard')
@section('pageContent')

<div class="content">
    <div class="row">
        <div class="col-md-9">
            <div style="margin-left: 150px;" class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Show Contact</h4>
                </div>
                <div class="card-body">


                    
                    <div class="container">
                        <form style="max-width: 800px; margin: auto;">
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px; ">Name</label>
                                        <p style="font-size: 16px;" type="text" 
                                             name="guardianName">{{$contact->name}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Email</label>
                                        <p style="font-size: 16px;" type="text"
                                             name="guardianEmail">{{$contact->email}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Subject</label>
                                        <p style="font-size: 16px;" type="text"
                                            name="childAge">{{$contact->subject}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Message</label>
                                        <p style="font-size: 16px;" type="text"
                                            name="message" cols="60"
                                            rows="3">{{$contact->message}}</p>
                                    </div>
                                </div>
                            </div>

                            <a href="{{route('deleteContact',$contact->id)}}" class="btn btn-danger"
                                            data-original-title="Remove"
                                            onclick="return confirm('Are you sure you want to delete?')"><i
                                                class="now-ui-icons ui-1_simple-remove"> Delete</i></a>

                            
                        </form>
                    </div>
                </div>



                
            </div>
        </div>
    </div>
</div>

@endsection