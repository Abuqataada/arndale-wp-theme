<?php get_header(); ?>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-0">
    <div class="owl-carousel header-carousel position-relative">
        <?php
        // Array of slides (image paths and texts)
        $slides = array(
            array('image' => 'slide1.png', 'title' => 'Welcome to Arndale Academy, embrace excellence.', 'text' => 'With a steadfast dedication to academic achievement, we help students achieve high scores and esteemed credentials like the Primary Checkpoint and IGCSEs.'),
            array('image' => 'slide2.jpg', 'title' => 'Welcome to Arndale Academy.', 'text' => 'Unlock your future at Arndale Academy, where knowledge meets opportunity.'),
            array('image' => 'slide3.png', 'title' => 'Welcome to Arndale Academy.', 'text' => 'Discover your path to greatness at Arndale Academy, where education goes beyond the classroom.'),
            array('image' => 'slide4.png', 'title' => 'Welcome to Arndale Academy.', 'text' => 'Step into a world of learning and achievement at Arndale Academy.')
        );

        // Loop through slides
        foreach ($slides as $slide) : ?>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid w-100 carousel-image" src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slide['image']; ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h2 class="text-primary text-uppercase mb-3 animated slideInDown">ARNDALE ACADEMY</h2>
                                <h1 class="display-3 text-white animated slideInDown"><?php echo $slide['title']; ?></h1>
                                <p class="fs-5 text-white mb-4 pb-2"><?php echo $slide['text']; ?></p>
                                <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-xxl py-5 section-about">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title">Happenings</h6>
                <h1 class="mb-4">Admission is on (2024/2025 Session)</h1>
                <p class="mb-4">Your child can gain the edge to succeed in his/her education (socially, morally, and academically) when he/she joins the right school – Arndale Academy, Abuja, Nigeria. To learn more, please call 08166656369. You can also send an email to arndaleacademy@gmail.com</p>
                <a class="btn btn-primary py-3 px-5 mt-2" href="#">Apply</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/images/arndale2.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Vision & Mission Start -->
<div class="container-xxl py-5 wow fadeInUp section-vision" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title">Who We Are</h6>
            <h1 class="mb-5">Our Vision & Mission</h1>
        </div>
        <div class="owl-carousel vision-carousel position-relative">
            <div class="vision-item text-center">
                <h5 class="mb-0">Vision</h5>
                <div class="vision-text bg-light text-center p-4">
                    <p class="mb-0">To provide students with the highest quality education to actualize their potential.</p>
                </div>
            </div>
            <div class="vision-item text-center">
                <h5 class="mb-0">Mission</h5>
                <div class="vision-text bg-light text-center p-4">
                    <p class="mb-0">Dedicated to providing high-quality, all-encompassing teaching and care in a safe, stimulating and innovative environment for life-long learning and development.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vision & Mission End -->


<!-- Calendar Start -->
<div class="container-xxl py-5 calendar-section">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="section-title bg-white text-primary px-3">Calendar</h6>
            <h1 class="mb-4">Key Events – Summer Term (2024/2025)</h1>
            <p class="lead">Explore highlighted dates and major events at Arndale Academy this term.</p>
        </div>

        <div class="owl-carousel calendar-month-carousel wow fadeInUp" data-wow-delay="0.2s">
            <!-- April -->
            <div class="calendar-month-item bg-light p-4 rounded shadow-sm">
                <h4 class="text-primary text-center mb-3">April</h4>
                <ul class="list-unstyled mb-0">
                    <li><strong>28th:</strong> Resumption for Summer Term</li>
                </ul>
            </div>

            <!-- May -->
            <div class="calendar-month-item bg-light p-4 rounded shadow-sm">
                <h4 class="text-primary text-center mb-3">May</h4>
                <ul class="list-unstyled mb-0">
                    <li><strong>5th:</strong> Extra-Curricular Begins</li>
                    <li><strong>17th:</strong> 1st Entrance Exams</li>
                    <li><strong>27th:</strong> Children's Day Celebration</li>
                </ul>
            </div>

            <!-- June -->
            <div class="calendar-month-item bg-light p-4 rounded shadow-sm">
                <h4 class="text-primary text-center mb-3">June</h4>
                <ul class="list-unstyled mb-0">
                    <li><strong>3rd:</strong> Open Day</li>
                    <li><strong>28th:</strong> Cultural Day</li>
                </ul>
            </div>

            <!-- July -->
            <div class="calendar-month-item bg-light p-4 rounded shadow-sm">
                <h4 class="text-primary text-center mb-3">July</h4>
                <ul class="list-unstyled mb-0">
                    <li><strong>9–16th:</strong> Examinations</li>
                    <li><strong>19th:</strong> Graduation & Vacation</li>
                </ul>
            </div>
        </div>

        <a href="<?php echo site_url('/contact'); ?>" class="btn btn-primary py-3 px-5 mt-3">Contact Us for more enquiry...</a>
    </div>
