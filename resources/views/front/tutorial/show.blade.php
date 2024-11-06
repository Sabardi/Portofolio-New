<x-layouts>
    <section class="float-left w-100 form-main-con padding-top padding-bottom" id="tutorial">
        <div class="container">
            <div class="form-main-inner-con position-relative">
                <div class="text-center generic-title">
                    <div class="mb-lg-5">
                        <h2>{{ $tutorial->title }}</h2>
                        {{-- <p>Category: {{ $tutorial->category->name ?? 'Uncategorized' }}</p> --}}
                    </div>
                </div>

                <div class="content">
                    {!! $tutorial->content !!}
                </div>
            </div>
        </div>
    </section>

    <!-- Related Tutorials List -->
    <section class="float-left w-100 related-tutorials padding-top padding-bottom" id="related-tutorials">
        <div class="container">
            <div class="text-center generic-title">
                <h3>Other Tutorials in Programming</h3>
            </div>
            <ul class="list-unstyled">
                <li class="p-2 mb-2 rounded" style="background-color: #f0f4f8;">
                    <a href="/tutorials/introduction-to-javascript" class="gap-2 p-2 rounded d-flex align-items-center text-decoration-none">
                        <i class="me-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text me-2" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                            </svg>
                        </i>
                        <span>Introduction to JavaScript</span>
                    </a>
                </li>
                <li class="p-2 mb-2 rounded" style="background-color: #f0f4f8;">
                    <a href="/tutorials/advanced-python-techniques" class="gap-2 p-2 rounded d-flex align-items-center text-decoration-none">
                        <i class="me-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text me-2" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                            </svg>
                        </i>
                        <span>Advanced Python Techniques</span>
                    </a>
                </li>
                <li class="p-2 mb-2 rounded" style="background-color: #f0f4f8;">
                    <a href="/tutorials/web-development-basics" class="gap-2 p-2 rounded d-flex align-items-center text-decoration-none">
                        <i class="me-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text me-2" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                            </svg>
                        </i>
                        <span>Web Development Basics</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</x-layouts>
