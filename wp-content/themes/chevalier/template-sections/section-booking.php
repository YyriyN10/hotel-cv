<?php /* Section Booking */ if (!empty($section = get_field('section_booking', 'options'))) : ?>
  <div class="container">

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

         <div id="ServioContainer"></div>
        <div id="ServioResult"></div>
        <script src="https://sbj.rkz.io/servio-booking.js?module_id=65&lang=uk"></script>

      </div>
    </div>

  </div>
<?php /* Section Booking End */ endif; ?>