@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Update Video</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="{{route('video_gallery.update',[$video_gallery->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Image</strong></label>
                                <div class="col-sm-2">
                                <iframe width="160" height="120" src="{{$video_gallery->link}}"></iframe>></div>
                                <div class="col-sm-7" style="margin-top:60px">
                                    <input type="text" class="form-control" placeholder="Video Link" value="{{$video_gallery->link }}" name="link" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="{{$video_gallery->title}}" name="title" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>On Home Page</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="home_page">
                                        <option>{{$video_gallery->home_page}}</option>
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