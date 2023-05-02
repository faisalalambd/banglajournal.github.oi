@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card"> 

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Slider Summary</h4>
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

                                @foreach($newss as $news)
                                    <tr class="text-center">
                                        <td>{{$news->title}}</td>
                                        <td><img src="{{asset($news->image)}}" alt="post"  width="80" height="80"></td>
                                        <td>{!!$news->short_description!!}</td>
                                        <td>{{$news->scroll}}</td>
                                        <td>{{$news->head_news}}</td>
                                        <td>{{$news->category}}</td>
                                      
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