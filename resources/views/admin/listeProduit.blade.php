
   @include('admin.css')
   <!--  cecci sont des bibliotheque de SweetAlert2 afin de gerer la partie supression avec du js afin de
permettre la page beaucoup plus pro et conviviale -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
@include('admin.sidebare')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar    le navbar-->
                
                 @include('admin.navbar')
                 <div class="container">
    
    @if(session('success'))
<div class="alert alert-success">
        {{session('success')}}
</div>
@endif
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
               
                <h1 class="display-4 text-primary" style="text-align: center;font-weight:100">Liste des Produits</h1>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Produit</th>
                <th>Catégorie du Produit</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Quantité en Stock</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td>{{ $produit->id }}</td>
                    <td>{{ $produit->nom }}</td>
                    <td>{{ $produit->categorieProduit }}</td>
                    <td>{{ $produit->description }}</td>
                    <td>${{ $produit->prix }}</td>
                    <td>{{ $produit->quantite_en_stock }}</td>
                    <td>
                        <img src="{{ asset('produitimage/' . $produit->image) }}" alt="{{ $produit->nom }}" width="100">
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                        <a href="{{ route('produits.details', ['produit' => $produit->id]) }}" class="btn btn-info">Voir Détails</a>
                                <i class="fas fa-eye"></i>S
                            </a>
                            <a href="{{ route('produits.edit', ['produit' => $produit->id]) }}" class="btn btn-primary mr-2" title="Éditer le produit">
                                <i class="fas fa-edit"></i>M
                            </a>
                            <button class="btn btn-danger btn-delete" 
                                data-url="{{ route('produits.destroy', $produit->id) }}" 
                                data-id="{{ $produit->id }}">
                                <i class="fas fa-trash"></i>S
                            </button>

                            <!-- <form action="{{ route('produits.destroy', $produit->id) }}" method="POST">
                            <button class="btn btn-danger" onclick="suppression()" title="Supprimer le produit">
                                <i class="fas fa-trash"></i>S -->
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
         
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
  @include('admin.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    
@include('admin.script')

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Écoutez les clics sur les boutons de suppression
        const deleteButtons = document.querySelectorAll('.btn-delete');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const url = this.getAttribute('data-url');
                const productId = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Confirmation',
                    text: 'Êtes-vous sûr de vouloir supprimer ce produit ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler',
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(url, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire('Succès', data.message, 'success');

                                // Actualisez la page
                                window.location.reload();
                            } else {
                                Swal.fire('Erreur', data.message, 'error');
                            }
                        })
                        .catch(error => {
                            console.error('Erreur lors de la suppression :', error);
                        });
                    }
                });
            });
        });
    });
</script>


    </body>
   
