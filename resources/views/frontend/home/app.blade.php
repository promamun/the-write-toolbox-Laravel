@extends('frontend.master')
@section('content')
    <section class="home-slide d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-md-7">
                    <div class="home-slide-face aos" data-aos="fade-up">
                        <div class="home-slide-text ">
                            <h5>The Leader in Online Learning</h5>
                            <h1>Engaging & Accessible Online Courses For All</h1>
                            <p>Own your future learning new skills online</p>
                        </div>
                        <div class="banner-content">
                           
                        </div>
                        <div class="trust-user">
                            <p>Trusted by over 15K Users <br>worldwide since 2022</p>
                            <div class="trust-rating d-flex align-items-center">
                                <div class="rate-head">
                                    <h2><span>1000</span>+</h2>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <h2 class="d-inline-block average-rating">4.4</h2>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <div class="girl-slide-img aos" data-aos="fade-up">
                        <img src="{{ asset('/frontend/') }}/assets/img/object.png" alt>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section student-course">
        <div class="container">
            <div class="course-widget">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="course-full-width">
                            <div class="blur-border course-radius align-items-center aos" data-aos="fade-up">
                                <div class="online-course d-flex align-items-center">
                                    <div class="course-img">
                                        <img src="{{ asset('/frontend/') }}/assets/img/pencil-icon.svg" alt>
                                    </div>
                                    <div class="course-inner-content">
                                        <h4><span>10</span>K</h4>
                                        <p>Online Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="course-full-width">
                            <div class="blur-border course-radius aos" data-aos="fade-up">
                                <div class="online-course d-flex align-items-center">
                                    <div class="course-img">
                                        <img src="{{ asset('/frontend/') }}/assets/img/cources-icon.svg" alt>
                                    </div>
                                    <div class="course-inner-content">
                                        <h4><span>200</span>+</h4>
                                        <p>Expert Tutors</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="course-full-width">
                            <div class="blur-border course-radius aos" data-aos="fade-up">
                                <div class="online-course d-flex align-items-center">
                                    <div class="course-img">
                                        <img src="{{ asset('/frontend/') }}/assets/img/certificate-icon.svg" alt>
                                    </div>
                                    <div class="course-inner-content">
                                        <h4><span>6</span>K+</h4>
                                        <p>Ceritified Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="course-full-width">
                            <div class="blur-border course-radius aos" data-aos="fade-up">
                                <div class="online-course d-flex align-items-center">
                                    <div class="course-img">
                                        <img src="{{ asset('/frontend/') }}/assets/img/gratuate-icon.svg" alt>
                                    </div>
                                    <div class="course-inner-content">
                                        <h4><span>60</span>K +</h4>
                                        <p>Online Students</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="master-skill-three">
        <div class="master-three-vector">
            <img class="ellipse-right img-fluid" src="{{ asset('/frontend/') }}/assets/img/bg/pattern-01.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 aos-init aos-animate" data-aos="fade-right">
                    <div class="master-three-images">
                        <div class="master-three-left">
                            <img class="img-fluid" src="{{ asset('/frontend/') }}/assets/img/students/career.png" alt="image-banner"
                                title="image-banner">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 aos-init aos-animate" data-aos="fade-left">
                    <div class="home-three-head aos-init aos-animate" data-aos="fade-up">
                        <h2>Master the skills to drive your career</h2>
                    </div>
                    <div class="home-three-content aos-init aos-animate" data-aos="fade-up">
                        <p>Get certified, master modern tech skills, and level up your career whether you’re starting out or
                            a seasoned pro. 95% of eLearning learners report our hands-on content directly helped their
                            careers.</p>
                    </div>
                    <div class="skils-group">
                        <div class="row">
                            <div class="col-lg-6 col-xs-12 col-sm-6 aos-init aos-animate" data-aos="fade-down">
                                <div class="skils-icon-item">
                                    <div class="skils-icon">
                                        <img class="img-fluid" src="{{ asset('/frontend/') }}/assets/img/icon-three/career-01.svg" alt="certified">
                                    </div>
                                    <div class="skils-content">
                                        <p class="mb-0">Get certified with 100+ certification courses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-6 aos-init aos-animate" data-aos="fade-up">
                                <div class="skils-icon-item">
                                    <div class="skils-icon">
                                        <img class="img-fluid" src="{{ asset('/frontend/') }}/assets/img/icon-three/career-02.svg"
                                            alt="Build skills">
                                    </div>
                                    <div class="skils-content">
                                        <p class="mb-0">Build skills your way, from labs to courses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-6 aos-init aos-animate" data-aos="fade-right">
                                <div class="skils-icon-item">
                                    <div class="skils-icon">
                                        <img class="img-fluid" src="{{ asset('/frontend/') }}/assets/img/icon-three/career-03.svg"
                                            alt="Stay Motivated">
                                    </div>
                                    <div class="skils-content">
                                        <p class="mb-0">Stay motivated with engaging instructors</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-6 aos-init aos-animate" data-aos="fade-left">
                                <div class="skils-icon-item">
                                    <div class="skils-icon">
                                        <img class="img-fluid" src="{{ asset('/frontend/') }}/assets/img/icon-three/career-04.svg"
                                            alt="latest cloud">
                                    </div>
                                    <div class="skils-content">
                                        <p class="mb-0">Keep up with the latest in cloud</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section new-course">
        <div class="container">
            <div class="section-header aos" data-aos="fade-up">
                <div class="section-sub-head">
                    <span>What’s New</span>
                    <h2>All Courses</h2>
                </div>
                <div class="all-btn all-category d-flex align-items-center">
                    <a href="course-list.html" class="btn btn-primary">All Courses</a>
                </div>
            </div>
            <div class="section-text aos" data-aos="fade-up">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                    bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
            </div>
            <div class="course-feature">
                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="course-box d-flex aos" data-aos="fade-up">
                            <div class="product">
                                <div class="product-img">
                                    <a href="course-details.html">
                                        <img class="img-fluid" alt
                                            src="{{ asset('/frontend/') }}/assets/img/course/course-01.jpg">
                                    </a>
                                    <div class="price">
                                        <h3>$300 <span>$99.00</span></h3>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="course-group d-flex">
                                        <div class="course-group-img d-flex">
                                            <a href="instructor-profile.html"><img
                                                    src="{{ asset('/frontend/') }}/assets/img/user/user1.jpg" alt
                                                    class="img-fluid"></a>
                                            <div class="course-name">
                                                <h4><a href="instructor-profile.html">Nicole Brown</a></h4>
                                                <p>Instructor</p>
                                            </div>
                                        </div>
                                        <div class="course-share d-flex align-items-center justify-content-center">
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3 class="title instructor-text"><a href="course-details.html">Information
                                            About UI/UX Design Degree</a></h3>
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <img src="{{ asset('/frontend/') }}/assets/img/icon/icon-01.svg" alt>
                                            <p>12+ Lesson</p>
                                        </div>
                                        <div class="course-view d-flex align-items-center">
                                            <img src="{{ asset('/frontend/') }}/assets/img/icon/icon-02.svg" alt>
                                            <p>9hr 30min</p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                    </div>
                                    <div class="all-btn all-category d-flex align-items-center">
                                        <a href="checkout.html" class="btn btn-primary">BUY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="course-box d-flex aos" data-aos="fade-up">
                            <div class="product">
                                <div class="product-img">
                                    <a href="course-details.html">
                                        <img class="img-fluid" alt
                                            src="{{ asset('/frontend/') }}/assets/img/course/course-02.jpg">
                                    </a>
                                    <div class="price">
                                        <h3>$400 <span>$99.00</span></h3>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="course-group d-flex">
                                        <div class="course-group-img d-flex">
                                            <a href="instructor-profile.html"><img
                                                    src="{{ asset('/frontend/') }}/assets/img/user/user2.jpg" alt
                                                    class="img-fluid"></a>
                                            <div class="course-name">
                                                <h4><a href="instructor-profile.html">Jenis R.</a></h4>
                                                <p>Instructor</p>
                                            </div>
                                        </div>
                                        <div class="course-share d-flex align-items-center justify-content-center">
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3 class="title instructor-text"><a href="course-details.html">Wordpress for
                                            Beginners - Master Wordpress Quickly</a></h3>
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <img src="{{ asset('/frontend/') }}/assets/img/icon/icon-01.svg" alt>
                                            <p>11+ Lesson</p>
                                        </div>
                                        <div class="course-view d-flex align-items-center">
                                            <img src="{{ asset('/frontend/') }}/assets/img/icon/icon-02.svg" alt>
                                            <p>6hr 30min</p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating"><span>4.3</span> (15)</span>
                                    </div>
                                    <div class="all-btn all-category d-flex align-items-center">
                                        <a href="checkout.html" class="btn btn-primary">BUY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="course-box d-flex aos" data-aos="fade-up">
                            <div class="product">
                                <div class="product-img">
                                    <a href="course-details.html">
                                        <img class="img-fluid" alt
                                            src="{{ asset('/frontend/') }}/assets/img/course/course-03.jpg">
                                    </a>
                                    <div class="price combo">
                                        <h3>FREE</h3>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="course-group d-flex">
                                        <div class="course-group-img d-flex">
                                            <a href="instructor-profile.html"><img
                                                    src="{{ asset('/frontend/') }}/assets/img/user/user5.jpg" alt
                                                    class="img-fluid"></a>
                                            <div class="course-name">
                                                <h4><a href="instructor-profile.html">Jesse Stevens</a></h4>
                                                <p>Instructor</p>
                                            </div>
                                        </div>
                                        <div class="course-share d-flex align-items-center justify-content-center">
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3 class="title instructor-text"><a href="course-details.html">Sketch from A
                                            to Z (2022): Become an app designer</a></h3>
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <img src="{{ asset('/frontend/') }}/assets/img/icon/icon-01.svg" alt>
                                            <p>16+ Lesson</p>
                                        </div>
                                        <div class="course-view d-flex align-items-center">
                                            <img src="{{ asset('/frontend/') }}/assets/img/icon/icon-02.svg" alt>
                                            <p>12hr 30min</p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating"><span>4.5</span> (15)</span>
                                    </div>
                                    <div class="all-btn all-category d-flex align-items-center">
                                        <a href="checkout.html" class="btn btn-primary">BUY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="course-box d-flex aos" data-aos="fade-up">
                            <div class="product">
                                <div class="product-img">
                                    <a href="course-details.html">
                                        <img class="img-fluid" alt
                                            src="{{ asset('/frontend/') }}/assets/img/course/course-04.jpg">
                                    </a>
                                    <div class="price">
                                        <h3>$500 <span>$99.00</span></h3>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="course-group d-flex">
                                        <div class="course-group-img d-flex">
                                            <a href="instructor-profile.html"><img
                                                    src="{{ asset('/frontend/') }}/assets/img/user/user4.jpg" alt
                                                    class="img-fluid"></a>
                                            <div class="course-name">
                                                <h4><a href="instructor-profile.html">Nicole Brown</a></h4>
                                                <p>Instructor</p>
                                            </div>
                                        </div>
                                        <div class="course-share d-flex align-items-center justify-content-center">
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3 class="title instructor-text"><a href="course-details.html">Learn Angular
                                            Fundamentals From beginning to advance lavel</a></h3>
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <img src="{{ asset('/frontend/') }}/assets/img/icon/icon-01.svg" alt>
                                            <p>10+ Lesson</p>
                                        </div>
                                        <div class="course-view d-flex align-items-center">
                                            <img src="{{ asset('/frontend/') }}/assets/img/icon/icon-02.svg" alt>
                                            <p>8hr 30min</p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating"><span>4.2</span> (15)</span>
                                    </div>
                                    <div class="all-btn all-category d-flex align-items-center">
                                        <a href="checkout.html" class="btn btn-primary">BUY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section master-skill">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="section-header aos" data-aos="fade-up">
                        <div class="section-sub-head">
                            <span>What’s New</span>
                            <h2>Master the skills to drive your career</h2>
                        </div>
                    </div>
                    <div class="section-text aos" data-aos="fade-up">
                        <p>Get certified, master modern tech skills, and level up your career — whether you’re
                            starting out or a seasoned pro. 95% of eLearning learners report our hands-on content
                            directly helped their careers.</p>
                    </div>
                    <div class="career-group aos" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-group blur-border d-flex">
                                    <div class="get-certified d-flex align-items-center">
                                        <div class="blur-box">
                                            <div class="certified-img ">
                                                <img src="{{ asset('/frontend/') }}/assets/img/icon/icon-1.svg" alt
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <p>Stay motivated with engaging instructors</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-group blur-border d-flex">
                                    <div class="get-certified d-flex align-items-center">
                                        <div class="blur-box">
                                            <div class="certified-img ">
                                                <img src="{{ asset('/frontend/') }}/assets/img/icon/icon-2.svg" alt
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <p>Keep up with in the latest in cloud</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-group blur-border d-flex">
                                    <div class="get-certified d-flex align-items-center">
                                        <div class="blur-box">
                                            <div class="certified-img ">
                                                <img src="{{ asset('/frontend/') }}/assets/img/icon/icon-3.svg" alt
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <p>Get certified with 100+ certification courses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-group blur-border d-flex">
                                    <div class="get-certified d-flex align-items-center">
                                        <div class="blur-box">
                                            <div class="certified-img ">
                                                <img src="{{ asset('/frontend/') }}/assets/img/icon/icon-4.svg" alt
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <p>Build skills your way, from labs to courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 d-flex align-items-end">
                    <div class="career-img aos" data-aos="fade-up">
                        <img src="{{ asset('/frontend/') }}/assets/img/join.png" alt class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section user-love">
        <div class="container">
            <div class="section-header white-header aos" data-aos="fade-up">
                <div class="section-sub-head feature-head text-center">
                    <span>Check out these real reviews</span>
                    <h2>Users-love-us Don't take it from us.</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-four">
        <div class="review">
            <div class="container">
                <div class="testi-quotes">
                    <img src="{{ asset('/frontend/') }}/assets/img/qute.png" alt>
                </div>
                <div class="mentor-testimonial lazy slider aos" data-aos="fade-up" data-sizes="50vw ">
                    <div class="d-flex justify-content-center">
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center align-items-center d-flex">
                                <div class="testimonial-four-saying ">
                                    <div class="testi-right">
                                        <img src="{{ asset('/frontend/') }}/assets/img/qute-01.png" alt>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book.</p>
                                    <div class="four-testimonial-founder">
                                        <div class="fount-about-img">
                                            <a href="instructor-profile.html"><img
                                                    src="{{ asset('/frontend/') }}/assets/img/user/user1.jpg" alt
                                                    class="img-fluid"></a>
                                        </div>
                                        <h3><a href="instructor-profile.html">Daziy Millar</a></h3>
                                        <span>Founder of Awesomeux Technology</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center align-items-center d-flex">
                                <div class="testimonial-four-saying ">
                                    <div class="testi-right">
                                        <img src="{{ asset('/frontend/') }}/assets/img/qute-01.png" alt>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book.</p>
                                    <div class="four-testimonial-founder">
                                        <div class="fount-about-img">
                                            <a href="instructor-profile.html"><img
                                                    src="{{ asset('/frontend/') }}/assets/img/user/user3.jpg" alt
                                                    class="img-fluid"></a>
                                        </div>
                                        <h3><a href="instructor-profile.html">john smith</a></h3>
                                        <span>Founder of Awesomeux Technology</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center align-items-center d-flex">
                                <div class="testimonial-four-saying ">
                                    <div class="testi-right">
                                        <img src="{{ asset('/frontend/') }}/assets/img/qute-01.png" alt>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book.</p>
                                    <div class="four-testimonial-founder">
                                        <div class="fount-about-img">
                                            <a href="instructor-profile.html"><img
                                                    src="{{ asset('/frontend/') }}/assets/img/user/user2.jpg" alt
                                                    class="img-fluid"></a>
                                        </div>
                                        <h3><a href="instructor-profile.html">David Lee</a></h3>
                                        <span>Founder of Awesomeux Technology</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section become-instructors aos" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="student-mentor cube-instuctor ">
                        <h4>Become An Instructor</h4>
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="top-instructors">
                                    <p>Top instructors from around the world teach millions of students on
                                        Mentoring.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="mentor-img">
                                    <img class="img-fluid" alt src="{{ asset('/frontend/') }}/assets/img/become-02.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="student-mentor yellow-mentor">
                        <h4>Transform Access To Education</h4>
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="top-instructors">
                                    <p>Create an account to receive our newsletter, course recommendations and
                                        promotions.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="mentor-img">
                                    <img class="img-fluid" alt src="{{ asset('/frontend/') }}/assets/img/become-01.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection