@extends('user.user-dashboard')
@section('content')
@include('user.layout.banner')

<section class="courses aos-init" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1200">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3">
                <div class="courses__details">
                    <img src="{{asset('user/assets/images/1.jpeg')}}" alt="img">
                    <div class="courses__details--title">
                        <a href="#"> <i class="fa-solid fa-angle-right"></i> Pre-K & Kindergarten </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="courses__details">
                    <img src="{{asset('user/assets/images/product-fe1.png')}}" alt="img">
                    <div class="courses__details--title">
                        <a href="#"> <i class="fa-solid fa-angle-right"></i> Elementary </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="courses__details">
                    <img src="{{asset('user/assets/images/2.jpeg')}}" alt="img">
                    <div class="courses__details--title">
                        <a href="#"> <i class="fa-solid fa-angle-right"></i> Middle </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<section class="unlock py-lg-5 py-3">
    <div class="container">
        <div class="section-title text-center py-lg-4">
            <h1 data-aos="zoom-in">Unlock Limitless Potential</h1>
            <p class="aos-init" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400">Meaningful learning,
                extraordinary engagement, and the resources and support to ensure success.</p>
        </div>
        <div class="row justify-content-center align-items-center pt-lg-5 pt-4 ">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="unlock__details" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon">
                        <i class="fa-brands fa-skyatlas"></i>
                    </div>
                    <div class="text  pe-lg-3 ">
                        <h5> Meeting Standards – Having Fun</h5>
                        <p>
                            Engaging, standards-aligned lessons that are easy to get started, <br>
                            with the scalability to meet all learners where they are.
                        </p>
                    </div>

                </div>
                <div class="unlock__details" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon">
                        <i class="fa-brands fa-airbnb"></i>
                    </div>
                    <div class="text pe-lg-3 ">
                        <h5> Excite, Engage and Inspire</h5>
                        <p>
                            Hands-on playful learning solutions featuring the familiar LEGO®
                            bricks that inspire all types of students to become active <br>
                            learners.
                        </p>
                    </div>

                </div>
                <div class="unlock__details" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon">
                        <i class="fa-solid fa-headphones-simple"></i>
                    </div>
                    <div class="text  pe-lg-3 ">
                        <h5> Everything you need to succeed</h5>
                        <p>
                            Built in scaffolding, professional development and a community
                            of like-minded educators ready to support you.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 col-mg-6 col-12">
                <div class="unlock__images position-relative">
                    <div class="image-container position-relative ">
                        <img src="{{asset('user/assets/images//product-fe2.png')}}" alt="img" class="main-img" data-aos="zoom-in"
                            data-aos-delay="100">

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="blog__details" data-aos="zoom-in" data-aos-delay="100">
                    <div class="img"><img src="{{asset('user/assets/images/2.jpeg')}}" alt="img"></div>
                    <div class="text">
                        <h5 class="pb-lg-2">
                            State of Classroom ​
                            Engagement Report
                        </h5>
                        <p>
                            Access our report to learn how
                            global insights from 6,000-plus
                            administrators, teachers, parents
                            and students reveal strategies to
                            build more engaged classrooms.
                        </p>
                        <a href="#">READ THE RESOURCES <i class="fa-solid fa-arrow-right"></i> </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="blog__details" data-aos="zoom-in" data-aos-delay="100">
                    <div class="img"><img src="{{asset('user/assets/images/2.jpeg')}}" alt="img"></div>
                    <div class="text">
                        <h5 class="pb-lg-2">
                            State of Classroom ​
                            Engagement Report
                        </h5>
                        <p>
                            Access our report to learn how
                            global insights from 6,000-plus
                            administrators, teachers, parents
                            and students reveal strategies to
                            build more engaged classrooms.
                        </p>
                        <a href="#">READ THE RESOURCES <i class="fa-solid fa-arrow-right"></i> </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="blog__details" data-aos="zoom-in" data-aos-delay="100">
                    <div class="img"><img src="{{asset('user/assets/images/2.jpeg')}}" alt="img"></div>
                    <div class="text">
                        <h5 class="pb-lg-2">
                            State of Classroom ​
                            Engagement Report
                        </h5>
                        <p>
                            Access our report to learn how
                            global insights from 6,000-plus
                            administrators, teachers, parents
                            and students reveal strategies to
                            build more engaged classrooms.
                        </p>
                        <a href="#">READ THE RESOURCES <i class="fa-solid fa-arrow-right"></i> </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="blog__details" data-aos="zoom-in" data-aos-delay="100">
                    <div class="img"><img src="{{asset('user/assets/images/2.jpeg')}}" alt="img"></div>
                    <div class="text">
                        <h5 class="pb-lg-2">
                            State of Classroom ​
                            Engagement Report
                        </h5>
                        <p>
                            Access our report to learn how
                            global insights from 6,000-plus
                            administrators, teachers, parents
                            and students reveal strategies to
                            build more engaged classrooms.
                        </p>
                        <a href="#">READ THE RESOURCES <i class="fa-solid fa-arrow-right"></i> </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<section class="fun my-lg-5 my-3 py-lg-4">
    <div class="container">
        <div class="fun__details p-lg-5 ">
            <div class="row g-5 align-items-center justify-content-center">
                <div class="col-lg-5">
                    <h1 data-aos="zoom-in" data-aos-delay="100">
                        Fun, Innovative and <br> Engagement
                    </h1>
                    <p data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200">
                        With Young Scientist, you will enjoy creating, learning, and challenging yourself.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="row ">
                        <div class="col-sm-6 col-12">
                            <div class="counter d-flex mb-lg-4">
                                <div class="icon">
                                    <i class="fa-regular fa-share-from-square"></i>
                                </div>
                                <div class="text ps-lg-3">
                                    <h1>1000</h1>
                                    <p>Products</p>
                                </div>
                            </div>


                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="counter d-flex mb-lg-4">
                                <div class="icon">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </div>
                                <div class="text ps-lg-3">
                                    <h1>1000</h1>
                                    <p>Products</p>
                                </div>
                            </div>


                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="counter d-flex">
                                <div class="icon">
                                    <i class="fa-solid fa-up-right-from-square"></i>
                                </div>
                                <div class="text ps-lg-3">
                                    <h1>1000</h1>
                                    <p>Products</p>
                                </div>
                            </div>


                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="counter d-flex">
                                <div class="icon">
                                    <i class="fa-regular fa-share-from-square"></i>
                                </div>
                                <div class="text ps-lg-3">
                                    <h1>1000</h1>
                                    <p>Products</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="learning">

    <div class="container">
        <div class="section-title text-center py-lg-4">
            <h1 data-aos="zoom-in" data-aos-delay="100">STEM Learning Platform</h1>
            <p data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200">Meaningful learning, extraordinary
                engagement.</p>
        </div>
        <div class="learning__details">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-cover position-relative">
                        <img src="{{asset('user/assets/images/PictoBlox-Cover-Image.png')}}" alt="img" data-aos="zoom-in"
                            data-aos-delay="100">
                        <img class="img-bg " src="{{asset('user/assets/images/bg-1.jpg')}}" alt="img" data-aos="fade-up"
                            data-aos-easing="ease" data-aos-delay="100">
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-5">
                    <div class="learning__desc pt-lg-4" data-aos="fade-up" data-aos-easing="ease"
                        data-aos-delay="100">
                        <h4>
                            Learn coding, AI, machine learning,
                            program actions for robots with PictoBlox
                        </h4>
                        <div class="desc pe-lg-5 pt-3">
                            <p>
                                Learn to code with Scratch, the most popular block based coding
                                language for kids in the world.Create your own games, animations,
                                make characters mimic your actions and enact stories by
                                setting up the stage for them
                            </p>
                        </div>

                        <a class="read-more" href="#">Read More <i class="fa-solid fa-arrow-right"></i> </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<section class="our-product">

    <div class="container">
        <div class="section-title text-center py-lg-4">
            <h1 data-aos="zoom-in" data-aos-delay="100">Our products include <br>
                standards-aligned lessons</h1>
            <p data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">Meaningful learning, extraordinary
                engagement.</p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="our-product__desc my-lg-4 my-3 p-4" data-aos="zoom-in" data-aos-delay="100">
                    <h4>
                        Pre-K and Kindergarten:
                    </h4>
                    <div class="desc pe-lg-5 pt-3">
                        <p>
                            <strong>
                                Pre-K:
                            </strong>
                            Pre-school products align to NAEYC and Head Start preschool guidance.
                        </p>
                        <p>
                            <strong>
                                Pre-K:
                            </strong>
                            Pre-school products align to NAEYC and Head Start preschool guidance.
                        </p>
                    </div>

                    <a class="read-more" href="#">Explore Lessons for Pre-K & Kindergarten <i
                            class="fa-solid fa-arrow-right"></i> </a>
                </div>
                <div class="our-product__desc my-lg-4 my-3 p-4" data-aos="zoom-in" data-aos-delay="100">
                    <h4>
                        Pre-K and Kindergarten:
                    </h4>
                    <div class="desc pe-lg-5 pt-3">
                        <p>
                            <strong>
                                Pre-K:
                            </strong>
                            Pre-school products align to NAEYC and Head Start preschool guidance.
                        </p>

                    </div>

                    <a class="read-more" href="#">Explore Lessons for Pre-K & Kindergarten <i
                            class="fa-solid fa-arrow-right"></i> </a>
                </div>
                <div class="our-product__desc my-lg-4 my-3 p-4" data-aos="zoom-in" data-aos-delay="100">
                    <h4>
                        Pre-K and Kindergarten:
                    </h4>
                    <div class="desc pe-lg-5 pt-3">
                        <p>
                            <strong>
                                Pre-K:
                            </strong>
                            Pre-school products align to NAEYC and Head Start preschool guidance.
                        </p>

                    </div>

                    <a class="read-more" href="#">Explore Lessons for Pre-K & Kindergarten <i
                            class="fa-solid fa-arrow-right"></i> </a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('user/assets/images/U2L6_img_step_7.png')}}" alt="img" data-aos="zoom-in" data-aos-delay="100">
            </div>
        </div>

    </div>

