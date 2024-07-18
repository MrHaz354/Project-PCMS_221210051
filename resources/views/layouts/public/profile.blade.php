@extends('layouts.public.app')

@section('content') 
<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Profile</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                    <tbody>
                        @forelse ($files as $file)
                            <tr>
                                <td class="text-center">
                                <a class="btn btn-primary px-4 py-3" href="{{ route('profile.download', $file) }}" target="_blank">
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Download
                                </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="text-muted text-center">Data file belum tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                </div>
                @if($profile && count($profile) > 0)
                    @foreach ($profile as $item)
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">
                                                {{ $item->tahun_kerja ?? 'Data not available' }}
                                            </div>
                                            <div class="small fw-bolder">
                                                {{ $item->pekerjaan ?? 'Data not available' }}
                                            </div>
                                            <div class="small text-muted">
                                                {{ $item->perusahaan ?? 'Data not available' }}
                                            </div>
                                            <div class="small text-muted">
                                                {{ $item->lokasi_perusahan ?? 'Data not available' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>
                                            {{ $item->deskripsi1 ?? 'Data not available' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No experience data available.</p>
                @endif
            </section>
            <section>
                <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                @if($profile && count($profile) > 0)
                    @foreach ($profile as $item)
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-secondary fw-bolder mb-2">
                                                {{ $item->tahun_masuk ?? 'Data not available' }}
                                            </div>
                                            <div class="mb-2">
                                                <div class="small fw-bolder">
                                                    {{ $item->universitas ?? 'Data not available' }}
                                                </div>
                                                <div class="small text-muted">
                                                    {{ $item->lokasi_univ ?? 'Data not available' }}
                                                </div>
                                            </div>
                                            <div class="fst-italic">
                                                <div class="small text-muted">
                                                    {{ $item->jurusan ?? 'Data not available' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>
                                            {{ $item->deskripsi2 ?? 'Data not available' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No education data available.</p>
                @endif
            </section>
            <div class="pb-5"></div>
            <section>
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Hard Skills</span></h3>
                            </div>
                            @if($profile && count($profile) > 0)
                                @foreach ($profile as $item)
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                {{ $item->hard_skill_1 ?? 'Data not available' }}
                                            </div>
                                        </div>
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                {{ $item->hard_skill_2 ?? 'Data not available' }}
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                {{ $item->hard_skill_3 ?? 'Data not available' }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No hard skills data available.</p>
                            @endif
                        </div>
                        <div class="mb-0">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Soft Skills</span></h3>
                            </div>
                            @if($profile && count($profile) > 0)
                                @foreach ($profile as $item)
                                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                {{ $item->soft_skill_1 ?? 'Data not available' }}
                                            </div>
                                        </div>
                                        <div class="col mb-4 mb-md-0">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                {{ $item->soft_skill_2 ?? 'Data not available' }}
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                {{ $item->soft_skill_3 ?? 'Data not available' }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No soft skills data available.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
