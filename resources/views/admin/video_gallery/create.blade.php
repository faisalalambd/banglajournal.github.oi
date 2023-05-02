@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Video Section</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="{{route('video_gallery.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">

                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Video Link</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Please Enter Video Link" value="" name="link" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="" name="title" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3"><strong>Show on head</strong></div>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="big_videos">
                                            <label class="custom-control-label" for="customCheck2">Yes</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3"><strong>Show On Home Page</strong></div>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="home_page">
                                            <label class="custom-control-label" for="customCheck1">Yes</label>
                                        </div>
                                    </div>
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