</div>
<!-- Calendar End -->








<!-- Categories Start -->
<div class="container-xxl py-5 section-category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title">Categories</h6>
            <h1 class="mb-5">Subject Categories</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="#">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/science-department.jpg" alt="Science Department">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3">
                                <h5 class="m-0">Science Department</h5>
                                <small class="text-primary">9 Subjects</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="#">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/art-department.jfif" alt="Art Department">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3">
                                <h5 class="m-0">Art Department</h5>
                                <small class="text-primary">13 Subjects</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="#">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/language-department.png" alt="Language Department">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3">
                                <h5 class="m-0">Language Department</h5>
                                <small class="text-primary">5 Subjects</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="#">
                    <img class="img-fluid position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/images/Islamic-department.png" alt="Islamiyya Department" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                        <h5 class="m-0">Islamiyya Department</h5>
                        <small class="text-primary">10 Subjects</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Categories End -->



<!-- Team Start -->
<div class="container-xxl py-5 section-team">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title">Our Team</h6>
            <h1 class="mb-5">Expert Administrators</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/principal.png" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Ahmed Olayiwola Abdulkareem</h5>
                        <small>Principal</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/Ms-Safiya.png" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Ibrahim Safiyat</h5>
                        <small>Vice Principal (Administrative)</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/Mr-Vincent.png" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Eze Vincent</h5>
                        <small>Vice Principal (Academics)</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/EKPETI.png" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Theresa Ekpeti</h5>
                        <small>Vice Principal (Operations)</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/Ms-Reng.jpeg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Temidayo Reng</h5>
                        <small>Head Teacher (Primary)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->




<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp section-testimonial" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title">Testimonial</h6>
            <h1 class="mb-5">Our Parents Feedback!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo get_template_directory_uri(); ?>/images/female-avartar.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Mr&Mrs Abdulmalik</h5>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Arndale Academy is one of the best school I've ever seen.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo get_template_directory_uri(); ?>/images/male-avartar.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Mrs Abba</h5>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The teachers are so welcoming and know their job.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo get_template_directory_uri(); ?>/images/female-avartar.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Mr Cephas Yusuf</h5>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Arndale Academy has all the facilities I need for my children. Kudos to you guys.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo get_template_directory_uri(); ?>/images/male-avartar.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Mr&Mrs Tokode</h5>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Very good and serene environment for a school. Keep it up!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->



<!-- Calendar Start
<div class="container-xxl py-5 section-calender">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title">Calendar</h6>
                <h1 class="mb-4">Summer Term Calendar (2024/2025 Session)</h1>
                <p class="mb-4">Welcome to the <strong>Summer Term</strong> of the 2024/2025 Academic Session at Arndale Academy! We're thrilled to share the key dates and events for this term. Mark your calendars and join us as we strive for excellence.</p>
                <h2>April 2025</h2>
                <ul>
                    <li>28th April: Resumption</li>
                </ul>
                <h2>May 2025</h2>
                <ul>
                    <li>1st May: Workers' Day (Holiday)</li>
                    <li>3rd May: Parents As Partners Representative Meeting</li>
                    <li>5th May: Extra-Curricular Activities Begin</li>
                    <li>12th May: Field Trip Begins</li>
                    <li>17th May: 1st Entrance Exams</li>
                    <li>26th-30th May: Continuous Assessment Week</li>
                    <li>27th May: Children's Day</li>
                    <li>31st May: 2nd Entrance Exams</li>
                </ul>
                <h2>June 2025</h2>
                <ul>
                    <li>3rd June: Open Day</li>
                    <li>4th-10th June: Id-El-Kabir / Mid-Term Break</li>
                    <li>14th June: 3rd Entrance Exams</li>
                    <li>23rd-27th June: Entrepreneurial Week</li>
                    <li>28th June: Cultural Day</li>
                </ul>
                <h2>July 2025</h2>
                <ul>
                    <li>3rd July: End of Extra-Curricular Activities</li>
                    <li>4th-8th July: Revision</li>
                    <li>9th-16th July: Examinations</li>
                    <li>18th July: Class Party</li>
                    <li>19th July: Graduation, Speech, and Prize-Giving Day / Vacation</li>
                </ul>
                <strong>Note: The next term begins on 6th September 2025.</strong>
                <p class="mb-4">Stay connected for updates and more information. Visit our website at www.arndaleacademy.com or contact us at info@arndaleacademy.com.</p>
                <p>Arndale Academy - Dedicated to Excellence</p>
            </div>
        </div>
    </div>
</div>  -->


<?php get_footer(); ?>
