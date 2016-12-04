<?php
// WP
$eventID = get_the_ID();
$eventTitle = get_the_title($eventID);
$eventPermalink = get_permalink($eventID);

// Hosts
$hostsField = get_field('hosts', false, false);
$hosts = new WP_Query(array(
  'post_type'       => 'hosts',
  'posts_per_page'  => 1,
  'post__in'      => $hostsField,
  'post_status'   => 'any',
  'orderby'         => 'post__in',
));

// Region
$region = get_field('region');
$regionName = $region->name;
$regionNameLower = strtolower($regionName);
?>

<article class="Event _compact">
  <div class="Event-content">
    <span class="Event-host">
      <?php if ( $hosts->have_posts() ) : ?>
      <?php while ( $hosts->have_posts() ) : $hosts->the_post(); ?>
        <img src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?> Logo">
      <?php endwhile; ?>
      <?php endif; ?>
    </span>
    <div class="Event-date">
      <span class="Event-date-day"></span>
      <span class="Event-date-month"></span>
    </div>
    <div class="Event-title">
      <h3 class="Event-title-header">
        <a href="<?php echo $eventPermalink; ?>"><?php echo $eventTitle; ?></a>
      </h3>
      <p class="Event-title-sub"></p>
    </div>
    <div class="Event-shortlocation">
      <i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>
      <?php the_field('short_location'); ?>
    </div>
  </div>
  <div class="Event-actions">
    <a href="<?php echo $eventPermalink; ?>" class="Event-actions-view" title="View Details">View Details</a>
    <span class="Event-actions-region _<?php echo $regionNameLower; ?>"><?php echo $regionName; ?></span>
  </div>
</article>
