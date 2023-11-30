<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>


  <main id="content" class="" role="main">

		<div class="c-container">
      <div class="c-card">

        <h1 class="c-title c-card__title">Inscription à "PARTIE DOMINICALE DIMANCHE 07 Novembre 2021"</h1>
        <form class="c-form">
          <fieldset class="c-form__fieldset ">
            <legend class="c-form__legend">Informations personnelles</legend>
            <div class="c-form__field">
              <label class="c-form__label" for="name">Nom & prénom <span class="c-form__field-required">(requis)</span></label>
              <input type="text" id="name">
            </div>
            <span class="c-form-error"></span>

            <div class="c-form__field c-form__field--error">
              <label class="c-form__label" for="name">Pseudo <span class="c-form__field-required">(requis)</span></label>
              <input type="text" id="name">
              <span class="c-form__field-infos c-form__field-infos--error">Merci de remplir ce champs</span>
            </div>
            
            <div class="c-form__field">
              <label class="c-form__label" for="email">Email</label>
              <input type="email" id="email">
            </div>

            <div class="c-form__field">
              <label class="c-form__label" class="c-form__label" for="birthdate">Date de naissance <span class="c-form__field-required">(requis)</span></label>
              <input type="date" id="birthdate">
              <span class="c-form__field-infos">Nous vous rappelons que selon la loi, les mineurs sont interdits.</span>
            </div>
          </fieldset>

          <fieldset class="c-form__fieldset">
            <legend class="c-form__legend">Informations partie</legend>
            <div class="c-form__field c-form__field--radio">
              <span class="c-form__label">Choix du camps <span class="c-form__field-required">(requis)</span></span>
              <div class="c-form-radio">
                <input class="c-form-radio__input" type="radio" id="camo" name="camps">
                <label class="c-form-radio__label c-form__label" for="camo">Camo</label>
              </div>
              <div class="c-form-radio">
                <input class="c-form-radio__input" type="radio" id="civil" name="camps">
                <label class="c-form-radio__label c-form__label" for="civil">Civil</label>
              </div>
            </div>
          </fieldset>
          <div class="c-form__field c-form__field--inline c-form__field--checkbox">
            <div class="c-form-checkbox">
              <input class="c-form-checkbox__input" type="checkbox" id="cgv">
              <label class="c-form-checkbox__label c-form__label" for="cgv">Je m'engage à respecter les <a href="https://www.facebook.com/events/1063796401056116/">règles de la partie</a></label>
            </div>
          </div>
          <br><br>
          <div class="c-form__field">
            <button type="submit" class="c-button c-button--primary">S'inscrire</button>
          </div>
        </form>

      </div>
    </div>
    
    <br><br><br>

    <div class="c-container">
      <div class="c-card">
      <?php $loop = new WP_Query( array( 'post_type' => 'partie', 'posts_per_page' => '10' ) ); ?>
        <ul>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <li>
            <h1><?php the_title() ?></h1>
            <p>Date : <?php the_field('game_date') ?> de <?php the_field('game_start') ?> à <?php the_field('game_end') ?></p>
            <?php the_content() ?>
            <br><br>
            <p>Liste de joueurs :</p>
            <?php if( have_rows('game_player_list') ): ?>
            <ul class="">
              <?php while( have_rows('game_player_list') ): the_row(); ?>
                <li>
                  <span><?php the_sub_field('player_name'); ?></span>
                  <span><?php the_sub_field('player_pseudo'); ?></span>
                  <span><?php the_sub_field('player_birthday'); ?></span>
                  <span><?php the_sub_field('player_mail'); ?></span>
                  <span><?php the_sub_field('player_side'); ?></span>
                  <span><?php the_sub_field('player_registration'); ?></span>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php else: ?>
              <p>Aucun joueur</p>
          <?php endif; ?>
          </li>
        <?php endwhile; wp_reset_query(); ?>
        </ul>

        <?php 

        acf_form([
          'field_groups' => [12],
          'post_id' => 11
        ]);
  
        ?>
      </div>
    </div>
	</main><!-- .site-main -->


<?php
get_footer();
