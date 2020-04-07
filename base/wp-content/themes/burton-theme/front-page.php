<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <div class="row my-4">
        <div class="col-lg-8">

                <?php echo do_shortcode('[metaslider id="56"]'); ?>

        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <h2>Mountain Vista Governor's School for Math, Science, and Technology</h2>
            <p>
                Mountain Vista Governor's School is an academic year Governor's school for Math, Science, and Technology
                serving the following school districts:
            <ul class="county-links">
                <li><a class="blue" href="http://www.clarke.k12.va.us/" target="_blank">Clarke County</a></li>
                <li><a class="blue" href="http://www.culpeperschools.org/" target="_blank">Culpeper County</a></li>
                <li><a class="blue" href="http://www.fcps1.org" target="_blank">Fauquier County</a></li>
                <li><a class="blue" href="http://www.frederick.k12.va.us" target="_blank">Frederick County</a></li>
                <li><a class="blue" href="http://www.rappahannockschools.us/" target="_blank">Rappahannock County</a>
                </li>
                <li><a class="blue" href="http://www.wcps.k12.va.us" target="_blank">Warren County</a></li>
                <li><a class="blue" href="http://www.wps.k12.va.us" target="_blank">Winchester City</a></li>
            </ul>
            </p>
        </div>
        <!-- /.col-md-4 -->
    </div>

    <!-- Display cards from WP posts categorized as "front-page-news-items"-->
    <?php
    $args = array(
        'posts_per_page' => 5,
        'offset' => 0,
        'category' => '',
        'category_name' => 'front-page-news-items',
        'orderby' => 'date',
        'order' => 'DESC',
        'include' => '', 'exclude' => '',
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'post', 'post_mime_type' => '',
        'post_parent' => '',
        'author' => '',
        'post_status' => 'publish',
        'suppress_filters' => true
        );

    $myposts = get_posts( $args );
    ?>
    <div class="row">
    <?php $i = 1; ?>
    <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

        <div class="col-md-4 mb-4">
            <div class="card h-100 bg-light">
                <div class="card-body">
                    <h2 class="card-title"><?php the_title();?></h2>
                    <p class="card-text"><?php the_content(); ?></p>
                </div>
            </div>
        </div>

    <?php if ( $i % 3 === 0 ) { echo '</div><div class="row">'; } ?>
    <?php $i++; ?>

    <?php
    endforeach;
    wp_reset_postdata();
    ?>
    <!--END Display cards from WP posts-->

</div>


<?php get_footer(); ?>

