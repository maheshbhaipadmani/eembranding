<?php
include_once __DIR__ . '/A_Models/BLOG_Blog.php';
?>

<?php
$testOBJ = new BLOG_Blog();
$singleBlog = $testOBJ->getBlogByURL("blogs-" . $_GET['url']);
$Title = $singleBlog["MetaTitle"];
$MetaDescription = $singleBlog["MetaDescription"];


include __DIR__ . '/A_Layout/Header/header.php';
?>
<main>
    <?php if ($singleBlog !== null) {
        ?>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area-two details-breadcrumb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="breadcrumb-content-two">
                            <h1 class="title"> <?php echo $singleBlog["BlogTitle"]; ?></h1>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="breadcrumb-shape">
                            <img data-parallax="{&quot;x&quot; : 0 , &quot;y&quot; : 100 }"
                                src="./assest/img/icon/Untitled-2.png"
                                loading="lazy" alt="Shape">
                            <img src="./assest/img/icon/Untitled-3.png"
                                loading="lazy" alt="Shape">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-details-area pt-100 pb-120 bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <article class="blog-details-wrap">
                            <div class="blog-thumb mb-5">
                                <img src="<?php echo $singleBlog['Thumbnail']; ?>" class="img-fluid rounded-4 shadow-sm"  loading="lazy"
                                    alt="<?php echo $singleBlog['BlogTitle']; ?>"
                                    style="width: 100%;">
                            </div>

                            <div class="blog-details-content">
                                <div class="blog-meta mb-4">
                                    <ul class="list-wrap d-flex align-items-center gap-4 p-0 mb-3"
                                        style="list-style: none; color: #666; font-size: 14px;">
                                        <li><i class="far fa-calendar-alt text-danger me-2"></i>
                                            <?php echo $singleBlog["CreatedDate"]; ?></li>
                                        <li><i class="far fa-comments text-danger me-2"></i> <a href="#comments"
                                                class="text-decoration-none text-muted">No Comments</a></li>
                                        <li class="d-none d-md-block"><i class="far fa-folder text-danger me-2"></i> Blogs
                                        </li>
                                    </ul>
                                    <h1 class="display-5 fw-bold text-dark mb-4"><?php echo $singleBlog["BlogTitle"]; ?>
                                    </h1>
                                </div>

                                <div class="post-text entry-content text-secondary lh-lg" style="font-size: 1.1rem;">
                                    <?php echo $singleBlog["BlogContent"]; ?>
                                </div>
                            </div>
                        </article>

                        <hr class="my-5 opacity-10">

                        <div class="blog-next-prev">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="p-4 rounded-3 border h-100 transition-hover">
                                        <span class="text-uppercase small fw-bold text-danger">Previous Post</span>
                                        <h5 class="mt-2 mb-0"><a href="home"
                                                class="text-decoration-none text-dark stretched-link">Grow Your Business
                                                with a Top Digital Marketing Company</a></h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded-3 border h-100 text-md-end transition-hover">
                                        <span class="text-uppercase small fw-bold text-danger">Next Post</span>
                                        <h5 class="mt-2 mb-0"><a href="home"
                                                class="text-decoration-none text-dark stretched-link">How 3D Rendering Can
                                                Help Brands Stand Out</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="comments" class="mt-5 pt-5">
                            <div class="comment-respond p-4 p-md-5 rounded-4 bg-light">
                                <h3 class="fw-bold mb-2">Leave a Reply</h3>
                                <p class="text-muted mb-4">Logged in as Admin. Required fields are marked *</p>

                                <form action="submit_comment.php" method="post" class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control-lg border-0 shadow-sm"
                                            placeholder="Full Name *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control form-control-lg border-0 shadow-sm"
                                            placeholder="Email Address *" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="url" class="form-control form-control-lg border-0 shadow-sm"
                                            placeholder="Website">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control form-control-lg border-0 shadow-sm" rows="5"
                                            placeholder="Your Comment *" required></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-danger btn-lg px-5 fw-bold shadow">Post
                                            Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    <?php } else { ?>
        <section class="breadcrumb-area-two details-breadcrumb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="breadcrumb-content-two">
                            <h3 class="title">Not Found</h3>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="breadcrumb-shape">
                            <img data-parallax="{&quot;x&quot; : 0 , &quot;y&quot; : 100 }"
                                src="./assest/img/icon/Untitled-2.png"
                                loading="lazy" alt="Shape">
                            <img src="./assest/img/icon/Untitled-3.png"
                                loading="lazy" alt="Shape">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php } ?>
    <script src="../../../assest/js/pContact-mail.js"></script>
    <?php
    include __DIR__ . '/A_Layout/Footer/footer.php';
    ?>