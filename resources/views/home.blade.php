@extends('layouts.main')

@section('contents')
    <section id="banner" class="section-title grid-center text-white text-center px-4 px-md-0">
        <h1 class="mb-3">Tingkatkan Performa Bisnis Anda</h1>
        <p class="mb-5">Semua solusi untuk mempermudah Training dan Upskilling karyawan di perusahaan Anda</p>

        <div>
            <a href="#" class="btn btn-first btn-full px-5">Ajukan Demo</a>
        </div>
    </section>

    <section id="clients" class="grid-center text-center px-3 py-5">
        <div class="container">
            <h1 class="title mb-5">Telah Dipercaya oleh 10.000+ Profesional User dari</h1>

            <div class="d-flex scroll" style="width: 100%;">
                @foreach ($clients as $client)
                    <div class="d-flex align-items-center justify-content-center" style="height: 100px; flex: 1 0 auto;">
                        <img src="{{ url("assets/images/clients/{$client->image}") }}" alt="{{ $client->name }}"
                            class="img-fluid p-2" style="aspect-ratio: auto;">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-content-section :contents="$contents" />

    <x-subscription-section :subscriptions="$subscriptions" />

    <x-course-section :course_categories="$course_categories" />

    <section id="banner2" class="section-title grid-center text-center px-3 py-5">
        <div class="banner2-overlay"></div>

        <div class="banner2-content grid-center text-center">
            <h2 class="text-xl fw-bold mb-2">Tingkatkan Kualitas Perusahaan Anda</h2>
            <p class="sub-title text-sm mb-5">Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp
                dapat
                membantu
                dalam
                mengelola pelatihan
                dan membuat prosesnya lebih cepat dan lebih mudah.</p>
            <div class="px-4">
                <a href="#" class="btn btn-first btn-full px-5">Ajukan Demo</a>
            </div>
        </div>
    </section>
@endsection
