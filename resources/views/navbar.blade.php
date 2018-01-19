<header id="Navbar" class="navbar is-transparent is-fixed-top">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item">
        <img class="_initial-maxheight" src="images/logo/logo-267x45.png" alt="Logo">
      </a>
      <span class="navbar-burger burger is-flex-tablet-only is-flex-mobile" data-target="navbarMenuHeroC">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </div>
    <div id="navbarMenuHeroC" class="navbar-menu has-text-centered-touch">
      <div class="navbar-end">
        <a href="/" class="{{ Request::segment(1) == '' ? 'is-active' : null }} navbar-item is-uppercase">
          Home
        </a>
        <a href="whoweare" class="{{ Request::segment(1) == 'whoweare' ? 'is-active' : null }} navbar-item is-uppercase">
          Who We Are
        </a>
        <a href="whatwedo" class="{{ Request::segment(1) == 'whatwedo' ? 'is-active' : null }} navbar-item is-uppercase">
          What We Do
        </a>
        <a href="clients" class="{{ Request::segment(1) == 'clients' ? 'is-active' : null }} navbar-item is-uppercase">
          Clients
        </a>
        <a href="contactus" class="{{ Request::segment(1) == 'contactus' ? 'is-active' : null }} navbar-item is-uppercase">
          Contacts
        </a>
      </div>
    </div>
  </div>
</header>