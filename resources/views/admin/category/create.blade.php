@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: Category</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="{{route('category.store')}}" method="post">
                    @csrf
                        <div class="card-body">

                            <!-- <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Thumbnil Image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="image" required>
                                </div>
                            </div> -->


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Category</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Create Category" value="" name="category" required>
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


                            <!-- <div class="form-group row">
                                <div class="col-sm-3"><strong>Scrolling News</strong></div>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="scroll">
                                            <label class="custom-control-label" for="customCheck1">Yes</label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="form-group row">
                                <div class="col-sm-3"><strong>Head News</strong></div>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="head_news">
                                            <label class="custom-control-label" for="customCheck2">Yes</label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->


                           <!-- <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Category</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric">
                                        <option>Tech</option>
                                        <option>News</option>
                                        <option>Political</option>
                                    </select>
                                </div>
                            </div>--> 
                            <!-- <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Short Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="short_description"></textarea>
                                </div>
                            </div>  -->

                          <!-- <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Description</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="description"></textarea>
                                </div>
                            </div>  -->

                        </div>

                        <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection