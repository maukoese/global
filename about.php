<?php
/**
 * Template Name:About
 * Template Post Type: page
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Jabali Global
 * @since 0.1
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <ul class="l-main-content main-content">
      <li class="l-section section section--is-active">
        <div class="about">
          <div class="about--banner">
            <h2>We<br>believe in<br>passionate<br>people</h2>
            <a href="#0">Career
              <span>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                  <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                </g>
                </svg>
              </span>
            </a>
            <img src="<?php echo ( get_template_directory_uri() ); ?>/assets/img/about-visual.png" alt="About Us">
          </div>
          <div class="about--options">
            <a href="#0">
              <h3>Winners</h3>
            </a>
            <a href="#0">
              <h3>Philosophy</h3>
            </a>
            <a href="#0">
              <h3>History</h3>
            </a>
          </div>
        </div>
      </li>
    </ul>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>