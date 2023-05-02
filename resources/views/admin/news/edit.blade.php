@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Update News</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="{{route('news.update',[$news->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Thumbnil Image</strong></label>
                                <div class="col-sm-2">
                                <img src="{{asset($news->image)}}" alt="post"  width="160" height="120"></div>
                                <div class="col-sm-7" style="margin-top:60px">
                                    <input type="file" class="default" value="" name="image" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Title</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Title" value="{{$news->title}}" name="title" required>
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
                                <label class="col-sm-3 col-form-label"><strong>Scrolling News</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="scroll">
                                        <option>{{$news->scroll}}</option>
                                        <option>Off</option>
                                        <option>on</option>
                                    </select>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Head News</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="head_news">
                                        <option>{{$news->head_news}}</option>
                                        <option>Off</option>
                                        <option>on</option>
                                    </select>
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Show On Home Page</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="head_news">
                                        <option>{{$news->home_page}}</option>
                                        <option>Off</option>
                                        <option>on</option>
                                    </select>
                                </div>
                            </div> 


                            
                           <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Category</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="category">
                                        <option>{{$news->category}}</option>
                                        @foreach($categories as $category)
                                            <option>{{$category->category_name}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Short Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="short_description" value="{{$news->short_description}}">{{$news->short_description}}</textarea>
                                </div>
                            </div> 

                          <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="description" value="{{$news->description}}">{{$news->description}}</textarea>
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