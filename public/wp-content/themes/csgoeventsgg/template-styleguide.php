<?php
/*
Template Name: Styleguide
*/
get_header();
?>
<div class="view styleguide">
  <h1>Styleguide</h1>

  <div class="styleguide-block">
    <h2 class="styleguide-block-header">Typography</h2>
    <h1 class="type-1">Header 1</h1>
    <h1 class="type-2">Header 2</h1>
    <h1 class="type-3">Header 3</h1>
    <h1 class="type-4">Header 4</h1>
    <h1 class="type-5">Header 5</h1>
    <h1 class="type-6">Header 6</h1>
    <p class="type-body">Body copy.</p>
    <p class="type-body-large">Larger body copy.</p>
    <span class="type-smallcaps">Smallcaps</span>
  </div>

  <div class="styleguide-block">
    <h2 class="styleguide-block-header">Colors</h2>
    <div class="styleguide-block-child">
      <h3 class="styleguide-block-subheader">Base Colors</h3>
      <ul class="styleguide-block-colors">
        <li>
          <a href="#" title="$primary" class="js-copy-color Color _primary">
            <label>$primary</label>
          </a>
        </li>
        <li>
          <a href="#" title="$secondary" class="js-copy-color Color _secondary">
            <label>$secondary</label>
          </a>
        </li>
        <li>
          <a href="#" title="$white" class="js-copy-color Color _white">
            <label>$white</label>
          </a>
        </li>
        <li>
          <a href="#" title="$subtle" class="js-copy-color Color _subtle">
            <label>$subtle</label>
          </a>
        </li>
        <li>
          <a href="#" title="$body" class="js-copy-color Color _body">
            <label>$body</label>
          </a>
        </li>
        <li>
          <a href="#" title="$bodyLight" class="js-copy-color Color _bodyLight">
            <label>$bodyLight</label>
          </a>
        </li>
        <li>
          <a href="#" title="$nav" class="js-copy-color Color _nav">
            <label>$nav</label>
          </a>
        </li>
        <li>
          <a href="#" title="$navHighlight" class="js-copy-color Color _navHighlight">
            <label>$navHighlight</label>
          </a>
        </li>
        <li>
          <a href="#" title="$passive" class="js-copy-color Color _passive">
            <label>$passive</label>
          </a>
        </li>
        <li>
          <a href="#" title="$footer" class="js-copy-color Color _footer">
            <label>$footer</label>
          </a>
        </li>
        <li>
          <a href="#" title="$footerDark" class="js-copy-color Color _footerDark">
            <label>$footerDark</label>
          </a>
        </li>
        <li>
          <a href="#" title="$footerDarkText" class="js-copy-color Color _footerDarkText">
            <label>$footerDarkText</label>
          </a>
        </li>
        <li>
          <a href="#" title="$footerTitle" class="js-copy-color Color _footerTitle">
            <label>$footerTitle</label>
          </a>
        </li>
      </ul>
    </div>
    <div class="styleguide-block-child">
      <h3 class="styleguide-block-subheader">Region Colors</h3>
      <ul class="styleguide-block-colors">
        <li>
          <a href="#" title="$midwest" class="js-copy-color Color _midwest">
            <label>$midwest</label>
          </a>
        </li>
        <li>
          <a href="#" title="$south" class="js-copy-color Color _south">
            <label>$south</label>
          </a>
        </li>
        <li>
          <a href="#" title="$northeast" class="js-copy-color Color _northeast">
            <label>$northeast</label>
          </a>
        </li>
        <li>
          <a href="#" title="$west" class="js-copy-color Color _west">
            <label>$west</label>
          </a>
        </li>
        <li>
          <a href="#" title="$online" class="js-copy-color Color _online">
            <label>$online</label>
          </a>
        </li>
      </ul>
    </div>
    <div class="styleguide-block-child">
      <h3 class="styleguide-block-subheader">Brand Colors</h3>
      <ul class="styleguide-block-colors">
        <li>
          <a href="#" title="$twitch" class="js-copy-color Color _twitch">
            <label>$twitch</label>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="styleguide-block">
    <h2 class="styleguide-block-header">Buttons</h2>
    <div class="styleguide-block-child">
      <h3 class="styleguide-block-subheader">Common</h3>
      <button class="Button _primary">Primary</button>
      <button class="Button _secondary">Secondary</button>
    </div>
    <div class="styleguide-block-child">
      <h3 class="styleguide-block-subheader">Region Tags</h3>
      <button class="Tag _midwest">Midwest</button>
      <button class="Tag _south">South</button>
      <button class="Tag _northeast">North East</button>
      <button class="Tag _west">West</button>
      <button class="Tag _online">Online</button>
    </div>
  </div>

  <div class="styleguide-block">
      <h2 class="styleguide-block-header">Alerts</h2>
  </div>
</div>

<?php get_footer(); ?>
