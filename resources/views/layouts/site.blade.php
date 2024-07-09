<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.webp" type="image/webp" />

    <!-- CSS files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick-theme.css" />

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/dark-theme.css" rel="stylesheet">

    <title>Shopingo - eCommerce HTML Template</title>
</head>

<!--page loader-->
<div class="loader-wrapper">
    <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
        <div class="spinner-border text-dark" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
<!--end loader-->

<!--start top header-->
<header class="top-header">
    <nav class="navbar navbar-expand-xl w-100 navbar-dark container gap-3">
        <a class="navbar-brand d-none d-xl-inline" href="index.html"><img src="assets/images/logo.webp" class="logo-img" alt=""></a>
        <a class="mobile-menu-btn d-inline d-xl-none" href="javascript:;" data-bs-toggle="offcanvas"
           data-bs-target="#offcanvasNavbar">
            <i class="bi bi-list"></i>
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
            <div class="offcanvas-header">
                <div class="offcanvas-logo"><img src="assets/images/logo.webp" class="logo-img" alt="">
                </div>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body primary-menu">
                <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
{{--                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="tv-shows.html"--}}
{{--                           data-bs-toggle="dropdown">--}}
{{--                            Categories--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-large-menu">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12 col-xl-4">--}}
{{--                                    <h6 class="large-menu-title">Clothing</h6>--}}
{{--                                    <ul class="list-unstyled">--}}
{{--                                        <li><a href="javascript:;">Dresses</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="javascript:;">Tops</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="javascript:;">Tshirts</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="javascript:;">Pants</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="javascript:;">Skirts</a>--}}
{{--                                        </li>--}}


{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <!-- end col-3 -->--}}
{{--                                <div class="col-12 col-xl-4">--}}
{{--                                    <ul class="list-unstyled">--}}
{{--                                        <li><a href="javascript:;">Pants</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="javascript:;">Skirts</a>--}}
{{--                                        </li>--}}

{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <!-- end col-3 -->--}}
{{--                                <div class="col-12 col-xl-4 d-none d-xl-block">--}}
{{--                                    <div class="pramotion-banner1">--}}
{{--                                        <img src="assets/images/menu-img.webp" class="img-fluid" alt="" />--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end col-3 -->--}}
{{--                            </div>--}}
{{--                            <!-- end row -->--}}
{{--                        </div>--}}

                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            Clothing
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cart.html">Dresses</a></li>
                            <li><a class="dropdown-item" href="wishlist.html">Tops</a></li>
                            <li><a class="dropdown-item" href="product-details.html">Tshirts</a></li>
                            <li><a class="dropdown-item" href="payment-method.html">Pants</a></li>
                            <li><a class="dropdown-item" href="billing-details.html">Skirts</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.html" style="color: red">SALE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            Shop
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cart.html">Shop Cart</a></li>
                            <li><a class="dropdown-item" href="wishlist.html">Wishlist</a></li>
                            <li><a class="dropdown-item" href="product-details.html">Product Details</a></li>
                            <li><a class="dropdown-item" href="payment-method.html">Payment Method</a></li>
                            <li><a class="dropdown-item" href="billing-details.html">Billing Details</a></li>
                            <li><a class="dropdown-item" href="address.html">Addresses</a></li>
                            <li><a class="dropdown-item" href="shop-grid.html">Shop Grid</a></li>
                            <li><a class="dropdown-item" href="shop-grid-type-4.html">Shop Grid 4</a></li>
                            <li><a class="dropdown-item" href="shop-grid-type-5.html">Shop Grid 5</a></li>
                            <li><a class="dropdown-item" href="search.html">Search</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            Account
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="account-dashboard.html">Dashboard</a></li>
                            <li><a class="dropdown-item" href="account-orders.html">My Orders</a></li>
                            <li><a class="dropdown-item" href="account-profile.html">My Profile</a></li>
                            <li><a class="dropdown-item" href="account-edit-profile.html">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="account-saved-address.html">Addresses</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="authentication-login.html">Login</a></li>
                            <li><a class="dropdown-item" href="authentication-register.html">Register</a></li>
                            <li><a class="dropdown-item" href="authentication-reset-password.html">Password</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                            Blog
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="blog-post.html">Blog Post</a></li>
                            <li><a class="dropdown-item" href="blog-read.html">Blog Read</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="navbar-nav secondary-menu flex-row">
            <li class="nav-item">
                <a class="nav-link dark-mode-icon" href="javascript:;">
                    <div class="mode-icon">
                        <i class="bi bi-moon"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.html"><i class="bi bi-search"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="wishlist.html"><i class="bi bi-suit-heart"></i></a>
            </li>
            <li class="nav-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                <a class="nav-link position-relative" href="javascript:;">
                    <div class="cart-badge">8</div>
                    <i class="bi bi-basket2"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="account-dashboard.html"><i class="bi bi-person-circle"></i></a>
            </li>
        </ul>
    </nav>
