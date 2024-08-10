@props(['contents' => []])

<section id="content" class="container-sm py-5 px-4 px-md-0" x-data="content">
    <div class="section-title d-flex flex-column justify-content-center align-items-center text-center">
        <h1>Bagaimana Kelas Center Membantu Anda?</h1>
        <p class="text-secondary">Kami menghadirkan platform pembelajaran yang
            komprehensif untuk
            memberdayakan
            karyawan Anda.
            Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</p>
    </div>

    {{-- <div class="d-flex justify-content-center"> --}}
    <div class="d-flex justify-content-md-center scroll mb-5" style="width: 100%">
        @foreach ($contents as $content)
            <div class="mx-1">
                <button class="btn btn-content btn-first text-nowrap"
                    :class="open == {{ $loop->iteration }} ? 'btn-first' : 'btn-second'" style="flex: 1 0 auto;"
                    data-id="{{ $loop->iteration }}"
                    @click="handleClick('{{ $loop->iteration }}')">{{ $content->name }}</button>
            </div>
        @endforeach
    </div>
    {{-- </div> --}}

    <div class="px-2">
        @foreach ($contents as $content)
            <div class="row mb-3 content-item" x-show="open == {{ $loop->iteration }}" x-transition:enter="transition"
                x-transition:enter-start="transition-start" x-transition:enter-end="transition-end">

                <h3 class="d-block d-md-none fs-5">{{ $content->title }}</h3>

                <div class="col-sm-12 d-sm-flex d-md-none" style="height: 200px; background-color: gray">
                </div>

                <div class="col-sm-12 col-md-6">
                    <h2 class="d-none d-md-block fs-5">{{ $content->title }}</h2>

                    <p class="text-xs sub-title mt-3">{{ $content->description }}</p>

                    @foreach ($content->features as $feature)
                        <div class="content-feature">
                            <h4 class="fs-6">
                                <img src="{{ url('assets/images/check-small-icon.png') }}" alt="check-icon">
                                <span class="mx-2">{{ $feature['title'] }}</span>
                            </h4>
                            <p class="sub-title text-xs">
                                {{ $feature['description'] }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <div class="d-none d-md-flex col-md-6" style="height: 350px; background-color: gray">
                </div>
            </div>
        @endforeach
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('content', () => ({
                open: 1,
                handleClick(index) {
                    this.open = index
                }
            }))
        })
    </script>
</section>
