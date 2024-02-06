<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand text-primary" href="/">ManganShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{$title === 'Home' ? 'active' : ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$title === 'Products' ? 'active' : ''}}" href="/products">product</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link {{$title === 'Contact' ? 'active' : ''}}" href="/contact">contact</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            support
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/login">login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/account">my account</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="cari product" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">cari</button>
      </form>
    </div>
  </div>
</nav>
