@extends('template')

@section('content')



@if(session()->has('flash'))
<div class="alert alert-success" role="alert">
     {{session()->get('flash')}}
</div>
@endif


<div class="row">
     <div class="col-s6 col-sm  border-right">
          <h2>Contact</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem mollitia iure nulla veniam placeat tenetur culpa reiciendis dolore obcaecati minima!</p>
          <br>
          <form id="contact-form" method="post" action="{{route('messages')}}" role="form">
               {{csrf_field()}}
               <div class="form-group">
                    <label for="inputName">Your name</label>
                    <input type="text" class="form-control" name="inputName" id="inputName" required>
               </div>
               <div class="form-group">
                    <label for="inputEmail">Your email</label>
                    <input type="email" class="form-control" name="inputEmail" id="inputEmail" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
               <div class="form-group">
                    <label for="inputSubject">Subject</label>
                    <input type="text" class="form-control" name="inputSubject" id="inputSubject" required>
               </div>
               <div class="form-group">
                    <label for="textareareMessage">Message</label>
                    <textarea class="form-control" name="textareareMessage" id="textareareMessage" rows="3" required></textarea>
               </div>
               <button type="submit" class="btn btn-primary mb-2">Send Message</button>
          </form>
     </div>
     <div class="col-s6 col-sm">
          <h2>Find Us</h2>
          <p>Ad debitis tempora fugit ut et, harum neque facere nam! Lorem ipsum dolor sit amet.</p>
          <div class="d-flex justify-content-center">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3419.860700653505!2d-79.93825668565341!3d-6.834389668753296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTAnMDMuOCJTIDc5wrA1NicwOS44Ilc!5e1!3m2!1ses!2spe!4v1592188617466!5m2!1ses!2spe" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <br>
     </div>
</div>

<br>
@stop