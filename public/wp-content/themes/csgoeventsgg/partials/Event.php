<article class="Event _compact">
  <div class="Event-content">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>
  <div class="Event-actions">
    <a href="<?php the_permalink(); ?>" class="Event-actions-view">View Details</a>
    <a href="<?php the_permalink(); ?>" class="Event-actions-region _midwest">Midwest</a>
  </div>
</article>

<article class="Event _compact">
  <div class="Event-content">
    <span class="Event-host">
      <img src="" alt="">
    </span>
    <div class="Event-date">
      <span class="Event-date-day"></span>
      <span class="Event-date-month"></span>
    </div>
    <div class="Event-title">
      <h3 class="Event-title-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p class="Event-title-sub">{% if entry.cashpot %}{{ entry.cashpot }}{% endif %} {% for eventtype in eventtypes %}{{ eventtype }}{% endfor %}</p>
    </div>
    <div class="Event-shortlocation"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>{{ entry.shortlocation }}</div>
  </div>
  <div class="Event-actions">
    <a href="<?php the_permalink() ;?>" class="Event-actions-view">View Details</a>
    <a href="#" class="{{ regionClass }}">{{ region.title }}</a>
  </div>
</article>
