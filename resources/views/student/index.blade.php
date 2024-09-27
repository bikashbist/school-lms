@extends('student.student-dashboard')
@section('content')
@include('student.layout.banner-profile')
@include('student.layout.my-learning')
<section class="my-learning-tag py-4">
    <div class="container">
        <ul class="nav nav-pills d-flex justify-content-center d mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="All-tab" data-bs-toggle="pill" data-bs-target="#All"
                    type="button" role="tab" aria-controls="All" aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="Curriculum-tab" data-bs-toggle="pill" data-bs-target="#Curriculum"
                    type="button" role="tab" aria-controls="Curriculum" aria-selected="false">School Curriculum
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                    aria-selected="false">
                    Teacher Resources
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="skill-courses-tab" data-bs-toggle="pill"
                    data-bs-target="#skill-courses" type="button" role="tab" aria-controls="skill-courses"
                    aria-selected="false">
                    Skill Courses
                </button>
            </li>

        </ul>
        <div class="tab-content courses" id="pills-tabContent">
            <div class="tab-pane fade show active" id="All" role="tabpanel" aria-labelledby="All-tab" tabindex="0">

                <div class="row justify-content-center g-4">
                    <div class="col-lg-3">
                        <div class="courses__details border">
                            <a href="#">
                                <img class="w-100" src="images/Programming-for-Kids-768x288.jpg" alt="">
                            </a>
                            <div class="courses__details--content p-3">
                                <span> 12 Lessons</span>
                                <a class="d-block my-2" href="#">
                                    Introduction to Programming
                                </a>

                                <p>
                                    Covers the basic concepts of coding like sequence, loops, variables, arithmetic
                                    operators.
                                </p>
                               <progress class="w-100" id="file" value="32" max="100"> 32% </progress>
                                <label for="file"><small>32% Complete</small> </label>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="courses__details border">
                            <a href="#">
                                <img class="w-100" src="images/Programming-for-Kids-768x288.jpg" alt="">
                            </a>
                            <div class="courses__details--content p-3">
                                <span> 12 Lessons</span>
                                <a class="d-block my-2" href="#">
                                    Introduction to Programming
                                </a>

                                <p>
                                    Covers the basic concepts of coding like sequence, loops, variables, arithmetic
                                    operators.
                                </p>
                               <progress class="w-100" id="file" value="32" max="100"> 32% </progress>
                                <label for="file"><small>32% Complete</small> </label>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="courses__details border">
                            <a href="#">
                                <img class="w-100" src="images/Programming-for-Kids-768x288.jpg" alt="">
                            </a>
                            <div class="courses__details--content p-3">
                                <span> 12 Lessons</span>
                                <a class="d-block my-2" href="#">
                                    Introduction to Programming
                                </a>

                                <p>
                                    Covers the basic concepts of coding like sequence, loops, variables, arithmetic
                                    operators.
                                </p>
                               <progress class="w-100" id="file" value="32" max="100"> 32% </progress>
                                <label for="file"><small>32% Complete</small> </label>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="courses__details border">
                            <a href="#">
                                <img class="w-100" src="images/Programming-for-Kids-768x288.jpg" alt="">
                            </a>
                            <div class="courses__details--content p-3">
                                <span> 12 Lessons</span>
                                <a class="d-block my-2" href="#">
                                    Introduction to Programming
                                </a>

                                <p>
                                    Covers the basic concepts of coding like sequence, loops, variables, arithmetic
                                    operators.
                                </p>
                               <progress class="w-100" id="file" value="32" max="100"> 32% </progress>
                                <label for="file"><small>32% Complete</small> </label>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="courses__details border">
                            <a href="#">
                                <img class="w-100" src="images/Programming-for-Kids-768x288.jpg" alt="">
                            </a>
                            <div class="courses__details--content p-3">
                                <span> 12 Lessons</span>
                                <a class="d-block my-2" href="#">
                                    Introduction to Programming
                                </a>

                                <p>
                                    Covers the basic concepts of coding like sequence, loops, variables, arithmetic
                                    operators.
                                </p>
                               <progress class="w-100" id="file" value="32" max="100"> 32% </progress>
                                <label for="file"><small>32% Complete</small> </label>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="courses__details border">
                            <a href="#">
                                <img class="w-100" src="images/Programming-for-Kids-768x288.jpg" alt="">
                            </a>
                            <div class="courses__details--content p-3">
                                <span> 12 Lessons</span>
                                <a class="d-block my-2" href="#">
                                    Introduction to Programming
                                </a>

                                <p>
                                    Covers the basic concepts of coding like sequence, loops, variables, arithmetic
                                    operators.
                                </p>
                               <progress class="w-100" id="file" value="32" max="100"> 32% </progress>
                                <label for="file"><small>32% Complete</small> </label>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="courses__details border">
                            <a href="#">
                                <img class="w-100" src="images/Programming-for-Kids-768x288.jpg" alt="">
                            </a>
                            <div class="courses__details--content p-3">
                                <span> 12 Lessons</span>
                                <a class="d-block my-2" href="#">
                                    Introduction to Programming
                                </a>

                                <p>
                                    Covers the basic concepts of coding like sequence, loops, variables, arithmetic
                                    operators.
                                </p>
                                <progress class="w-100" id="file" value="32" max="100"> 32% </progress>
                                <label for="file"><small>32% Complete</small> </label>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="courses__details border">
                            <a href="#">
                                <img class="w-100" src="images/Programming-for-Kids-768x288.jpg" alt="">
                            </a>
                            <div class="courses__details--content p-3">
                                <span> 12 Lessons</span>
                                <a class="d-block my-2" href="#">
                                    Introduction to Programming
                                </a>

                                <p>
                                    Covers the basic concepts of coding like sequence, loops, variables, arithmetic
                                    operators.
                                </p>

                                <progress class="w-100" id="file" value="32" max="100"> 32% </progress>
                                <label for="file"><small>32% Complete</small> </label>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="Curriculum" role="tabpanel" aria-labelledby="Curriculum-tab"
                tabindex="0">School Curriculum</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                tabindex="0">...</div>
            <div class="tab-pane fade" id="skill-courses" role="tabpanel" aria-labelledby="skill-courses-tab"
                tabindex="0">Skill Courses</div>
        </div>
    </div>
</section>
@endsection