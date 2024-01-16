@extends('admin.dashboard')
@section('pageContent')

<div class="content">
    <div class="row">
        <div class="col-md-9">
            <div style="margin-left: 150px;" class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Show Appointment</h4>
                </div>
                <div class="card-body">


                    
                    <div class="container">
                        <form style="max-width: 800px; margin: auto;">
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px; ">Guardian Name</label>
                                        <p style="font-size: 16px;" type="text" 
                                             name="guardianName">{{$appointment->guardianName}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Guardian Email</label>
                                        <p style="font-size: 16px;" type="text"
                                             name="guardianEmail">{{$appointment->guardianEmail}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Child Name</label>
                                        <p style="font-size: 16px;" type="text"
                                             name="childName">{{$appointment->childName}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Child Age</label>
                                        <p style="font-size: 16px;" type="text"
                                            name="childAge">{{$appointment->childAge}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Message</label>
                                        <p style="font-size: 16px;" type="text"
                                            name="message" cols="60"
                                            rows="3">{{$appointment->message}}</p>
                                    </div>

                                </div>
                            </div>

                            
                        </form>
                    </div>
                </div>



                
            </div>
        </div>
    </div>
</div>

@endsection