<x-app-layout>


<!-- ======= Header ======= -->

   <!-- ======= Pricing Section ======= -->

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
                            <button class="btn btn-primary btn-sm details-btn" data-toggle="modal" data-target="#detailsModal{{ $produit->id }}">
                            <i class="bi bi-info-circle"></i> Détails
                            </button>
                            <a href="#" class="btn btn-success btn-sm"><i class="bi bi-cart-plus-fill"></i> Ajouter au panier</a>
                        </div>
                    </div>
                </div>

                <!-- Modal for Product Details -->
                <div class="modal fade" id="detailsModal{{ $produit->id }}" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailsModalLabel">Détails du Produit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Tableau des détails du produit -->
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nom</th>
                                            <td>{{ $produit->nom }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Description</th>
                                            <td>{{ $produit->description }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Catégorie</th>
                                            <td>{{ $produit->categorieProduit }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Prix</th>
                                            <td>{{ $produit->prix }} FCFA</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Quantité en stock</th>
                                            <td>{{ $produit->quantite_en_stock }}</td>
                                        </tr>
                                        <tr>
                            <th scope="row">Image</th>
                            <td>
                                @if ($produit->image)
                                    <img src="{{ asset('produitimage/' . $produit->image) }}" alt="{{ $produit->nom }}" style="max-width: 100px;">
                                @else
                                    Aucune image disponible
                                @endif
                            </td>
                        </tr>
                                        <!-- Ajouter d'autres détails du produit ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Assure-toi d'inclure jQuery et Bootstrap JS dans ta page -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

<script>
    // Script pour afficher/masquer les détails du produit dans le modal
    $(document).ready(function () {
        $('.details-btn').click(function () {
            // Trouve le modal associé au bouton cliqué
            var modalId = $(this).data('target');
            var modal = $(modalId);

            // Affiche le modal
            modal.modal('show');
        });
    });
</script>


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
            <h3>Sailor</h3>
            <p>
              A108 Adam Street <br>
              NY 535022, USA<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
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
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
