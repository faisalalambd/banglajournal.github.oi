@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Table: Video Gallery</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="{{route('video_gallery.create')}}" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                <tr class="text-center">

                                <th>Title</th>
                                <th>Video</th>
                                <th>Home Show</th>
                                <th>Action</th>
                               
                                
                                </tr>
                                </thead>


                                <tbody>

                                @foreach($videos as $video)
                                    <tr class="text-center">
                                        <td>{{$video->title}}</td>
                                        <td><iframe width="100" height="100" src="{{$video->link}}"></iframe></td>
                                     
                                        <td>{{$video->home_page}}</td>
                                        <td style="display: inline-flex;">
                                            <a href="{{route('video_gallery.edit',[$video->id])}}" class="btn btn-icon btn-primary">Edit</a>
                                            <form action="{{route('video_gallery.destroy',[$video->id])}}" method="post">
                                            @method('DELETE')
                                @csrf
                                                <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                            </form>
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