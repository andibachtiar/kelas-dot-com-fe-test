@props(['subscriptions' => []])

<section id="subscription" class="container-sm px-4 px-md-0">
    <h1 class="title mb-5 text-center">Pilihan Paket Untuk Perusahaan di Kelas Center</h1>

    <div class="subscription-card-container d-flex scroll" style="width: 100%;">
        @foreach ($subscriptions as $subscription)
            <div class="card p-4 {{ $subscription->name === 'Pro' ? 'subscription-card-pro' : 'subscription-card' }}"
                style="min-width: 300px; {{ !$loop->first && !$loop->last ? 'margin: 0 20px' : '' }}">
                <div class="mb-3">
                    <h2 class="fs-4">{{ $subscription->name }}</h2>
                    <span class="text-sm text-secondary sub-title">Kelebihan</span>
                </div>

                <div>
                    <ul class="sub-title">
                        @foreach ($subscription->benefits as $benefit)
                            <li class="mb-3 text-xs">
                                <img src="{{ url('assets/images/check-icon.png') }}" alt="check-icon"
                                    style="width: 15px" class="mx-2">
                                <span>{{ $benefit }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <hr style="border-style: dashed">
                </div>

                <div class="row">
                    <div class="col-12 mb-1">
                        <span class="text-xs sub-title">{{ currencyFormat($subscription->price) }}</span>
                    </div>

                    <div class="col-12 mb-2">
                        <span>{{ currencyFormat(discount($subscription->price, $subscription->discount)) }}</span>
                        <span class="sub-title text-xs">/bulan</span>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-full text-center text-sm" style="width: 100%">Pilih
                            Paket</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="card subscription-card-enterprise p-3 my-4" style="min-width: 350px; width: 100%">
        <div class="d-flex flex-column justify-content-start flex-md-row justify-content-md-between">

            <div class="d-flex flex-column justify-content-start align-items-start flex-md-row align-items-md-center">

                <h2 class="fs-4 text-white">Enterprise</h2>

                <div class="d-flex align-items-center text-xs text-white my-2 my-md-0 mx-md-3">
                    <img src="{{ url('assets/images/check-white-icon.png') }}" alt="check-icon" style="width: 15px"
                        class="mx-1">
                    <span> >100 users</span>
                </div>
                <div class="d-flex align-items-center text-xs text-white my-2 my-md-0 mx-md-3">
                    <img src="{{ url('assets/images/check-white-icon.png') }}" alt="check-icon" style="width: 15px"
                        class="mx-1">
                    <span> All Access Class</span>
                </div>
                <div class="d-flex align-items-center text-xs text-white my-2 my-md-0 mx-md-3">
                    <img src="{{ url('assets/images/check-white-icon.png') }}" alt="check-icon" style="width: 15px"
                        class="mx-1">
                    <span> More Features</span>
                </div>
            </div>

            <div style="">
                <button class="btn btn-second btn-full mt-4 mt-md-0 ">Contact Us</button>
            </div>
        </div>
    </div>
</section>
