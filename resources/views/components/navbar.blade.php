<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">EkskulManager</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="/dashboard" class="nav-link">Dashboard</a></li>
        <li class="nav-item"><a href="/pengelolaan" class="nav-link">Pengelolaan</a></li>
        <li class="nav-item">
          <a href="{{ isset($username) ? route('profile', ['username' => $username]) : route('profile') }}" class="nav-link">
            Profile
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
