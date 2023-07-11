<section id="comments">
    <h3>Comments</h3>

    <div class="card mb-3">
        @foreach ($returnColumn as $itme)
            <div class="card-header">
                {{ $itme->name }}
            </div>
            <div class="card-body">
                <p class="card-text">{{ $itme->name }}</p>
                <small class="text-muted">Posted on:{{ $itme->created_at }}</small>
            </div>
    </div>
    <a class="btn btn-primary btn-sm " href="{{ url('/comment') }}" role="button">post comment </a>
    @endforeach

</section>
