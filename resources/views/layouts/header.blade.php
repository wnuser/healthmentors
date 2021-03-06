<header class="bg-white fixed-header">
   <div class="container">
      <nav class="navbar navbar-expand-lg bg-white">
         <!--  Show this only on mobile to medium screens  -->
         <li class="nav-item mob-top d-lg-none">
            <a class="nav-link" data-toggle="modal" href="#pop-search"><i class="fas fa-search"></i></a>
         </li>
         <a class="navbar-brand d-lg-none mob-centred-logo" href="{{ route('Home') }}"><img src="{{ asset('Images/healthlogo.png') }}" alt="logo"/> </a>
         <button class="sidebar-click" type="button" aria-expanded="false" aria-label="Toggle navigation">
         <span class="fa fa-bars"></span>
         </button>
         <!--  Used flexbox utility classes to change how the child elements are justified  -->
         <div class="navbar-collapse justify-content-between" id="navbarToggle">
           <a class="navbar-brand d-none d-lg-block " href="{{ route('Home') }}"><img src="{{ asset('Images/healthlogo.png') }}" alt="logo"/></a>
            <ul class="navbar-nav mr-right" >
               <li class="nav-item">
                  <a class="nav-link active" href="{{route('Home')}}"><span><i class="fas fa-home"></i></span>  Home <span class="sr-only">(current)</span></a>
               </li>
               <!-- <li class="nav-item">
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('category.blogs', ['id'=>4]) }}"><span><i class="fas fa-user-secret"></i></span>  fashion & lifestyle</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('category.blogs', ['id'=>5]) }}"> <span><i class="fas fa-heartbeat"></i></span> fitness</a>
               </li> -->
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('feed') }}"><span><i class="fas fa-newspaper"></i></span> News Feed</a>
               </li>

               <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown"> <span><i class="fas fa-chalkboard-teacher"></i></span> mentors <i class="fas fa-angle-down"></i></a> 
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @php $mentors  = config('role.MENTORSTITLE'); @endphp
                    @foreach($mentors as $key => $value)
                     <a class="dropdown-item" href="{{ route('mentors', ['id'=>$key]) }}" >{{$value}}</a>
                    @endforeach
                  </div>
               </li>
              
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('forum') }}"><span><i class="fas fa-edit"></i></span> View Answers</a>
               </li>

               <li class="nav-item">
               @if(Auth::check())
                  <a class="nav-link" href="#exampleModal" data-toggle="modal"  ><span><i class="fas fa-question"></i></span> Ask Questions</a>
               @else
               <a class="nav-link" href="{{ route('login') }}" ><span><i class="fas fa-question"></i></span> Ask Questions</a>
               @endif   
               </li>

               <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown"> <span><i class="fas fa-blog"></i></span> Blogs <i class="fas fa-angle-down"></i></a> 
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="{{ route('category.blogs', ['id'=>3]) }}"> <span><i class="fas fa-briefcase-medical"></i></span> health care</a>
                     <a class="dropdown-item" href="{{ route('category.blogs', ['id'=>4]) }}"><span><i class="fas fa-user-secret"></i></span>  fashion & lifestyle</a>
                     <a class="dropdown-item" href="{{ route('category.blogs', ['id'=>5]) }}"> <span><i class="fas fa-walking bold"></i></span> fitness</a>

                  </div>
               </li>

               @if(Auth::check())
               <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown"> <span><i class="fas fa-user"></i></span> {{ Auth::user()->name }} <i class="fas fa-angle-down"></i></a> 
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    
                     <a class="dropdown-item" href="{{ route('profile') }}" >Profile</a>
                     <!-- <a class="dropdown-item" href="{{ route('profile') }}">Write Article</a> -->
                     <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
                  </div>
               </li>
               @else
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}"> <span><i class="fas fa-sign-in-alt"></i></span> login/signup</a>
                  </li>
               @endif
               
              
          
               <!-- <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="dropdownMenuButton" data-toggle="dropdown">LOGIN/SIGNUP <i class="fas fa-angle-down"></i></a> 
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="{{ route('category.blogs', ['id'=>3]) }}" target="blank">AS MENTOR</a>
                     <a class="dropdown-item" href="{{ route('category.blogs', ['id'=>7]) }}" target="blank">Historical</a>
                     <a class="dropdown-item" href="{{ route('category.blogs', ['id'=>9]) }}" target="blank">Pilgrimage</a>
                     <a class="dropdown-item" href="{{ route('category.blogs', ['id'=>12]) }}" target="blank">Tourist Hub</a>
                     <a class="dropdown-item" href="{{ route('category.blogs', ['id'=>13]) }}" target="blank">Trekking</a>
                     <a class="dropdown-item" href="{{ route('all.categories') }}">All Categories</a>

                  </div>
               </li> -->
               <!-- <li class="nav-item d-mob-none search">
                  <a class="nav-link" data-toggle="modal" href="#pop-search"><i class="fas fa-search"></i></a>
               </li> -->
            </ul>
            <!--   Show this only lg screens and up   -->
            <!-- <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link btn-nav" data-toggle="modal" href="#pop-trip">post a trip</a>
               </li>
            </ul> -->
         </div>
      </nav>
   </div>
   <!-- ======== search popup ======== -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ask Your Question </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <form action="{{ route('ask.question') }}" method="POST">
      @csrf
      <div class="modal-body ask-q-modal">


      <div class="custom-radios">
            <div class="inner-col">
               <input type="radio" id="color-1" name="topic_type" value="public" checked>
               <label for="color-1" class="pc">
                  <span>
                  <small></small>
                  </span>
               </label>
               <p>Your question will be publish on public feed.</p>
            </div>
         
            <div class="inner-col">
               <input type="radio" id="color-2" name="topic_type" value="private">
               <label for="color-2" class="pv">
                  <span>
                  <small></small>
                  </span>
               </label> 
               <p>you can ask specially from a mentor and  question will be shown in your dahsboard only</p>
            </div>
         
         </div>

         <!-- form for public questions  --->
         <div id="text-input">
            <div class="form-group">
                {{ topics() }}
            </div>
            <div class="form-group mt-2" >
               <label for="" class="bold">Write Your Question.</label>
               <textarea name="quetion" id="public_question" required placeholder="Type your quetion here"></textarea>
            </div>
            <div class="form-group mb-2">
               <button type="submit" class="btn float-right btn-small mt-auto">Submit</button>
            </div>
         </div>
         
         <!-- complete for public questions  --->


         <!-- form for private questions -->
         
           <div class="form-group mt-2 d-none" id="mentor_type">
                <label for="" class="bold">From whom you are asking </label>
                <select name="mentor_type" id="mentor_type" class="form-control">
                    {{ mentorsOption() }}
                 </select>
           </div>
         <div class="text-center mt-4 d-none" id="proceed_btn">
             <button type="submit" class="btn btn-small ml-auto">Proceed</button>
         </div>
         

      </div>
      </form>
      <div class="modal-footer">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
      </div>
      



    </div>
  </div>
