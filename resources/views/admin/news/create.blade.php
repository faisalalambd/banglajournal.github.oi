@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: News</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Thumbnil Image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="image" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="" name="title" required>
                                </div>
                            </div>
<!-- 

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Email</strong></label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="" name="email" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label"><strong>Password</strong></label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" value="" name="password" required>
                                </div>
                            </div>


                            <fieldset class="form-group">
                                <div class="row">
                                    <div class="col-form-label col-sm-3 pt-0"><strong>On Headlines</strong></div>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3">yes</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Second Radio</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>-->


                            <div class="form-group row">
                                <div class="col-sm-3"><strong>Scrolling News</strong></div>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="scroll">
                                            <label class="custom-control-label" for="customCheck1">Yes</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3"><strong>Head News</strong></div>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="head_news">
                                            <label class="custom-control-label" for="customCheck2">Yes</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3"><strong>Home Page Show</strong></div>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="home_page">
                                            <label class="custom-control-label" for="customCheck3">Yes</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-3"><strong>Section Head News</strong></div>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4" name="category_head">
                                            <label class="custom-control-label" for="customCheck4">Yes</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                           <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Category</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="category">
                                        <option>Select  The Category</option>
                                        @foreach($categories as $category)
                                            <option>{{$category->category_name}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Short Description</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="" name="short_description" required>
                                </div>
                            </div>


                            

                          <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="description"></textarea>
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