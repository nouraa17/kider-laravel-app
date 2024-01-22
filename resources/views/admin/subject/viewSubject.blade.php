@extends('admin.dashboard')
@section('pageContent')

<div class="content">
    <div class="row">
        <div class="col-md-9">
            <div style="margin-left: 150px;" class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Show Class</h4>
                </div>
                <div class="card-body">



                    <div class="container">
                        <form  enctype="multipart/form-data"
                            style="max-width: 800px; margin: auto;">
                            @csrf
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px; ">Class Name</label>
                                        <p style="font-size: 16px;" type="text" 
                                            placeholder="Enter class name" name="subjectName">{{$subject->subjectName}}</p>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Teacher</label>
                                        <p style="font-size: 16px;" type="text" >{{$subject->teacherId ? $subject->teacher->fullName : 'N/A'}}</p>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Price</label>
                                        <p style="font-size: 16px;" type="text" 
                                            placeholder="Enter price" name="price" value="">{{$subject->price}}</p>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Age Range</label>
                                        <p style="font-size: 16px;" type="text" 
                                            placeholder="Enter age range" name="age" value="{{$subject->age}}">{{$subject->age}}</p>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Time Slot</label>
                                        <p style="font-size: 16px;" type="text"  value="">{{$subject->time}}</p>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Capacity</label>
                                        <p style="font-size: 16px;" type="text" >{{$subject->capacity}}</p>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group-filegroup">
                                        <label style="font-size: 16px;" for="image">Image</label>
                                        <div><img src="{{ asset('assets/subjectImages/'.$subject->image)}}" width=300px name="oldImage"></div><br>
                                        
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