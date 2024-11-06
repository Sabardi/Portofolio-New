<x-layouts>
    <section class="float-left w-100 form-main-con padding-top padding-bottom" id="tutorial">
        <div class="container">
            <div class="form-main-inner-con position-relative">
                <div class="text-center generic-title">
                    <div class="mb-4">
                        <img src="https://laravel.com/img/logotype.min.svg" alt="">
                    </div>
                    <h6 style="color: #16a085;">{{ $category->name }}</h6>
                    <h2 class="mb-0">{{ $category->name }} Tutorials</h2>
                    <p class="font-weight-lighter text-muted">{{ $category->description }}</p>
                </div>


                @forelse ($tutorials as $tutorial)
                <div class="wow fadeInUp">
                    <ul class="list-unstyled">
                        <li class="p-2 mb-2 rounded" style="background-color: #f0f4f8;">
                            <a href="{{ route('tutorials.show', $tutorial->slug) }}"
                                class="gap-2 p-2 rounded d-flex align-items-center text-decoration-none">
                                <i class="me-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-file-earmark-text me-2" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                                        <path
                                            d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                    </svg>
                                </i>
                                <span>{{ $tutorial->title }}</span>
                            </a>
                        </li>

                    </ul>
                </div>
                @empty
                    <p>No tutorials found in this category.</p>
                @endforelse
            </div>
        </div>
    </section>
</x-layouts>
