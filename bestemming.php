<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_header(); ?>

<body>


  <div id="content">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
    ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
        <?php
        $weetjes =  get_field("weetjes");
        print_r($weetjes);                                                  

        ?>
    <?php
      endwhile;
    else :
      echo '<p>Geen berichten gevonden.</p>';
    endif;
    ?>
  </div>





  <?php get_footer(); ?>
</body>


</html>