@extends('layouts.app')
@section('title','Contact us')
@section('content')

@include('includes.header')

<!-- ============================ Breadcrumbs =========================== -->
<section class="bg-cover" style="background:url(assets/img/banner.jpg)no-repeat;" data-overlay="4">
    <div class="ht-80"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 col-12">
                <h1 class="text-light mb-4">We're delighted that<br> you want to connect with us. </h1>
                <p class="fs-5 fw-light text-light mb-4">Whether you have questions, feedback, or inquiries, this is the place to reach out. Our team is here and eager to assist you.</p>
                <a href="#estimate" class="btn btn-primary px-5">Let's Talk</a>
            </div>
        </div>
    </div>
    <div class="ht-80"></div>
</section>
<!-- ============================ Breadcrumbs End ======================= -->


<!-- ============================ Get Estimate Start ================================== -->
<section id="estimate">
    <div class="container">

        <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-11 mb-3">
                <h2 class="fs-1 fw-bold mb-4">Lets Talk<span class="text-danger">.</span></h2>
                <p>Let’s create something extraordinary together</p>

                
                <form class="row g-4" id="contact-form" method="post" action="{{ route('send.email') }}" role="form">
                    {{ csrf_field() }}
                    <div class="messages">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" type="text" name="names" placeholder="Your name" required>
                            <label class="form-label">Name</label>
                            @if ($errors->has('names'))
                            <span class="text-danger">{{ $errors->first('names') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" type="email" name="email" placeholder="Your Email" required>
                            <label class="form-label">Email</label>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" type="text" name="phone" placeholder="Your Phone" required>
                            <label class="form-label">Phone</label>
                            @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-1">
                            <input class="form-control" type="text" name="subject" placeholder="Subject" required>
                            <label class="form-label">Subject</label>
                            @if ($errors->has('subject'))
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-1">
                            <textarea class="form-control ht-150" name="messages" placeholder="Type your comment here..." required></textarea>
                            <label class="form-label">Comment</label>
                            @if ($errors->has('messages'))
                            <span class="text-danger">{{ $errors->first('messages') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check mb-2">
                            <input class="form-check-input" name="agree" value="Agree Terms & Conditions" type="checkbox">
                            <label class="form-check-label">I agree to the <a class="nav-link d-inline fs-normal text-decoration-underline p-0" href="#">Terms &amp; Conditions</a></label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary px-lg-4" type="submit">Send your Message</button>
                    </div>
                </form>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-5 col-xl-offset-1 col-lg-offset-1">
                <h2 class="fw-bold mb-4">Reach Us<span class="text-danger">.</span></h2>
                <p>At DDIN, we value your feedback, inquiries, and ideas. Our team is here to assist you and provide the support you need. Whether you have a question, a suggestion, or just want to say hello, there are multiple ways to reach us.</p>
                <ul class="p-0 m-0 mt-4">
                    <li class="d-flex mb-3"><i class="fa-solid fa-phone text-primary fs-5 me-3"></i><a class="text-dark" href="tel:+250783038641">Call Us<br><span class="text-muted fw-semibold">+250 783 038 641</span></a></li>
                    <li class="d-flex mb-3"><i class="fa-solid fa-envelope-circle-check fs-5 text-primary me-3"></i><a class="text-dark" href="mailto:contacts@ddin.rw">Drop Us Mail<br><span class="text-muted fw-semibold">contacts@ddin.rw</span></a></li>
                    <li class="d-flex mb-3"><i class="fa-solid fa-location-pin text-primary fs-5 me-3"></i><a class="text-dark" href="mailto:contacts@ddin.rw">Reach Us<br><span class="fw-semibold text-muted">KN 78 ST, NORRSKEN HOUSE KIGALI</span></a></li>
                </ul>
            </div>

        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ Get Estimate End ================================== -->

<!-- ============================ FAQ's Start ================================== -->
<section class="gray">
    <div class="container">

        <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 col-lg-7 col-md-11 mb-3">
                <div class="sec-heading text-center wow animated fadeInUp">
                    <div class="label text-success bg-light-success d-inline-flex rounded-4 mb-2 font--medium"><span>Check Our FAQ's</span></div>
                    <h2 class="mb-1">Frequently Asked Questions</h2>
                    <p class="test-muted fs-6">At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-between align-items-start g-4">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-xl-0 mb-lg-0 mb-3">
                <div class="accordion wow animated fadeInLeft" id="PanelsStayOpen">
                    <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                How Do I Start Work with It?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Can I Change The Team Size?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Can I Refund My Money?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                Can I Control My Profile?
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="accordion wow animated fadeInRight" id="PanelsStayOpens">
                    <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#PanelsStayOpens-collapseOne1" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne1">
                                How I Upgrade My Plan?
                            </button>
                        </h2>
                        <div id="PanelsStayOpens-collapseOne1" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#PanelsStayOpens-collapseTwo1" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo1">
                                How Can I Pay Your Fee?
                            </button>
                        </h2>
                        <div id="PanelsStayOpens-collapseTwo1" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 border-0 rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#PanelsStayOpens-collapseThree1" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree1">
                                Can I Get any Offers?
                            </button>
                        </h2>
                        <div id="PanelsStayOpens-collapseThree1" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 rounded-3 overflow-hidden">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#PanelsStayOpens-collapseFour1" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour1">
                                Do You Accept Other Currency?
                            </button>
                        </h2>
                        <div id="PanelsStayOpens-collapseFour1" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<div class="clearfix"></div>
<!-- ============================ FAQ's End ================================== -->



@include('includes.footer')