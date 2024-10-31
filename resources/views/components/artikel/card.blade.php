<div class="col-lg-4">
    <div class="mb-3 blog-box-item">
        <div class="blog-img">
            <a href="#" data-toggle="modal" data-target="#blog-model-{{$id}}">
                <figure class="mb-0">
                    <img src="{{Storage::url($thumbnail)}}" alt="blog-img"
                        class="img-fluid">
                </figure>
            </a>
        </div>
        <div class="blog-content">
            <div class="blog-auteher-title">
                <span>By {{$author}}</span>
                <span class="float-lg-right">{{$date}}</span>
            </div>
            <a href="#" data-toggle="modal" data-target="#blog-model-{{$id}}">
                <h4>{{Str::words($title, 10)}}</h4>
            </a>
                {{$slot}}
            <a href="#" data-toggle="modal" data-target="#blog-model-1">Read More</a>
        </div>
    </div>
</div>
