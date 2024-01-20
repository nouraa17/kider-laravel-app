@extends('admin.dashboard')
@section('pageContent')

<div class="content">
    <div class="row">
        <div class="col-md-9">
            <div style="margin-left: 150px;" class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Show Teacher</h4>
                </div>
                <div class="card-body">


                    
                    <div class="container">
                        <form style="max-width: 800px; margin: auto;">
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px; ">Full Name</label>
                                        <p style="font-size: 16px;" type="text" 
                                            name="fullName">{{$teacher->fullName}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Designation</label>
                                        <p style="font-size: 16px;" type="text"
                                            name="designation">{{$teacher->designation}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Facebook</label>
                                        <p style="font-size: 16px;" type="text"
                                             name="fb" cols="60"
                                            rows="1">{{$teacher->fb}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Twitter</label>
                                        <p style="font-size: 16px;" type="text"
                                             name="tw" cols="60"
                                            rows="1">{{$teacher->tw}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Instagram</label>
                                        <p style="font-size: 16px;" type="text"
                                             name="inst" cols="60"
                                            rows="1">{{$teacher->inst}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group-filegroup">
                                        <label style="font-size: 16px;" for="image">Image</label>
                                        <div><img src="{{ asset('assets/teacherImages/'.$teacher->image)}}" width=300px name="oldImage"></div><br>
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