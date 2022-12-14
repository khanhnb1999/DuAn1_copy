<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="../../public/css/header.css">
    <link rel="stylesheet" href="../../public/css/home.css">
    <link rel="stylesheet" href="../../public/css/formula.css">
    <link rel="stylesheet" href="../../public/css/news.css">
    <link rel="stylesheet" href="../../public/css/new_detail.css">
    <link rel="stylesheet" href="../../public/css/new_dish.css">
    <link rel="stylesheet" href="../../public/css/tray.css">
    <link rel="stylesheet" href="../../public/css/footer.css">
    <link rel="icon" href="../../public/image/60.ico">
    <title>Home</title>
</head>

<body>
    <header class="header">
        <div class="header__top">
            <div class="introduction">
                <div class="hotline__store">
                    <i class="fas fa-phone-square-alt"></i> <span>Hotline: 1900 1877</span>
                </div>
                <div class="line__space"></div>
                <div class="address__store">
                    <i class="fas fa-address-book"></i> <span>Địa chỉ: 132, Cầu Diễn, Nam Từ Liêm</span>
                </div>
            </div>
            <div class="register" id="btn__open">
                <i class="fas fa-user"></i> <span>Đăng nhập</span>
            </div>
            <div class="box__overlay" id="myForm">
                <div class="form__registration">
                    <form action="./check_user.php" id="user-account" method="post">
                        <div class="modal__content">
                            <button type="button" class="btn__close">
                                <i class="fas fa-times"></i>
                            </button>
                            <div class="modal__body">
                                <div id="tab-register" class="user-tab-body active">
                                    <div class="title">
                                        <span>Welcome</span>
                                    </div>
                                    <div class="input__control">
                                        <input type="text" name="username" require class="form-control form__control" placeholder="Username">
                                    </div>
                                    <div class="input__control">
                                        <input type="email" name="email" require class="form-control form__control" placeholder="Username@gmail.com">
                                    </div>
                                    <div class="input__control">
                                        <input type="password" name="password" require class="form-control form__control" placeholder="Password">
                                    </div>
                                    <div class="input__control">
                                        <input type="password" class="form-control form__control" placeholder="Re-password">
                                    </div>
                                    <div class="input__control">
                                        <input type="address" name="address" class="form-control form__control" placeholder="Address">
                                    </div>
                                    <div class="input__control">
                                        <input type="phone" name="phone" class="form-control form__control" placeholder="Phone">
                                    </div>
                                    <div class="form__check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label"> Remember</label>
                                    </div>
                                    <div class="modal__footer">
                                        <button type="submit" name="register-user">Create account</button>
                                    </div>
                                </div>
                                <!-- form registration -->
                                <div id="tab-login" class="user-tab-body">
                                    <div class="form__login__title">
                                        <h4>Welcome back</h4>
                                        <p>Please sign in to your account below</p>
                                    </div>
                                    <div class="input__control">
                                        <input type="text" name="username1" class="form-control form__control" placeholder="Username">
                                    </div>
                                    <div class="input__control">
                                        <input type="password" name="password1" class="form-control form__control" placeholder="Enter password">
                                    </div>
                                    <div class="keep__me">
                                        <input class="form-check-input" type="checkbox" name="remember" value="1">
                                        <label class="form-check-label">Keep me logged in</label>
                                    </div>
                                    <div class="dashboard">
                                        <button class="btn btn__info" type="submit" name="login-user">Login
                                            in</button>
                                    </div>
                                </div>
                                <!-- form login -->
                                <div id="tab-forgot" class="user-tab-body recover__password">
                                    <div class="tab__password">
                                        <div class="tab__header">
                                            <h3>Fogot your password</h3>
                                            <p>Use the form below to recover it.</p>
                                        </div>
                                        <div class="tab__body ">
                                            <div class="tab__body--input">
                                                <input type="email" class="form-control form__control" name="email2" placeholder="Username@gmail.com">
                                            </div>
                                        </div>
                                        <div class="tab__footer">
                                            <button class="btn btn__danger" type="submit" name="recover-user">Recover
                                                password</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- form forgot password -->
                            <div class="modal__footer">
                                <div class="form__account">
                                    <ul class="group__account">
                                        <li class="user-switch-form box-register d-none" data-tab="tab-register">
                                            Sign up</li>
                                        <li class="user-switch-form box-login" data-tab="tab-login">Login</li>
                                        <li class="user-switch-form box-forgot" data-tab="tab-forgot">Forgot
                                            password</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- end form register -->
        </div>
        <!-- Introduction and call contact about store -->
        <div class="grid-header">
            <div class="header__navigation">

                <div class="menu__left">
                    <ul class="nav__bar">
                        <li class="nav__item ">
                            <span class="logo"><a href="home">Cooky</a></span>
                        </li>
                        <li class="nav__item">
                            <a href="home" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="formula" class="nav__link">Công Thức</a>
                        </li>
                        <li class="nav__item">
                            <a href="news" class="nav__link">Bài Viết</a>
                        </li>
                        <li class="nav__item">
                            <a href="./blog.html" class="nav__link">Thêm công thức</a>
                        </li>
                        <li class="nav__item dropdown__menu">
                            <a href="tray" class="nav__link">Bàn ăn</a>
                        </li>
                    </ul>
                </div>
                <div class="search__right">
                    <form action="" class="search__cooking">
                        <div class="sr__input">
                            <input type="text" name="keyword" class="form_sr" placeholder="Tìm món ăn">
                        </div>
                        <div class="sr__icon">
                            <button type="submit" name="submit" value="submit" class="btn__search">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end navigation -->

        <div class="banner__carousel">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner carousel__images">
                    <div class="carousel-item active">
                        <img src="./public/image/banner.jpg" alt="Los Angeles" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/image/banner2.jpg" alt="Chicago" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/image/banner.jpg" alt="New York" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>

    </header>

    <style>
        .banner__carousel {
            display: none;
        }
    </style>

    <session class="session">
        <div class="main__content">
            <div class="main_details">
                <div class="recipe-detail-content">
                    <div class=" details">
                        <h4>Công thức/Cheesecake Dâu Sữa Chua</h4>
                        <div class="details_image">
                            <a href=""><img src="../page/img/new1.jpg" alt=""></a>
                        </div>
                        <div class="details_name">
                            <h3><a href="">Cheesecake Dâu Sữa Chua</a></h3>
                        </div>
                        <div class="details_text">
                            <p>Dalatmilk Cheesecake sữa chua là một món tráng miệng đẹp mắt, ngon miệng và
                                cực dễ thực hiện. Chỉ cần một chút khéo léo
                                bạn sẽ có ngay một ổ bánh đẹp mắt mà không cần đến lò nướng. Cùng Cooky thực hiện
                                nha!</p>
                            <div class="text_element">
                                <h3>Thành phần</h3>
                            </div>
                            <div class="text_element_list">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Bơ lạt 50gr</li>
                                    <li class="list-group-item">Whipping cream 250gr</li>
                                    <li class="list-group-item">Cream cheese 250gr</li>
                                    <li class="list-group-item">Sữa chua uống Đà Lạt Milk 150ml</li>
                                </ul>
                            </div>
                            <div class="text_element_guide">
                                <h3>Hướng dẫn thực hiện</h3>
                                <p>
                                    1.
                                    Đế bánh: Nghiền nhuyễn 120gr bánh quy. Đem 50gr bơ lạt đi đun cách thủy hoặc
                                    quay lò vi sóng 30 giây cho chảy. Cho bơ
                                    vào bánh rồi trộn đều. Dùng khuôn có đường kính 16cm, cho bánh đã trộn bơ vào
                                    khuôn, ép xuống đều để để bánh được chắc
                                    chắn. Cho vào ngăn đá đến khi cứng lại, khoảng 1 tiếng.
                                </p>
                                <a href=""><img src="./img/blog2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class=" link-absolute">
                        <h4>Món ăn ưa thích</h4>
                        <div class="similar-recipes-item">
                            <div class="link-absolute__image">
                                <a href=""><img src="../page/img/list3.jpg" alt=""></a>
                            </div>
                            <div class="link-absolute__text">
                                <h5 class="text_name"><a href="">Sữa chua dâu tây</a></h5>
                                <div class="similar-recipe-name">
                                    <p class="item_user">by: <span><a href="">Mai đình</a></span></p>
                                    <p class="item_date"> 22 july 2021 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" container bootdey ">
                <div class="col-xl-9 col-md-9 bootstrap snippets ">
                    <div class="panel">
                        <div class="panel-body">
                            <textarea class="form-control" rows="2" placeholder="What are you thinking?"></textarea>
                            <div class="mar-top clearfix">
                                <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
                                <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="media-block">
                                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                                <div class="media-body">
                                    <div class="mar-btm">
                                        <a href="#" class="btn-link text-semibold media-heading box-inline">Lisa D.</a>
                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                    </div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                    <div class="pad-ver">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                                            <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                                        </div>
                                        <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-block pad-all">
                                <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                                <div class="media-body">
                                    <div class="mar-btm">
                                        <a href="#" class="btn-link text-semibold media-heading box-inline">John Doe</a>
                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <img class="img-responsive thumbnail" src="https://via.placeholder.com/400x300" alt="Image">
                                    <div class="pad-ver">
                                        <span class="tag tag-sm"><i class="fa fa-heart text-danger"></i> 250 Likes</span>
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                                            <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                                        </div>
                                        <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </session>

    <div class="footer">
        <div class="main__footer">
            <div class="item regulation policy">
                <h6>Quy định - chính sách</h6>
                <p>Hướng dẫn đặt hàng và thanh toán</p>
                <p>Chính sách giao hàng và đổi trả</p>
                <p>Chính sách bảo mật thông tin</p>
            </div>
            <div class="item category">
                <h6>Danh mục</h6>
                <div class="list__menu">
                    <a href="#">Home</a>
                    <a href="#">Công thức</a>
                    <a href="#">Blog</a>
                    <a href="#">Tạo món</a>
                    <a href="#">Mâm cơm</a>
                </div>
            </div>
            <div class="item contact">
                <h6>Liên hệ</h6>
                <span>
                </span>
                <div class="form__group">
                    <div class="side__input">
                        <input type="text" class="send__email" placeholder="Email">
                    </div>
                    <div class="side__send">
                        <button>Gửi</button>
                    </div>
                </div>
            </div>
            <div class="item about__as">
                <div class="logo__store">
                    <h6>Về chúng tôi</h6>
                    <!-- <a href=""><img src="./admin/settings/image/" alt=""></a> -->
                    <span>
                        CÔNG TY CỔ PHẦN COOKY
                        Giấy đăng ký kinh doanh số 0314498604 do Sở Kế hoạch Đầu tư TP Hồ Chí Minh cấp lần đầu ngày
                        06/07/2017
                        Địa chỉ: C10 Điện Biên Phủ, Phường 25, Quận Bình Thạnh, TPHCM
                        Số điện thoại: 02862861131
                        Email: info@cooky.vn
                    </span>
                </div>
            </div>
        </div>
        <div class="footer__sidebar">
            <div class="footer__sidebar--message">
                <a href="" class="message__link"><i class="fab fa-facebook"></i></a>
            </div>
            <div class="footer__sidebar--message">
                <a href="" class="message__link"><i class="fab fa-facebook-messenger"></i></a>
            </div>
            <div class="footer__sidebar--message">
                <a href="" class="message__link"><i class="fab fa-google"></i></a>
            </div>
            <div class="footer__sidebar--message">
                <a href="" class="message__link"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    </footer>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../public/script/main.js"></script>
    <script type="text/javascript" src="../../public/script/formula.js"></script>
</body>

</html>