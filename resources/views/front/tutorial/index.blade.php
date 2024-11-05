<!-- resources/views/front/tutorials_by_category.blade.php -->


    <h1>Tutorials in Category: {{ $category->name }}</h1>

    @if($tutorials->isEmpty())
        <p>No tutorials found in this category.</p>
    @else
        <ul>
            @foreach($tutorials as $tutorial)
                <li>
                    <a href="{{ route('tutorials.show', $tutorial->slug) }}">{{ $tutorial->title }}</a>
                </li>
            @endforeach
        </ul>
    @endif
