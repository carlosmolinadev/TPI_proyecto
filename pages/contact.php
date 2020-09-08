<?php
    define('TITLE', 'Contactanos');
    include('../includes/header.php');
    include('../includes/navBar.php');
?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>Contactanos, sera un placer atenderte!</p>
        </div>
      </div>

      <div class="map" style="text-align: center;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.762462553496!2d-89.26276848465332!3d13.672202802815429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f632e30d0c0b573%3A0x4cc1f44b289801e9!2sBulevar%20Vijosa!5e0!3m2!1sen!2ssv!4v1599594103278!5m2!1sen!2ssv" width="1100" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <h4>Dirección</h4>
                <p>Boulevar Vijosa, Ciudad Merliot, La Libertad</p>
              </div>

              <div class="open-hours">
                <h4>Horarios:</h4>
                <p>
                  Lunes a Domingo:<br>
                  10:00 AM - 4:00 PM
                </p>
              </div>

              <div class="email">
                <h4>Email:</h4>
                <p>elsalvadortours@gmal.com</p>
              </div>

              <div class="phone">
                <h4>Telefono:</h4>
                <p>7898 5855</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email"/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto"/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="Mesage" rows="8" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>
              <div class="btn btn-login btn-dark mb-3">Mandar mensaje</div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

<?php
    include('../includes/footer.php');
?> 