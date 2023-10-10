
   @include('admin.css')
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
               
                <h1>Liste des Produits</h1>

<table class="table">
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
                <td>{{ $produit->prix }}</td>
                <td>{{ $produit->quantite_en_stock }}</td>
                <td><img src="{{ asset('produitimage/' . $produit->image) }}" alt="{{ $produit->nom }}" width="100"></td>
                <td>
                <a href="{{ url('admin.produits.edit', $produit->id) }}" class="btn btn-warning"> <i class="fas fa-eye"></i> </a>
                    <a href="{{ url('admin.produits.edit', $produit->id) }}" class="btn btn-primary"> <i class="fas fa-edit"></i></a>
                    <button class="btn btn-danger" onclick="suppression()"><i class="fas fa-trash"></i></button>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

                
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



    </body>
   
