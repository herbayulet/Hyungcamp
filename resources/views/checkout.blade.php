@extends('layouts.app')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="cssheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

        <title>Laracamp by BuildWith Angga</title>
    </head>

    <body>

        <section class="checkout">
            <div class="container">
                <div class="row text-center pb-70">
                    <div class="col-lg-12 col-12 header-wrap">
                        <p class="story">
                            YOUR FUTURE CAREER
                        </p>
                        <h2 class="primary-header">
                            Start Invest Today
                        </h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <div class="item-bootcamp">
                                    <img src="{{ asset('images/item_bootcamp.png') }}" alt="" class="cover">
                                    <h1 class="package text-uppercase">
                                        {{ $camps->title }}
                                    </h1>
                                    <p class="description">
                                        Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar
                                        sampai membangun sebuah projek asli
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-1 col-12"></div>
                            <div class="col-lg-6 col-12">
                                <form action="{{ route('checkout.success') }}" class="basic-form">
                                    <div class="mb-4">
                                        <label class="form-label">Full Name</label>
                                        <input name="name" type="text" class="form-control" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Email Address</label>
                                        <input name="email" type="email" class="form-control" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Occupation</label>
                                        <input name="occupation" type="text" class="form-control" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Card Number</label>
                                        <input name="card_number" type="number" class="form-control" />
                                    </div>
                                    <div class="mb-5">
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <label class="form-label">Expired</label>
                                                <input name="expired" type="month" class="form-control" />
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <label class="form-label">CVC</label>
                                                <input name="cvc" type="number" class="form-control" maxlength="3" />
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                                    <p class="text-center subheader mt-4">
                                        <img src="{{ asset('images/ic_secure.svg') }}" alt=""> Your payment is secure and
                                        encrypted.
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js "
                integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous ">
        </script>

    </body>

    </html>
@endsection
