@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Table: Image Gallery</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="{{route('image_gallery.create')}}" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                <tr class="text-center">

                                <th>Title</th>
                                <th>Image</th>
                                <th>Home Show</th>
                                <th>Action</th>
                               
                                
                                </tr>
                                </thead>


                                <tbody>

                                @foreach($images as $image)
                                    <tr class="text-center">
                                        <td>{{$image->title}}</td>
                                        <td><img src="{{asset($image->image)}}" alt="post"  width="80" height="80"></td>
                                     
                                        <td>{{$image->home_page}}</td>
                                        <td style="display: inline-flex;">
                                            <a href="{{route('image_gallery.edit',[$image->id])}}" class="btn btn-icon btn-primary">Edit</a>
                                            <form action="{{route('image_gallery.destroy',[$image->id])}}" method="post">
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