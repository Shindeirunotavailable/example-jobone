@extends('layout.master')
@section('content')
<section class="pt-10 pb-10 mb-60">
    <div class="search-container p-4">
        <h5 class="text-center fw-bold">ค้นหาผลิตภัณฑ์</h5>
        <div class="row justify-content-center pt-10 pb-10 d-none d-md-flex">
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-tag" aria-hidden="true"></i></span>
                    <select class="form-select">
                        <option selected>เลือกแบรนด์</option>
                        <option value="1">แบรนด์ A</option>
                        <option value="2">แบรนด์ B</option>
                        <option value="3">แบรนด์ C</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-filter" aria-hidden="true"></i></span>
                    <select class="form-select">
                        <option selected>เลือกผลิตภัณฑ์</option>
                        <option value="1">ผลิตภัณฑ์ A</option>
                        <option value="2">ผลิตภัณฑ์ B</option>
                        <option value="3">ผลิตภัณฑ์ C</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="d-none d-md-block">
            <div class="d-grid gap-2 col-6 mx-auto ">
                <button class="btn btn-primary" type="button">ค้นหา</button>
            </div>
        </div>        
        <div class="d-grid gap-2 col-12 mx-auto d-md-none">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="fa fa-sliders"></i> ค้นหารถยนต์แบบละเอียด
            </button>
        </div>
    </div>
</section>

<section class="container mt-4 mb-60">
    <div class="row">
        <div class="col-12">
            <h2 class="fw-bold">Work Louder: Nomad [E] Mechanical Keyboard</h2>
            <h3 class="text-primary fw-bold">11,799 บาท</h3>
            <p class="text-muted">
                <i class="fas fa-calendar-alt"></i> ข้อมูล ณ วันที่ 1 พ.ย. 67
                <i class="fas fa-eye ms-3"></i> 45,959
            </p>
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="product-image position-relative">
                <div class="sale-badge">SALE!</div>
                <img id="mainImage" src="{{ asset('assets/images/home_img/k1.jpg') }}" class="img-fluid rounded shadow" alt="Nomad E Keyboard">
                <button id="prevBtn" class="carousel-control-prev">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </button>
                <button id="nextBtn" class="carousel-control-next">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>
            <div id="thumbnailGallery" class="thumbnail-gallery d-flex justify-content-center mt-2">
                <img class="thumbnail active" src="{{ asset('assets/images/home_img/k2.jpg') }}" alt="Thumb 1">
                <img class="thumbnail" src="{{ asset('assets/images/home_img/k3.jpg') }}" alt="Thumb 2">
                <img class="thumbnail" src="{{ asset('assets/images/home_img/k4.jpg') }}" alt="Thumb 3">
                <img class="thumbnail" src="{{ asset('assets/images/home_img/k5.jpg') }}" alt="Thumb 4">
                <img class="thumbnail" src="{{ asset('assets/images/home_img/k1.jpg') }}" alt="Thumb 5">
            </div>
        </div>
        <div class="col-md-6">
            <h4 class="fw-bold">Nomad [E]</h4>
            <p>
                Know Productivity - Efficiency - Passion - Creativity with no limits. 
                A crisp IPS display boasts everything from pomodoro timer, 
                to a playful Tamagotchi-style companion, a trusty clock and much more.
            </p>
            <h5 class="fw-bold">Backed by science</h5>
            <p>
                The integrated pomodoro timer leverages a scientifically proven work/rest 
                methodology that is adaptable to any workflow – empowering you to 
                accomplish more in less time.
            </p>

            <h5 class="fw-bold">Mechanical & hotswap</h5>
            <p>
                We redesigned our custom keycaps to hug your fingertips even more perfectly 
                than before. Mounted on our custom tuned “Atomic” MX Gateron hotswap switches, 
                so you can try different switches without needing to desolder them.
            </p>
        </div>
    </div>
</section>

<section class="mb-60">
    <h4 class="fw-bold mb-4">ผลิตภัณฑ์ทีน่าจะถูกใจคุณ</h4>
    <div class="product-scroll-container">
        <div class="row row-cols-1 row-cols-md-4 g-4 flex-nowrap product-row">
            <div class="col">
                <div class="card product-card">
                    <img  src="{{ asset('assets/images/home_img/p1.png') }}" class="card-img-top" alt="Figma Creator Micro">
                    <div class="card-body text-center">
                        <h5 class="card-title">RAZER Pro Type Ultra</h5>
                        <p class="text-muted">Mechanical Keyboard</p>
                        <p class="price">5,599 บาท</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary w-100">ใส่ตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img  src="{{ asset('assets/images/home_img/p2.png') }}" class="card-img-top" alt="Knob1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Diavalet Phantom 2</h5>
                        <p class="text-muted">Stereo Speaker</p>
                        <p class="price">50,642 บาท</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary w-100">ใส่ตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img  src="{{ asset('assets/images/home_img/p3.png') }}" class="card-img-top" alt="Creator Board">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bose QuietComfort Ultra</h5>
                        <p class="text-muted">Headphone</p>
                        <p class="price">15,900 บาท</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary w-100">ใส่ตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img  src="{{ asset('assets/images/home_img/p4.png') }}" class="card-img-top" alt="Creator Board XL">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lewitt Pure Tube</h5>
                        <p class="text-muted">Studio Microphone</p>
                        <p class="price">43,999 บาท</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary w-100">ใส่ตะกร้า</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-60">
    <h4 class="fw-bold mb-4">ผลิตภัณฑ์อื่นๆ จาก Work Louder</h4>
    <div class="product-scroll-container">
        <div class="row row-cols-1 row-cols-md-4 g-4 flex-nowrap product-row">
            <div class="col">
                <div class="card product-card">
                    <img  src="{{ asset('assets/images/home_img/r1.png') }}" class="card-img-top" alt="Figma Creator Micro">
                    <div class="card-body text-center">
                        <h5 class="card-title">Figma Creator Micro</h5>
                        <p class="text-muted">Mechanical Keyboard</p>
                        <p class="price">5,375 บาท</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary w-100">ใส่ตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img  src="{{ asset('assets/images/home_img/r2.png') }}" class="card-img-top" alt="Knob1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Knob1</h5>
                        <p class="text-muted">Mechanical Keyboard</p>
                        <p class="price">14,999 บาท</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary w-100">ใส่ตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img  src="{{ asset('assets/images/home_img/r3.png') }}" class="card-img-top" alt="Creator Board">
                    <div class="card-body text-center">
                        <h5 class="card-title">Creator Board</h5>
                        <p class="text-muted">Mechanical Keyboard</p>
                        <p class="price">13,828 บาท</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary w-100">ใส่ตะกร้า</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <img  src="{{ asset('assets/images/home_img/r4.png') }}" class="card-img-top" alt="Creator Board XL">
                    <div class="card-body text-center">
                        <h5 class="card-title">Creator Board XL</h5>
                        <p class="text-muted">Mechanical Keyboard</p>
                        <p class="price">18,900 บาท</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary w-100">ใส่ตะกร้า</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('modal.select')

@endsection