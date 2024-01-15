@extends('admin.dashboard')
@section('pageContent')

<div class="content">
    <div class="row">
        <div class="col-md-9">
            <div style="margin-left: 150px;" class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Show Testimonial</h4>
                </div>
                <div class="card-body">


                    
                    <div class="container">
                        <form style="max-width: 800px; margin: auto;">
                            @csrf
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px; ">Name</label>
                                        <p style="font-size: 16px;" type="text" 
                                            placeholder="Enter name" name="name">{{$testimonial->name}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Profession</label>
                                        <p style="font-size: 16px;" type="text"
                                            placeholder="Enter profession" name="profession">{{$testimonial->profession}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Description</label>
                                        <p style="font-size: 16px;" type="text"
                                            placeholder="Enter description" name="description" cols="60"
                                            rows="3">{{$testimonial->description}}</p>
                                    </div>

                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group-filegroup">
                                        <label style="font-size: 16px;" for="image">Image</label>
                                        <div><img src="{{ asset('assets/testimonialImages/'.$testimonial->image)}}" width=300px name="oldImage"></div><br>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p style="font-size: 16px; margin-right: 680px;" name="published">{{$testimonial->published? "Published": "Not Published"}}</p>                                   </div>
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