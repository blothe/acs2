<?php get_header(); ?>
<div class="contenant p-5">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"> <img src="<?php bloginfo('template_directory'); ?>/img/Logo.png" alt="logo restaurant lambda"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
      </div>
    </nav>
  </div>
  <section class="promo text-normal" id="home">
    <div class="text-center"  >
      <h1 class="centrer pt-5">the right ingredients</h1>
      <h1 class="centrer pb-5 ">for the right food</h1>
      <img src="<?php bloginfo('template_directory'); ?>/img/divider_white.png" alt="divider_white">
    </div>
    <div class="text-center">
      <a href="#reservations"><button class="btn_table">BOOK A TABLE</button></a>
      <a href="#menu"><button class="btn_menu">SEE THE MENU</button></a>
    </div>
  </section>
</div>
<section class="about text-normal" id="about">
  <?php
  $args = array( 'post_type' => 'prés. cuisine', 'posts_per_page' => 1 );
  $the_query = new WP_Query( $args );
  ?>
  <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="container p-5" >
        <div class="row">
          <div class=" cuisto text-center col-sm-6 pt-5">
            <div class="custom"><h2 class="py-4"><?php the_title(); ?></h2></div>
            <div class="custom"><img src="<?php bloginfo('template_directory'); ?>/img/divider_gold.png" alt="separation" /></div>
            <div class="custom"><?php the_content(); ?></div>
            <div class="custom"><img src="<?php bloginfo('template_directory'); ?>/img/about_cook.png" alt="photo about" class="offset-md-2"/></div>
          </div>
          <div class="col-sm-6">
            <img src="<?php bloginfo('template_directory'); ?>/img/about_dish.png" alt="plate" />
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</section>
<section class="ingredient parallax2" id="ingredients">
  <?php
  $args = array( 'post_type' => 'prés. ingrédients', 'posts_per_page' => 1 );
  $the_query = new WP_Query( $args );
  ?>
  <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="container p-5">
        <div class="row pt-5">
          <div class="fine_ingredients col-md-6 p-5 ml-auto text-center">
            <div class="custom"><h2 class="pb-2"><?php the_title(); ?></h2></div>
            <div class="custom"><img src="<?php bloginfo('template_directory'); ?>/img/divider_white1.png" class="img-fluid divider_white" alt="divider"></div>
            <div class="custom"><?php the_content(); ?></div>
            <div class="custom"><ul class="list-unstyled">
              <li><img src="<?php bloginfo('template_directory'); ?>/img/ingredient_img1.png" class="img-fluid" alt="ingredient 1"></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/img/ingredient_img2.png" class="img-fluid" alt="ingredient 2"></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/img/ingredient_img3.png" class="img-fluid" alt="ingredient 3"></li>
            </ul></div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</section>
