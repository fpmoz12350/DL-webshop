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
          <abbr title="Phone">Telefon:</abbr> (123) 456-7890
        </p>
        <p>
          <abbr title="Email">Email:</abbr>
          <a href="mailto:info@dlwebshop.com">info@dlwebshop.com
          </a>
        </p>
        <p>
          <abbr title="Hours">Radno vrijeme:</abbr> Pon-Pet: 9:00 - 17:00
        </p>
      </div>
    </div>
    <br>
    <br>
    </hr>
    <br>
    <br>


    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Pošaljite nam poruku</h3>
        <br>

        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Ime i prezime:</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          
          <div class="control-group form-group">
            <div class="controls">
              <label>Email adresa:</label>
              <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Poruka:</label>
              <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary pull-right" id="sendMessageButton">Pošalji</button>
        </form>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


@extends('webshop.template.foot')
@extends('webshop.template.footer')