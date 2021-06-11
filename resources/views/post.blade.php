@extends('layouts.app')

@section('content')

<section class="post-sec">
   <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-12">
                 <div class="card side-card py-3 sticky-dektop card-anchors">
                     <a href="#">
                      connetions
                      <span>growth your network</span>
                     </a>
                     <a href="#">
                      connetions
                      <span>growth your network</span>
                     </a>
                     <a href="#">
                      connetions
                      <span>growth your network</span>
                     </a>
                 </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">

            @if(Auth::check() && Auth::user()->user_type == config('role.ROLES.MENTOR.TYPE'))
               <div class="card post-card p-3">
                   <div class="d-flex">
                     <div class="profile-img">
                     @php  $src    =  (Auth::user()->profile_pic) ? (Auth::user()->profile_pic) : 'userIcon.png';  @endphp
                     <img src="{{ asset('Images/user_image/'.$src) }}" alt="profile" class="img-fluid">
                    </div>
                    <a href="#create-post" data-toggle="modal">
                      Write a post
                    </a>
                   </div>
               </div>
            @endif   

            @foreach($posts as $key => $value)
                <div class="card feed-card p-3">
                   <div class="d-flex hover-box-wrap">
                       <div class="profile-img">
                          <a href="#">
                          @php  $src    =  ($value->user->profile_pic) ? ($value->user->profile_pic) : 'userIcon.png';  @endphp
                          <img src="{{ asset('Images/user_image/'.$src) }}" alt="profile" class="img-fluid">
                          </a>
                        </div>
                        <div class="name-post">
                           <h6> {{ $value->user->name }} </h6>
                           <span>{{ config('role.MENTORSTITLE.'.$value->user->mentor_type) }} 
                           {{ ($value->user->cityRelation) ? 'from '.$value->user->cityRelation->city_name : '' }}
                            </span>
                        </div>
                        <div class="hover-info">
                           <div class="name-info">
                              <div class="profile-img">
                              <a href="#">
                              <img src="{{ asset('Images/solo.jpg') }}" alt="profile" class="img-fluid">
                              </a>
                              </div>
                              <div class="name-post">
                                 <h6> {{ $value->user->name }} </h6>
                                 <span>
                                 {{ config('role.MENTORSTITLE.'.$value->user->mentor_type) }} 
                                 {{ ($value->user->cityRelation) ? 'from '.$value->user->cityRelation->city_name : '' }}
                                 </span>
                              </div>
                           </div>
                           <div class="chat-btn d-flex">
                               <a href="#" class="btn btn-small mr-2">Ask question</a>
                               <a href="#" class="btn btn-small">View Profile</a>
                           </div>
                        </div>
                   </div>
                   <div class="post-content">
                      <p> {{ $value->title }} </p>
                      @if($value->image) 
                      <div class="img-block">
                          <img src="{{ asset('Images/uploads/'.$value->image) }}" alt="cover-bg" class="img-fluid">
                      </div>
                      @endif
                   </div>
                   <div class="action-count">
                      <span class="count"><span><i class="far fa-heart"></i></span> <span>145</span> </span>
                      <span class="count"><span><i class="far fa-comments"></i></span> <span>78</span> </span>
                   </div>
                   <div class="action-box">
                      <a href="javascript:void(0)"  onClick="addLike({{ $value->id }})" ><span><i class="far fa-heart"></i></span> Like</a>
                      <a href="#"><span><i class="far fa-comments"></i></span> Comment</a>
                   </div>
                </div>
            @endforeach    
                <!-- /card feed -->






                
                <div class="card feed-card p-3">
                   <div class="d-flex hover-box-wrap">
                       <div class="profile-img">
                          <a href="#">
                          <img src="{{ asset('Images/solo.jpg') }}" alt="profile" class="img-fluid">
                          </a>
                        </div>
                        <div class="name-post">
                           <h6>John Doe</h6>
                           <span>Gym trainer dehradun</span>
                        </div>
                        <div class="hover-info">
                           <div class="name-info">
                              <div class="profile-img">
                              <a href="#">
                              <img src="{{ asset('Images/solo.jpg') }}" alt="profile" class="img-fluid">
                              </a>
                              </div>
                              <div class="name-post">
                                 <h6>John Doe</h6>
                                 <span>Gym trainer dehradun</span>
                              </div>
                           </div>
                           <div class="chat-btn d-flex">
                               <a href="#" class="btn btn-small mr-2">Chat</a>
                               <a href="#" class="btn btn-small">View Profile</a>
                           </div>
                        </div>
                   </div>
                   <div class="post-content">
                      <p>I am looking for a job, I have arround 3 years experience in php developer. I can work only home.</p>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo deleniti quibusdam nulla? Quidem, quam adipisci nobis consectetur facilis voluptatum, fuga reiciendis officiis beatae ratione nisi eligendi culpa corrupti officia. Earum!.</p>
                   </div>
                   <div class="action-count">
                      <span class="count"><span><i class="far fa-heart"></i></span> <span>145</span> </span>
                      <span class="count"><span><i class="far fa-comments"></i></span> <span>78</span> </span>
                   </div>
                   <div class="action-box">
                      <a href="#"><span><i class="far fa-heart"></i></span> Like </a>
                      <a href="#"><span><i class="far fa-comments"></i></span> Comment</a>
                   </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-12 col-12">
                 <div class="card py-3 sticky-dektop card-anchors">
                    <div class="filter-sd px-3">
                       <h5>Sort</h5>
                       <select name="filter" id="">
                          <option value="">Filter By Mentors</option>
                          {{ mentorsOption() }}