</section>
<section class="innovate my-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title  py-lg-4">

                    <h1 data-aos="zoom-in" data-aos-delay="100">Innovate today for a better
                        tomorrow by inculcating
                        the indispensable skills
                        of the 21st century.</h1>

                    <p data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">Become a Changemaker : Lorem
                        Ipsum is simply dummy text of the printing and typesetting
                        industry.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="innovate__details text-center" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{asset('user/assets/images/innovation.png')}}" width="90" alt="img">

                            <b class="py-3">Innovativeness</b>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="innovate__details text-center" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{asset('user/assets/images/creativity.png')}}" width="90" alt="img">

                            <b class="py-3">Creativity</b>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="innovate__details text-center" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{asset('user/assets/images/critical-thinking.png')}}" width="90" alt="img">

                            <b class="py-3">Critical Thinking</b>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="innovate__details text-center" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{asset('user/assets/images/problem-solving.png')}}" width="120" alt="img">

                            <b class="py-3">Problem Solving</b>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="innovate__details text-center" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{asset('user/assets/images/logical.png')}}" width="90" alt="img">

                            <b class="py-3">Logical Reasoning</b>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="innovate__details text-center" data-aos="zoom-in" data-aos-delay="100">
                            <img src="{{asset('user/assets/images/team-work.png')}}" width="90" alt="img">

                            <b class="py-3">Team Work</b>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="association">
    <div class="container">
        <div class="association__details p-lg-5 p-3">
            <div class="section-title text-center  py-lg-4">

                <h1>International Association</h1>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="pb-lg-4 d-flex justify-content-center align-items-center">
                <div class="owl-carousel owl-partner mx-2">
                    <div>
                        <img class="owl-lazy" data-src="{{asset('user/assets/images/j.png')}}" data-src-retina="{{asset('user/assets/images/logo.png')}}/j.png" alt="">
                    </div>
                    <div>
                        <img class="owl-lazy" data-src="{{asset('user/assets/images/k.png')}}" data-src-retina="{{asset('user/assets/images/logo.png')}}/k.png" alt="">
                    </div>
                    <div>
                        <img class="owl-lazy" data-src="{{asset('user/assets/images/l.png')}}" data-src-retina="{{asset('user/assets/images/logo.png')}}/l.png" alt="">
                    </div>
                    <div>
                        <img class="owl-lazy" data-src="{{asset('user/assets/images/m.png')}}" data-src-retina="{{asset('user/assets/images/m.png')}}" alt="">
                    </div>
                    <div>
                        <img class="owl-lazy" data-src="{{asset('user/assets/images/m.png')}}" data-src-retina="{{asset('user/assets/images/m.png')}}" alt="">
                    </div>
                    <div>
                        <img class="owl-lazy" data-src="{{asset('user/assets/images/l.png')}}" data-src-retina="{{asset('user/assets/images/l.png')}}">
                    </div>
                    <div>
                        <img class="owl-lazy" data-src="{{asset('user/assets/images/l.png')}}" data-src-retina="{{asset('user/assets/images/l.png')}}">

                    </div>
                    <div>
                        <img class="owl-lazy" data-src="{{asset('user/assets/images/m.png')}}" data-src-retina="{{asset('user/assets/images/m.png')}}" alt="">
                    </div>


                </div>




            </div>
        </div>

    </div>

