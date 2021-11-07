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
    $pastEvents->the_post(); ?>
        <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
            <span class="event-summary__month"><?php 
                  $eventData = new DateTime(get_field('event_date'));
                  echo $eventData->format('M')
                ?></span>
            <span class="event-summary__day"><?php echo $eventData->format('d'); ?></span>  
            </a>
            <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
            <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
            </div>
        </div>
  <?php } wp_paginate(array('pages' => $pastEvents->max_num_pages, 'page' => $currentPage)); ?>

  
</div>

<?php get_footer();

?>