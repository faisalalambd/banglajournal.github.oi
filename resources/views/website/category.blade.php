@extends('layouts.website')

@section('content')
	<!-- Start Align Area -->

	<section class="container  section-2">

<div class="row pt-2">

    

	@foreach($news as $new)
    <div class="col-md-3 mb-4 bg" style="margin-top:60px">
        <a href="#" class="news">
            <img src="{{asset($new->image)}}" alt="World-premiere-of-‘Mujib-Amar-Pita’-held-in-New-York-City" width="263" height="180">
            <div class="p-3">
                <p class="mb-2">{{$new->title}}</p>
                <span class="py-1 px-2 me-2">Entertainment</span><time>36 min ago</time>
            </div>
        </a>
    </div>
	@endforeach


 

</div>

</section>


	
	<!-- End Align Area -->

	


	


@endsection
