<nav class="navbar navbar-expand-lg navbar-light bg-light nav-h">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand mx-lg-0 mx-auto" href="#">
      <img src="{{ asset('assets/images/Group.png') }}" alt="Logo" class="logo-img"> 
      <img src="{{ asset('assets/images/Boutique.png') }}" alt="Logo" class="logo-img-secondary">
    </a>
    <button class="btn btn-primary rounded-circle d-lg-none">
      <i class="fa fa-shopping-cart"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex" id="navbarNav">
      <ul class="nav nav-pills custom-pill-nav">
        <li class="nav-item">
          <button class="nav-link active" onclick="setActive(this)">หน้าหลัก</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" onclick="setActive(this)">สินค้าใหม่</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" onclick="setActive(this)">อุปกรณ์ไอที</button>
        </li>
      </ul>
    </div>
    <div class="d-none d-lg-block pl-4">
      <button class="btn btn-primary rounded-button" type="button">
        <i class="fa fa-shopping-cart"></i>
      </button>
    </div>
  </div>
</nav>
