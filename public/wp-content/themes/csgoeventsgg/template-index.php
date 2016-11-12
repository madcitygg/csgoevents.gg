<?php
/*
Template Name: Index
*/
get_header();

$eventsArgs=array(
  'post_type' => 'events',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1
);
$events_feed = new WP_Query($eventsArgs);
?>

<div class="view index columns">
  <div class="upcoming">
    <h2 class="smalltitle">Upcoming Events</h2>
    <?php if ( $events_feed->have_posts() ) : ?>
      <?php while ( $events_feed->have_posts() ) : $events_feed->the_post(); ?>
        <?php include('partials/Event.php'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
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
    <div class="widget _past">
      <h3 class="smalltitle">Past Events</h3>
      <ul>
        <li>
          <a href="#" class="title">MWL16</a>
          <span class="date">July 10th, 2016</span>
        </li>
        <li>
          <a href="#" class="title">Fragdelphia 8.5</a>
          <span class="date">August 1st, 2016</span>
        </li>
        <li>
          <a href="#" class="title">GEXCon - CSGO 24 Team $5k </a>
          <span class="date">September 20th, 2016</span>
        </li>
      </ul>
    </div>
  </aside>
</div>

<?php get_footer(); ?>
