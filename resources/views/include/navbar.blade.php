<nav class="navbar navbar-inverse">
<div class="contanier">
  <div class="navbar-header">
      <button type="button" name="button" class="navbar-toggle collapse" data-toggle="#navbar">
        <span class="sr-sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SampleApp</a>
  </div>
  <div id="navbar" href="#" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
      <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
      <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
    </ul>
  </div>
</div>
</nav>
