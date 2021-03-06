@extends('layouts.app')

@section('content')
<main>


<section class="category-sec">
<div class="container animated fadeIn">

<div class="row">
  
  <div class="col-md-12" >
      <div class="row">
      <div class="col-md-6">
      <iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.917695571499!2d78.03923996512178!3d30.324858831781103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390929ea630407b3%3A0x3131f35c6106f8b1!2sClock%20Tower%2C%20Dehradun%2C%20Uttarakhand%20248001!5e0!3m2!1sen!2sin!4v1618249445319!5m2!1sen!2sin" allowfullscreen></iframe>
      </div>

      <div class="col-md-6">
      @include('layouts.error')

          <form action="{{ route('save.contact') }}" class="contact-form" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" autofocus="">
              </div>
          
          
              <div class="form-group form_left">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
              </div>
          
            <div class="form-group">
                 <input type="text" class="form-control" name="mobile" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
            </div>
            <div class="form-group">
            <textarea class="form-control textarea-contact" rows="5" id="comment" name="message" placeholder="Type Your Message/Feedback here..." required=""></textarea>
            <br>
              <button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Send </button>
            </div>
           </form>
      </div>
      </div>
  </div>
</div>

<div class="container second-portion">
  <div class="row">
      <!-- Boxes de Acoes -->
      <div class="col-xs-12 col-md-6 col-lg-4">

          <div class="box">							
              <div class="icon">
                  <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                  <div class="info">
                      <h3 class="title">MAIL & WEBSITE</h3>
                      <p>
                          <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp info@healthmentors.in
                          <br>
                          <br>
                          <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.healthmentors.in
                      </p>
                  
                  </div>
              </div>
              <div class="space"></div>
          </div> 
      </div>
          
      <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="box">							
              <div class="icon">
                  <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                  <div class="info">
                      <h3 class="title">CONTACT</h3>
                      <p>
                          <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp 
                          <br>
                          <br>
                          <!-- <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp   -->
                      </p>
                  </div>
              </div>
              <div class="space"></div>
          </div> 
      </div>
          
      <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="box">							
              <div class="icon">
                  <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                  <div class="info">
                      <h3 class="title">ADDRESS</h3>
                      <p>
                           <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 15/3 Near clock tower dehradun - 248001
                      </p>
                  </div>
              </div>
              <div class="space"></div>
          </div> 
      </div>		    
      <!-- /Boxes de Acoes -->
      
      <!--My Portfolio  dont Copy this -->
      
  </div>
</div>

</div>
</section>

</main>
@endsection