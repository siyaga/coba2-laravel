
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-2">
    <a class="navbar-brand" href="#">Look A News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{ $title === "Home" ? 'active' : '' }}">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ $title === "About" ? 'active' : '' }}">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item {{ $title === "Blog" ? 'active' : '' }}">
          <a class="nav-link" href="/posts">Blog</a>
        </li>
      </ul>
    </div>
  </nav>