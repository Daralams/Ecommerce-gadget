<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-black bg-gradient" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light fw-bold" href="/" id="nav-logo">Tech<span class="text-info">Titan</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
        <li class="nav-item">
          <a class="nav-link {{$title === 'Home' ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$title === 'Products' ? 'active' : ''}}" href="/products">product</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            support
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item {{$title === 'Sign In' ? 'active' : ''}}" href="/sign-in">Sign In</a></li>
            <li><a class="dropdown-item {{$title === 'Sign Up' ? 'active' : ''}}" href="/sign-up">Sign Up</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/account">my account</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search" action="/products">
        <input class="form-control me-2 bg-transparent" type="text" placeholder="Search" name="search" value="{{request('search')}}">
        <button class="btn btn-outline-info" type="submit">search</button>
      </form>
    </div>
  </div>
</nav>
