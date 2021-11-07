<?php

get_header();

pageBanner(array(
  'title' => 'Past Events',
  'subtitle' => 'Recape past events..'
))

?>

<div class="container container--narrow page-section">
<?php
    $today = date('Ymd');
    $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $pastEvents = new WP_Query(array(
        'paged' => $currentPage,
        // 'posts_per_page' => 1,
        'post_type' => 'event',
        'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'DEC',
            'meta_query' => array(
              array(
                'key' => 'event_date',
                'compare' => '<',
                'value' => $today,
                'type' => 'numeric'
              )
            )
    ));

  while($pastEvents->have_posts()) {
    $pastEvents->the_post(); 

    get_template_part('template-parts/content-event');
    
    } wp_paginate(array('pages' => $pastEvents->max_num_pages, 'page' => $currentPage)); ?>

  
</div>

<?php get_footer();

?>