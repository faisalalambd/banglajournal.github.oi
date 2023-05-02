@extends('layouts.website')

@section('content')
  <!--================Blog Area =================-->
  <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
            @foreach($news as $newss)
            <h3>{{$newss -> title}}
                     </h3>
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset($newss->image)}}" alt="" width="90%">
                  </div>
                  
                  <div class="blog_details" style="text-align:justify;margin-right:20px;margin-top:15px">
                     
                     
                     
                    {!!$newss -> description!!}
                  </div>
                 
               </div>
               @endforeach
              
              
               <div class="comments-area">
                  <h4>05 Comments</h4>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="assets/img/comment/comment_1.png" alt="">
                           </div>
                          
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="assets/img/comment/comment_2.png" alt="">
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="assets/img/comment/comment_3.png" alt="">
                           </div>
                         
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm" style="width="80%">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-92" name="comment" id="comment" cols="30" rows="9" width="80%"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control w-75" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                         <div class="col-6">
                           <div class="form-group">
                              <input class="form-control w-75" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control w-92" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btns" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                        @foreach($categories as $category)
                        <li>
                           <a href="{{route('categoryNews',['category_name'=>$category->category_name])}}" class="d-flex">
                              <p>{{$category->category_name}}</p>
                              <!-- <p>(37)</p> -->
                           </a>
                        </li>
                        @endforeach
                        <!-- <li>
                           <a href="#" class="d-flex">
                              <p>Travel news</p>
                              <p>(10)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Modern technology</p>
                              <p>(03)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Product</p>
                              <p>(11)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Inspiration</p>
                              <p>(21)</p>
                           </a>
                        </li> 
                        <li>
                           <a href="#" class="d-flex">
                              <p>Health Care</p>
                              <p>(21)</p>
                           </a>
                        </li>-->
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                   @foreach($latests as $latest)
                     <div class="media post_item">
                        <img src="{{asset($latest->image)}}" alt="post" width="80" height="80">
                        <div class="media-body">
                           <a href="{{route('newsDetails',['slug'=>$latest->slug])}}">
                              <h6 style="margin-left:20px">{{$latest->title}}</h6>
                           </a>
                           <p style="margin-left:20px">02 Hours ago</p>
                        </div>
                     </div>
                     @endforeach
                     
                  </aside>
                 
                 
                  <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Newsletter</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Subscribe</button>
                     </form>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

@endsection
