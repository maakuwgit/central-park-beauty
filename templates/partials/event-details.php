<?php

  $address = get_field('event_address');
  $date    = get_field('event_date');
  $start   = get_field('event_start_time');
  $end     = get_field('event_end_time');
  $details = get_field('event_details');
  $contact = get_field('event_contact');

?>
<dl class="event__details__description">

  <?php if ( $address ) : ?>
    <dt class="event__details__dt">Location</dt>
    <dd class="event__details__dd"><?php echo $address; ?></dd>
  <?php endif; ?>

  <?php if ( $date ) : ?>
    <dt class="event__details__dt">Date</dt>
    <dd class="event__details__dd"><?php echo $date; ?></dd>
  <?php endif; ?>

  <?php if ( $time ) : ?>
    <dt class="event__details__dt">Time</dt>
    <dd class="event__details__dd"><?php echo $start . '-' . $end; ?></dd>
  <?php endif; ?>

  <?php if ( $details ) : ?>
    <dt class="event__details__dt">Details</dt>
    <dd class="event__details__dd"><?php echo format_text($details); ?></dd>
  <?php endif; ?>

  <?php if ( $contact ) : ?>
    <dt class="event__details__dt">Main Contact</dt>
    <dd class="event__details__dd"><?php echo $contact['name']; ?><br><?php echo $contact['phone']; ?></dd>
  <?php endif; ?>

</dl>
<!-- .event__details__description -->