<section class="menu" id="menu">
  <div class="container p-5">
    <div class="row">
      <div class="appetisers col text-center">
        <h2>Appetisers</h2>
        <img src="<?php bloginfo('template_directory'); ?>/img/divider_black.png" class="img-fluid divider_white" alt="divider">
        <div class="dish text-left">
          <div class="dish-title row">
            <p class="col-9">Tzatsiki</p>
            <p class="price col-3">$3.99</p>
          </div>
          <p class="m_ingredients row">
            Refreshing traditional cucumber and garlic yoghurt dip.
          </p>
        </div>
        <div class="dish text-left">
          <div class="dish-title row">
            <p class="col-9">Aubergine Salad</p>
            <p class="price col-3">$5.50</p>
          </div>
          <p class="m_ingredients row">
            Pureed eggplant, garlic, green pepper and tomato dip.
          </p>
        </div>
        <div class="dish text-left">
          <div class="dish-title row">
            <p class="col-9">Aubergine Salad</p>
            <p class="price col-3">$5.25</p>
          </div>
          <p class="m_ingredients row">
            Pureed eggplant, garlic, green pepper and tomato dip.
          </p>
        </div>
        <h2>Salads</h2>
        <img src="<?php bloginfo('template_directory'); ?>/img/divider_black.png" class="img-fluid divider_white" alt="divider">
        <div class="dish text-left">
          <div class="dish-title row">
            <p class="col-9">Olive Special</p>
            <p class="price col-3">$5.99</p>
          </div>
          <p class="m_ingredients row">
            Refreshing traditional cucumber and garlic yoghurt dip.
          </p>
        </div>
        <div class="row special-label">
          <div class="col-9"> </div>
          <p class="col-3">Special</p>
        </div>
        <div class="dish special-dish text-left">
          <div class="dish-title row">
            <p class="col-9">Greek Salad</p>
            <p class="price col-3">$5.50</p>
          </div>
          <p class="m_ingredients row">
            Pureed eggplant, garlic, green pepper and tomato dip.
          </p>
        </div>
        <div class="dish text-left">
          <div class="dish-title row">
            <p class="col-9">Gusto Salad</p>
            <p class="price col-3">$5.25</p>
          </div>
          <p class="m_ingredients row">
            Pureed eggplant, garlic, green pepper and tomato dip.
          </p>
        </div>
      </div>
      <div class="starters col text-center">
        <h2>Starters</h2>
        <img src="<?php bloginfo('template_directory'); ?>/img/divider_black.png" class="img-fluid divider_white" alt="divider">
        <div class="dish text-left">
          <div class="dish-title row">
            <p class="col-9">Haloumi</p>
            <p class="price col-3">$3.99</p>
          </div>
          <p class="m_ingredients row">
            Refreshing traditional cucumber and garlic yoghurt dip.
          </p>
        </div>
        <div class="dish text-left">
          <div class="dish-title row">
            <p class="col-9">Spinash Pie</p>
            <p class="price col-3">$5.50</p>
          </div>
          <p class="m_ingredients row">
            Pureed eggplant, garlic, green pepper and tomato dip.
          </p>
        </div>
        <h2>Main Dishes</h2>
        <img src="<?php bloginfo('template_directory'); ?>/img/divider_black.png" class="img-fluid divider_white" alt="divider">
        <div class="dish text-left">
          <div class="dish-title row">
            <p class="col-9">Cornish Mackerel</p>
            <p class="price col-3">$5.99</p>
          </div>
          <p class="m_ingredients row">
            Refreshing traditional cucumber and garlic yoghurt dip.
          </p>
        </div>
        <div class="row special-label">
          <div class="col-9"> </div>
          <p class="col-3">Special</p>
        </div>
        <div class="dish special-dish text-left">
          <div class="dish-title row">
            <p class="col-9">Roast Lamb</p>
            <p class="price col-3">$5.50</p>
          </div>
          <p class="m_ingredients row">
            Pureed eggplant, garlic, green pepper and tomato dip.
          </p>
        </div>
        <div class="dish text-left">
          <div class="dish-title row">
            <p class="col-9">Fried Chicken</p>
            <p class="price col-3">$5.25</p>
          </div>
          <p class="m_ingredients row">
            Pureed eggplant, garlic, green pepper and tomato dip.
          </p>
        </div>
        <div class="dish text-left">
          <div class="dish-title row">
            <p class="col-9">Pastitsio</p>
            <p class="price col-3">$5.99</p>
          </div>
          <p class="m_ingredients row">
            Refreshing traditional cucumber and garlic yoghurt dip.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="reviews parallax3" id="reviews">
  <?php
  $args = array( 'post_type' => 'avis client', 'posts_per_page' => 1 );
  $the_query = new WP_Query( $args );
  ?>
  <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="container p-5">
        <div class="row pt-5 ">
          <div class="quote col-md-6 p-5 mx-auto text-center col-centered">
            <div class="custom"><h2><?php the_title(); ?></h2></div>
            <div class="custom"><img src="<?php bloginfo('template_directory'); ?>/img/divider_white1.png" class="img-fluid divider_white" alt="divider"></div>
            <div class="custom"><p class="qtext mt-3">
              <?php the_content(); ?>
            </p></div>
            <div class="custom"><p class="signature">
              - <?php the_author(); ?>
            </p></div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</section>
<section class="reservations" id="reservations">
  <?php
  $args = array( 'post_type' => 'form. réservation', 'posts_per_page' => 1 );
  $the_query = new WP_Query( $args );
  ?>
  <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="container p-5">
        <div class="row py-5">
          <img src="<?php bloginfo('template_directory'); ?>/img/reservations_image2.jpg" alt="plat 1" class="img-responsive col-12 col-md-3">
          <img src="<?php bloginfo('template_directory'); ?>/img/reservations_image1.jpg" alt="dessert"  class="img-responsive col-12 col-md-3">
          <div class="col-12 col-md-6 text-center">
            <div class="custom"><h2><?php the_title(); ?></h2></div>
            <img src="<?php bloginfo('template_directory'); ?>/img/divider_gold.png" class="img-fluid divider_white" alt="divider">
            <div class="content text-center mt-2">
              <div class="custom"><p><?php the_content(); ?></div>
              </p>
            </div>
            <form class="contact" action="index.html" method="post">
              <div class="form-row text-left">
                <div class="form-group col-md-6">
                  <label for="name"><strong>Nom</strong></label><br>
                  <input type="text" class="form-control" id="name" name="yourname" value="votre nom *">
                </div>
                <div class="form-group col-md-6">
                  <label for="email"><strong>Email</strong></label><br>
                  <input type="email" class="form-control" id="email" name="youremail" placeholder="votre email *">
                </div>
                <div class="form-group col-md-6">
                  <label for="date"><strong>Date</strong></label><br>
                  <input type="text" class="form-control" id="date" name="choosedate" value="date *">
                </div>
                <div class="form-group col-md-6">
                  <label for="number"><strong>Nombre de convives</strong></label><br>
                  <select class="form-control" id="number" name="partynb">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                </div>
              </div>
              <input type="submit" value="Réservez maintenant !" class="goldbutton btn btn-warning">
            </form>
          </div>
          <div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else:  ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </section>
    <footer class="bg-dark">
      <div class="container">
        <div class="row ">
          <section class="col-lg-4 col-md-6 text-center" id="à propos">
            <?php
            $args = array( 'post_type' => 'à propos', 'posts_per_page' => 1 );
            $the_query = new WP_Query( $args );
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <img src="<?php bloginfo('template_directory'); ?>/img/divider_white1.png" class="img-fluid divider_white_s p-2">
            <div class="content pt-2">
              <?php the_content(); ?>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else:  ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
          </section>
          <section class="col-lg-4 col-md-6 text-center" id="horaires ouverture">
            <?php
            $args = array( 'post_type' => 'horaires ouverture', 'posts_per_page' => 1 );
            $the_query = new WP_Query( $args );
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <img src="<?php bloginfo('template_directory'); ?>/img/divider_white1.png" class="img-fluid divider_white_s p-2 pb-2">
            <div class="content">
              <br>
              <?php the_content(); ?>
            </div>
            <ul class="list-unstyled">
              <li><i class="fab fa-cc-visa m-2"></i></li>
              <li><i class="fab fa-cc-mastercard m-2"></i></li>
              <li><i class="fab fa-cc-paypal m-2"></i></li>
              <li><i class="fab fa-cc-discover m-2"></i></li>
            </ul>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else:  ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
          </section>
          <section class="col-lg-4 col-md-6 text-center" id="adresse">
            <?php
            $args = array( 'post_type' => 'adresse', 'posts_per_page' => 1 );
            $the_query = new WP_Query( $args );
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <img src="<?php bloginfo('template_directory'); ?>/img/divider_white1.png" class="img-fluid divider_white_s p-2">
            <div class="content">
              <br>
              <?php the_content(); ?>
            </div>
            <ul class="list-unstyled">
              <li><i class="fab fa-facebook-square mr-2"></i></li>
              <li><i class="fab fa-youtube m-2"></i></li>
              <li><i class="fab fa-twitter m-2"></i></li>
              <li><i class="fab fa-instagram m-2"></i></li>
            </ul>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else:  ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
          </section>
        </div>
      </div>
    </footer>
    <?php get_footer(); ?>
