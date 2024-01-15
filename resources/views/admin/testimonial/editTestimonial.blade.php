@extends('admin.dashboard')
@section('pageContent')

<div class="content">
    <div class="row">
        <div class="col-md-9">
            <div style="margin-left: 150px;" class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Edit Testimonial</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        <span><b> Success - </b>{{ session('success') }}</span>
                    </div>
                    @endif


                    
                    <div class="container">
                        <form action="{{route('updateTestimonial',$testimonial->id)}}" method="post" enctype="multipart/form-data"
                            style="max-width: 800px; margin: auto;">
                            @csrf
                            @method('put')
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px; ">Name</label>
                                        <input style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter name" name="name" value="{{$testimonial->name}}">
                                        <div style="color: red;">
                                            @error('name')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Profession</label>
                                        <input style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter profession" name="profession" value="{{$testimonial->profession}}">
                                        <div style="color: red;">
                                            @error('profession')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Description</label>
                                        <textarea style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter description" name="description" cols="60"
                                            rows="3">{{$testimonial->description}}</textarea>
                                        <div style="color: red;">
                                            @error('description')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group-filegroup">
                                        <label style="font-size: 16px;" for="image">Image</label>
                                        <div><img src="{{ asset('assets/testimonialImages/'.$testimonial->image)}}" width=300px name="oldImage"></div><br>
                                        
                                        <div class="input-group">
                                            <input type="file" id="image" name="image" class="form-control">
                                        </div>
                                        <div style="color: red;">
                                            @error('image')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px; margin-right: 680px;">Puplished</label>
                                        <div class="checkbox">
                                            <label><input style="margin-right:10px;" type="checkbox" name="published"
                                            @checked($testimonial->published)>Published</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button style="font-size: 16px;" class="btn btn-primary w-100 py-3"
                                            type="submit">Submit</button>
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