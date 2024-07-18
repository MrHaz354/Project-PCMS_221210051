@extends('layouts.public.app')

@section('content')
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <div class="text-center text-xxl-start">
                        @isset($home)
                            <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">{{ $home->keahlian ?? 'Data Not Available' }}</div></div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">{{ $home->deskripsi_keahlian ?? 'Data Not Available' }}</span></h1>
                        @else
                            <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Data Not Available</div></div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Data Not Available</span></h1>
                        @endisset
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{URL::to('profile')}}">Resume</a>
                            <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{URL::to('https://github.com/')}}}">Projects</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                        @isset($home->foto)
                            <div class="profile bg-gradient-primary-to-secondary">
                                <img src="{{ asset('storage/images/'.$home->foto) }}" class="card-img-top" alt="Profile Picture">
                            </div>
                        @else
                            <div class="profile bg-gradient-primary-to-secondary">
                                <h1 class="card-text">Data Not Available</h1>
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        @isset($home)
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">{{ $home->about_me ?? 'Data Not Available' }}</span></h2>
                            <p class="text-muted">{{ $home->deskripsi_about_me ?? 'Data Not Available' }}</p>
                        @else
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Data Not Available</span></h2>
                            <p class="text-muted">Data Not Available</p>
                        @endisset
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" href="https://github.com/dashboard" target="_blank"><i class="bi bi-twitter"></i></a>
                            <a class="text-gradient" href="https://github.com/dashboard" target="_blank"><i class="bi bi-linkedin"></i></a>
                            <a class="text-gradient" href="https://github.com/dashboard" target="_blank"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
