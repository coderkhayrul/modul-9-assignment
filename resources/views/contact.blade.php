@extends('layouts.master')
@section('title', 'Contact Me')

@section('content')

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <h2>Contact Me</h2>
                <div class="page_link">
                    <a href="{{ route('website.home') }}">Home</a>
                    <a href="javascript:void(0)">Contact</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Dhaka, Bangladesh</h6>
                        <p>Narayangonj</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">+880 183506 1968</a></h6>
                        <p>Sunday to Fri 9am to 6 pm</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">coderkhayrul@gmail.com</a></h6>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row contact_form" action="{{ route('website.contact.store') }}" method="post" id="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="col-md-12">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control @error('name') border border-danger @enderror" id="name" name="name" placeholder="Enter your name">
                            @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control @error('email') border border-danger @enderror" id="email" name="email" placeholder="Enter email address">
                            @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control @error('subject') border border-danger @enderror" id="subject" name="subject" placeholder="Enter Subject">
                            @error('subject')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control @error('message') border border-danger @enderror" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            @error('message')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="primary_btn">
                            <span>Send Message</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
