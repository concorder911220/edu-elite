<section class="home-slide d-flex align-items-center">
	<div class="container">
		<div class="row ">
			<div class="col-md-7">
				<div class="home-slide-face aos" data-aos="fade-up">
					<?php echo __($Homesection[0]['Homesection']['sections_content']); ?>
				</div>
			</div>
			<div class="col-md-5 d-flex align-items-center">
				<div class="girl-slide-img aos" data-aos="fade-up">
					<img src="<?php echo $this->webroot; ?>img/tab/<?php echo $Homesection[0]['Homesection']['sections_img'] ?>"
						alt="">
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
									<img src="app/webroot/img/v2/pencil-icon.svg" alt="">
								</div>
								<div class="course-inner-content">
									<h4><?php echo $students; ?></h4>
									<p>Student count</p>
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
									<img src="app/webroot/img/v2/cources-icon.svg" alt="">
								</div>
								<div class="course-inner-content">
									<h4><?php echo $exams; ?></h4>
									<p>Exam count</p>
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
									<img src="app/webroot/img/v2/certificate-icon.svg" alt="">
								</div>
								<div class="course-inner-content">
									<h4><?php echo $package_count; ?></h4>
									<p>Package count</p>
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
									<img src="app/webroot/img/v2/gratuate-icon.svg" alt="">
								</div>
								<div class="course-inner-content">
									<h4><?php echo $countExamOrder; ?></h4>
									<p>News count</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="home-three mt-4">
	<section class="home-three-trending">
		<div class="container">
			<div class="row">
				<div class="home-three-head section-header-title" data-aos="fade-up">
					<div class="row align-items-center d-flex justify-content-between">
						<div class="col-lg-12">
							<h2>Top Exam Services</h2>
						</div>
					</div>
				</div>
				<div class="owl-carousel home-three-trending-course owl-theme" data-aos="fade-up">
					<?php if (count($exam_lists) > 0): ?>
				   	<?php foreach ($exam_lists as $key => $examsss): ?>
						  <div class="trending-three-item">
							  <div class="trending-three-item">
								  <div class="trending-content-top trending-bg-one">
									  <div class="course-title-one">
										  <a href="#"><?php echo $exam_lists[$key]["Exam"]["name"]; ?></a>
									  </div>
									  <div class="trending-three-text">
										  <a href="#">
											  <h3 class="title instructor-text">
										  		<?php echo $exam_lists[$key]["Exam"]["instruction"]; ?>
											  </h3>
											  <p><?php echo $exam_lists[$key]["Exam"]["syllabus"]; ?></p>
										  </a>
									  </div>
								  </div>
								  <div class="trending-content-footer">
									  <div class="trending-price-group d-flex align-items-center justify-content-between">
										  <div class="trending-group-view">
											  <div class="trending-price-three">
												  <h3>Duration: <?php echo $exam_lists[$key]["Exam"]["duration"]; ?> Min.</h3>
											  </div>
										  </div>
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
</div>
<section class="section trend-course">
	<div class="container">
		<div class="section-header aos" data-aos="fade-up">
			<div class="section-sub-head">

				<h2><?php echo __($Homesection[1]['Homesection']['sections_heading']); ?></h2>
			</div>
			<div class="all-btn all-category d-flex align-items-center">
				<a href="/Packages/index/index" class="btn btn-primary see-btn">All packages</a>
			</div>
		</div>
		<div class="section-text aos" data-aos="fade-up">
			<p class="mb-0"><?php echo __($Homesection[1]['Homesection']['sections_content']) ?>
			</p>
		</div>
		<div class="owl-carousel trending-course owl-theme aos" data-aos="fade-up">
			<?php if (count($package_lists) > 0): ?>
		   	<?php foreach ($package_lists as $key => $packages):
				   $id = $package_lists[$key]["Package"]["id"];
				   if (strlen($package_lists[$key]["Package"]["photo"]) > 0) {
					   $photo = "package/" . $package_lists[$key]["Package"]["photo"];
				   } else {
					   $photo = "app/webroot/img/nia.png";
				   }
				   ?>
				  <div class="course-box trend-box">
					  <div class="product trend-product">
						  <div class="product-img">
							  <a class=""
								  href="<?php echo $this->Html->url(array('controller' => 'Packages', 'action' => 'singleproduct', $id, Inflector::slug(strtolower($package_lists[$key]["Package"]["name"]), "-"))) ?>">
						  		<?php echo $this->Html->image(
								  	$photo,
								  	array(
								  		'alt' => h($package_lists[$key]["Package"]["name"]),
								  		'class' => '
																							                                    group list-group-image PackageImg'
								  	)
								  ); ?>
							  </a>
					  		<?php if ($package_lists[$key]["Package"]["package_type"] == "P"): ?>
								 <div class="price">
									 <h3>$<?php echo $package_lists[$key]["Package"]["show_amount"]; ?></h3>
								 </div>
					  		<?php endif; ?>
						  </div>
						  <div class="product-content">
							  <div class="course-group d-flex">
								  <div class="course-group-img d-flex">
									  <a
										  href="<?php echo $this->Html->url(array('controller' => 'Packages', 'action' => 'singleproduct', $id, Inflector::slug(strtolower($package_lists[$key]["Package"]["name"]), "-"))) ?>"><img
											  src="app/webroot/img/v2/user.png" alt="" class="img-fluid"></a>
									  <div class="course-name">
										  <h4><a
												  href="<?php echo $this->Html->url(array('controller' => 'Packages', 'action' => 'singleproduct', $id, Inflector::slug(strtolower($package_lists[$key]["Package"]["name"]), "-"))) ?>"><?php echo $package_lists[$key]["Package"]["name"]; ?></a>
										  </h4>
										  <!-- <p><?php echo $package_lists[$key]["Package"]["amount"]; ?></p> -->
									  </div>
								  </div>
							  </div>
							  <h3 class="title"><a
									  href="<?php echo $this->Html->url(array('controller' => 'Packages', 'action' => 'singleproduct', $id, Inflector::slug(strtolower($package_lists[$key]["Package"]["name"]), "-"))) ?>"><?php echo $package_lists[$key]["Package"]["description"]; ?></a>
							  </h3>
							  <div class="course-info d-flex align-items-center">
								  <div class="rating-img d-flex align-items-center">
									  <p><b>Project Type:</b>
								  		<?php echo ($package_lists[$key]["Package"]["package_type"] == "P" ? "Paid" : "Free"); ?>
									  </p>
								  </div>
								  <div class="course-view d-flex align-items-center">
									  <p><b>Expired Days:</b>
								  		<?php echo $package_lists[$key]["Package"]["expiry_days"] ? $package_lists[$key]["Package"]["expiry_days"] : 0; ?>
									  </p>
								  </div>
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
<div class="home-two mt-4">
	<section class="testimonial-sec">
		<div class="container">
			<div class="testimonial-two-img">
				<img src="app/webroot/img/v2/map-user.png" alt="" class="img-fluid">
			</div>
			<div class="testimonial-subhead-two">
				<div class="row justify-content-center">
					<div class="col-xl-8 col-lg-10 col-md-10 mx-auto" data-aos="fade-down">
						<div class="testimonial-inner">
							<div class="header-two-title testimonial-head-two text-center">
								<h2 data-aos="fade-down">
									<?php echo __($Homesection[4]['Homesection']['sections_heading']); ?>
								</h2>
								<div class="header-two-text text-center">
									<p><?php echo __($Homesection[4]['Homesection']['sections_content']) ?>
									</p>
								</div>
							</div>
							<div class="row text-center">
								<div class="col-md-4 col-sm-12" data-aos="fade-up">
									<div class="course-count-two course-count">
										<h3><span class="counterUp text-orange"><?php echo $students; ?></span></h3>
										<h4>Students Enrolled</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-12" data-aos="fade-up">
									<div class="course-count-two  course-count">
										<h3><span class="counterUp text-green"><?php echo $exams; ?></span></h3>
										<h4>Total Exams</h4>
									</div>
								</div>
								<div class="col-md-4 col-sm-12" data-aos="fade-up">
									<div class="course-count-two  course-count">
										<h3><span class="counterUp text-blue"><?php echo $subjects; ?></span></h3>
										<h4>Total Subjects</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="home-three">
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
	<section class="latest-blog-three">
		<div class="container">
			<div class="home-three-head section-header-title">
				<div class="row align-items-center d-flex justify-content-between">
					<div class="col-lg-12 col-md-12">
						<h2>News & Announcements</h2>
					</div>

				</div>
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
</div>
