<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/layout.css')}}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
     
    

     <script src="{{ asset('jquery/jquery-3.7.1.min.js')}}"></script>
     @yield('header')</b:y>
</head>
<body>
    <header>
        <section class="section_header">
            
            <div class="container  py-3">
                
                <div class="row">
                    
                    <div class="col md-3">
                        <img src="{{ asset('images/logo.webp')}}" class="img-fluid" alt="Logo">
                    </div>
                    <div class="col md-4"> 
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Tim kiem" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                          </div>
                          
                    </div>
                    <div class="col md-3">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="fs-2 text-danger">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-9">Tư vấn hỗ trợ
                                        <br>
                                        <strong class="text-danger">
                                            0123456798
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="fs-2 text-danger">
                                            <i class="fa-regular fa-user"></i></i>
                                        </div>
                                    </div>
                                    <div class="col-9">Xin chào
                                        <br>
                                        <strong class="text-danger">
                                            Đăng nhập
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col md-2">
                        <div class="row">
                            <div class="col-2 ">
                                <a href="#" class=" position-relative">
                                    <span class="fs-2 ">
                                        <i class="fa-regular fa-heart text-secondary-emphasis"></i>
                                    </span>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      0
                                  
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="#" class=" position-relative">
                                    <span class="fs-2 ">
                                        <i class="fa-solid fa-bag-shopping text-secondary-emphasis"></i>
                                    </span>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      0
                                    
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="#" class=" position-relative">
                                    <span class="fs-2 ">
                                        <i class="fa-solid fa-link text-secondary-emphasis"></i>
                                    </span>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      0
                                     
                                </a>
                            </div>
                        </div>
                       
                    </div>
                </div>
              
            </div>
        </section>
        <!-- !header -->


       
        
    </header>
    <main>
        @yield('maincontent')
    </main>
 
    <footer>
        <section class="footer bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>VĂN PHÒNG GIAO DỊCH</h4>
                        <ul class="list-menu">
                            <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>                       
                            <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>                          
                            <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>    
                            <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>                          
                            <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>                          
                            <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>                         
                            <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>VỀ CHÚNG TÔI</h4>
                        <ul class="list-menu">
                            <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>                       
                            <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>                          
                            <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>    
                            <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>                          
                            <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>                          
                            <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>                         
                            <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                         <h4>CHÍNH SÁCH BÁN HÀNG</h4>
                        <ul class="list-menu">
                            <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>                       
                            <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>                          
                            <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>    
                            <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>                          
                            <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>                          
                            <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>                         
                            <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4>THEO DÕI CHÚNG TÔI</h4>
                        <ul class="list-menu">
                            <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>                       
                            <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>                          
                            <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>    
                            <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>                          
                            <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>                          
                            <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>                         
                            <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                            
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                    <h4>THIÊN ĐƯỜNG MUA SẮM POCO MART</h4>
                    <p class="m-0">Copyright@ 2021 Công ty cổ phần thương mại Poco Mart</p>
                    <p class="m-0">Chứng nhận ĐKKD số: 0388282938 do sở KH & ĐT TP.Hà Nội cấp</p>
                    <p class="m-0"> Địa chỉ: Tòa nhà Ladeco 266 Đội Cấn, Ba Đình, Hà Nội</p>
                    <p class="m-0">  Điện thoại: 19006750 - Email: support@sapo.vn</p>
                    </div>
                    <div class="col-md-6">
                        <h4>NHẬN TIN KHUYẾN MÃI</h4>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nhập email" aria-label="nhap email" aria-describedby="basic-addon2">
                            <span class="input-group-text text-white bg-danger" id="basic-addon2">Đăng ký</span>
                        </div>
                        <div>
                            <Span class="box bg-white boder mr-3">
                                <i class="fa-brands fa-square-facebook text-primary"></i>
                            </Span>
                       
                            <Span class="box bg-white boder mr-3">
                                <i class="fa-brands fa-twitter text-info"></i>
                            </Span>
                        
                            <Span class="box bg-white boder mr-3">
                                <i class="fa-brands fa-google text-danger-emphasis"></i>
                            </Span>
                       
                            <Span class="box bg-white boder mr-3">
                                <i class="fa-brands fa-youtube text-danger"></i>
                            </Span>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6"> 
                        Bản quyền thuộc về Ego Creative Cung cấp bởi Sapo
                    </div>
                    <div class="col-md-6 text-end"> 
                       
                            <a  title="Trang chủ">Trang chủ</a>                     
                            <a  title="Giới thiệu">Giới thiệu</a>                        
                            <a  title="Sản phẩm">Sản phẩm</a>  
                            <a  title="Tin mới nhất">Tin mới nhất</a>                       
                            <a  title="Câu hỏi thường gặp">Câu hỏi thường gặp</a>                        
                            <a  title="Tuyển dụng">Tuyển dụng</a>                      
                            <a  title="Liên hệ">Liên hệ</a>
                            
                        </ul>
                    </div>
                </div>


            </div>

        </section>
    </footer>

    <script src="assets/js/main.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/fontawesome/js/all.min.js"></script>
    <script src="assets/jquery/jquery-3.7.1.min.js"></script>
    

    @yield('footer')
</body>
</html>