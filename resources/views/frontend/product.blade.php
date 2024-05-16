@extends('layouts.site')
@section('title','san pham')
    

@section('maincontent')
<section class="menu bg-danger">
    <div class="container ">
        <div class="row">
            <div class="col-md-3 text-white py-3">Danh mục sản phẩm</div>
            <div class="col-md-9">
                <nav class="navbar navbar-expand-lg bg-danger">
                    <div class="container-fluid">
                      <a class="navbar-brand d-none" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Trang chủ</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">Giới thiệu</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Sản phẩm
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item " href="#">Action</a></li>
                              <li><a class="dropdown-item " href="#">Another action</a></li>
                              <li><hr class="dropdown-divider "></li>
                              <li><a class="dropdown-item " href="#">Something else here</a></li>
                            </ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Tin mới nhất
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item " href="#">Action</a></li>
                              
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled text-white" aria-disabled="true">Câu hỏi thường gặp</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled text-white" aria-disabled="true">Tuyển dụng</a>
                          </li>
                        </ul>
                       
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
</section>



<section class="main container">
   
    <h1 class="text-danger py-3 container">TẤT CẢ SẢN PHẨM</h1>
    <div class="product-list mb-3">
       
        <div class="product-list-s py-3">
            <div class="row">
                <div class="col-md-3 mb3">
                    <img src="{{ asset('images/sp9.jpg')}}" class="img-fluid w-100">
                    <h4>Samsung Galaxy Note 21</h4>
                    <h3 class="text-danger" class="text-danger">29.000.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src="{{ asset('images/sp7.png')}}" class="img-fluid w-100">
                    <h4>Apple iPhone 12 Mini New</h4>
                    <h3 class="text-danger" >26.000.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src="{{ asset('images/sp8.png')}}" class="img-fluid w-100">
                    <h4>iPhone 12 Pro Max Like </h4>
                    <h3 class="text-danger">22.000.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src="{{ asset('images/sp13.webp')}}" class="img-fluid w-100">
                    <h4>iPhone XR - Vàng </h4>
                    <h3 class="text-danger">8.000.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src="{{ asset('images/sp14.jpg')}}" class="img-fluid w-100">
                    <h4>Xiaomi Mi 10T Pro 5G</h4>
                    <h3 class="text-danger">10.900.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src="{{ asset('images/sp8.png')}}" class="img-fluid w-100">
                    <h4>iPhone 12 Hàng Quốc Tế</h4>
                    <h3 class="text-danger">26.000.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src="{{ asset('images/sp10.jpg')}}" class="img-fluid w-100">
                    <h4>Samsung Galaxy Note 21</h4>
                    <h3 class="text-danger">25.000.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src="{{ asset('images/sp11.webp')}}" class="img-fluid w-100">
                    <h4>iPhone 12 Pro Max</h4>
                    <h3 class="text-danger">26.000.000₫</h3>
                </div>

  
    {{-- //////// --}}

      
       
                <div class="col-md-3 mb3">
                    <img src="{{ asset('images/sp.webp')}}" class="img-fluid w-100">
                    <h4>Kappa giày thể thao Nam/Nữ 001</h4>
                    <h3 class="text-danger">690.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src=" {{ asset('images/sp2.webp')}}" class="img-fluid w-100">
                    <h4>Kappa giày thể thao Nam/Nữ 31169FW 001</h4>
                    <h3 class="text-danger">690.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src="{{ asset('images/sp3.jpg')}}" class="img-fluid w-100">
                    <h4>Kappa giày thể thao Nam/Nữ 3116Z2W A04</h4>
                    <h3 class="text-danger">690.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src="{{ asset('images/sp4.jpg')}}" class="img-fluid w-100">
                    <h4>Kappa giày thể thao Nam/Nữ 3116Z3W 001</h4>
                    <h3 class="text-danger">690.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src=" {{ asset('images/sp5.jpg')}}" class="img-fluid w-100">
                    <h4>Giày thể thao Nam/Nữ 31169FW 001</h4>
                    <h3 class="text-danger">690.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src="{{ asset('images/sp6.webp')}}" class="img-fluid w-100">
                    <h4>Kappa giày thể thao Nam/Nữ 31169FW A04</h4>
                    <h3 class="text-danger">690.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src=" {{ asset('images/sp.webp')}}" class="img-fluid w-100">
                    <h4>Kappa giày thể thao Nam/Nữ 304ITD0 A0U</h4>
                    <h3 class="text-danger">690.000₫</h3>
                </div>
                <div class="col-md-3 mb3">
                    <img src=" {{ asset('images/sp1.webp')}}" class="img-fluid w-100">
                    <h4>Kappa giày thể thao Nam/Nữ 311685W A0F</h4>
                    <h3 class="text-danger">690.000₫</h3>
                </div>
                
                
            </div>

        </div>
    </div>

</section>
@endsection