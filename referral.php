<?php
$pageTitle = "Patient Referral - Beyond Wound Care";
$bodyClass = "modern-bg";
include 'includes/header.php';
?>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Patient Referral</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Refer a Patient</h2>
                    <p class="mb-30">Please fill out the form below to refer yourself or a loved one to Beyond Wound Care.</p>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="referralForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mb-20">Patient Information</h3>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="patient_name" id="patient_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Name'" placeholder="Patient Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="patient_phone" id="patient_phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Phone'" placeholder="Patient Phone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Reason for Referral / Notes'" placeholder="Reason for Referral / Notes"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send Referral</button>
                        </div>
                    </form>
                    <!-- Floating Alert Container -->
                    <div id="floating-alert" style="display:none; position: fixed; top: 100px; right: 20px; z-index: 10000; background-color: #28a745; color: white; padding: 25px 50px; font-size: 20px; font-weight: 600; border-radius: 8px; box-shadow: 0 6px 12px rgba(0,0,0,0.2);">
                        <i class="fa fa-check-circle"></i> Referral Sent Successfully!
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Schaumburg, Illinois.</h3>
                            <p>1320 Tower Rd, Suite 136</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>847.873.8693</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@beyondwoundcare.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                    <div class="media contact-info mt-5">
                        <div class="media-body">
                            <h3>Accepted Insurance</h3>
                            <ul class="unordered-list">
                                <li>Medicare</li>
                                <li>United Health Care - PPO</li>
                                <li>Blue Cross Blue Shield</li>
                                <li>And more...</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
</main>
<?php include 'includes/footer.php'; ?>