</header>
<!--end top header-->


{{ $slot }}


<!--start footer-->
<section class="footer-section bg-section-2 section-padding">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-4 g-4">
            <div class="col">
                <div class="footer-widget-6">
                    <img src="assets/images/logo.webp" class="logo-img mb-3" alt="">
                    <h5 class="mb-3 fw-bold">About Us</h5>
                    <p class="mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

                    <a class="link-dark" href="javascript:;">Read More</a>
                </div>
            </div>
            <div class="col">
                <div class="footer-widget-7">
                    <h5 class="mb-3 fw-bold">Explore</h5>
                    <ul class="widget-link list-unstyled">
                        <li><a href="javascript:;">Fashion</a></li>
                        <li><a href="javascript:;">Women</a></li>
                        <li><a href="javascript:;">Furniture</a></li>
                        <li><a href="javascript:;">Shoes</a></li>
                        <li><a href="javascript:;">Topwear</a></li>
                        <li><a href="javascript:;">Brands</a></li>
                        <li><a href="javascript:;">Kids</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="footer-widget-8">
                    <h5 class="mb-3 fw-bold">Company</h5>
                    <ul class="widget-link list-unstyled">
                        <li><a href="javascript:;">About Us</a></li>
                        <li><a href="javascript:;">Contact Us</a></li>
                        <li><a href="javascript:;">FAQ</a></li>
                        <li><a href="javascript:;">Privacy</a></li>
                        <li><a href="javascript:;">Terms</a></li>
                        <li><a href="javascript:;">Complaints</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="footer-widget-9">
                    <h5 class="mb-3 fw-bold">Follow Us</h5>
                    <div class="social-link d-flex align-items-center gap-2">
                        <a href="javascript:;"><i class="bi bi-facebook"></i></a>
                        <a href="javascript:;"><i class="bi bi-twitter"></i></a>
                        <a href="javascript:;"><i class="bi bi-linkedin"></i></a>
                        <a href="javascript:;"><i class="bi bi-youtube"></i></a>
                        <a href="javascript:;"><i class="bi bi-instagram"></i></a>
                    </div>
                    <div class="mb-3 mt-3">
                        <h5 class="mb-0 fw-bold">Support</h5>
                        <p class="mb-0 text-muted">support@example.com</p>
                    </div>
                    <div class="">
                        <h5 class="mb-0 fw-bold">Toll Free</h5>
                        <p class="mb-0 text-muted">1800- 8xx 2xx</p>
                    </div>
                </div>
            </div>
        </div><!--end row-->
        <div class="my-5"></div>
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h5 class="fw-bold mb-3">Download Mobile App</h5>
                </div>
                <div class="app-icon d-flex flex-column flex-sm-row align-items-center justify-content-center gap-2">
                    <div>
                        <a href="javascript:;">
                            <img src="assets/images/play-store.webp" width="160" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="javascript:;">
                            <img src="assets/images/apple-store.webp" width="160" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div><!--end row-->

    </div>
</section>
<!--end footer-->

<footer class="footer-strip text-center py-3 bg-section-2 border-top positon-absolute bottom-0">
    <p class="mb-0 text-muted">© 2022. www.example.com | All rights reserved.</p>
</footer>


