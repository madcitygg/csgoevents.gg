<?php
/*
Template Name: Index
*/
get_header();

$upcomingEventsArgs=array(
  'post_type' => 'events',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1,
  'post_status' => 'future',
  'orderby' => 'date',
  'order'   => 'ASC'
);
$upcomingEvents = new WP_Query($upcomingEventsArgs);

$pastEventsArgs=array(
  'post_type' => 'events',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1,
  'orderby' => 'date',
  'order'   => 'ASC'
);
$pastEvents = new WP_Query($pastEventsArgs);
?>

<div class="view index columns">
  <div class="upcoming">
    <h2 class="smalltitle">Upcoming Events</h2>
    <?php if ( $upcomingEvents->have_posts() ) : ?>
      <?php while ( $upcomingEvents->have_posts() ) : $upcomingEvents->the_post(); ?>
        <?php include('partials/CompactEvent.php'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
  </div>

  <aside class="filtering">
    <div class="widget _tags">
      <h3 class="smalltitle">Filter by Region</h3>
      <ul>
        <li>
          <a href="#" class="Tag _midwest">Midwest</a>
        </li>
        <li>
          <a href="#" class="Tag _south">South</a>
        </li>
        <li>
          <a href="#" class="Tag _northeast">Northeast</a>
        </li>
        <li>
          <a href="#" class="Tag _west">West</a>
        </li>
        <li>
          <a href="#" class="Tag _online">Online</a>
        </li>
      </ul>
    </div>
    <!--
    <div class="widget _past">
      <h3 class="smalltitle">Past Events</h3>
      <?php if ( $pastEvents->have_posts() ) : ?>
      <ul>
      <?php while ( $pastEvents->have_posts() ) : $pastEvents->the_post(); ?>
        <li>
          <a href="#" class="title"><?php the_title() ;?></a>
          <span class="date">July 10th, 2016</span>
        </li>
      <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
    -->
  </aside>
</div>

<?php get_footer(); ?>
