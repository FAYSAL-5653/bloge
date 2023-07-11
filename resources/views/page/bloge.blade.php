<section>
    @foreach ($res as $itme)
        <div class="card mb-3">
            <div class="card-header">
                <h1>{{ $itme->title }}</h1>
                <h6>{{ $itme->author }}</h6>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $itme->content }}</p>
                <small class="text-muted">Posted on: {{ $itme->created_at }}</small>
            </div>
        </div>
    @endforeach
</section>
