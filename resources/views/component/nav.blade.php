  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">My Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link " href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/bloge') }}">Post Bloge</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/comment') }}">Post Comment</a>
                  </li>

              </ul>
          </div>
      </div>
  </nav>
