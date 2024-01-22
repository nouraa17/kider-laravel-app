@extends('admin.dashboard')
@section('pageContent')

<div class="content">
    <div class="row">
        <div class="col-md-9">
            <div style="margin-left: 150px;" class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Add Class</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        <span><b> Success - </b>{{ session('success') }}</span>
                    </div>
                    @endif



                    <div class="container">
                        <form action="{{route('storeSubject')}}" method="post" enctype="multipart/form-data"
                            style="max-width: 800px; margin: auto;">
                            @csrf
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px; ">Class Name</label>
                                        <input style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter class name" name="subjectName" value="">
                                        <div style="color: red;">
                                            @error('subjectName')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Teacher</label>
                                        <select name="teacherId" id="teacherId" class="form-control"
                                            style="font-size: 16px;">
                                            <option value="">Select Teacher</option>
                                            @foreach ($teachers as $teacher)
                                            <option value="{{$teacher->id}}">{{$teacher->fullName}}</option>
                                            @endforeach
                                        </select>
                                        <div style="color: red;">
                                            @error('teacherId')
                                            {{ $message }}
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Price</label>
                                        <input style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter price" name="price" value="">
                                        <div style="color: red;">
                                            @error('price')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Age Range</label>
                                        <input style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter age range" name="age" value="">
                                        <div style="color: red;">
                                            @error('age')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Time Slot</label>
                                        <input style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter time slot" name="time" value="">
                                        <div style="color: red;">
                                            @error('time')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="font-size: 16px;">Capacity</label>
                                        <input style="font-size: 16px;" type="text" class="form-control"
                                            placeholder="Enter capacity" name="capacity" value="">
                                        <div style="color: red;">
                                            @error('capacity')
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