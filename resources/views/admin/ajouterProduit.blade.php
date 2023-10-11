


<!DOCTYPE html>
<html lang="en">

<head>

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
                <div class="container">
             

<div class="container">
    <h1>Ajouter un Nouveau Produit</h1>
    @if(session('success'))
<div class="alert alert-success">
        {{session('success')}}
</div>

@endif
<form method="POST" action="{{ url('ajouterProduit') }}" enctype="multipart/form-data">
    @csrf <!-- Protection CSRF -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nom">Nom du Produit</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="categorieProduit">Catégorie Produit</label>
                <input type="text" class="form-control" id="categorieProduit" name="categorieProduit" required>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="image">Image du Produit</label>
        <input type="file" class="form-control-file" id="image" name="image">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="quantite_en_stock">Quantité en Stock</label>
                <input type="number" class="form-control" id="quantite_en_stock" name="quantite_en_stock" required>
            </div>
        </div>
    </div>
    
    <!-- Ajoutez d'autres champs du produit ici si nécessaire -->

    <button type="submit" class="btn btn-primary">Ajouter le Produit</button>
</form>
</div>

</div>



                <!-- Begin Page Content -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    
@include('admin.script')
</body>

</html>