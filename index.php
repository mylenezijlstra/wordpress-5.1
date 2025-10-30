<?php get_header(); ?>

<!-- Witte balk bovenaan -->
<div class="slogan-balk">
  <p>Verre reizen. Voor iedereen uniek.</p>
</div>

<!-- Slideshow container -->
<div class="slideshow-wrapper">
  <div class="slideshow-track">

    <?php
    $args = array(
      'post_type' => 'bestemmingen',
      'posts_per_page' => -1
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();

        $hero = get_field('hero_image');
        $extra = get_field('extra_foto');

        if ($hero): ?>
          <div class="slide">
            <img src="<?php echo esc_url($hero['url']); ?>" alt="<?php echo esc_attr($hero['alt']); ?>">
          </div>
        <?php endif;

        if ($extra): ?>
          <div class="slide">
            <img src="<?php echo esc_url($extra['url']); ?>" alt="<?php echo esc_attr($extra['alt']); ?>">
          </div>
        <?php endif;

      endwhile;
      wp_reset_postdata();
    endif;
    ?>

  </div>
</div>

<!-- Slideshow script -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector('.slideshow-track');
    const slides = document.querySelectorAll('.slide');
    let index = 0;

    function moveSlide() {
      index = (index + 1) % slides.length;
      track.style.transform = `translateX(-${index * 100}vw)`;
    }

    setInterval(moveSlide, 4000); // elke 4 seconden
  });
</script>


<main class="bestemmingen-onepager">

  <?php
  $args = array(
    'post_type' => 'bestemmingen',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC'
  );
  $query = new WP_Query($args);
  $counter = 0;


if ($query->have_posts()) :
  while ($query->have_posts()) : $query->the_post();
    $counter++;
    $bg_class = ($counter % 2 == 0) ? 'bg-groen' : 'bg-wit';
?>

  <section class="bestemming-blok <?php echo $bg_class; ?>">

    <!-- Titel boven de foto -->
    <h2 class="bestemming-titel"><?php the_title(); ?></h2>

    <!-- Hero afbeelding over volledige breedte -->
    <?php
    $hero = get_field('hero_image');
    if ($hero):
    ?>
      <div class="hero-image">
        <img src="<?php echo esc_url($hero['url']); ?>" alt="<?php echo esc_attr($hero['alt']); ?>">
      </div>
    <?php endif; ?>

    <div class="bestemming-content">

      <div class="linkerkant">
        <!-- Weetjes -->
        <?php
        $pluspunten = [];
        for ($i = 1; $i <= 5; $i++) {
          $punt = get_field('pluspunt_' . $i);
          if ($punt) {
            $pluspunten[] = $punt;
          }
        }

        if (!empty($pluspunten)):
        ?>
          <div class="weetjes">
            <h3>Leuke pluspunten om te weten</h3>
            <ul>
              <?php foreach ($pluspunten as $punt): ?>
                <li><?php echo esc_html($punt); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>

        <!-- Extra foto -->
        <?php
        $extra = get_field('extra_foto');
        if ($extra):
        ?>
          <div class="extra-foto">
            <img src="<?php echo esc_url($extra['url']); ?>" alt="<?php echo esc_attr($extra['alt']); ?>">
          </div>
        <?php endif; ?>
      </div>

      <!-- Informatie rechts -->
      <div class="rechterkant">
        <?php
        $info = get_field('informatie');
        if ($info):
        ?>
          <div class="informatie">
            <h3>Informatie</h3>
            <?php echo $info; ?>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </section>

<?php
  endwhile;
  wp_reset_postdata();
endif;
?>

</main>

<?php get_footer(); ?>
