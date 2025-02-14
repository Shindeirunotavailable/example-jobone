
<nav class="navbar navbar-expand-lg navbar-light bg-light nav-h">
  <div class="container-fluid ml-60 mr-60">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('assets/images/Group.png') }}" alt="Logo" width="auto" height="auto">
      <img src="{{ asset('assets/images/Boutique.png') }}" alt="Logo" width="auto" height="auto">
    </a>

      <div class="d-flex justify-content-center">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false">หน้าหลัก</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">สินค้าใหม่</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="true">อุปกรณ์ไอที</button>
          </li>
        </ul>
      </div>
      <form class="d-flex">
        <button class="btn btn-outline-success" type="submit">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </button>
      </form>
  </div>
</nav>