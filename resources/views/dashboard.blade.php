<x-app-layout>


<!-- ======= Header ======= -->

   <!-- ======= Pricing Section ======= -->
 @include('User.produit')
   <!-- End Pricing Section -->

    <!-- ======= Pricing Section ======= -->
 <!-- resources/views/index.blade.php -->

 <section class="listproduit">
    <div class="container">
        <h1 class="text-center mb-4">Liste des Produits</h1>

        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($produits as $produit)
                <div class="col">
                    <div class="card h-100">
                        @if ($produit->image)
                            <img class="card-img-top" src="{{ asset('produitimage/' . $produit->image) }}" alt="{{ $produit->nom }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $produit->nom }}</h5>
                            <p class="card-text"><strong>Catégorie:</strong> {{ $produit->categorieProduit }}</p>
                            <p class="card-text"><strong>Prix:</strong> {{ $produit->prix }} FCFA</p>
                          
                          </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i> Détails</a>
                            <a href="#" class="btn btn-success btn-sm"><i class="fas fa-cart-plus"></i> Ajouter au panier</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

   <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
   
      </div>
    </section><!-- End Frequently Asked Questions Section -->
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="footer-info">
            <h3>SEN-TECH</h3>
            <p>
              Scat Urbam <br>
              Dakar, Senegal<br><br>
              <strong>Phone:</strong>33 867 67 67<br>
              <strong>Email:</strong> info.sen-tech@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Nos liens</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">A propos </a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Nos reglements</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Nos Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Materiel informatique</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Maintenance informatique</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">creation de site internet</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Formation bureautique</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Notre devise</h4>
          <p>Nous disposons des services de solution informatique</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>SEN-TECH</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
      Designed by <a href="https://bootstrapmade.com/">sen-tech</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


</x-app-layout>
