@extends('admin.dashboard')
@section('pageContent')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Testimonials List</h4>
                </div>
                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Profession
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Published
                                </th>
                                <th class="text-right">
                                    Show
                                </th>
                                <th class="text-right">
                                    Edit
                                </th>
                                <th class="text-right">
                                    Delete
                                </th>
                            </thead>
                            <tbody>
                                @foreach($testimonials as $testimonial)
                                <tr>
                                    <td>
                                        {{$testimonial->name}}
                                    </td>
                                    <td>
                                        {{$testimonial->profession}}
                                    </td>
                                    <td>
                                        {{$testimonial->description}}
                                    </td>
                                    <td><img src="{{ asset('assets/testimonialImages/'.$testimonial->image)}}"
                                            width=70px height=70px alt="img">
                                    </td>
                                    <td>
                                        {{$testimonial->published}}
                                    </td>
                                    <td class="text-right">
                                        <a href="viewTestimonial/{{$testimonial->id}}" class="btn btn-info" data-original-title="View"><i
                                                class="now-ui-icons business_bulb-63"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="editTestimonial/{{$testimonial->id}}" class="btn btn-secondry" data-original-title="Edit"><i
                                                class="now-ui-icons ui-2_settings-90"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="SdeleteTestimonial/{{$testimonial->id}}" class="btn btn-danger" data-original-title="Remove"><i
                                                class="now-ui-icons ui-1_simple-delete"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{route('createTestimonial')}}" style="font-size: 16px; color:white;"
                                    class="btn btn-primary w-100 py-3" type="submit">Add
                                    Testimonial</a>
                                    <a href="{{route('trashTestimonial')}}" style="font-size: 16px; color:white;"
                                    class="btn btn-primary w-100 py-3" type="submit"><i class="now-ui-icons files_box"></i> Trash</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection