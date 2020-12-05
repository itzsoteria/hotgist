<?php
include 'main-header.php';
$get_posts = $con->query("SELECT * from posts order by id desc ");
?>


    <!-- Slider -->
    <section id="mt_banner" class="single-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url(images/slider/bg2.jpg)"></div>
                    <div class="banner_caption_text">
                        <div class="post-category">
                            <ul>
                                <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                            </ul>
                        </div>
                        <h1><a href="#">I am soteria</a></h1>
                        <div class="item-meta">
                            <span class="white">by</span>
                            <a href="author.html/index.html">James Bryant</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url(images/slider/bg1.jpg)"></div>
                    <div class="banner_caption_text">
                        <div class="post-category">
                            <ul>
                                <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                            </ul>
                        </div>
                        <h1><a href="#">Adjusting to Your Home is no Different than a New Country</a></h1>
                        <div class="item-meta">
                            <span class="white">by</span>
                            <a href="author.html/index.html">James Bryant</a><br>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url(images/slider/bg3.jpg)"></div>
                    <div class="banner_caption_text">
                        <div class="post-category">
                            <ul>
                                <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                                <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                            </ul>
                        </div>
                        <h1><a href="#">Get Scary With This Vegan Spooky Spider Crackle Cake!</a></h1>
                        <div class="item-meta">
                            <span>by</span>
                            <a href="author.html">Admin Jackson</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-"></div>
            <div class="swiper-button-prev swiper-button-"></div>
        </div>
    </section>
    <!-- End Slider -->

    <!--* Blog*-->
    <section id="mt_blog" class="">
        <div class="container">
            <div class="row">
            <?php
                 while ($post = $get_posts->fetch_assoc()) {
                $user_id = $post['user_id'];
                $get_user = $con->query("SELECT name from users where id = '$user_id' LIMIT 1 ");
                $row = mysqli_fetch_assoc($get_user);
                 $post_owner = $row['name'];
                                           
                 ?>
                <div class="col-xs-12">
                    <div class="blog_post_sec fullwidth">
                        <div class="blog-post_wrapper">
                            <div class="blog-post-image">
                            <img src="post_images/<?php echo $post['image']  ?>" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                    <li class="cat-yellow"><a href="#" class="white"><?php echo $post['categories']  ?></a></li>
                                        
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#"><?php echo $post['created_at'] ?></a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="post.php?id=<?php echo $post['id']?>" class="white"><?php echo $post['title']  ?></a>
                                </h2>
                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html"><?php echo $post_owner ?></a>
                                </div>

                            </div>
                        </div>

                        
                        <?php
                            } 
                        ?>
                        <div class="pagination__wrapper">
                          <ul class="pagination">
                            <li><button class="prev" title="previous page">&#10094;</button></li>
                            <li><button title="first page - page 1">1</button></li>
                            <li><button class="active" title="current page">2</button></li>
                            <li><button>3</button></li>
                            <li><button class="next" title="next page">&#10095;</button></li>
                          </ul>
                        </div>
                    </div>
                </div>   
            </div>    
        </div>
    </section>
    <!--* End Blog*-->

    <div class="mt_instagram">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_01.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_02.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_03.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_04.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_05.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_06.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_07.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_08.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_09.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_10.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_11.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="images/insta/insta_12.jpg" alt="Image"></a></div>
            </div>
            <div class="sectio-title">
                <h3 class="mar-0"><a href="#">Follow @ Instagram</a></h3>
            </div>
        </div> 
    </div>


    <?php
include 'main-footer.php';
?>
    
    <!--*Scripts*-->
    <!-- Latest jquery --><script src="js/jquery-3.2.1.min.js"></script>
    <!-- Plugin Jquery --><script src="js/plugin.js"></script>
    <!-- custom nav jquery --><script src="js/custom-nav.js"></script>
    <!-- main default Jquery --><script src="js/main.js"></script>
</body>


<!-- Mirrored from cyclonethemes.com/demo/html/suchana/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 19:38:43 GMT -->
</html>