<!--start cart-->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasRight"
     aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header bg-section-2">
        <h5 class="mb-0 fw-bold" id="offcanvasRightLabel">8 items in the cart</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="cart-list">

            <div class="d-flex align-items-center gap-3">
                <div class="bottom-product-img">
                    <a href="product-details.html">
                        <img src="assets/images/new-arrival/01.webp" width="60" alt="">
                    </a>
                </div>
                <div class="">
                    <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                    <p class="mb-0"><strong>1 X $59.00</strong>
                    </p>
                </div>
                <div class="ms-auto fs-5">
                    <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                </div>
            </div>
            <hr>
            <div class="d-flex align-items-center gap-3">
                <div class="bottom-product-img">
                    <a href="product-details.html">
                        <img src="assets/images/new-arrival/02.webp" width="60" alt="">
                    </a>
                </div>
                <div class="">
                    <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                    <p class="mb-0"><strong>1 X $59.00</strong>
                    </p>
                </div>
                <div class="ms-auto fs-5">
                    <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                </div>
            </div>
            <hr>
            <div class="d-flex align-items-center gap-3">
                <div class="bottom-product-img">
                    <a href="product-details.html">
                        <img src="assets/images/new-arrival/03.webp" width="60" alt="">
                    </a>
                </div>
                <div class="">
                    <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                    <p class="mb-0"><strong>1 X $59.00</strong>
                    </p>
                </div>
                <div class="ms-auto fs-5">
                    <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                </div>
            </div>
            <hr>
            <div class="d-flex align-items-center gap-3">
                <div class="bottom-product-img">
                    <a href="product-details.html">
                        <img src="assets/images/new-arrival/04.webp" width="60" alt="">
                    </a>
                </div>
                <div class="">
                    <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                    <p class="mb-0"><strong>1 X $59.00</strong>
                    </p>
                </div>
                <div class="ms-auto fs-5">
                    <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                </div>
            </div>
            <hr>
            <div class="d-flex align-items-center gap-3">
                <div class="bottom-product-img">
                    <a href="product-details.html">
                        <img src="assets/images/new-arrival/05.webp" width="60" alt="">
                    </a>
                </div>
                <div class="">
                    <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                    <p class="mb-0"><strong>1 X $59.00</strong>
                    </p>
                </div>
                <div class="ms-auto fs-5">
                    <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                </div>
            </div>
            <hr>
            <div class="d-flex align-items-center gap-3">
                <div class="bottom-product-img">
                    <a href="product-details.html">
                        <img src="assets/images/new-arrival/06.webp" width="60" alt="">
                    </a>
                </div>
                <div class="">
                    <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                    <p class="mb-0"><strong>1 X $59.00</strong>
                    </p>
                </div>
                <div class="ms-auto fs-5">
                    <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                </div>
            </div>
            <hr>
            <div class="d-flex align-items-center gap-3">
                <div class="bottom-product-img">
                    <a href="product-details.html">
                        <img src="assets/images/new-arrival/07.webp" width="60" alt="">
                    </a>
                </div>
                <div class="">
                    <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                    <p class="mb-0"><strong>1 X $59.00</strong>
                    </p>
                </div>
                <div class="ms-auto fs-5">
                    <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                </div>
            </div>
            <hr>
            <div class="d-flex align-items-center gap-3">
                <div class="bottom-product-img">
                    <a href="product-details.html">
                        <img src="assets/images/new-arrival/08.webp" width="60" alt="">
                    </a>
                </div>
                <div class="">
                    <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                    <p class="mb-0"><strong>1 X $59.00</strong>
                    </p>
                </div>
                <div class="ms-auto fs-5">
                    <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                </div>
            </div>
            <hr>
            <div class="d-flex align-items-center gap-3">
                <div class="bottom-product-img">
                    <a href="product-details.html">
                        <img src="assets/images/new-arrival/09.webp" width="60" alt="">
                    </a>
                </div>
                <div class="">
                    <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                    <p class="mb-0"><strong>1 X $59.00</strong>
                    </p>
                </div>
                <div class="ms-auto fs-5">
                    <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                </div>
            </div>
            <hr>
            <div class="d-flex align-items-center gap-3">
                <div class="bottom-product-img">
                    <a href="product-details.html">
                        <img src="assets/images/new-arrival/10.webp" width="60" alt="">
                    </a>
                </div>
                <div class="">
                    <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                    <p class="mb-0"><strong>1 X $59.00</strong>
                    </p>
                </div>
                <div class="ms-auto fs-5">
                    <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-footer p-3 border-top">
        <div class="d-grid">
            <button type="button" class="btn btn-lg btn-dark btn-ecomm px-5 py-3">Checkout</button>
        </div>
    </div>

</div>
<!--end cat-->


<!--start quick view-->

