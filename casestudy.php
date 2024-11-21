<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('include/header-link.php') ?>
	<title>Template - <?php echo SITE_NAME; ?></title>
</head>

<body>
	<!-- start root -->
	<div id="root">
		<?php include('include/header.php') ?>

		<main id="main">
		<!-- ---------------CASE STUDYINNER PAGE START---------------- -->
         		<!-- Common Banner Section Start -->
		<div class="common_banner section-padding">
                <div class="main_banner_spinner">
					<div class="spinner_icon"><i class="fa fa-gear fa-spin" style="font-size:24px"></i></div>
					<div class="spinner_options">
						<span class="color_1"></span>
						<span class="color_2"></span>
						<span class="color_3"></span>
						<span class="color_4"></span>
						<span class="color_5"></span>
						<span class="color_6"></span>
					</div>
				</div>
                <div class="common_banner_overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="common_banner_content">
                            <div class="common_banner_text"><h1>Case Studies</h1></div>
                            <div class="common_banner_links">
                                <ul class="d-flex gap-3 p-0 m-0">
                                    <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                                    <li><a href="">/</a></li>
                                    <li><a href="casestudy.php">Case Study</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Common Banner Section Ends -->


        <section class="case_study_inner section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="case_study_card">
							<div class="case_study_card_image"><img src="<?php echo BASE_URL; ?>/images/casestydy_1.jpeg" alt=""></div>
							<div class="case_study_card_mini_text"><h4>Personal Consulting</h4></div>
							<div class="case_study_card_text"><h2>Supports Patients</h2></div>
							<div class="case_study_card_input"><input type="text" placeholder="Learn More"></div>
						</div>
                    </div>

                    <div class="col-md-4">
                    <div class="case_study_card">
								<div class="case_study_card_image"><img src="<?php echo BASE_URL; ?>/images/casestydy_2.jpeg" alt=""></div>
								<div class="case_study_card_mini_text"><h4>Gynology Operation</h4></div>
								<div class="case_study_card_text"><h2>Two Baby cesar opr.</h2></div>
								<div class="case_study_card_input"><input type="text" placeholder="Learn More"></div>
							</div>
                    </div>

                    <div class="col-md-4">
                    <div class="case_study_card">
								<div class="case_study_card_image"><img src="<?php echo BASE_URL; ?>/images/casestydy_3.jpeg" alt=""></div>
								<div class="case_study_card_mini_text"><h4>Heart Department</h4></div>
								<div class="case_study_card_text"><h2>Heart Surgery.</h2></div>
								<div class="case_study_card_input"><input type="text" placeholder="Learn More"></div>
							</div>
                    </div>

                    <div class="col-md-4">
                    <div class="case_study_card mt-5">
								<div class="case_study_card_image"><img src="<?php echo BASE_URL; ?>/images/casestydy_4.jpeg" alt=""></div>
								<div class="case_study_card_mini_text"><h4>Eye Care</h4></div>
								<div class="case_study_card_text"><h2>Eye Care Services</h2></div>
								<div class="case_study_card_input"><input type="text" placeholder="Learn More"></div>
							</div>
                    </div>

                    <div class="col-md-4">
                    <div class="case_study_card mt-5">
								<div class="case_study_card_image"><img src="<?php echo BASE_URL; ?>/images/casestydy_5.jpeg" alt=""></div>
								<div class="case_study_card_mini_text"><h4>Teth Department</h4></div>
								<div class="case_study_card_text"><h2>Dental Surgery</h2></div>
								<div class="case_study_card_input"><input type="text" placeholder="Learn More"></div>
							</div>
                    </div>

                    <div class="col-md-4">
                    <div class="case_study_card mt-5">
								<div class="case_study_card_image"><img src="<?php echo BASE_URL; ?>/images/casestydy_6.jpeg" alt=""></div>
								<div class="case_study_card_mini_text"><h4>Gynology</h4></div>
								<div class="case_study_card_text"><h2>Pregnancy Care Advice</h2></div>
								<div class="case_study_card_input"><input type="text" placeholder="Learn More"></div>
							</div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ---------------CASE STUDYINNER PAGE ENDS---------------- -->
		</main>


		<?php include('include/footer.php') ?>
	</div>
	<!-- end root -->
	<?php include('include/footer-link.php') ?>

	<script>

	</script>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init();</script>
</html>