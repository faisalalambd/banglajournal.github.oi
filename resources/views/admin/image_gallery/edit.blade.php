@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Update Image</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="{{route('image_gallery.update',[$image_gallery->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Image</strong></label>
                                <div class="col-sm-2">
                                <img src="{{asset($image_gallery->image)}}" alt="post"  width="160" height="120"></div>
                                <div class="col-sm-7" style="margin-top:60px">
                                    <input type="file" class="default" value="" name="image" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="{{$image_gallery->title}}" name="title" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>On Home Page</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="home_page">
                                        <option>{{$image_gallery->home_page}}</option>
                                        <option>Off</option>    
                                        <option>on</option>
                                    </select>
                                </div>
                            </div> 

                            


                        </div>

                        <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection