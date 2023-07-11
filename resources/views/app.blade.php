@include('component.head')
<main class="container">
    @include('component.nav')
    <div class="row">
        @yield('content')
        <div class="col-md-4">
            <!-- Sidebar content goes here -->
        </div>
    </div>
</main>
@include('component.footer')
@include('component.script')
