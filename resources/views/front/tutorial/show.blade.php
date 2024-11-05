
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