<!--                           
                          <option value="1">Recent</option>
                          <option value="2">Top</option> -->
                       </select>
                    </div>
                    <hr>
                    <a href="#">
                   <div class="d-flex sidebar-list">
                      <div class="profile-img">
                        <img src="{{ asset('Images/solo.jpg') }}" alt="profile" class="img-fluid">
                      </div>
                      <div class="name-post">
                        <h6>John Doe</h6>
                        <span>Gym trainer dehradun</span>
                      </div>
                   </div>
                   </a>
                   <a href="#">
                   <div class="d-flex sidebar-list">
                      <div class="profile-img">
                        <img src="{{ asset('Images/solo.jpg') }}" alt="profile" class="img-fluid">
                      </div>
                      <div class="name-post">
                        <h6>John Doe</h6>
                        <span>Gym trainer dehradun</span>
                      </div>
                   </div>
                   </a>
                   <a href="#">
                   <div class="d-flex sidebar-list">
                      <div class="profile-img">
                        <img src="{{ asset('Images/solo.jpg') }}" alt="profile" class="img-fluid">
                      </div>
                      <div class="name-post">
                        <h6>John Doe</h6>
                        <span>Gym trainer dehradun</span>
                      </div>
                   </div>
                   </a>
                   <hr>
                  <h5 class="px-3">Latest feed</h5>
                   <a href="#">
                     <h6>Product-based company or Service based company</h6>
                      <span>Let's Connect on Twitter:</span>
                   </a>
                   <a href="#">
                     <h6>Product-based company or Service based company</h6>
                      <span>Let's Connect on Twitter:</span>
                   </a>
                   <a href="#">
                     <h6>Product-based company or Service based company</h6>
                      <span>Let's Connect on Twitter:</span>
                   </a>
                 </div>
            </div>
        </div>
  </div>

  <!-- === create post modal === -->
    <!-- Modal -->
<div class="modal fade modal-create-post" id="create-post" tabindex="-1" role="dialog" aria-labelledby="about-mentorlLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="{{ route('save.post') }}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="modal-header py-3">
          <h5 class="mb-0">Create Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
         <div class="modal-body feed-card">
            <div class="d-flex">
                  <div class="profile-img">
                     <a href="#">
                        <img src="{{ asset('Images/solo.jpg') }}" alt="profile" class="img-fluid">
                     </a>
                  </div>
                     <div class="name-post">
                     @if(Auth::check())
                        <h6> {{ Auth::user()->name }} </h6>
                        <span> {{ config('role.MENTORSTITLE.'.Auth::user()->mentor_type) }}  </span>
                     @endif
                     </div>
            </div>
               <textarea name="title" id="title" placeholder="Write something here.." autofocus="autofocus"></textarea>  
               <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
               <div id="post-image">
               
               </div> 
         </div>
         <div class="modal-footer text-right pt-1 pb-2">
              <div class="photo-upload">
                  <label for="upload-img"><i class="fas fa-image"></i> <span>Photo</span> </label>
                  <input type="file" class="form-control" name="image" id="upload-img"/>
               </div>
             <button type="submit" class="btn btn-small">Save</button>
         </div>
         </form>
    </div>
  </div>
</div>
</section>

@endsection('content')

@section('custom_js')
<script>

    function addLike(postId)
    {
      //  e.preventDefault();

      //  alert(postId);
    }

     $('#upload-img').on('change', function(e){

      var elementExists = document.getElementById("post-img");
      if(elementExists) {
         document.getElementById("post-img").remove();

      }

       for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {

        var file = e.originalEvent.srcElement.files[i];
        
        var img = document.createElement("img");
        var reader = new FileReader();
        reader.onloadend = function() {
             img.src = reader.result;
             img.setAttribute("class", 'img-fluid');
             img.setAttribute("id", 'post-img');
            //  img.addClass('img-fluid');
        }
        reader.readAsDataURL(file);
        $('#post-image').append(img);
      //   $("#title").after(img);
    }
     });
</script>
@endsection