@extends('admin.dashboard')
@section('pageContent')

<div class="content">
    <div class="row">
        <div class="col-md-9">
            <div style="margin-left: 150px;" class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Edit Teacher</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        <span><b> Success - </b>{{ session('success') }}</span>
                    </div>
                    @endif


                    
                    <div class="container">
                        <form action="{{route('updateTeacher',$teacher->id)}}" method="post" enctype="multipart/form-data"
                            style="max-width: 800px; margin: auto;">
                            @csrf
                            @method('put')
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px; ">Full Name</label>
                                        <input style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter full name" name="fullName" value="{{$teacher->fullName}}">
                                        <div style="color: red;">
                                            @error('fullName')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Designation</label>
                                        <input style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter designation" name="designation" value="{{$teacher->designation}}">
                                        <div style="color: red;">
                                            @error('designation')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Facebook</label>
                                        <textarea style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter facebook" name="fb" cols="60"
                                            rows="1">{{$teacher->fb}}</textarea>
                                        <div style="color: red;">
                                            @error('fb')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Twitter</label>
                                        <textarea style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter twitter" name="tw" cols="60"
                                            rows="1">{{$teacher->tw}}</textarea>
                                        <div style="color: red;">
                                            @error('tw')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Instagram</label>
                                        <textarea style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter instagram" name="inst" cols="60"
                                            rows="1">{{$teacher->inst}}</textarea>
                                        <div style="color: red;">
                                            @error('inst')
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
                                        <div><img src="{{ asset('assets/teacherImages/'.$teacher->image)}}" width=300px name="oldImage"></div><br>
                                        
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