

<!doctype html>
<html lang="en">

<head>
    @include('user.layout.head')

</head>

<body>
    @include('user.layout.header')
  

    @yield('content')

    @include('user.layout.footer')


    <!-- Modal -->
    <div class="modal fade login-modals" id="loginForm" tabindex="-1" aria-labelledby="loginFormLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content position-relative-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5  fw-bold w-100 " id="exampleModalLabel">Young Scientist Login</h1>

                    <button type="button" class="btn-close close-btn-right" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row g-0">
                        <div class="col-lg-5">
                            <img src="{{asset('user/assets/images/popup-sidebar1-1.png')}}" alt="login" style="width: 100%;">

                        </div>
                        <div class="col-lg-7  p-4">
                            <form>
                                <div class="mb-4">

                                    <input type="text" class="form-control" id="recipient-name"
                                        placeholder="Username / Email">
                                </div>
                                <div class="mb-2">

                                    <input type="password" class="form-control" id="recipient-name"
                                        placeholder="Password">
                                </div>
                                <div class="mb-2 d-flex justify-content-end">
                                    <a class="forget-password" href="#">Forgot Password?</a>
                                </div>

                                <div class="mb-4">
                                    <button type="submit" class="btn  w-100 submit-btn">Sign in</button>
                                </div>
                            </form>
                            <p>LET’S START LEARNING</p>
                            <div class="mb-4">
                                <a class="btn   w-100 submit-sign-up" href="#">Sign Up</a>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script>
        $('.owl-partner').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            lazyLoad: true,
            autoplayHoverPause: true,
            margin: 15,
            responsiveClass: true,
            navText: [
                '<i class="fa-solid fa-chevron-left"></i>',
                '<i class="fa-solid fa-chevron-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: false,
                    loop: true
                }
            }
        })
        $('.owl-clints').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            lazyLoad: true,
            autoplayHoverPause: true,
            dots:true,
            nav:true,
            items: 1,
            navText: [
                '<i class="fa-solid fa-chevron-left"></i>',
                '<i class="fa-solid fa-chevron-right"></i>'
            ],

        })
    </script>
</body>

</html>