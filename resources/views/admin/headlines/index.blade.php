@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Headlines Summary</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                <tr class="text-center">

                                <th>Title</th>
                                <th>Image</th>
                                <th>Short Description</th>
                                <th>Scroll</th>
                                <th>Head News</th>
                                <th>Category</th>
                                
                                </tr>
                                </thead>


                                <tbody>

                                @foreach($headlines as $headlines)
                                    <tr class="text-center">
                                        <td>{{$headlines->title}}</td>
                                        <td><img src="{{asset($headlines->image)}}" alt="post"  width="80" height="80"></td>
                                        <td>{!!$headlines->short_description!!}</td>
                                        <td>{{$headlines->scroll}}</td>
                                        <td>{{$headlines->head_news}}</td>
                                        <td>{{$headlines->category}}</td>
                                      
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