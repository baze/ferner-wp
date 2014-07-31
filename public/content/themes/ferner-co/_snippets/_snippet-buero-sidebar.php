<div class="_snippet-buero-sidebar" itemscope itemtype="http://schema.org/Attorney">
  <strong itemprop="name"><?php _e("Ferner & Kollegen in"); ?> <?php the_title(); ?></strong>
  <br>
  <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
     <span itemprop="streetAddress"><?php the_field('strasse_hausnummer'); ?></span>
     <div>
        <span itemprop="postalCode"><?php the_field('plz'); ?></span>
        <span itemprop="addressLocality"><?php the_field('ort'); ?></span>
      </div>     
  </div>
  <br>
  <div>Fon: <span itemprop="telephone"><?php the_field('telefon'); ?></span></div>
  <div>Fax: <span itemprop="telefax"><?php the_field('telefax'); ?></span></div>
  <br>
  <div>Mail: <span itemprop="mail"><a href="mailto:<?php the_field('e-mail'); ?>"><?php the_field('e-mail'); ?></a></span></div>
  <br>
  <a href="<?php the_field('kontaktlink'); ?>" class="button"><?php _e("Kontaktanfrage"); ?></a>
</div>