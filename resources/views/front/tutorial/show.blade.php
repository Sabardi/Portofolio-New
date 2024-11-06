
<x-layouts>
    <section class="float-left w-100 form-main-con padding-top padding-bottom" id="tutorial">
        <div class="container">
            <div class="form-main-inner-con position-relative">
                <div class="text-center generic-title">
                    <div class="mb-lg-5">
                       <img src="{{ Storage::url($tutorial->image) }}" >
                    </div>
                    <h2>{{ $tutorial->title }}</h2>
                </div>
            </div>
        </div>
    </section>
</x-layouts>

    <div class="container">
        <h1>{{ $tutorial->title }}</h1>

        <div class="tutorial-details">
            <img src="{{ Storage::url($tutorial->image) }}" alt="{{ $tutorial->title }}" class="mb-4 img-fluid">
            <p>{{ $tutorial->description }}</p>
            <p>Category: {{ $tutorial->category->name ?? 'Uncategorized' }}</p>
        </div>

        <div class="content">
            {!! $tutorial->content !!}
        </div>
    </div>
