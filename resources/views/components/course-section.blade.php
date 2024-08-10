@props(['course_categories' => []])

<section id="course" class="container-sm grid-center text-center px-3 px-md-0" x-data="course">
    <div class="d-flex flex-column justify-content-center align-items-center text-center section-title">
        <h1>Lebih dari 2000+ Learning Video</h1>
        <p class="text-thin">Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat oleh
            tim kurikulum
            profesional bersama tim video profesional untuk menghasilkan video dengan kualitas tinggi</p>
    </div>

    <div class="d-flex justify-content-md-center scroll mb-4 mt-3" style="width: 100%">
        @foreach ($course_categories as $category)
            <div class="mx-1">
                <button class="btn btn-content text-nowrap"
                    :class="category == {{ $category->id }} ? 'btn-first' : 'btn-second'" style="flex: 1 0 auto;"
                    data-id="{{ $loop->iteration }}"
                    @click="handleCategoryClick('{{ $category->id }}')">{{ $category->name }}</button>
            </div>
        @endforeach
    </div>

    <div style="min-height: 400px">
        <div class="container-md mx-auto row" x-show="open" x-transition:enter="transition"
            x-transition:enter-start="transition" x-transition:enter-end="transition">
            <template x-if="courses">
                <template x-for="course in courses">
                    <div class="col-6 col-lg-3 p-2">
                        <div class="card shadow-sm" style="width: 100%; padding: 0; border: 0">
                            <img :src="getUrl(course.thumbnail)" :alt="course.title" class="card-img-top img-fluid"
                                style="background: gray; aspect-ratio: 16 / 9;">

                            <span x-text="load"></span>

                            <div class="d-flex flex-column justify-content-start align-items-start px-3 py-3">
                                <a href="" class="text-decoration-none text-active">
                                    <h5 class="text-left text-lg mb-2 fw-bold" x-text="course.title">Card title</h5>
                                </a>
                                <span class="sub-title text-base fw-bold mb-2" x-text="course.creator_name"></span>
                                <span class="sub-title text-sm" x-text="course.creator_type"></span>
                            </div>
                        </div>
                    </div>
                </template>
            </template>

            <div class="paginate-buttons text-left">
                <template x-for="(item, index) in new Array(paginate)">
                    <button type="button" :class="(index + 1) == page ? 'active' : ''"
                        @click="handlePaginationClick(index + 1)"></button>
                </template>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('course', () => ({
                courses: null,
                paginate: 0,
                category: {{ $course_categories[0]->id }},
                open: false,
                page: 1,
                async fetchData(page = "") {
                    this.open = false;
                    let url = `{{ url('course') }}/${ this.category }`;
                    if (page != "") {
                        url = url.concat(`?page=${ page }`)
                    }
                    const response = await fetch(url);
                    const data = await response.json();
                    this.open = true;
                    this.courses = data.data;
                    this.paginate = data.paginate;
                },
                init() {
                    setTimeout(() => {
                        this.fetchData()
                    }, 300);
                },
                handleCategoryClick(category) {
                    this.category = category
                    this.previousPage = 1
                    this.page = 1
                    setTimeout(() => {
                        this.fetchData()
                    }, 300);
                },
                handlePaginationClick(page) {
                    this.previousPage = this.page
                    this.page = page
                    this.fetchData(this.page)
                },
                getUrl(thumbnail) {
                    return `{{ url('assets/images/thumbnails') }}/${ thumbnail }`
                }
            }))
        })
    </script>
</section>
