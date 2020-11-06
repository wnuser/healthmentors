@extends('layouts.app')

@section('content')
<main>


<section class="category-sec">
   <div class="container">
      <div class="row">
          <div class="col-12">
              <!-- advetisement box -->
          </div>
         <div class="col-lg-8 col-md-7 col-12 m-p-single">
             <div class="row">
               <div class="col-12 single-title">
                  <h2>{{$blogData['title']}}</h2>
               </div>
               <div class="col-lg-6 col-md-12 col-12">
                  <small>September 20, 2020 / Posted by {{ $blogData['user_name'] }}</small>
               </div>
               <div class="col-lg-6 col-md-12 col-12">
                  <p class="text-right share-bx">
                    <span>Share:</span>
                    <span>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-pinterest"></i></a>
                      <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </span>
                  </p>
               </div>
               <div class="col-12">
                   <div class="single-img-box">
                       <img src="{{ asset('Images/uploads/'.$blogData['image']) }}" class="img-fluid" alt="{{ $blogData['alt_description'] }}" />
                       <small>Photo Credits: <span>{{ $blogData['user_name'] }}</span></small>
                   </div>

                   <p> {!! $blogData['Description'] !!} </p>
                   
                   
                   <!-- <ul class="single-post-ul">
                     <li>Brittnee and Brentt Proha live full-time in a 429-square-foot RV with their five kids and dog.</li>
                     <li>Brittnee customized the RV to suit her family's needs, ensuring she can homeschool the kids from their mobile house.</li>
                     <li>The RV has 17 windows that create abundant natural light, a fireplace, a private room with bunk beds and a loft for the family's five kids, and a massive porch</li>
                     <li>§ "We're not stuck anywhere," Brittnee told Insider of why she loves life on the road.</li>
                     <li>Visit Insider's homepage for more stories.</li>
                   </ul>
                   <p>Tiny-house communities are popping up across the country, but one family in Kentucky has created a village of their own. </p>
                   <p>Keli and Ryan Brinks live in a tiny house in Kentucky. Their 18-year-old daughter, Lennox, and their 16-year-old son, Brodey, also live in their own tiny houses next door.</p>
                   <p>Together, their six tiny homes create a unique living situation with the goal of sustainable living.</p>
                   <p> Here's how the Brinks family makes their tiny village work.</p>
                   <h6>Five years ago, the Brinks family wanted to move from their 2,200-square-foot home in Michigan and live more sustainably.</h6>
                   <div class="single-img-box">
                       <img src="{{ asset('Images/all/article_page_image.jpg') }}" class="img-fluid" alt="single-thumb" />
                       <small>Photo Credits: <span>Ahsun Ansari</span></small>
                   </div>
                   <p>To do so, they turned to the tiny-house movement</p>
                   <p>Since tiny houses produce less waste, require less heating, and can be more environmentally friendly, the family knew it was the right fit.</p>
                   <p>"Initially, my husband wanted us all together in one cabin, but I argued on behalf of the kids for their own privacy," Keli told Insider.</p>
                   <p>Instead, the family decided to buy a few tiny houses — one for each family member</p>
                    -->
                   
                   
                   <h5>Read more:</h5>
                   @foreach($similarBlogs as $similarValue)
                      <a href="{{ route('single.blog', ['id'=> $similarValue['slug']]) }}"> {{ $similarValue['title'] }} </a>
                   @endforeach
                   <!-- <a href="#">23 photos that show the ugly truth of living in a tiny house</a>
                   <a href="#">Tour a family's 300-square-foot tiny house</a> -->
               </div>
               <div class="col-12">
                  <div class="comments-box">
                     <form action="" method="POST">
                      <div class="row">
                      @csrf
                         <div class="col-lg-12 col-12 mb-3">
                             <textarea class="cm-text" placeholder="Leave a comment" required=""></textarea>
                         </div>
                         <div class="col-lg-6 col-md-12 col-12 mb-3">
                            <input type="text" name="name" placeholder="Name" required="">
                         </div>
                         <div class="col-lg-6 col-md-12 col-12 mb-3">
                            <input type="email" name="email" placeholder="Email" required="">
                         </div>
                         <div class="col-12 mb-3">
                            <button type="submit" class="btn-comments">Post</button>
                         </div>
                      </div>
       
                     </form>
                     <div class="user-box">
                     <div class="img-user">
                        <img src="{{ asset('Images/all/blog_min_3.jpg') }}" class="img-fluid" alt="user" />
                     </div>
                     <div class="user-inf">
                        <span>Martin Moore</span>
                        <h6>Tech support is really great, and they know how to handle your issues!</h6>
                        <p class="n-font"><span>September 20, 2020</span> <span><a data-toggle="collapse" href="#reply-bx1">Reply</a></span></p>
                     </div>
                     <div class="reply-box collapse" id="reply-bx1">
                        <form action="">
                           <textarea placeholder="Type here..." required=""></textarea>
                           <button type="submit">Submit</button>
                        </form>
                     </div>
                  </div>
                  <div class="user-box">
                     <div class="img-user">
                        <img src="{{ asset('Images/all/blog_min_3.jpg') }}" class="img-fluid" alt="user" />
                     </div>
                     <div class="user-inf">
                        <span>Martin Moore</span>
                        <h6>Tech support is really great, and they know how to handle your issues!</h6>
                        <p class="n-font"><span>September 20, 2020</span> <span><a data-toggle="collapse" href="#reply-bx2">Reply</a></span></p>
                     </div>
                     <div class="reply-box collapse" id="reply-bx2">
                        <form action="">
                           <textarea placeholder="Type here..." required=""></textarea>
                           <button type="submit">Submit</button>
                        </form>
                     </div>
                  </div>
                  </div>
                  
               </div>
             </div>
             <!-- inner row -->
              
              <div class="row">
                  <div class="col-12 tite-uline mt-4">
                    <h5>most populer</h5>
                  </div>
                  <div class="col-12">
                     <div class="owl-carousel populer-slider">
                     @foreach($popularBlogs as $popularValue)
                              <div class="item">
                                    <div class="post-box">
                                    <a href="{{ route('single.blog', ['id'=> $popularValue['slug']]) }}" target="blank">
                                       <div class="p-img-bx">
                                          <img src="{{ asset('Images/uploads/'.$popularValue['image']) }}" alt="{{$popularValue['alt_description']}}" class="img-fluid" />
                                          <div class="hover-bx">
                                             <p>
                                             <span></span>
                                             <span></span>
                                             <span></span>
                                             </p>
                                          </div>
                                       </div>
                                       <span class="cat-label">{{getCategoryName($popularValue['category'])}}</span>
                                       <h4>{{ $popularValue['title'] }}</h4>
                                       @php     $createdBy          =   $popularValue['created_at'];
                                                $createdByArray     =   explode(" ", $createdBy); 
                                                $newDate            =   date("F d , Y", strtotime($createdByArray[0]));
                                                @endphp
                                       <p><span class="date">{{$newDate}}</span> <span>Posted by {{ $popularValue['user_name'] }}</span></p>
                                    </a>
                                 </div>
                              </div>
                          @endforeach
                         
                        
                     </div>
                  </div>
              </div>
              <!-- populer row carousel -->
            
         </div>
         <div class="col-lg-4 col-md-5 col-12">
            <div class="row">
               <div class="col-12">
                  <div class="qoute-box" style="background: url(images/all/qoute-bg.jpg) center center no-repeat; background-size: cover;">
                     <h4>Want to experience the same in real?</h4>
                     <p>Contact us for a quote, help or enquiry</p>
                     <form action="{{ route('BlogQuery.store') }}" method="POST" class="mt-5">
                       @csrf
                       <div class="row">
                          <div class="col-12 mb-3">
                              <input type="text" name="name" required="" placeholder="Name">
                              <input type="hidden" name="blog_info" value="{{ $blogData['title'] }}">
                          </div>
                          <div class="col-12 mb-3">
                              <input type="email" name="email" required="" placeholder="Email">
                          </div>
                          <div class="col-12 mb-3">
                              <input type="number" name="mobile" required="" placeholder="Mobile No">
                          </div>
                          <div class="col-12 mb-3">
                              <button type="submit" class="btn-qoute">Get a Quote</button>
                          </div>
                       </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                   <!-- advertisement box -->
               </div>
            </div>
            <!-- inner row -->
            <div class="col-12 tite-uline">
                <h5>trending now</h5>
            </div>
            <div class="col-12">
               <div class="owl-carousel side-carousel">
                  <div class="item">
                     <a href="#" class="d-block">
                       <div class="d-flex">
                        <div class="img-trend w-25">
                            <img src="images/all/blog_min_4.jpg" alt="cat-img" class="img-fluid" />
                            <div class="hover-bx">
                                 <p>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 </p>
                            </div>
                        </div>
                        <div class="w-75">
                           <h6>10 Museums that will blow your Child’s Mind</h6>
                           <small>Posted by Ahsun ansari</small>
                        </div>
                     </div>
                     </a>
                     <a href="#" class="d-block">
                       <div class="d-flex">
                        <div class="img-trend w-25">
                            <img src="images/all/blog_min_2.jpg" alt="cat-img" class="img-fluid" />
                            <div class="hover-bx">
                                 <p>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 </p>
                            </div>
                        </div>
                        <div class="w-75">
                           <h6>10 Museums that will blow your Child’s Mind</h6>
                           <small>Posted by Ahsun ansari</small>
                        </div>
                     </div>
                     </a>
                     <a href="#" class="d-block">
                       <div class="d-flex">
                        <div class="img-trend w-25">
                            <img src="images/all/blog_min_1.jpg" alt="cat-img" class="img-fluid" />
                            <div class="hover-bx">
                                 <p>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 </p>
                            </div>
                        </div>
                        <div class="w-75">
                           <h6>10 Museums that will blow your Child’s Mind</h6>
                           <small>Posted by Ahsun ansari</small>
                        </div>
                     </div>
                     </a>
                     <a href="#" class="d-block">
                       <div class="d-flex">
                        <div class="img-trend w-25">
                            <img src="images/all/blog_min_4.jpg" alt="cat-img" class="img-fluid" />
                            <div class="hover-bx">
                                 <p>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 </p>
                            </div>
                        </div>
                        <div class="w-75">
                           <h6>10 Museums that will blow your Child’s Mind</h6>
                           <small>Posted by Ahsun ansari</small>
                        </div>
                     </div>
                     </a>
                  </div>
                  <!-- item -->
                   <div class="item">
                     <a href="#" class="d-block">
                       <div class="d-flex">
                        <div class="img-trend w-25">
                            <img src="images/all/blog_min_1.jpg" alt="cat-img" class="img-fluid" />
                            <div class="hover-bx">
                                 <p>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 </p>
                            </div>
                        </div>
                        <div class="w-75">
                           <h6>10 Museums that will blow your Child’s Mind</h6>
                           <small>Posted by Ahsun ansari</small>
                        </div>
                     </div>
                     </a>
                     <a href="#" class="d-block">
                       <div class="d-flex">
                        <div class="img-trend w-25">
                            <img src="images/all/blog_min_4.jpg" alt="cat-img" class="img-fluid" />
                            <div class="hover-bx">
                                 <p>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 </p>
                            </div>
                        </div>
                        <div class="w-75">
                           <h6>10 Museums that will blow your Child’s Mind</h6>
                           <small>Posted by Ahsun ansari</small>
                        </div>
                     </div>
                     </a>
                     <a href="#" class="d-block">
                       <div class="d-flex">
                        <div class="img-trend w-25">
                            <img src="images/all/blog_min_3.jpg" alt="cat-img" class="img-fluid" />
                            <div class="hover-bx">
                                 <p>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 </p>
                            </div>
                        </div>
                        <div class="w-75">
                           <h6>10 Museums that will blow your Child’s Mind</h6>
                           <small>Posted by Ahsun ansari</small>
                        </div>
                     </div>
                     </a>
                     <a href="#" class="d-block">
                       <div class="d-flex">
                        <div class="img-trend w-25">
                            <img src="images/all/blog_min_2.jpg" alt="cat-img" class="img-fluid" />
                            <div class="hover-bx">
                                 <p>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 </p>
                            </div>
                        </div>
                        <div class="w-75">
                           <h6>10 Museums that will blow your Child’s Mind</h6>
                           <small>Posted by Ahsun ansari</small>
                        </div>
                     </div>
                     </a>
                  </div>
                  <!-- item -->
                   <div class="item">
                     <a href="#" class="d-block">
                       <div class="d-flex">
                        <div class="img-trend w-25">
                            <img src="images/all/blog_min_1.jpg" alt="cat-img" class="img-fluid" />
                            <div class="hover-bx">
                                 <p>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 </p>
                            </div>
                        </div>
                        <div class="w-75">
                           <h6>10 Museums that will blow your Child’s Mind</h6>
                           <small>Posted by Ahsun ansari</small>
                        </div>
                     </div>
                     </a>
                     <a href="#" class="d-block">
                       <div class="d-flex">
                        <div class="img-trend w-25">
                            <img src="images/all/blog_min_2.jpg" alt="cat-img" class="img-fluid" />
                            <div class="hover-bx">
                                 <p>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 </p>
                            </div>
                        </div>
                        <div class="w-75">
                           <h6>10 Museums that will blow your Child’s Mind</h6>
                           <small>Posted by Ahsun ansari</small>
                        </div>
                     </div>
                     </a>
                     <a href="#" class="d-block">
                       <div class="d-flex">
                        <div class="img-trend w-25">
                            <img src="images/all/blog_min_3.jpg" alt="cat-img" class="img-fluid" />
                            <div class="hover-bx">
                                 <p>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 </p>
                            </div>
                        </div>
                        <div class="w-75">
                           <h6>10 Museums that will blow your Child’s Mind</h6>
                           <small>Posted by Ahsun ansari</small>
                        </div>
                     </div>
                     </a>
                     <a href="#" class="d-block">
                       <div class="d-flex">
                        <div class="img-trend w-25">
                            <img src="images/all/blog_min_4.jpg" alt="cat-img" class="img-fluid" />
                            <div class="hover-bx">
                                 <p>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 </p>
                            </div>
                        </div>
                        <div class="w-75">
                           <h6>10 Museums that will blow your Child’s Mind</h6>
                           <small>Posted by Ahsun ansari</small>
                        </div>
                     </div>
                     </a>
                  </div>
                  <!-- item -->
               </div>
            </div>

            <div class="col-12">
               <div class="signup-box">
                  <h3>GET TRIP CLUB INDIA IN YOUR INBOX</h3>
                  <p>Get our best stuff sent straight to you!</p>
                  <form action="{{ route('Subscribe.store') }}" method="POST">
                     @csrf
                     <div class="form-group">
                        <input type="email" name="email" placeholder="Enter your email" required="required">
                     </div>
                     <input type="checkbox" name="remember" id="check"> <label for="check">I have read and agree to the Privacy Policy</label>
                      <div class="form-group mb-0">
                         <button type="submit" class="btn-link">Subscribe Now</button>
                      </div>
                  </form>
               </div>
            </div>

            <div class="col-12 text-center my-5">
               <div class="label-cat-fancy">
                   <span>CATEGORIES</span>
               </div>
               <div class="links-cat">
                  @foreach($categories as $catValue)
                     <a href="{{route('category.blogs', ['id'=> $catValue['id']])}}">{{$catValue['name']}}</a>
                  @endforeach
               </div>
            </div>

            <div class="col-12">
               <!-- advertisement box -->
            </div>
         </div>
      </div>
      <!-- main row -->
   </div>
</section>

</main>
@endsection