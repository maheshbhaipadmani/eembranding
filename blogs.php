<?php
include_once __DIR__ . '/A_Models/BLOG_Blog.php';
$Title = "Our Blog | Eem Branding";
$MetaDescription = "Our blog offers expert tips on digital marketing, branding, and more. Learn proven strategies to help your brand thrive in a competitive market.";
$MetaKeywords = "digital marketing blog, branding tips, marketing strategies, expert marketing insights, brand growth techniques, online marketing advice, social media marketing tips, SEO strategies, content marketing ideas, advertising trends, business branding blog.";
?>

<?php
include __DIR__ . '/A_Layout/Header/header.php';

$testOBJ = new BLOG_Blog();
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$limit = 6;
$myaraa = $testOBJ->selectblog($page, $limit);
$total = $testOBJ->getBlogCount();
$totalPages = ceil($total / $limit);
// Reset the array pointer just in case
reset($myaraa);


?>


<main>
    <section class="breadcrumb-area-two ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="breadcrumb-content-two">
                        <h1 class="title">Blogs</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="breadcrumb-shape">
                        <img data-parallax="{&quot;x&quot; : 0 , &quot;y&quot; : 100 }"
                            src="https://eembranding.com/assest/img/icon/Untitled-2.png"
                            loading="lazy" alt="Shape">
                        <img src="https://eembranding.com/assest/img/icon/Untitled-3.png"
                            loading="lazy" alt="Shape">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="blog-grid">
        <?php while ($item = current($myaraa)): ?>
            <div class="blog-card">
                <div class="blog-image">
                    <a href="<?php echo $item["URL"]; ?>" target="_self">
                        <img src="<?php echo $item['Thumbnail']; ?>" alt="<?php echo $item["BlogTitle"]; ?>" loading="lazy"
                            decoding="async">
                    </a>
                </div>

                <div class="blog-body">
                    <div class="blog-category">
                        <span class="categories-links">
                            <a href="blogs">Blogs</a>
                        </span>
                    </div>

                    <h3 class="blog-title">
                        <a href="<?php echo $item["URL"]; ?>" target="_self">
                            <?php echo $item["BlogTitle"]; ?>
                        </a>
                    </h3>

                    <p class="blog-excerpt">
                        <?php
                        if (!empty($item["BlogContent"])) {
                            $decodedContent = html_entity_decode($item["BlogContent"]);
                            $plainTextContent = strip_tags($decodedContent);
                            $excerpt = mb_substr(trim($plainTextContent), 0, 150, 'UTF-8');
                            $lastSpace = mb_strrpos($excerpt, ' ', 0, 'UTF-8');
                            if ($lastSpace !== false) {
                                $excerpt = mb_substr($excerpt, 0, $lastSpace, 'UTF-8');
                            }
                            echo $excerpt . '...';
                        } else {
                            echo 'No content available...';
                        }
                        ?>
                    </p>

                    <a href="<?php echo $item["URL"]; ?>" class="blog-read-more" target="_self">
                        Read More...
                    </a>
                </div>
            </div>
            <?php next($myaraa); endwhile; ?>
    </div>

    <nav aria-label="Blog navigation" class="mt-5">
        <ul class="pagination justify-content-center">

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <?php if ($i == $page): ?>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link custom-page-red"><?= $i ?></span>
                    </li>
                <?php else: ?>
                    <li class="page-item">
                        <a class="page-link text-danger" href="blogs/page/<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endif; ?>
            <?php endfor; ?>

        </ul>
    </nav>

    <?php
    include __DIR__ . '/A_Layout/Footer/footer.php';
    ?>