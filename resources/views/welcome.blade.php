@extends('base')

@section('title','Harewood Studios')

@section('content')
<div id="welcome" class="container-fluid">
    <div id="banner" class="row d-flex align-items-center pl-5 pr-5">
        <div class="col text-center">
            <img style="max-width:250px; width:90%" src="{{ asset('/svg/logo_1.svg') }}" />
            <h1 class="mt-5">Affordable and Quality Web Development in North Notts</h1>
        </div>
        <img id="tree" style="max-width:875px; width:90%" src="{{ asset('/images/oak.png') }}" />
    </div>
    <div id="preamble" class="row">
        <div class="container">
            <div class="row d-flex align-items-center my-5">
                <div class="col-12 col-md-7">
                    <h2>High Quality Website Development in Bassetlaw</h2>
                    <p class="text-justify">
                        Harewood Studios is a small and bespoke development company based in North Nottinghamshire. We specialise
                        in a range of online services such as Custom Website Development, Search Engine Optimisation and Online
                        Advertising.
                    </p>
                    <p class="text-justify">
                        With years of experience working with some of the most ambitious startups in the UK, we are well placed
                        to offer both outstanding quality solutions and a bespoke, tailored service to fit your business. We can offer
                        a wide range of different online services for your business. If you are unsure whether or not we can offer
                        what you are looking for, why not get in touch?
                    </p>
                </div>
                <div class="col-12 col-md-4 offset-md-1">
                    <a href="{{ route('get-in-touch') }}">
                        <button class="btn text-light col" type="submit">Get in touch for a free quote</button>
                    </a>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-5 my-5 text-center">
                    <img class="d-block m-auto" id="birch" style="width:100%; max-width:280px;" src="{{ asset('/images/birch.png') }}" />
                </div>
                <div class="col-12 col-md-7">
                    <div class="my-5">
                        <h2>Tailored Solutions for your Business</h2>
                        <p class="text-justify">
                            We pride ourselves on our ability to tailor our solutions to your business, whether that's building
                            booking software to deal with complex logistics or helping you consolidate a sprawling ad campaign into
                            one manageable piece. We can work with you to find out what is best for your business, and design
                            something resilient for the future.
                        </p>
                    </div>
                    <div class="my-5">
                        <h2>Retainers & Contracting</h2>
                        <p class="text-justify">
                            If you own or run an existing online system that you feel needs modernisation or on going maintenance
                            then get in touch, we have extensive experience working on existing and legacy systems to help keep
                            businesses running and can help improve and upgrade an existing codebase to help your system reflect
                            modern demands.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="services" class="row d-flex align-items-start py-5">
        <div class="col-12 col-md-4 text-center px-md-5">
            <img src="{{ asset('/svg/cogwheel.svg') }}" />
            <h2 class="text-center my-2">Bespoke Websites</h2>
            <p class="text-justify">
                From small business websites to large corporate applications, we have years of wide ranging expertise to
                design and build the perfect fit for your business. With completed projects for a wide range of UK-wide startups
                and large businesses. We are well places to deliver powerful, secure and robust applications at an affordable
                rate.
            </p>
        </div>
        <div class="col-12 col-md-4 text-center px-md-5">
            <img src="{{ asset('/svg/analysis.svg') }}" />
            <h2 class="text-center my-2">SEO</h2>
            <p class="text-justify">
                It's not easy being seen online, with the explosive growth of web use both domestically and internationally. Its no
                wonder businesses are looking to optimise every aspect of their online businesses. We offer competitive and bespoke
                packages to analyse and and address any issues with your website that may mean lost business.
            </p>
        </div>
        <div class="col-12 col-md-4 text-center px-md-5">
            <img src="{{ asset('/svg/team.svg') }}" />
            <h2 class="text-center my-2">Contracting</h2>
            <p class="text-justify">
                If you are a business that is planning to undergo a large refit of existing systems or services, consider using
                Harewood Studios for your contracting needs. We offer affordable and quality contracting and retainer service
                so you can be safe knowing you are getting the right expertise for your business.
            </p>
        </div>
    </div>
    <div id="get-in-touch" class="row d-flex align-items-center justify-content-center py-5">
        <div class="col col-md-4 px-5">
            <a href="{{ route('get-in-touch') }}">
                <button class="btn text-light col" type="submit">Get a free no-obligation quote</button>
            </a>
        </div>
    </div>
    <div id="location" class="row d-flex align-items-center py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-md-0 mb-3">
                    <img class="m-auto d-block" src="{{ asset('images/retford.jpg') }}" width="100%" />
                </div>
                <div class="col-12 col-md-6 px-md-6">
                    <h2>Locally Based in Retford, North Notts</h2>
                    <p class="text-justify">
                        We're based in the heart of North Nottinghamshire, meaning that when choosing us for your development needs,
                        you are getting local and reliable developers from the UK to work on your products.
                    </p>
                    <p class="text-justify">
                        We're proud of our Nottinghamshire heritage and of the high quality websites, applications and services
                        that we can offer.
                    </p>
                    <a href="{{ route('get-in-touch') }}">
                        <button class="btn text-light" type="submit">Find out more.</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection