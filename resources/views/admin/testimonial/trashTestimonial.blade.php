@extends('admin.dashboard')
@section('pageContent')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="margin-left: 20px;" class="title">Testimonials Trash</h4>
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
                                    Restore
                                </th>
                                <th class="text-right">
                                    Force Delete
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
                                        <a href="restoreTestimonial/{{$testimonial->id}}" class="btn btn-secondry" data-original-title="Edit Task"><i
                                                class="now-ui-icons arrows-1_refresh-69"></i></a>
                                    </td>
                                    <td class="text-right">
                                        <a href="FdeleteTestimonial/{{$testimonial->id}}" class="btn btn-danger" data-original-title="Remove" onclick="return confirm('Are you sure you want to delete?')"><i
                                                class="now-ui-icons ui-1_simple-remove"></i></a>
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

@endsection