<!-- Modal -->
<div class="modal fade" id="QuickViewModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-0">

            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12 col-xl-6">

                        <div class="wrap-modal-slider">

                            <div class="slider-for">
                                <div>
                                    <img src="assets/images/product-images/01.jpg" alt="" class="img-fluid">
                                </div>
                                <div>
                                    <img src="assets/images/product-images/02.jpg" alt="" class="img-fluid">
                                </div>
                                <div>
                                    <img src="assets/images/product-images/03.jpg" alt="" class="img-fluid">
                                </div>
                                <div>
                                    <img src="assets/images/product-images/04.jpg" alt="" class="img-fluid">
                                </div>
                            </div>

                            <div class="slider-nav mt-3">
                                <div>
                                    <img src="assets/images/product-images/01.jpg" alt="" class="img-fluid">
                                </div>
                                <div>
                                    <img src="assets/images/product-images/02.jpg" alt="" class="img-fluid">
                                </div>
                                <div>
                                    <img src="assets/images/product-images/03.jpg" alt="" class="img-fluid">
                                </div>
                                <div>
                                    <img src="assets/images/product-images/04.jpg" alt="" class="img-fluid">
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="product-info">
                            <h4 class="product-title fw-bold mb-1">Check Pink Kurta</h4>
                            <p class="mb-0">Women Pink & Off-White Printed Kurta with Palazzos</p>
                            <div class="product-rating">
                                <div class="hstack gap-2 border p-1 mt-3 width-content">
                                    <div><span class="rating-number">4.8</span><i class="bi bi-star-fill ms-1 text-success"></i></div>
                                    <div class="vr"></div>
                                    <div>162 Ratings</div>
                                </div>
                            </div>
                            <hr>
                            <div class="product-price d-flex align-items-center gap-3">
                                <div class="h4 fw-bold">$458</div>
                                <div class="h5 fw-light text-muted text-decoration-line-through">$2089</div>
                                <div class="h4 fw-bold text-danger">(70% off)</div>
                            </div>
                            <p class="fw-bold mb-0 mt-1 text-success">inclusive of all taxes</p>

                            <div class="more-colors mt-3">
                                <h6 class="fw-bold mb-3">More Colors</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <div class="color-box bg-red"></div>
                                    <div class="color-box bg-primary"></div>
                                    <div class="color-box bg-yellow"></div>
                                    <div class="color-box bg-purple"></div>
                                    <div class="color-box bg-green"></div>
                                </div>
                            </div>

                            <div class="size-chart mt-3">
                                <h6 class="fw-bold mb-3">Select Size</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <div class="">
                                        <button type="button" class="rounded-0">XS</button>
                                    </div>
                                    <div class="">
                                        <button type="button" class="rounded-0">S</button>
                                    </div>
                                    <div class="">
                                        <button type="button" class="rounded-0">M</button>
                                    </div>
                                    <div class="">
                                        <button type="button" class="rounded-0">L</button>
                                    </div>
                                    <div class="">
                                        <button type="button" class="rounded-0">XL</button>
                                    </div>
                                    <div class="">
                                        <button type="button" class="rounded-0">XXL</button>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-buttons mt-3">
                                <div class="buttons d-flex flex-column gap-3 mt-4">
                                    <a href="javascript:;" class="btn btn-lg btn-dark btn-ecomm px-5 py-3 flex-grow-1"><i
                                            class="bi bi-basket2 me-2"></i>Add to Bag</a>
                                    <a href="javascript:;" class="btn btn-lg btn-outline-dark btn-ecomm px-5 py-3"><i
                                            class="bi bi-suit-heart me-2"></i>Wishlist</a>
                                </div>
                            </div>
                            <hr class="my-3">
                            <div class="product-share">
                                <h6 class="fw-bold mb-3">Share This Product</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <div class="">
                                        <button type="button" class="btn-social bg-twitter"><i class="bi bi-twitter"></i></button>
                                    </div>
                                    <div class="">
                                        <button type="button" class="btn-social bg-facebook"><i class="bi bi-facebook"></i></button>
                                    </div>
                                    <div class="">
                                        <button type="button" class="btn-social bg-linkden"><i class="bi bi-linkedin"></i></button>
                                    </div>
                                    <div class="">
                                        <button type="button" class="btn-social bg-youtube"><i class="bi bi-youtube"></i></button>
                                    </div>
                                    <div class="">
                                        <button type="button" class="btn-social bg-pinterest"><i class="bi bi-pinterest"></i></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>

        </div>
    </div>
</div>
<!--end quick view-->


<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
<!--End Back To Top Button-->


<!-- JavaScript files -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/slick/slick.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/loader.js"></script>

</body>

</html>
