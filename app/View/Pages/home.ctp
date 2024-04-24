<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <div class="row">
            <div class="col-xl-6">
                <?php echo __($Homesection[0]['Homesection']['sections_content']); ?>
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo $students; ?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Student count</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo $exams; ?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Exam count</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo $package_count; ?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Package count</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo $countExamOrder; ?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>News count</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <section id="pricing" class="pricing section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Top Exam Services</h2>

            </div>

            <div class="row">

                <?php if (count($exam_lists) > 0): ?>
                <?php foreach ($exam_lists as $key => $examsss): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="box d-flex flex-column overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex-grow-0 flex-shrink-0">
                            <h3><?php echo $exam_lists[$key]["Exam"]["name"]; ?></h3>
                        </div>
                        <div class="flex-grow-1 flex-shrink-1 h-100 overflow-auto scroll-class">
                            <h4><?php echo $exam_lists[$key]["Exam"]["instruction"]; ?></h4>
                            <h3 class="title instructor-text">
                                <?php echo $exam_lists[$key]["Exam"]["instruction"]; ?>
                            </h3>
                        </div>
                        <div class="flex-grow-0 flex-shrink-0">
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Duration:
                                    <?php echo $exam_lists[$key]["Exam"]["duration"]; ?> Min.</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>
                <?php else: ?>
                <?php echo "No records found"; ?>
                <?php endif; ?>
            </div>

        </div>
    </section><!-- End Pricing Section -->


    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2><?php echo __($Homesection[1]['Homesection']['sections_heading']); ?></h2>
                <p><?php echo __($Homesection[1]['Homesection']['sections_content']) ?></p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php if (count($package_lists) > 0): ?>

                    <?php foreach ($package_lists as $key => $packages):
							$id = $package_lists[$key]["Package"]["id"];
							if (strlen($package_lists[$key]["Package"]["photo"]) > 0) {
								$photo = "img/package/" . $package_lists[$key]["Package"]["photo"];
							} else {
								$photo = "img/nia.png";
							}
							?>

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="presnto-testimonial-item">
                                <a class=""
                                    href="<?php echo $this->Html->url(array('controller' => 'Packages', 'action' => 'singleproduct', $id, Inflector::slug(strtolower($package_lists[$key]["Package"]["name"]), "-"))) ?>">
                                    <img src="<?php echo $photo; ?>" class="testimonial-img" alt="">
                                </a>

                                <h3>
                                    <?php echo $package_lists[$key]["Package"]["name"]; ?>
                                </h3>
                                <?php if ($package_lists[$key]["Package"]["package_type"] == "P"): ?>

                                <h4>$<?php echo $package_lists[$key]["Package"]["show_amount"]; ?></h4>
                                <?php else: ?>
                                <h4>Free</h4>
                                <?php endif; ?>
                                <div style="min-height: 160px; height: 160px; overflow: hidden; width: 100%;">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        <?php echo $package_lists[$key]["Package"]["description"]; ?>
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <?php endforeach; ?>
                    <?php else: ?>
                    <?php echo "No records found"; ?>
                    <?php endif; ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>


    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>

            <ul class="faq-list accordion" data-aos="fade-up">

                <li>
                    <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Non consectetur a erat nam
                        at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                            curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                            non.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Feugiat scelerisque varius
                        morbi enim nunc faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                            laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                            pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                            turpis massa tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Dolor sit amet consectetur
                        adipiscing elit pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                            pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                            tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                            molestie at elementum eu facilisis sed odio morbi quis
                        </p>
                    </div>
                </li>

                <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Ac odio tempor orci dapibus.
                        Aliquam eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                            laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                            pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                            turpis massa tincidunt dui.
                        </p>
                    </div>
                </li>

                <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Tempus quam pellentesque nec
                        nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                            ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                            adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>
                </li>

                <li>
                    <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Tortor vitae purus faucibus
                        ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer
                            malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem
                            dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam
                            volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie
                            nunc non blandit massa enim nec.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </section>

    <section class="section master-skill">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="section-header aos" data-aos="fade-up">
                        <div class="section-sub-head">

                            <h2><?php echo __($Homesection[2]['Homesection']['sections_heading']); ?></h2>
                        </div>
                    </div>
                    <div class="section-text aos" data-aos="fade-up">
                        <p><?php echo __($Homesection[2]['Homesection']['sections_content']) ?>
                        </p>
                    </div>
                    <?php echo __($Homesection[3]['Homesection']['sections_content']) ?>
                </div>
                <div class="col-lg-5 col-md-12 d-flex align-items-end">
                    <div class="career-img aos" data-aos="fade-up">
                        <img src="app/webroot/img/v2/join.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-three">
        <div class="container">
            <div class="testimonial-pattern">
                <img class="pattern-left img-fluid" alt="" src="app/webroot/img/v2/pattern-05.svg">
                <img class="pattern-right img-fluid" alt="" src="app/webroot/img/v2/pattern-06.svg">
            </div>
            <div class="testimonial-three-content">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                        <div class="become-content">
                            <h2 class="aos-init aos-animate">They Trusted us</h2>
                            <h4 class="aos-init aos-animate">We are a very happy because we have a happy
                                customer
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                        <div class="swiper-testimonial-three">
                            <div class="swiper-wrapper">
                                <?php if (count($testimonials) > 0): ?>
                                <?php foreach ($testimonials as $key => $testimonial): ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-item-five">
                                        <div class="testimonial-quote">
                                            <img class="quote img-fluid" alt="" src="app/webroot/img/v2/quote.svg">
                                        </div>
                                        <div class="testimonial-content">
                                            <p><?php echo $testimonials[$key]["Testimonial"]["description"]; ?>
                                            </p>
                                        </div>
                                        <div class="testimonial-users">
                                            <div class="imgbx">
                                                <img class="img-fluid" alt="" src="app/webroot/img/v2/user.png">
                                            </div>
                                            <div class="d-block">
                                                <h6><?php echo $testimonials[$key]["Testimonial"]["name"]; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php endforeach; ?>
                                <?php else: ?>
                                <?php echo "No records found"; ?>
                                <?php endif; ?>
                            </div>
                            <?php if (count($testimonials) > 0): ?>
                            <div class="testimonial-bottom-nav">
                                <div class="slide-next-btn testimonial-next-pre"><i class="fas fa-arrow-left"></i>
                                </div>
                                <div class="slide-prev-btn testimonial-next-pre"><i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">

            <div class="section-title">
                <h2>News & Announcements</h2>

            </div>
            <div class="latest-blog-main">
                <div class="row">
                    <?php if (count($news) > 0): ?>
                    <?php foreach ($news as $key => $new): ?>
                    <div class="col-xl-6 col-lg-12 col-md-12" data-bs-toggle="modal"
                        data-bs-target="#exampleModal<?php echo $news[$key]["News"]["id"]; ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="event-blog-three blog-three-one">
                                    <div class="blog-img-three">
                                        <a href="#">
                                            <img class="img-fluid" alt="" src="app/webroot/img/v2/blog-23.jpg">
                                        </a>
                                    </div>
                                    <div class="latest-blog-content">
                                        <div class="event-three-title">
                                            <a>
                                                <h5><?php echo $news[$key]["News"]["news_title"]; ?>
                                                </h5>
                                                <p><?php echo $news[$key]["News"]["news_desc"]; ?>
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $news[$key]["News"]["id"]; ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <?php echo $news[$key]["News"]["news_title"]; ?>
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php echo $news[$key]["News"]["news_desc"]; ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <?php echo "No records found"; ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </section>
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Top Students</h2>

            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                    sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->



</main><!-- End #main -->
