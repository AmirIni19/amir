<?php get_header(); ?>


<section class="box-slider">
    <div id="main_slider" class="owl-carousel owl-theme">
        <div class="item"><img src="<?php echo get_template_directory_uri().'/img/1.png' ?>"> </div>
        <div class="item"><img src="<?php echo get_template_directory_uri().'/img/2.jpg' ?>"> </div>
    </div>
</section>


<div class="line"></div>


<section class="tv">
    <div class="container">
        <div class="tv-head">
            <div class="tv-title">
                <h2>وبسافت TV</h2>
                <h5>تلویزیون وبسافت3</h5>
            </div>

            <div class="tv-link">
                <a href="#">ویدئوهای بیشتر</a>
            </div>
        </div>

        <div class="box-tv">
            <div class="tv-right">
                <div class="first-post">
                    <a href="#">
                        <figure>
                            <img src="<?php echo get_template_directory_uri().'/img/f.png' ?>">
                            <i class="fas fa-play-circle"></i>
                        </figure>
                    </a>
                </div>
            </div>

            <div class="tv-left">
                <div class="other-post">
                    <a href="#">
                        <figure>
                            <img src="<?php echo get_template_directory_uri().'/img/x.png' ?>">
                            <i class="fas fa-play"></i>
                            <h2>بهترین زبان برنامه نویسی تحت وب برای شروع در ایران</h2>
                        </figure>
                    </a>
                </div>

                <div class="other-post">
                    <a href="#">
                        <figure>
                            <img src="<?php echo get_template_directory_uri().'/img/xx.png' ?>">
                            <i class="fas fa-play"></i>
                            <h2>بهترین زبان برنامه نویسی تحت وب برای شروع در ایران</h2>
                        </figure>
                    </a>
                </div>

                <div class="other-post">
                    <a href="#">
                        <figure>
                            <img src="<?php echo get_template_directory_uri().'/img/xxx.png' ?>">
                            <i class="fas fa-play"></i>
                            <h2>بهترین زبان برنامه نویسی تحت وب برای شروع در ایران</h2>
                        </figure>
                    </a>
                </div>

                <div class="other-post">
                    <a href="#">
                        <figure>
                            <img src="<?php echo get_template_directory_uri().'/img/xxxx.png' ?>">
                            <i class="fas fa-play"></i>
                            <h2>بهترین زبان برنامه نویسی تحت وب برای شروع در ایران</h2>
                        </figure>
                    </a>
                </div>

                <div class="more-tv">
                    <a href="#">ویدئوهای بیشتر</a>
                </div>
            </div>
        </div>

    </div>
</section>


    <div class="line"></div>



<section class="article">
    <div class="container">
        <div class="article-head">
            <div class="article-title">
                <h2>مقالات</h2>
                <h5>بلاگ</h5>
            </div>

            <div class="article-link">
                <a href="#">مقالات بیشتر</a>
            </div>
        </div>

        <div class="article-slider">
            <div id="multi_slider" class="owl-carousel owl-theme">

                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
                        <div class="item box-article">
                            <?php the_post_thumbnail('article'); ?>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                            <p><?php the_excerpt(); ?></p>
                            <div class="btn-more"><a href="<?php the_permalink(); ?>">بیشتر بخوانید</a> </div>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>


            </div>
        </div>

    </div>
</section>



<div class="line"></div>



<section class="adv">
    <div class="container">
        <div class="right-adv">
            <h2>آموزش رایگان وردپرس</h2>
            <p>آموزش صفرتاصد وردپرس از کار با پنل مدیریت وردپرس بصورت رایگان تا طراحی حرفه ای قالب وردپرس، برای مشاهده روی دکمه زیر کلیک کنید</p>
            <a href="#">آموزش وردپرس</a>
        </div>

        <div class="left-adv">
            <figure>
                <img src="<?php echo get_template_directory_uri().'/img/wd.png' ?>">
            </figure>
        </div>
    </div>
</section>




<div class="line"></div>



<section class="course">
    <div class="container">
        <div class="course-head">
            <div class="course-title">
                <h2>دوره های پرطرفدار</h2>
                <h5>آموزش</h5>
            </div>

            <div class="course-link">
                <a href="#">همه دوره</a>
            </div>
        </div>

        <div class="course-slider">
            <div id="course_slider" class="owl-carousel owl-theme">

                <div class="item box-course">
                    <img src="<?php echo get_template_directory_uri().'/img/c.png' ?>">
                    <h2><a href="#">آموزش طراحی سایت حرفه ای پروژه محور</a> </h2>
                    <div class="desc">
                        <div class="teacher">
                            <span>رضاحیدری</span>
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="price">
                            <del>280,000</del>
                            <ins>190,000</ins>
                        </div>
                        <div class="users">
                            <i class="fas fa-users"></i> 73
                        </div>
                    </div>
                </div>

                <div class="item box-course">
                    <img src="<?php echo get_template_directory_uri().'/img/ccc.png' ?>">
                    <h2><a href="#">آموزش طراحی سایت حرفه ای پروژه محور</a> </h2>
                    <div class="desc">
                        <div class="teacher">
                            <span>رضاحیدری</span>
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="price">
                            <del>280,000</del>
                            <ins>190,000</ins>
                        </div>
                        <div class="users">
                            <i class="fas fa-users"></i> 73
                        </div>
                    </div>
                </div>

                <div class="item box-course">
                    <img src="<?php echo get_template_directory_uri().'/img/cc.png' ?>">
                    <h2><a href="#">آموزش طراحی سایت حرفه ای پروژه محور</a> </h2>
                    <div class="desc">
                        <div class="teacher">
                            <span>رضاحیدری</span>
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="price">
                            <del>280,000</del>
                            <ins>190,000</ins>
                        </div>
                        <div class="users">
                            <i class="fas fa-users"></i> 73
                        </div>
                    </div>
                </div>

                <div class="item box-course">
                    <img src="<?php echo get_template_directory_uri().'/img/ccc.png' ?>">
                    <h2><a href="#">آموزش طراحی سایت حرفه ای پروژه محور</a> </h2>
                    <div class="desc">
                        <div class="teacher">
                            <span>رضاحیدری</span>
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="price">
                            <span>275000</span>
                        </div>
                        <div class="users">
                            <i class="fas fa-users"></i> 73
                        </div>
                    </div>
                </div>

                <div class="item box-course">
                    <img src="<?php echo get_template_directory_uri().'/img/ccccc.png' ?>">
                    <h2><a href="#">آموزش طراحی سایت حرفه ای پروژه محور</a> </h2>
                    <div class="desc">
                        <div class="teacher">
                            <span>رضاحیدری</span>
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="price">
                            <span>رایگان!</span>
                        </div>
                        <div class="users">
                            <i class="fas fa-users"></i> 73
                        </div>
                    </div>
                </div>

                <div class="item box-course">
                    <img src="<?php echo get_template_directory_uri().'/img/ccccc.png' ?>">
                    <h2><a href="#">آموزش طراحی سایت حرفه ای پروژه محور</a> </h2>
                    <div class="desc">
                        <div class="teacher">
                            <span>رضاحیدری</span>
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="price">
                            <del>540,000</del>
                            <ins>490,000</ins>
                        </div>
                        <div class="users">
                            <i class="fas fa-users"></i> 12
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>



<div class="line"></div>



<?php get_footer(); ?>