</section>
<section class="what-clint-say my-lg-5 my-3">
    <div class="container pt-lg-5">
        <div class="what-clint-say__details ">
            <b>What clients say <br>
                about our amazing work</b>

            <div class="owl-carousel owl-clints">
                <div>


                    <div class="d-flex justify-content-between pt-4">
                        <h1>
                            “Lorem ipsum dolor amet consectetur adipisicing
                            elit sed eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.enim ad minim eniam quis nostrud
                            exercitation.”
                        </h1>
                        <div class="images__inner">
                            <img src="{{asset('user/assets/images//say.jpg')}}" alt="img">

                        </div>

                    </div>
                    <div class="user-profile ">
                        <div class="user-profile__details d-flex align-items-center">
                            <img src="{{asset('user/assets/images/1.jpeg')}}" alt="user">
                            <div class="user-content">
                                <b class="d-block">Kailly Wilson</b>
                                <p>Managing Directors</p>
                            </div>

                        </div>

                    </div>
                </div>
                <div>


                    <div class="d-flex justify-content-between pt-4">
                        <h1>
                            “Lorem ipsum dolor amet consectetur adipisicing
                            elit sed eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.enim ad minim eniam quis nostrud
                            exercitation.”
                        </h1>
                        <div class="images__inner">
                            <img src="{{asset('user/assets/images/say.jpg')}}" alt="img">

                        </div>

                    </div>
                    <div class="user-profile ">
                        <div class="user-profile__details d-flex align-items-center">
                            <img src="{{asset('user/assets/images/1.jpeg')}}" alt="user">
                            <div class="user-content">
                                <b class="d-block">Kailly Wilson</b>
                                <p>Managing Directors</p>
                            </div>

                        </div>

                    </div>
                </div>
                <div>


                    <div class="d-flex justify-content-between pt-4">
                        <h1>
                            “Lorem ipsum dolor amet consectetur adipisicing
                            elit sed eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.enim ad minim eniam quis nostrud
                            exercitation.”
                        </h1>
                        <div class="images__inner">
                            <img src="{{asset('user/assets/images/say.jpg')}}" alt="img">

                        </div>

                    </div>
                    <div class="user-profile ">
                        <div class="user-profile__details d-flex align-items-center">
                            <img src="{{asset('user/assets/images/1.jpeg')}}" alt="user">
                            <div class="user-content">
                                <b class="d-block">Kailly Wilson</b>
                                <p>Managing Directors</p>
                            </div>

                        </div>

                    </div>
                </div>


            </div>


        </div>
    </div>
</section>
<section class="free-class pb-lg-5">
    <div class="container">
        <div class="free-class__icon">
            <img src="{{asset('user/assets/images/destop.webp')}}" alt="img">
        </div>
        <div class="free-class__details text-center ">
            <h1  data-aos="zoom-in" data-aos-delay="100">
                Try a free Trial Class
            </h1>
            <p  data-aos="fade-up" data-aos-delay="200">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
            <div data-aos="fade-up" data-aos-delay="400">
                <a href="#" >Got to free Class <i class="fa-solid fa-arrow-right" ></i></a>

            </div>
        </div>
    </div>

</section>
@endsection