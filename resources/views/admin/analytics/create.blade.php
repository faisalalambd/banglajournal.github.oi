@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Analytics</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="{{route('analytic.store')}}" method="post">
                    @csrf
                        <div class="card-body">
                          <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Paste Analytics Code Here</strong></label>
                                <div class="col-sm-9">
                                    <textarea class="summernote" name="code_analytics"></textarea>
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