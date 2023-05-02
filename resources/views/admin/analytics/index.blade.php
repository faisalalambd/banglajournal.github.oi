@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Analytics Code</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="{{route('analytic.create')}}" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr class="text-center">

                                        <th>Analytics Code</th>
                                        
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>
                                @foreach($analytics as $analytics)
                                    <tr class="text-center">

                                        <td>{!!$analytics->code_analytics!!}</td>
                                        
                                        <td style="display: inline-flex;">
                                            <a href="{{route('analytic.edit',[$analytics->id])}}" class="btn btn-icon btn-primary">Edit</a>
                                            
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

</section>

@endsection