<?php
require_once 'includes/functions.php';
$pageTitle = "Beyond Wound Care Inc.";
$bodyClass = "modern-bg";
include 'includes/header.php';
?>
<main class="modern-bg">
    <!-- Hero Section -->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                            <div class="hero__caption">
                                <span>Have Access To A Health Professional At Any Time</span>
                                <h1 class="cd-headline letters scale">Quality Healing
                                    <strong>AT HOME</strong>
                                </h1>
                                <?php if(isMobile()): ?>
                                    <a href="contact.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Inquire Now<i class="ti-arrow-right"></i></a>
                                <?php else: ?>
                                    <p data-animation="fadeInLeft" data-delay="0.1s"></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="department_area section-padding2" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-100">
                        <span>Our Company</span>
                        <h2>WHY CHOOSE US</h2>
                    </div>
                </div>
            </div>
            <div class="dept_main_info white-bg">
                <div class="row align-items-center no-gutters">
                    <div class="col-lg-7">
                        <div class="dept_info">
                            <h3>Our mission is to provide excellent care at the comfort of your home with our skillful and experienced team. We save you the time to avoid unnecessary travel to the hospital/clinic.</h3>
                            <br>
                            <a href="contact.php" class="btn primary-border e-large">Inquire Now<i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="dept_thumb">
                            <img src="choose.jpg" alt="Why Choose Us" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How It Works -->
    <div class="process-area section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-50">
                        <span>Our Process</span>
                        <h2>How It Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="process-cap">
                            <h5>1. Contact Us</h5>
                            <p>Call us or submit an inquiry form to get started. Our team is ready to assist you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="process-cap">
                            <h5>2. In-Home Assessment</h5>
                            <p>Our specialist visits your home to evaluate the wound and determine the best course of action.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="process-cap">
                            <h5>3. Personalized Care</h5>
                            <p>We create a custom healing plan and provide ongoing care until you are fully recovered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- What We Treat (Services) -->
    <div class="team-area" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <h2>What We Treat</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $treatments = [
                    ['img' => 'pressure.jpg', 'title' => 'PRESSURE ULCER', 'desc' => 'Injuries to skin and underlying tissue resulting from prolonged pressure on the skin.'],
                    ['img' => 'arterial.png', 'title' => 'ARTERIAL ULCER', 'desc' => 'Open sores that primarily develop on the outer side of the ankle, feet, heels, or toes due to poor blood flow.'],
                    ['img' => 'various.jpg', 'title' => 'VENOUS ULCER', 'desc' => 'Wounds that occur due to improper functioning of venous valves, usually in the legs.'],
                    ['img' => 'diabetic.jpg', 'title' => 'DIABETIC ULCER', 'desc' => 'Open sores or wounds that occur in patients with diabetes, commonly on the bottom of the foot.'],
                    ['img' => 'infected.jpg', 'title' => 'INFECTED WOUNDS', 'desc' => 'Wounds where bacteria or other germs have colonized, causing pain, swelling, and delayed healing.'],
                    ['img' => 'post.jpg', 'title' => 'POST-SURGICAL WOUNDS', 'desc' => 'Surgical incisions that have not healed within the expected time frame and require specialized care.'],
                    ['img' => 'full.jpg', 'title' => 'PARTIAL & FULL-THICKNESS', 'desc' => 'Wounds extending through the epidermis and dermis, potentially reaching subcutaneous tissue, muscle, or bone.'],
                    ['img' => 'burns.jpg', 'title' => 'BURNS', 'desc' => 'Tissue damage that results from heat, overexposure to the sun or other radiation, or chemical contact.'],
                    ['img' => 'chronic.png', 'title' => 'CHRONIC WOUNDS', 'desc' => 'Wounds that do not heal in an orderly set of stages and in a predictable amount of time.'],
                    ['img' => 'traumatic.jpg', 'title' => 'TRAUMATIC WOUNDS', 'desc' => 'Cuts, lacerations, or puncture wounds which have caused damage to the skin and underlying tissues.']
                ];
                foreach($treatments as $item):
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#"><?php echo $item['title']; ?></a></h3>
                            <p><?php echo $item['desc']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Counties We Serve -->
    <div class="department_area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-100">
                        <h2>COUNTIES WE SERVE</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="depart_ment_tab mb-30">
                        <ul class="nav" id="myTab" role="tablist">
                            <?php
                            $counties = ['COOK', 'DUPAGE', 'LAKE', 'WILL', 'MCHENRY', 'KANE', 'KENDALL', 'BOONE', 'STEPHENSON', 'WINNEBAGO'];
                            foreach($counties as $index => $county):
                                $active = $index === 0 ? 'active' : '';
                                $id = strtolower($county);
                            ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $active; ?>" id="<?php echo $id; ?>-tab" data-toggle="tab" href="#<?php echo $id; ?>" role="tab" aria-controls="<?php echo $id; ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                                    <h4><?php echo $county; ?></h4>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dept_main_info white-bg">
                <div class="tab-content" id="myTabContent">
                    <?php
                    $countyImages = [
                        'cook' => 'cook.jpg', 'dupage' => 'dupage.jpg', 'lake' => 'lake1.jpg', 'will' => 'will.jpg',
                        'mchenry' => 'mchenry.jpg', 'kane' => 'kane.jpg', 'kendall' => 'kane.jpg', 'boone' => 'boone.png',
                        'stephenson' => 'stephenson.jpg', 'winnebago' => 'kane.jpg'
                    ];
                    foreach($counties as $index => $county):
                        $id = strtolower($county);
                        $active = $index === 0 ? 'show active' : '';
                        $state = ($id == 'winnebago') ? 'Wisconsin' : 'Illinois';
                    ?>
                    <div class="tab-pane fade <?php echo $active; ?>" id="<?php echo $id; ?>" role="tabpanel" aria-labelledby="<?php echo $id; ?>-tab">
                        <div class="row align-items-center no-gutters">
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3><?php echo ucfirst($id); ?> County, <?php echo $state; ?>, USA</h3>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="<?php echo $countyImages[$id]; ?>" alt="<?php echo $county; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Team -->
    <div class="team-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center mb-100">
                        <span>MEET</span>
                        <h2>Our Wound Care Team</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                $team = [
                    ['name' => 'Ria Anne Cruz, APRN', 'role' => 'Wound Care Specialist', 'img' => 'ria_cruz.jpg'],
                    ['name' => 'William Mollohan, DO.', 'role' => 'Wound Care Specialist', 'img' => 'william_mollohan.jpg'],
                    ['name' => 'Chris Dolak AGNP-C, WCC', 'role' => 'Wound Care Specialist', 'img' => 'chris_dolak.jpg'],
                    ['name' => 'Dean Gorospe, APRN', 'role' => 'Wound care Specialist', 'img' => 'dean_gorospe.jpg'],
                    ['name' => 'Elizabeth Simon, MD', 'role' => 'Internal Medicine', 'img' => 'elizabeth_simon.jpg'],
                    ['name' => 'Silvy Powathil, APRN', 'role' => 'Wound Care Speacialist', 'img' => 'silvy_powathil.jpg'],
                    ['name' => 'Edith Chaffin, MD', 'role' => 'Family Medicine', 'img' => 'edith_chaffin.jpg']
                ];
                foreach($team as $member):
                ?>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="<?php echo $member['img']; ?>" alt="<?php echo $member['name']; ?>">
                        </div>
                        <div class="team-caption">
                            <h3><a href="#"><?php echo $member['name']; ?></a></h3>
                            <span><?php echo $member['role']; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Info Section (Qualify & Insurance) -->
    <div class="about-area section-padding2">
        <div class="container">
            <div class="row">
                <!-- Qualify -->
                <div class="col-lg-6 mb-50">
                    <div class="about-caption">
                        <div class="section-tittle section-tittle2 mb-35">
                            <h2>What we need to Qualify</h2>
                        </div>
                        <ul class="unordered-list">
                            <li>Patient Demographic information</li>
                            <li>Primary and Secondary Insurance</li>
                            <li>Documentation and photos of wounds</li>
                        </ul>
                    </div>
                    <div class="about-img">
                        <img src="qualify.jpg" alt="Qualify" class="img-fluid rounded">
                    </div>
                </div>
                <!-- Insurance -->
                <div class="col-lg-6 mb-50">
                    <div class="about-caption">
                        <div class="section-tittle section-tittle2 mb-35">
                            <h2>Insurance We Accept</h2>
                        </div>
                        <ul class="unordered-list">
                            <li>Medicare</li>
                            <li>United Health Care - PPO</li>
                            <li>Blue Cross Blue Shield</li>
                        </ul>
                    </div>
                    <div class="about-img">
                        <img src="assets/img/gallery/testimonial.png" alt="Insurance" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="testimonial-area section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-50">
                        <span>Testimonials</span>
                        <h2>What Our Patients Say</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="single-testimonial mb-30">
                        <div class="testimonial-caption">
                            <p>"The team at Beyond Wound Care was a lifesaver. They came to my home and treated my father's pressure ulcer with such care and professionalism. Highly recommended!"</p>
                            <div class="testimonial-founder">
                                <span>- Sarah J.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-testimonial mb-30">
                        <div class="testimonial-caption">
                            <p>"I was worried about going to a clinic during the pandemic. Having a specialist come to me was amazing. My wound healed faster than I expected."</p>
                            <div class="testimonial-founder">
                                <span>- Michael R.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="faq-area section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-tittle text-center mb-50">
                        <span>Common Questions</span>
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Accordion -->
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Do I need a referral?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Most insurance plans do require a referral from your primary care physician. However, we can assist you in obtaining one. Please contact us for guidance.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Is this covered by insurance?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Yes, we accept Medicare, Blue Cross Blue Shield, United Health Care PPO, and many other insurance plans. We handle the billing directly with your insurance provider.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How quickly can you see me?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    We typically schedule an initial assessment within 24-48 hours of receiving a referral or inquiry.
                                </div>
                            </div>
                        </div>
                         <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What safety protocols do you follow?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    Our team follows strict infection control protocols, including the use of PPE (Personal Protective Equipment) and rigorous sanitization, to ensure the safety of our patients and staff.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-area section-padding2" style="background-image: url('assets/img/gallery/section_bg02.png'); background-size: cover; background-position: center; position: relative;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="cta-caption text-center">
                        <h2 style="color: #fff; font-size: 50px; font-weight: 700; margin-bottom: 20px;">Ready to Start Your Healing Journey?</h2>
                        <p style="color: #fff; font-size: 18px; margin-bottom: 40px;">Contact us today to schedule your in-home assessment.</p>
                        <a href="contact.php" class="btn hero-btn" style="padding: 25px 50px;">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'includes/footer.php'; ?>