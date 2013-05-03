<div class="hero-unit">
  <h1>Book the space</h1>
  <p>We are able to host meetings, socials, film screenings, action planning</p>
  <p>
    <a href="/book/uses" class="btn btn-primary btn-large">
      Learn more
    </a>
  </p>
</div>

<?php echo Form::open(array('action' => '/', 'method' => 'post', 'id' => 'signup_form')); ?>
<?php echo Form::hidden(Config::get('security.csrf_token_key'), Security::fetch_token());?>
<?php echo render('book/_event_book_form'); ?>
<?php echo Form::submit('submit', ' ', array('class' => 'btn-align sprite pull-right', 'id' => 'signin_button')); ?>
<?php echo Form::close(); ?>