</div>




   <!-- Modal -->
   <div class="modal fade full-model h100-dialog" id="pop-search" tabindex="-1" role="dialog" aria-labelledby="pop-search" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="container">
                  <div class="row justify-content-center align-items-center">
                     <div class="col-lg-12 col-md-12 col-12">
                        <!-- <h4 class="text-center mb-4">FIND PERFECT BLOG</h4> -->
                        <form action="{{ route('search') }}" method="POST">
                           <div class="search-bx">
                              @csrf
                              <input type="search" name="search" placeholder="Enter keywords here..." autofocus="autofocus">
                              <button type="submit" class="btn-search"><i class="fas fa-search"></i> </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ======== post a trip popup ======== -->
   <!-- Modal -->
   <div class="modal fade full-model" id="pop-trip" tabindex="-1" role="dialog" aria-labelledby="pop-trip" aria-hidden="true">
   <div class="modal-dialog" role="document" style="background: url('Images/all/form_background.jpg') center center no-repeat; background-size: cover;">
      <div class="modal-content bg-trans">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="container">
               <div class="row justify-content-center align-items-center">
                  <div class="col-lg-8 col-md-9 col-12">
                     <div class="text-center mb-4">
                        <img src="{{ asset('Images/logo-trans.svg') }}" class="img-fluid" alt="logo" />
                     </div>
                     <form action="{{ route('user.blog.post') }}" method="POST" enctype="multipart/form-data">

                     @csrf
                     <div class="form-bx-modal row">
                           <div class="col-12 mb-3">
                              <input type="text" name="user_name" placeholder="Name" required="" />
                           </div>
                           <div class="col-12 mb-3">
                              <input type="text" name="title" placeholder="Title" required="" />
                           </div>
                           <div class="col-12 mb-3">
                              <select name="category">
                              @php  $allCategories    =  allCategories();   @endphp 
                              @foreach($allCategories as $value)
                                 <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                              @endforeach
                              </select>
                           </div>
                           <div class="col-12 mb-3">
                              <textarea name="Description" placeholder="Type your story..." id="message_description"></textarea>
                           </div>
                           <div class="col-12 mb-3">
                              <input type="file" name="image" id="choose">
                              <label for="choose" class="choose-file-label">Add photo <span><i class="fas fa-paperclip"></i></span></label>
                           </div>
                           <div class="col-12 mb-5 text-center">
                              <button type="submit">Publish</button>
                           </div>
                     </div>
                     </form>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>

