<?php
/* Template Name: Custom Page Template */
get_header(); ?>

<div class="page-content">
    <?php
    // Loop through posts (pages in this case)
    while (have_posts()) : the_post();

        // Check the current page title and output specific content for each page
        if (is_page('About')) {
            ?>
            <div class="container-xxl py-5 about-section">
                <div class="container">
                    <!-- Section Header -->
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Who We Are</h6>
                        <h1 class="mb-4">Welcome to Arndale Academy</h1>
                        <p class="lead">Building Future Leaders Through Excellence in Education, Innovation, and Values.</p>
                    </div>

                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/arndale3.jpg" alt="About Arndale">
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.6s">
                            <p class="mb-4">
                                Arndale Academy, located in the serene environment of Karmo, Abuja, is a beacon of academic excellence and holistic development. We are a private day school committed to nurturing future leaders equipped with knowledge, discipline, and creativity.
                            </p>
                            <p class="mb-4">
                                Our philosophy centers on the belief that every child is unique and capable of greatness when nurtured in a conducive environment. With a robust blend of the Nigerian and British curricula, we provide our students with a solid foundation to succeed globally.
                            </p>
                            <p class="mb-4">
                                At Arndale, education transcends the classroom. From tech-enabled learning to character development, our programs are designed to foster confident, empathetic, and resilient learners ready to make a difference in the world.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Blended Nigerian-British Curriculum (IGCSE, WAEC, NECO)</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> STEM, Robotics, Coding, and Entrepreneurial Programs</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Safe, inclusive and stimulating learning environment</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Experienced and passionate educators</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Emphasis on creativity, innovation, and leadership</li>
                            </ul>
                            <a href="<?php echo site_url('/contact'); ?>" class="btn btn-primary py-3 px-5 mt-3">Contact Us</a>
                        </div>
                    </div>

                    <!-- More About Us -->
                    <div class="row g-5 mt-5">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h3>Our Vision</h3>
                            <p>o provide students with the highest quality education to actualize their potential.</p>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <h3>Our Mission</h3>
                            <p>Dedicated to providing high-quality, all-encompassing teaching and care in a safe, stimulating and innovative environment for life-long learning and development.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us -->
                    <div class="row mt-5 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="col-lg-12">
                            <h3 class="text-center mb-4">Why Choose Arndale Academy?</h3>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="p-4 bg-light rounded h-100">
                                        <h5>Personalized Learning</h5>
                                        <p>We cater to individual learning styles and abilities, ensuring each child thrives and grows at their own pace.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light rounded h-100">
                                        <h5>Modern Facilities</h5>
                                        <p>Our state-of-the-art classrooms, science labs, ICT suites, and sports amenities support effective learning and creativity.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light rounded h-100">
                                        <h5>Global Exposure</h5>
                                        <p>With IGCSEs and international programs, we prepare students for global universities and careers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="text-center mt-5">
                        <h4 class="mb-3">Ready to be part of a transformative learning experience?</h4>
                        <a href="<?php echo site_url('/admission'); ?>" class="btn btn-outline-primary px-4 py-3">Explore Admission</a>
                    </div>
                </div>
            </div>

            <?php
        } elseif (is_page('Contact')) {
            ?>
            <div class="container-xxl py-5 contact-section">
                <div class="container">
                    <!-- Section Heading -->
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Get In Touch</h6>
                        <h1 class="mb-4">Contact Arndale Academy</h1>
                        <p class="lead">We're always happy to hear from you. Whether you're a parent, guardian, educator, or simply want to learn more about our school — feel free to reach out through any of the channels below.</p>
                    </div>

                    <div class="row g-5">
                        <!-- Contact Information -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h4>Reach Us</h4>
                            <p><i class="bi bi-geo-alt-fill text-primary me-2"></i>Plot 647, Cadastral Zone CO7, Karmo, Abuja, Nigeria</p>
                            <p><i class="bi bi-telephone-fill text-primary me-2"></i>+234 913 030 9030, +234 816 665 6369</p>
                            <p><i class="bi bi-envelope-fill text-primary me-2"></i>info@arndaleacademy.com<br>arndaleacademy@gmail.com</p>

                            <!-- Social Links -->
                            <div class="mt-4">
                                <h5>Follow Us</h5>
                                <a class="btn btn-outline-primary btn-sm-square me-2" href="https://facebook.com/arndaleacademyabuja/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-sm-square me-2" href="https://twitter.com/Arndale_academy"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-sm-square me-2" href="https://instagram.com/arndale_academy"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-sm-square" href="https://youtube.com/@arndale_academy"><i class="fab fa-youtube"></i></a>
                            </div>

                            <!-- Opening Hours -->
                            <div class="mt-4">
                                <h5>Office Hours</h5>
                                <ul class="list-unstyled">
                                    <li><strong>Monday – Friday:</strong> 8:00am – 4:00pm</li>
                                    <li><strong>Saturday – Sunday:</strong> Closed</li>
                                    <li><strong>Public Holidays:</strong> Closed</li>
                                </ul>
                            </div>

                            <!-- Map -->
                            <div class="mt-4">
                                <h5>Our Location</h5>
                                <div class="ratio ratio-16x9 rounded">
                                    <iframe src="https://maps.google.com/maps?q=Arndale%20Academy%20Karmo&t=&z=15&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                            <h4>Send Us a Message</h4>
                            <form action="#" method="post" class="contact-form">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control border-0 bg-light px-4 py-3" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control border-0 bg-light px-4 py-3" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="subject" class="form-control border-0 bg-light px-4 py-3" placeholder="Subject" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control border-0 bg-light px-4 py-3" rows="5" placeholder="Your Message" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary py-3 px-5">Send Message</button>
                                    </div>
                                </div>
                            </form>

                            <!-- FAQ Section -->
                            <div class="mt-5">
                                <h5>Frequently Asked Questions</h5>
                                <ul class="list-unstyled">
                                    <li><strong>Q:</strong> How do I apply for admission?<br><strong>A:</strong> Visit the <a href="<?php echo site_url('/admission'); ?>">Admission</a> page for guidelines.</li>
                                    <li><strong>Q:</strong> Is there a boarding facility?<br><strong>A:</strong> Currently, Arndale Academy is a day school.</li>
                                    <li><strong>Q:</strong> What curriculum do you follow?<br><strong>A:</strong> A hybrid of Nigerian and British (Cambridge IGCSE).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        } elseif (is_page('Curriculum')) {
            ?>
            <div class="container-xxl py-5 curriculum-page">
                <div class="container">
                    <!-- Header -->
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Our Curriculum</h6>
                        <h1 class="mb-4">Academic Program</h1>
                        <p class="lead">At Arndale Academy, our curriculum blends academic excellence, moral integrity, and creativity to produce confident, future-ready learners.</p>
                    </div>

                    <!-- Curriculum Sections -->
                    <div class="row g-4">
                        <!-- Primary Section -->
                        <div class="col-lg-6">
                            <div class="curriculum-block bg-light p-4 rounded shadow-sm h-100">
                                <h4 class="text-primary">Primary Section</h4>
                                <p>Our primary curriculum fosters foundational skills in literacy, numeracy, and exploration. Children engage in creative and critical thinking through a carefully structured and child-centered syllabus.</p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> English Language</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Mathematics</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Basic Science</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Social Studies</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Literacy & Numeracy</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Agricultural Science</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Home Economics</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Music and CCA</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> French Language</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> IRS/CRS</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Geography</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Secondary Section -->
                        <div class="col-lg-6">
                            <div class="curriculum-block bg-light p-4 rounded shadow-sm h-100">
                                <h4 class="text-primary">Secondary Section</h4>
                                <p>Our secondary curriculum challenges students intellectually while nurturing leadership, independence, and global awareness. Learners are equipped for national and international examinations.</p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Mathematics & Further Mathematics</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> English Language</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Biology, Chemistry & Physics</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Economics & Commerce</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Financial Accounting</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Computer Science</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Government & Civic Education</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> CCA, Music & Drama</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> IRS/CRS</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> French Language</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Basic Technology & Science</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- International Programs -->
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <h4 class="text-primary">International Programs & Certifications</h4>
                            <p>We prepare students for both national and international examinations, ensuring they are globally competitive:</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-award text-primary me-2"></i> <strong>Cambridge Checkpoint:</strong> Strengthens foundation for IGCSE</li>
                                <li><i class="bi bi-award text-primary me-2"></i> <strong>IGCSE:</strong> Equips students for international higher education</li>
                                <li><i class="bi bi-award text-primary me-2"></i> <strong>WAEC & NECO:</strong> Meets all national academic standards</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Learning Approach -->
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <h4 class="text-primary">Our Learning Approach</h4>
                            <p>Our teaching combines theory with real-world application. With modern labs, digital classrooms, and collaborative projects, we create immersive learning experiences. We also provide:</p>
                            <ul>
                                <li><i class="bi bi-lightbulb text-primary me-2"></i> Inquiry-based & activity-driven teaching</li>
                                <li><i class="bi bi-person-check text-primary me-2"></i> Periodic assessments and personalized feedback</li>
                                <li><i class="bi bi-laptop text-primary me-2"></i> Use of EdTech and smart learning tools</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/curriculm.jpg" alt="Curriculum learning at Arndale">
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="text-center mt-5">
                        <h5 class="mb-3">Want to learn more about our curriculum?</h5>
                        <a href="<?php echo site_url('/contact'); ?>" class="btn btn-primary px-4 py-3">Contact Us</a>
                    </div>
                </div>
            </div>

            <?php
        } elseif (is_page('Board')) {
            ?>
            <div class="container-xxl py-5 advisory-board-page">
                <div class="container">
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Leadership</h6>
                        <h1 class="mb-4">Our Advisory Board</h1>
                        <p class="lead">Meet the visionaries guiding Arndale Academy with experience, passion, and excellence.</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="team-item bg-light text-center p-4 rounded">
                                <img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri(); ?>/images/board1.jpg" alt="Board Member 1" style="width: 150px; height: 150px; object-fit: cover;">
                                <h5>Dr. ----</h5>
                                <small>Chairperson</small>
                                <p class="mt-3">Renowned education consultant and advocate for girl-child education.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-item bg-light text-center p-4 rounded">
                                <img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri(); ?>/images/board2.jpg" alt="Board Member 2" style="width: 150px; height: 150px; object-fit: cover;">
                                <h5>Alh. ----</h5>
                                <small>Member</small>
                                <p class="mt-3">An experienced educator with over 25 years in curriculum development.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-item bg-light text-center p-4 rounded">
                                <img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri(); ?>/images/board3.jpg" alt="Board Member 3" style="width: 150px; height: 150px; object-fit: cover;">
                                <h5>Mrs. ---------</h5>
                                <small>Member</small>
                                <p class="mt-3">An expert in school administration and policy-making in education.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } elseif (is_page('Coding')) {
            ?>
            <div class="container-xxl py-5 coding-robotics-page">
                <div class="container">
                    <!-- Header -->
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Innovation & Technology</h6>
                        <h1 class="mb-4">Coding & Robotics Club</h1>
                        <p class="lead">At Arndale Academy, we prepare students for the future through hands-on learning in coding, robotics, and digital technology.</p>
                    </div>

                    <!-- Introduction -->
                    <div class="row g-5 align-items-center mb-5">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                            <img class="img-fluid rounded shadow-sm" src="<?php echo get_template_directory_uri(); ?>/images/coding1.jpg" alt="Coding and Robotics at Arndale">
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                            <p>
                                In today’s rapidly changing digital world, coding and robotics skills are not optional — they're essential. At Arndale Academy, our club is designed to equip students with critical thinking, problem-solving, and collaborative skills through engaging, project-based learning.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Hands-on experience with programming tools and microcontrollers</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Block-based and text-based coding (e.g., Scratch, Python)</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Real-world robotics challenges and competitions</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Team collaboration on creative tech projects</li>
                            </ul>
                        </div>
                    </div>

                    <!-- What We Teach -->
                    <div class="row g-4 mb-5">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="p-4 bg-light rounded shadow-sm h-100">
                                <h4 class="text-primary">Coding Skills</h4>
                                <p>From the basics of programming logic to advanced scripting, students build real applications using:</p>
                                <ul>
                                    <li><i class="bi bi-terminal text-primary me-2"></i> Scratch & Blockly for beginners</li>
                                    <li><i class="bi bi-code text-primary me-2"></i> Python & JavaScript for intermediate learners</li>
                                    <li><i class="bi bi-laptop text-primary me-2"></i> HTML, CSS for web development</li>
                                    <li><i class="bi bi-lightning-charge text-primary me-2"></i> Arduino IDE for hardware interaction</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="p-4 bg-light rounded shadow-sm h-100">
                                <h4 class="text-primary">Robotics Engineering</h4>
                                <p>Our students design, assemble, and program robots using kits and platforms such as:</p>
                                <ul>
                                    <li><i class="bi bi-robot text-primary me-2"></i> Arduino-based projects</li>
                                    <li><i class="bi bi-cpu text-primary me-2"></i> PictoBlox & Micro:bit programming</li>
                                    <li><i class="bi bi-gear-wide-connected text-primary me-2"></i> Line-following & obstacle-avoiding bots</li>
                                    <li><i class="bi bi-controller text-primary me-2"></i> Smart home prototypes & automation</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Why Join the Club -->
                    <div class="row mb-5">
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                            <h4 class="text-primary mb-3">Why Join the Coding & Robotics Club?</h4>
                            <p>By participating in the club, students unlock a world of innovation and tech possibilities:</p>
                            <ul>
                                <li><i class="bi bi-lightbulb-fill text-primary me-2"></i> Improve logic and problem-solving skills</li>
                                <li><i class="bi bi-award-fill text-primary me-2"></i> Compete in national & international tech competitions</li>
                                <li><i class="bi bi-globe text-primary me-2"></i> Prepare for tech-driven careers of the future</li>
                                <li><i class="bi bi-person-check-fill text-primary me-2"></i> Boost confidence, creativity, and teamwork</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Success Stories -->
                    <div class="row mb-5">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                            <img class="img-fluid rounded shadow-sm" src="<?php echo get_template_directory_uri(); ?>/images/robotics-success.jpg" alt="Student Success">
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                            <h4 class="text-primary">Student Projects & Achievements</h4>
                            <p>Our students have built everything from simple calculators to intelligent robots. Their creativity knows no bounds, and their projects reflect real-world applications of STEM education.</p>

                            <p><strong>Recent Highlight:</strong> In our very first participation in the global <strong>Codeavour 6.0 AI and Robotics Competition</strong>, our Coding & Robotics Club students successfully qualified for the international level — a testament to their passion, innovation, and teamwork. Competing among thousands of teams globally, they showcased a brilliant AI-powered project that impressed judges and brought pride to Arndale Academy.</p>

                            <p>From solar-powered vehicles to AI-based attendance systems, the club is where innovation is nurtured, and future tech leaders are born.</p>
                        </div>
                    </div>


                    <!-- Call to Action -->
                    <div class="text-center mt-5">
                        <h5 class="mb-3">Want your child to become a tech innovator?</h5>
                        <a href="<?php echo site_url('/contact'); ?>" class="btn btn-primary px-4 py-3">Enroll Now</a>
                    </div>
                </div>
            </div>

            <?php
        } elseif (is_page('Drama')) {
            ?>
            <div class="container-xxl py-5 drama-section">
                <div class="container">
                    <!-- Section Header -->
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Creative Arts</h6>
                        <h1 class="mb-4">Drama Program at Arndale Academy</h1>
                        <p class="lead">Empowering students with confidence, creativity, and expression through performing arts.</p>
                    </div>

                    <!-- Main Content -->
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/drama-stage.jpg" alt="Drama at Arndale">
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.6s">
                            <p class="mb-4">
                                At Arndale Academy, our Drama Program is more than just theatre—it’s a platform for students to explore creativity, self-expression, and teamwork. Through rehearsals, stage performance, script writing, and improvisation, our students learn confidence, communication, and critical thinking.
                            </p>
                            <p class="mb-4">
                                Whether acting on stage, working behind the scenes, or scripting original plays, every learner is empowered to shine. Our annual school productions, talent shows, and inter-school drama festivals create exciting avenues for artistic growth.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Stage performance and public speaking training</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Script writing and drama critique sessions</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Participation in drama festivals and cultural day</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Collaboration with Art and Music departments</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Highlight Section -->
                    <div class="row g-5 mt-5">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="highlight">
                                <h4 class="mb-3">Why Drama Matters</h4>
                                <p>Drama at Arndale helps build emotional intelligence, empathy, and self-esteem. It equips students to express themselves clearly and confidently, preparing them for leadership and collaborative roles in any career path.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials -->
                    <div class="row g-4 mt-5 drama-testimonials">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <blockquote>
                                “My child used to be shy, but since joining the Drama Club, she’s blossomed into a confident performer!”<br>
                                <footer class="blockquote-footer">Parent of a Year 7 student</footer>
                            </blockquote>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <blockquote>
                                “The Arndale drama performance was spectacular! The students delivered with passion and professionalism.”<br>
                                <footer class="blockquote-footer">Guest at Cultural Day</footer>
                            </blockquote>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="text-center mt-5">
                        <h4 class="mb-3">Discover More Beyond the Stage</h4>
                        <a href="<?php echo site_url('/contact'); ?>" class="btn btn-outline-primary px-4 py-3">Join Our Drama Club</a>
                    </div>
                </div>
            </div>

            <?php
        } elseif (is_page('Extra-curricular')) {
            ?>
                <div class="container-xxl py-5 extra-curricular-page">
                    <div class="container">
                        <div class="text-center mb-5">
                            <h6 class="section-title bg-white text-primary px-3">Beyond the Classroom</h6>
                            <h1 class="mb-4">Extra-Curricular Activities</h1>
                            <p class="lead">We nurture holistic growth through diverse clubs and activities.</p>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <ul>
                                    <li>Robotics & Coding Club</li>
                                    <li>Drama & Performing Arts</li>
                                    <li>Music & Choir</li>
                                    <li>Young Farmers Club</li>
                                    <li>Arndale Red Cross Youth</li>
                                    <li>Sports & Athletics</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/extracurricular.jpg" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        } elseif (is_page('Downloads')) {
            ?>
            <div class="container-xxl py-5 downloads-section">
                <div class="container">
                    <!-- Section Header -->
                    <div class="text-center mb-5">
                    <h6 class="section-title bg-white text-primary px-3">Resources</h6>
                    <h1 class="mb-4">Downloads</h1>
                    <p class="lead">Access important forms, prospectus, policies, and e-learning materials.</p>
                    </div>

                    <!-- Download Blocks -->
                    <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="p-4 bg-light rounded h-100 download-item">
                        <i class="bi bi-file-earmark-pdf-fill text-primary display-6 mb-3"></i>
                        <h5>School Prospectus</h5>
                        <p>Get our latest prospectus with curriculum overviews and admission guidelines.</p>
                        <a href="<?php echo get_template_directory_uri(); ?>/downloads/Arndale-Prospectus.pdf" class="btn btn-outline-primary mt-2" download>Download PDF</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="p-4 bg-light rounded h-100 download-item">
                        <i class="bi bi-file-earmark-spreadsheet-fill text-primary display-6 mb-3"></i>
                        <h5>Term Calendar</h5>
                        <p>View or print the full academic calendar for the 2024–2025 session.</p>
                        <a href="<?php echo get_template_directory_uri(); ?>/downloads/Autumn-Calendar-2024.pdf" class="btn btn-outline-primary mt-2" download>Download PDF</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="p-4 bg-light rounded h-100 download-item">
                        <i class="bi bi-file-earmark-word-fill text-primary display-6 mb-3"></i>
                        <h5>Admission Form</h5>
                        <p>Complete our admission application form and submit it online or in person.</p>
                        <a href="<?php echo get_template_directory_uri(); ?>/downloads/Admission-Form.docx" class="btn btn-outline-primary mt-2" download>Download DOCX</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="p-4 bg-light rounded h-100 download-item">
                        <i class="bi bi-file-earmark-zip-fill text-primary display-6 mb-3"></i>
                        <h5>E-Learning Resources</h5>
                        <p>Download sample lesson plans, worksheets, and digital activities.</p>
                        <a href="<?php echo get_template_directory_uri(); ?>/downloads/E-learning-Pack.zip" class="btn btn-outline-primary mt-2" download>Download ZIP</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="p-4 bg-light rounded h-100 download-item">
                        <i class="bi bi-shield-lock-fill text-primary display-6 mb-3"></i>
                        <h5>School Policies</h5>
                        <p>Review our safeguarding, ICT, and exam regulations.</p>
                        <a href="<?php echo get_template_directory_uri(); ?>/downloads/Policies.pdf" class="btn btn-outline-primary mt-2" download>Download PDF</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="1.1s">
                        <div class="p-4 bg-light rounded h-100 download-item">
                        <i class="bi bi-file-earmark-text-fill text-primary display-6 mb-3"></i>
                        <h5>Parent Handbook</h5>
                        <p>Everything parents need to know about our daily routines and partnerships.</p>
                        <a href="<?php echo get_template_directory_uri(); ?>/downloads/Parent-Handbook.pdf" class="btn btn-outline-primary mt-2" download>Download PDF</a>
                        </div>
                    </div>
                    </div>

                    <!-- More Info / CTA -->
                    <div class="text-center mt-5 wow fadeInUp" data-wow-delay="1.3s">
                    <h4 class="mb-3">Need a resource that’s not listed?</h4>
                    <a href="<?php echo site_url('/contact'); ?>" class="btn btn-outline-primary px-4 py-3">Get in Touch</a>
                    </div>
                </div>
                </div>
            <?php
        } elseif (is_page('Founder\'s Day')) {
            ?>
            <div class="container-xxl py-5 founders-day-page">
                <div class="container">
                    <!-- Header -->
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Legacy & Celebration</h6>
                        <h1 class="mb-4">Founder's Day at Arndale Academy</h1>
                        <p class="lead">Honoring our roots, celebrating our vision, and inspiring the future.</p>
                    </div>

                    <!-- Intro Content -->
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/founders-day.jpg" alt="Founder's Day Celebration">
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                            <p class="mb-4">
                                Founder's Day at Arndale Academy is a remarkable annual event that brings the entire school community together to honor the visionary who laid the foundation of our great institution. It is a time to reflect on our journey, celebrate our achievements, and renew our commitment to excellence.
                            </p>
                            <p class="mb-4">
                                This special day is marked by inspiring speeches, cultural performances, exhibitions, and awards that highlight our students' talents, creativity, and leadership. It's more than a celebration—it's a legacy of purpose and passion.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Keynote Address by Founding Members</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Academic & Cultural Showcases</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Students’ Innovation Exhibition</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Awards & Recognition Ceremony</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Quote Section -->
                    <div class="mt-5 text-center wow fadeInUp" data-wow-delay="0.5s">
                        <blockquote class="blockquote">
                            <p class="mb-4 fst-italic">"Education is the most powerful weapon which you can use to change the world."</p>
                            <footer class="blockquote-footer">Our Founding Philosophy</footer>
                        </blockquote>
                    </div>

                    <!-- Memories Section -->
                    <div class="mt-5 wow fadeInUp" data-wow-delay="0.6s">
                        <h3 class="text-center mb-4">Memories from Past Celebrations</h3>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/founders-gallery1.jpg" class="img-fluid rounded" alt="Event photo">
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/founders-gallery2.jpg" class="img-fluid rounded" alt="Students presenting">
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/founders-gallery3.jpg" class="img-fluid rounded" alt="Award ceremony">
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.7s">
                        <h4 class="mb-3">Join us in honoring our past and shaping the future.</h4>
                        <a href="<?php echo site_url('/contact'); ?>" class="btn btn-primary px-4 py-3">Get Involved</a>
                    </div>
                </div>
            </div>
            <?php
        } elseif (is_page('Our Team')) {
            ?>
            <div class="container-xxl py-5 team-page">
                <div class="container">
                    <!-- Section Header -->
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Meet Our Team</h6>
                        <h1 class="mb-4">Leadership & Faculty</h1>
                        <p class="lead">Dedicated professionals who make Arndale Academy a hub of excellence in education.</p>
                    </div>

                    <!-- Team Members Grid -->
                    <div class="row g-4">
                        <!-- Principal -->
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item bg-light rounded text-center">
                                <img class="img-fluid rounded-top" src="<?php echo get_template_directory_uri(); ?>/images/principal.png" alt="Principal">
                                <div class="p-4">
                                    <h5 class="mb-1">Ahmed Olayiwola Abdulkareem</h5>
                                    <small>Principal</small>
                                    <div class="mt-3">
                                        <a href="#" class="btn btn-outline-primary btn-sm-square mx-1"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="btn btn-outline-primary btn-sm-square mx-1"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="btn btn-outline-primary btn-sm-square mx-1"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Vice Principal (Admin) -->
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-item bg-light rounded text-center">
                                <img class="img-fluid rounded-top" src="<?php echo get_template_directory_uri(); ?>/images/Ms-Safiya.png" alt="VP Admin">
                                <div class="p-4">
                                    <h5 class="mb-1">Ibrahim Safiyat</h5>
                                    <small>Vice Principal (Administrative)</small>
                                </div>
                            </div>
                        </div>

                        <!-- Vice Principal (Academics) -->
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item bg-light rounded text-center">
                                <img class="img-fluid rounded-top" src="<?php echo get_template_directory_uri(); ?>/images/Mr-Vincent.png" alt="VP Academics">
                                <div class="p-4">
                                    <h5 class="mb-1">Eze Vincent</h5>
                                    <small>Vice Principal (Academics)</small>
                                </div>
                            </div>
                        </div>

                        <!-- VP Operations -->
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="team-item bg-light rounded text-center">
                                <img class="img-fluid rounded-top" src="<?php echo get_template_directory_uri(); ?>/images/EKPETI.png" alt="VP Operations">
                                <div class="p-4">
                                    <h5 class="mb-1">Theresa Ekpeti</h5>
                                    <small>Vice Principal (Operations)</small>
                                </div>
                            </div>
                        </div>

                        <!-- Head Teacher Primary -->
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item bg-light rounded text-center">
                                <img class="img-fluid rounded-top" src="<?php echo get_template_directory_uri(); ?>/images/Ms-Reng.jpeg" alt="Head Teacher">
                                <div class="p-4">
                                    <h5 class="mb-1">Temidayo Reng</h5>
                                    <small>Head Teacher (Primary)</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="text-center mt-5">
                        <h4 class="mb-3">Join our team of passionate educators shaping tomorrow’s leaders.</h4>
                        <a href="<?php echo site_url('/work-in-arndale'); ?>" class="btn btn-primary px-4 py-3">Work With Us</a>
                    </div>
                </div>
            </div>
            <?php
        } elseif (is_page('Principal\'s Message')) {
            ?>
            <div class="container-xxl py-5 principal-message-page">
                <div class="container">
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Leadership</h6>
                        <h1 class="mb-4">Principal's Welcome Message</h1>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-md-4 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/principal.png" class="img-fluid rounded-circle border" alt="Principal" style="width: 250px;">
                            <h5 class="mt-3">Ahmed Olayiwola Abdulkareem</h5>
                            <small>Principal</small>
                        </div>
                        <div class="col-md-8">
                            <p>Welcome to Arndale Academy, where excellence meets purpose. We are committed to nurturing each student’s potential academically, socially, and morally. Our approach blends global best practices with strong community values, preparing learners to thrive in a fast-evolving world.</p>
                            <p>We invite you to explore our programs, meet our passionate educators, and discover the Arndale experience.</p>
                            <strong>Thank you for trusting us with your child's future.</strong>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        } elseif (is_page('School Safety & Security')) {
            ?>
            <div class="container-xxl py-5 safety-page">
                <div class="container">
                    <!-- Section Header -->
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">School Safety</h6>
                        <h1 class="mb-4">Safety & Security at Arndale Academy</h1>
                        <p class="lead">Your child's safety is our top priority. We create an environment where students can learn and thrive with peace of mind.</p>
                    </div>

                    <!-- Main Content -->
                    <div class="row g-5 align-items-start">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/safety.png" alt="Safety at Arndale">
                        </div>

                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                            <h4>Our Approach to Safety</h4>
                            <p>
                                At Arndale Academy, we maintain a robust safety and security system to protect students, staff, and visitors. Our campus is designed with the latest protocols to handle emergencies, prevent intrusions, and foster health and wellbeing.
                            </p>

                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> 24/7 CCTV surveillance across the school premises</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Professional security personnel at all gates</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Well-defined visitor management and check-in system</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Emergency response training for staff and students</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Fire extinguishers and alarm systems in all key locations</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Safe and monitored pick-up/drop-off zones</li>
                            </ul>
                        </div>
                    </div>

                    <!-- More Details -->
                    <div class="row mt-5 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="col-lg-12">
                            <h4>Health & Emergency Preparedness</h4>
                            <p>
                                Beyond physical security, we also care deeply about students' health and emotional wellbeing. Arndale Academy has an on-site clinic staffed with qualified medical personnel to handle daily health concerns and emergencies.
                            </p>

                            <p>
                                We regularly conduct fire drills, health inspections, and safety awareness programs for both staff and students. Our goal is to build a school culture where everyone feels safe, heard, and protected.
                            </p>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="text-center mt-5">
                        <h5>Would you like to know more about our safety procedures or visit the school?</h5>
                        <a href="<?php echo site_url('/contact'); ?>" class="btn btn-outline-primary px-4 py-3 mt-2">Contact Us</a>
                    </div>
                </div>
            </div>
            <?php
        } elseif (is_page('Sport at Arndale')) {
            ?>
            <div class="container-xxl py-5 sport-page">
                <div class="container">
                    <!-- Section Header -->
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Student Life</h6>
                        <h1 class="mb-4">Sport at Arndale</h1>
                        <p class="lead">We believe in the power of sports to build character, discipline, and team spirit in every learner.</p>
                    </div>

                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/sport1.jpg" alt="Sport at Arndale">
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                            <h4>Physical Education & Fitness</h4>
                            <p>
                                At Arndale Academy, sports and physical development are key components of our holistic education approach. Our Physical Education program encourages students to stay active, develop motor skills, and understand the importance of fitness and healthy living.
                            </p>
                            <p>
                                We offer a wide range of sporting activities and facilities, giving students the opportunity to explore their interests and talents through structured programs.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Weekly Physical Education classes across all grades</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Trained coaches for football, athletics, and more</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Dedicated sports field and indoor facilities</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Regular Inter-House Sports Competitions</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Participation in local and national tournaments</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Sports Gallery or Highlights -->
                    <div class="row mt-5 g-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="col-lg-4 col-md-6">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/sport2.jpg" alt="Football">
                            <h6 class="mt-2">Football & Team Games</h6>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/sport3.jpg" alt="Athletics">
                            <h6 class="mt-2">Athletics & Track Events</h6>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/sport4.jpg" alt="Fitness Training">
                            <h6 class="mt-2">Fitness Training & PE</h6>
                        </div>
                    </div>

                    <!-- Closing Message -->
                    <div class="text-center mt-5">
                        <h5>We nurture sportsmanship, leadership, and self-confidence through active participation.</h5>
                        <a href="<?php echo site_url('/contact'); ?>" class="btn btn-outline-primary px-4 py-3 mt-2">Get in Touch</a>
                    </div>
                </div>
            </div>
            <?php
        } elseif (is_page('Online Safety')) {
            ?>
            <div class="container-xxl py-5 online-safety-page">
                <div class="container">
                    <!-- Section Header -->
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Students' Life</h6>
                        <h1 class="mb-4">Online Safety</h1>
                        <p class="lead">Promoting responsible digital citizenship and safeguarding students in the digital world.</p>
                    </div>

                    <!-- Content Row -->
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/online-safety.jpg" alt="Online Safety at Arndale">
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                            <h4>Creating Safe Digital Experiences</h4>
                            <p>
                                At Arndale Academy, we prioritize digital safety and teach students how to interact responsibly, respectfully, and securely online. As technology continues to shape learning and communication, our goal is to empower students with the knowledge and skills they need to navigate the internet confidently and safely.
                            </p>
                            <p>
                                Through guided lessons, parent engagement, and secure IT policies, we cultivate an environment that supports online responsibility and well-being.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Age-appropriate online safety education</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Cyberbullying awareness and prevention</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Screen-time balance and healthy tech habits</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Internet filtering and device monitoring</li>
                                <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Collaboration with parents on safe digital use</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Awareness Section -->
                    <div class="row mt-5 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="col-lg-12">
                            <h4 class="text-center mb-4">Key Areas of Focus</h4>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="p-4 bg-light rounded h-100">
                                        <h5>Digital Citizenship</h5>
                                        <p>Students learn to engage ethically and respectfully online—understanding their rights and responsibilities as digital citizens.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light rounded h-100">
                                        <h5>Safe Browsing & Privacy</h5>
                                        <p>We educate students on data protection, strong passwords, and how to recognize online threats like phishing and scams.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light rounded h-100">
                                        <h5>Parental Involvement</h5>
                                        <p>We partner with parents through workshops and newsletters to reinforce online safety habits at home.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="text-center mt-5">
                        <h5 class="mb-3">Join us in building a safe and informed digital generation.</h5>
                        <a href="<?php echo site_url('/contact'); ?>" class="btn btn-outline-primary px-4 py-3">Contact Us</a>
                    </div>
                </div>
            </div>
            <?php
        } elseif (is_page('Duke of Edinburgh Int\'l Award')) {
            ?>
            <div class="container-xxl py-5 dofe-page">
                <div class="container">
                    <!-- Section Header -->
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Global Recognition</h6>
                        <h1 class="mb-4">Duke of Edinburgh Int’l Award</h1>
                        <p class="lead">Empowering Arndale students to discover their purpose, passion, and place in the world through non-formal education.</p>
                    </div>

                    <!-- Introduction -->
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/dofe.jpg" alt="Duke of Edinburgh Award at Arndale">
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.6s">
                            <p>
                                The <strong>Duke of Edinburgh’s International Award</strong> is a globally recognized framework for non-formal education, available to young people aged 14 to 24. At Arndale Academy, we proudly offer this transformative program, guiding our students to develop essential life skills, resilience, and a sense of community responsibility.
                            </p>
                            <p>
                                Through the Award, students engage in a personalized journey, setting their own goals across various activities, fostering growth beyond the classroom.
                            </p>
                            <a href="<?php echo site_url('/contact'); ?>" class="btn btn-primary py-3 px-5 mt-3">Join the Program</a>
                        </div>
                    </div>

                    <!-- Award Framework -->
                    <div class="row g-5 mt-5">
                        <div class="col-lg-12">
                            <h3 class="mb-4 text-center">Award Structure</h3>
                            <p>
                                Participants progress through three levels—Bronze, Silver, and Gold—each requiring a commitment to four core sections:
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle text-primary me-2"></i> <strong>Voluntary Service:</strong> Encouraging students to give back to their communities.</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> <strong>Physical Recreation:</strong> Promoting health and fitness through physical activities.</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> <strong>Skills:</strong> Developing practical and social skills for personal interests.</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> <strong>Adventurous Journey:</strong> Planning and undertaking a journey to foster teamwork and resilience.</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> <strong>Residential Project (Gold level only):</strong> Engaging in a purposeful experience with people not previously known to the participant.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Impact Section -->
                    <div class="row mt-5">
                        <div class="col-lg-12 text-center">
                            <h3 class="mb-4">Why Participate?</h3>
                            <p>
                                Participation in the Award equips Arndale students with:
                            </p>
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="p-4 bg-light rounded h-100">
                                        <h5>Personal Growth</h5>
                                        <p>Enhancing self-confidence, resilience, and adaptability.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light rounded h-100">
                                        <h5>Skill Development</h5>
                                        <p>Building communication, problem-solving, and leadership skills.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-4 bg-light rounded h-100">
                                        <h5>Global Recognition</h5>
                                        <p>Achieving an internationally acknowledged certification that enhances university and job applications.</p>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo site_url('/admission'); ?>" class="btn btn-outline-primary mt-4 px-4 py-3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        } elseif (is_page('Swimming Programme')) {
            ?>
            <h1 class="text-center mb-4">Swimming Programme</h1>
                <div class="container-xxl py-5 swimming-content">
                    <div class="container">
                        <div class="row g-5 align-items-center">
                            <!-- Image Section -->
                            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
                                <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/swimming.jpg" alt="Swimming at Arndale">
                            </div>
                            
                            <!-- Content Section -->
                            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.6s">
                                <p class="mb-4">
                                    At <strong>Arndale Academy</strong>, our swimming programme is an integral part of our commitment to holistic child development. We believe that swimming not only promotes physical fitness but also builds self-confidence, discipline, and life-saving skills.
                                </p>
                                <p class="mb-4">
                                    Our state-of-the-art swimming facility provides students with the opportunity to learn and master water safety, stroke techniques, and endurance swimming in a safe and supervised environment.
                                </p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Weekly swimming lessons for all primary and secondary students</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Certified swimming instructors and lifeguards</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Competitive training for inter-school and national events</li>
                                    <li><i class="bi bi-check-circle text-primary me-2"></i> Emphasis on safety, fun, and skill-building</li>
                                </ul>
                                <a href="<?php echo site_url('/contact'); ?>" class="btn btn-primary mt-3 px-4 py-2">Learn More</a>
                            </div>
                        </div>

                        <!-- Extended Info Section -->
                        <div class="row mt-5 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="col-lg-12">
                                <h3 class="mb-3">Why Swimming Matters</h3>
                                <p>
                                    Swimming is more than just a sport at Arndale Academy – it’s a key life skill. Through our programme, students gain resilience, improve coordination, and learn the importance of perseverance and teamwork.
                                </p>
                                <p>
                                    Our swimming sessions are incorporated into the physical education curriculum and provide opportunities for both beginners and advanced swimmers to improve their skills progressively.
                                </p>
                                <p>
                                    Whether for fitness, competition, or recreation, the swimming programme at Arndale Academy ensures every child feels confident and safe in and around water.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        } elseif (is_page('International Learning')) {
            ?>
            <div class="container-xxl py-5 international-learning">
                <div class="container">
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Global Education</h6>
                        <h1 class="mb-4">International Learning at Arndale</h1>
                        <p class="lead">Preparing our students for a global future through cross-cultural education and international standards.</p>
                    </div>
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <p>At Arndale Academy, we recognize the importance of a globally relevant education. Our international learning programs are designed to equip students with the knowledge, skills, and mindset to thrive in an interconnected world.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Blended Nigerian-British curriculum with IGCSE pathway</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Cultural exchange and virtual learning with global schools</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Curriculum aligned with UN Sustainable Development Goals</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/international-learning.jpg" alt="International Learning">
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } elseif (is_page('Farm at Arndale')) {
            ?>
            <div class="container-xxl py-5 arndale-farm">
                <div class="container">
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Practical Learning</h6>
                        <h1 class="mb-4">Farm at Arndale Academy</h1>
                        <p class="lead">Empowering students with hands-on agricultural experience to promote sustainability and food security.</p>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/farm.jpg" alt="Arndale Farm">
                        </div>
                        <div class="col-lg-6">
                            <p>The Arndale Farm initiative is a unique feature of our school where students engage in cultivating crops and raising animals. It teaches them responsibility, eco-consciousness, and the basics of agricultural science.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Agricultural science taught through real-life farming</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Students learn planting, irrigation, and sustainability</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Produce is used for learning and school community benefit</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } elseif (is_page('Safeguarding')) {
            ?>
            <div class="container-xxl py-5 safeguarding-page">
                <div class="container">
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Safeguarding</h6>
                        <h1 class="mb-4">Our Commitment to Child Safety</h1>
                        <p class="lead">At Arndale Academy, safeguarding our students is our top priority.</p>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6">
                            <h4>What We Do</h4>
                            <ul>
                                <li>Background checks for all staff</li>
                                <li>Mandatory safeguarding training</li>
                                <li>Secure school environment with CCTV</li>
                                <li>Open-door policy for parents and guardians</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4>Reporting Concerns</h4>
                            <p>We have a clear procedure for reporting concerns and protecting our students. If you have a concern, please contact our designated safeguarding officer:</p>
                            <p><strong>Email:</strong> safeguarding@arndaleacademy.com<br>
                            <strong>Phone:</strong> +234 816 665 6369</p>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        } elseif (is_page('Red Cross +')) {
            ?>
            <div class="container-xxl py-5 redcross-program">
                <div class="container">
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Service & Humanity</h6>
                        <h1 class="mb-4">Red Cross + Program</h1>
                        <p class="lead">Promoting empathy, leadership, and humanitarian service among our students.</p>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <p>The Red Cross + program at Arndale Academy engages students in activities that build their social responsibility and commitment to helping others.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle text-primary me-2"></i> First aid training and disaster response education</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Health campaigns and outreach projects</li>
                                <li><i class="bi bi-check-circle text-primary me-2"></i> Leadership and community service development</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/images/redcross.jpg" alt="Red Cross Program">
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } elseif (is_page('Entrance Exams')) {
            ?>
            <div class="container-xxl py-5 entrance-exams">
                <div class="container">
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Admissions</h6>
                        <h1 class="mb-4">Entrance Examinations</h1>
                        <p class="lead">Arndale Academy welcomes new students through structured entrance examinations and interviews.</p>
                    </div>
                    <p>Our entrance exams are designed to assess a student's readiness for the Arndale academic environment. These assessments help us place each child in the class level that best suits their strengths and needs.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle text-primary me-2"></i> Exams for Primary and Secondary admissions</li>
                        <li><i class="bi bi-check-circle text-primary me-2"></i> Covers Mathematics, English, and General Knowledge</li>
                        <li><i class="bi bi-check-circle text-primary me-2"></i> Results communicated within one week of the test</li>
                    </ul>
                    <p><strong>Upcoming Dates:</strong> May 17th, May 31st, and June 14th.</p>
                </div>
            </div>
            <?php
        } elseif (is_page('Virtual tour')) {
            ?>
            <div class="container-xxl py-5 virtual-tour">
                <div class="container">
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Virtual Tour</h6>
                        <h1 class="mb-4">Experience Arndale From Anywhere</h1>
                        <p class="lead">Take a virtual tour and explore our world-class facilities and vibrant learning environment online.</p>
                    </div>
                    <div class="text-center">
                        <iframe width="100%" height="480" src="https://www.youtube.com/embed/PJPtl03iKDM?si=w6aK40QyfkBbEwm_" title="Virtual Tour" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <?php
        } elseif (is_page('Work in Arndale')) {
            ?>
            <div class="container-xxl py-5 careers">
                <div class="container">
                    <div class="text-center mb-5">
                    <h6 class="section-title bg-white text-primary px-3">Careers</h6>
                    <h1 class="text-center mb-4">Work in Arndale</h1>
                    <div class="container-xxl py-5 work-content">
                        <div class="container">
                            <div class="text-center mb-4">
                                <p class="lead">Join a vibrant team of educators, innovators, and administrators shaping tomorrow's leaders at Arndale Academy.</p>
                            </div>
                            <p>At Arndale Academy, we value creativity, innovation, and dedication. If you're passionate about education and want to make a difference, we invite you to explore career opportunities with us.</p>

                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <h4>Apply Now</h4>
                                    <p>Submit your CV, cover letter, and relevant credentials to:</p>
                                    <p><strong>Email:</strong> <a href="mailto:hr@arndaleacademy.com">hr@arndaleacademy.com</a></p>

                                    <!-- OPTIONAL: Simple file upload form (needs backend handler) -->
                                    <form method="post" enctype="multipart/form-data" action="#">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" name="full_name" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Upload Resume/CV (PDF, DOCX)</label>
                                            <input type="file" name="cv" class="form-control" accept=".pdf,.doc,.docx" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Application</button>
                                    </form>
                                    <small class="text-muted d-block mt-2">Note: Online submission is optional. You can also email your application documents directly.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php
        } elseif (is_page('Our Policies')) {
            ?>
            <div class="container-xxl py-5 policies">
                <div class="container">
                    <div class="text-center mb-5">
                        <h6 class="section-title bg-white text-primary px-3">Our Principles</h6>
                        <h1 class="mb-4">School Policies</h1>
                        <p class="lead">Arndale Academy operates under clear policies to ensure safety, respect, academic success, and fairness.</p>
                    </div>
                    <p>Our school policies guide our approach to teaching, discipline, and engagement. They are reviewed regularly to reflect best practices in education.</p>
                    <ul class="list-unstyled mb-4">
                        <li><i class="bi bi-check-circle text-primary me-2"></i> Child Protection & Safeguarding Policy</li>
                        <li><i class="bi bi-check-circle text-primary me-2"></i> Code of Conduct and Behavior Policy</li>
                        <li><i class="bi bi-check-circle text-primary me-2"></i> Attendance & Punctuality Policy</li>
                        <li><i class="bi bi-check-circle text-primary me-2"></i> Digital and Online Safety Guidelines</li>
                        <li><i class="bi bi-check-circle text-primary me-2"></i> Parent-School Communication Policy</li>
                    </ul>

                    <div class="text-center">
                        <a href="<?php echo site_url('/Downloads'); ?>" class="btn btn-outline-primary px-4 py-3 mt-2">Learn More About Our Policies</a>
                    </div>
                </div>
            </div>
            <?php
        }
        // Add more pages as needed...

    endwhile;
    ?>
</div>

<?php get_footer(); ?>
