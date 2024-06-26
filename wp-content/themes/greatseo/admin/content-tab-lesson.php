
<?php

$course = get_post_meta(get_the_ID() , 'pishro_group_lesson' , true);


if (!empty($course)) {
?>
<div class="lesson-course">
    <ul>
        <?php foreach ( $course as $item) : ?>
        <li>
            <h4><?php echo $item['pishro_course_chapter_title']; ?>
                <i class="fas fa-angle-down"></i>
            </h4>
            <ul>
                <div class="meta-course">
                    <div class="time-course">
                        <i class="fas fa-clock"></i>
                        <span>مدت زمان فصل : </span>
                        <span><?php echo $item['pishro_course_chapter_time']; ?></span>
                    </div>
                    <?php
                    global $product;
                    $id = $product->id;
                    if (is_user_logged_in()) {
                        $current_user = wp_get_current_user();
                    }
                    if (wc_customer_bought_product(  $current_user->user_email ,  $current_user->ID , $id )) { ?>
                    <div class="dl-course">
                        <a href="<?php echo $item['pishro_course_chapter_link']; ?>" target="_blank">
                            <i class="fas fa-download"></i>
                            لینک دانلود فصل
                        </a>
                    </div>
                    <?php }
                    else {
                        ?>
                        <div class="dl-course denied">
                            <a>
                                <i class="fas fa-download"></i>
                                دانلود - عدم دسترسی
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="clear"></div>

                <?php foreach ($item['pishro_course_chapter_lesson'] as $value) : ?>
                <li><i class="fas fa-check"></i>
                    <?php echo $value; ?>
                </li>
                <?php endforeach; ?>

            </ul>
        </li>
        <?php endforeach; ?>

    </ul>
</div>
<?php } ?>
