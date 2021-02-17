@extends('webshop.template.head')
@extends('webshop.template.navbar')


<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Kontakt
      <small>Kako do nas?</small>
    </h1>

     

    <br>
    <br>
    <div class="row">
      <!-- Map  -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d77217.81482182744!2d18.701091!3d45.009859!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475c6d1f92f2ad49%3A0xfc2be6e7fdd43cd5!2zT3JhxaFqZQ!5e1!3m2!1sen!2sba!4v1611708123720!5m2!1sen!2sba" width="650" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!-- Kontakt detalji -->
      <div class="col-lg-4 mb-4">
        <h3>Detalji</h3>
        <p>
        <br>
        76270 Orašje
        <br>
        <br>
        Poduzetnička Zona
        <br>
        </p>
        <p>
        Telefon: (123) 456-7890
        </p>
        <p>
        Email:
        <a href="mailto:info@dlwebshop.com">info@dlwebshop.com </a>
        </p>
        <p>
        Radno vrijeme:  Pon-Pet: 9:00 - 17:00
        </p>
      </div>
    </div>
    <br>
    <br>
    </hr>
    <br>
    <br>


    <!-- Contact Form -->
    
    <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
    @csrf

    <div class="row">
    <h3>Pošaljite nam poruku</h3>
      <br>
      <br>
    </div>
    <br>
    <div class="row">


          @if(Session::has('message_sent'))

        
            <div class="alert alert-success " role="alert"  >
          {{Session::get('messege_sent')}} 
          Vaša poruka je uspješno poslana! Netko iz našeg tima će Vam se javiti u najkraćem mogućem roku.
            </div>
        @endif

        </div>
        
        <div class="row">


      <div class="col-sm-3 mb-4">       
     
        

            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Ime i prezime:</label>
                  <input type="text" class="form-control" name="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                </div>
                </div>
             </div>

          <div class="control-group form-group col-sm-3 mb-4">
            <div class="controls">
              <label>Email adresa:</label>
              <input type="email" action="{{route('contact.send')}}" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>

          </div>
          <div class="row">
          <div class="control-group form-group col-sm-6 mb-4">
            <div class="controls">
              <label>Poruka:</label>
              <textarea rows="10" cols="100" class="form-control" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          </div>
          <!-- For success/fail messages -->
          <div clas="row">
          <div class="col-sm-1 mb-4">
          </div>
          <button type="submit" class="col-sm-6  btn btn-primary   pull-right" id="sendMessageButton">Pošalji</button>
          </div>
        </form>
      </div>

    </div>
    <!-- /.row -->
    </form >
    </form>
  </div>
  <br>
  <br>
  <!-- /.container -->


@extends('webshop.template.foot')
@extends('webshop.template.footer')