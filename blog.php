<?php
$pageTitle = "Blog & Resources - Beyond Wound Care";
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
                            <h2>Educational Resources</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    
    <!--? Blog Area Start-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <!-- Blog Post 1 -->
                        <article class="blog_item" id="post-1" data-category="wound-care">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="assets/img/blog/blog_custom_1.jfif" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>15</h3>
                                    <p>Jan</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="#">
                                    <h2>Understanding Pressure Ulcers: Prevention and Care</h2>
                                </a>
                                <p>Pressure ulcers, also known as bedsores, are injuries to the skin and underlying tissue resulting from prolonged pressure on the skin. Learn about the stages, risk factors, and how our team helps prevent them.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Beyond Wound Care</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 2 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <!-- Blog Post 2 -->
                        <article class="blog_item" id="post-2" data-category="diabetes">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="assets/img/blog/blog_custom_2.jfif" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>22</h3>
                                    <p>Jan</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="#">
                                    <h2>Diabetic Foot Care: Tips for Healthy Feet</h2>
                                </a>
                                <p>For individuals with diabetes, foot care is essential to prevent serious complications. We discuss daily routines, what to look out for, and when to seek professional help.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Beyond Wound Care</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 0 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <!-- Blog Post 3 -->
                        <article class="blog_item" id="post-3" data-category="nutrition">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="assets/img/blog/blog_custom_3.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>05</h3>
                                    <p>Feb</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="#">
                                    <h2>The Importance of Nutrition in Wound Healing</h2>
                                </a>
                                <p>What you eat plays a crucial role in how fast your body heals. Discover the essential vitamins and minerals that support tissue repair and boost your immune system.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Beyond Wound Care</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 5 Comments</a></li>
                                </ul>
                            </div>
                        </article>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form id="blogSearchForm" onsubmit="return handleSearch(event)">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="searchInput" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="javascript:void(0)" onclick="filterCategory('wound-care')" class="d-flex">
                                        <p>Wound Care</p>
                                        <p>(1)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="filterCategory('diabetes')" class="d-flex">
                                        <p>Diabetes</p>
                                        <p>(1)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="filterCategory('nutrition')" class="d-flex">
                                        <p>Nutrition</p>
                                        <p>(1)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="filterCategory('all')" class="d-flex">
                                        <p>Show All</p>
                                        <p>(3)</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <div class="media post_item">
                                <img src="assets/img/blog/blog_custom_1.jfif" alt="post" style="width: 80px; height: 80px; object-fit: cover;">
                                <div class="media-body">
                                    <a href="#post-1">
                                        <h3>Advanced Wound Care Solutions</h3>
                                    </a>
                                    <p>January 12, 2025</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="assets/img/blog/blog_custom_2.jfif" alt="post" style="width: 80px; height: 80px; object-fit: cover;">
                                <div class="media-body">
                                    <a href="#post-2">
                                        <h3>Preventing Diabetic Ulcers</h3>
                                    </a>
                                    <p>January 18, 2025</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="assets/img/blog/blog_custom_3.png" alt="post" style="width: 80px; height: 80px; object-fit: cover;">
                                <div class="media-body">
                                    <a href="#post-3">
                                        <h3>Nutrition for Healing</h3>
                                    </a>
                                    <p>January 25, 2025</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="assets/img/gallery/about1.png" alt="post" style="width: 80px; height: 80px; object-fit: cover;">
                                <div class="media-body">
                                    <a href="referral.php">
                                        <h3>Patient Referral Process</h3>
                                    </a>
                                    <p>February 01, 2025</p>
                                </div>
                            </div>
                        </aside>
                        
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <form id="newsletterForm" onsubmit="return handleNewsletter(event)">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->

    <!-- CTA Section -->
    <div class="cta-area section-padding2" style="background-image: url('assets/img/gallery/section_bg02.png'); background-size: cover; background-position: center; position: relative;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="cta-caption text-center">
                        <h2 style="color: #fff; font-size: 50px; font-weight: 700; margin-bottom: 20px;">Need Professional Wound Care?</h2>
                        <p style="color: #fff; font-size: 18px; margin-bottom: 40px;">Our specialists are ready to help you heal at home.</p>
                        <a href="contact.php" class="btn hero-btn" style="padding: 25px 50px;">Contact Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
function handleSearch(event) {
    event.preventDefault();
    const query = document.getElementById('searchInput').value.toLowerCase();
    const posts = document.querySelectorAll('.blog_item');
    
    posts.forEach(post => {
        const title = post.querySelector('h2').innerText.toLowerCase();
        const content = post.querySelector('p').innerText.toLowerCase();
        
        if (title.includes(query) || content.includes(query)) {
            post.style.display = 'block';
        } else {
            post.style.display = 'none';
        }
    });
    return false;
}

function filterCategory(category) {
    const posts = document.querySelectorAll('.blog_item');
    
    posts.forEach(post => {
        if (category === 'all' || post.dataset.category === category) {
            post.style.display = 'block';
        } else {
            post.style.display = 'none';
        }
    });
}

function handleNewsletter(event) {
    event.preventDefault();
    alert('Thank you for subscribing to our newsletter!');
    event.target.reset();
    return false;
}
</script>
<?php include 'includes/footer.php'; ?>
