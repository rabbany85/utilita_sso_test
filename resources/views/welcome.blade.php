@extends('layouts.app')

@section('content')

<video autoplay muted loop id="myVideo">
  <source src="{{URL::asset('media/3.mp4')}}" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="myContent">
  <h1>Utilita SSO Test Site</h1>
  <p>Single sign-on (SSO) is an authentication method that enables users to securely authenticate with multiple applications and websites by using just one set of credentials.</p>
  <p>SSO works based upon a trust relationship set up between an application, known as the service provider, and an identity provider, like OneLogin. This trust relationship 
    is often based upon a certificate that is exchanged between the identity provider and the service provider. This certificate can be used to sign identity information 
    that is being sent from the identity provider to the service provider so that the service provider knows it is coming from a trusted source. In SSO, this identity data takes 
    the form of tokens which contain identifying bits of information about the user like a user’s email address or a username.</p>
 <a href="{{route('home')}}"><button id="myBtn">SSO Login</button></a>
</div>
@endsection
