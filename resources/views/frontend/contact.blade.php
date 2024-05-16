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
   
    <h1 class="text-danger py-3 container">Liên Hệ</h1>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62708.798795561146!2d106.70105444863283!3d10.788325200000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175274bf31f0485%3A0x12eb228ebb30664a!2zU2nDqnUgdGjhu4sgQsOhY2ggaMOzYSBYQU5IIDYwMiBOZ3V54buFbiBEdXkgVHJpbmg!5e0!3m2!1svi!2s!4v1715855468686!5m2!1svi!2s" width="1300" height="450" style="border:0;" 
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-12 order-lg-2 order-2">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="item-contact">
                    <div class="img">
                        <i class="fas fa-map-marker-alt text-danger"></i>
                    </div>
                    <div class="content-r">
                        Địa chỉ:
                        <p>
                            Tòa nhà Ladeco 266 Đội Cấn, Ba Đình, Hà Nội
                        </p>
                    </div>
                </div>
                <div class="item-contact">
                    <div class="img">
                        <i class="fas fa-question text-danger"></i>
                    </div>
                    <div class="content-r">
                        Gửi thắc mắc:
                        <a href="mailto:support@sapo.vn">support@sapo.vn</a>
                    </div>
                </div>
                <div class="item-contact">
                    
                    <div class="img">
                        <i class="fa-solid fa-phone text-danger"></i>
                    </div>
                    <div class="content-r">
                        Điện thoại:
                        <a class="fone " href="tel:19006750">19006750</a> 
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div id="pagelogin">
                    <form method="post" action="/postcontact" id="contact" accept-charset="UTF-8"><input name="FormType" type="hidden" value="contact"><input name="utf8" type="hidden" value="true"><input type="hidden" id="Token-8afe37424b234484bf95fbcac4b8d03a" name="Token" value="03AFcWeA5Y9qS2tsNF5_-K0ZnlNBG551pU6gXrj_mVlCGno5uozVyiLLxl2M97Tih7CmnV3TBJNFz5GKg3MM5HuciJw9Uj62fYFaWQlFopdkHU7l23n7P7JBj6f9R351ZuUJNjozMUfnPs4J3KilOU7rSdMxCHelIJYb6MOTjeyppkoInwS8zqijUeogmlE2oMHq-JidIkwU3t-4ukAN-wbgASFaOTggfF7btXNKzQe82ADPQTVsCq7qzfPDhEsNhUdW1mETfmKAQIZzBmcP_q1tgdROjK49pOgdaKNKtHOiBn68SqDsx6i0G31QAaoeg3yQDGm5udVmQs6phzVy4lrDGw2QH8Eab42P_W3YCE_VStrMNNB0Snet5aOjuBqNu9v74GsLxRNmnf_xV4z_lH1piOfBqvE1MhF5qoj7Glm3LpyvIsw7haelABNUplXZ74qLnsssHybehAaMGUmZkDgEqXnOVrWUY4xcCpEco22BeQuHrLK9c7xZc5vi8wtTvnpgK8TtOQXe3KqMyV7dQ_bN5aPnEDiFQVwOunMTOiUqDgULbbBefgaPJ3nwsuoxjkjoXAGva7X2N7V0tpeEtReUDlAsj1qi9BIVw_9viJequhCKDdLoXtJLHVcxeyX36ycNQXzDJy2SSwTr5J7Hla8AUo5TLRkrIFGfVZasnY2BIfomyFs9kOUKB9lFyF4rsuMEaj7M42dOzu1RuuAj_4avdGrhdOBJjB1GUwfa7QVfrvfQk0-fZuoKA"><script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script><script>grecaptcha.ready(function() {grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "contact"}).then(function(token) {document.getElementById("Token-8afe37424b234484bf95fbcac4b8d03a").value = token});});</script>
                    
                    
                    <div class="form-signup clearfix">
                        <div class="row group_contact">
                            <fieldset class="form-group col-lg-6 col-12">
                                <label>Họ và tên <em>*</em></label>
                                <input placeholder="" type="text" class="form-control  form-control-lg" required="" value="" name="contact[Name]">
                            </fieldset>

                            <fieldset class="form-group col-lg-6 col-12">
                                <label>Email <em>*</em></label>
                                <input placeholder="" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" id="email1" class="form-control form-control-lg" value="" name="contact[email]">
                            </fieldset>

                            <fieldset class="form-group col-12">
                                <label>Nội dung <em>*</em></label>
                                <textarea placeholder="" name="contact[body]" id="comment" class="form-control content-area form-control-lg" rows="5" required=""></textarea>
                            </fieldset>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <button type="submit" class="button-default bg-danger text-white">Gửi liên hệ</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection