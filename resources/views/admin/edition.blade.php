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

                <!-- Begin Page Content -->
             

            
    <div class="container">
        <h1>Modifier l'Utilisateur</h1>
        <form method="POST" action="{{ url('admin.modification', $user->id) }}">
            @csrf
            @method('PUT')
            <!-- Champs de modification de l'utilisateur -->
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="name" id="nom" value="{{ old('name', $users->name) }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control">
            </div>
            <!-- Ajoutez d'autres champs de modification ici -->

            <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
        </form>
          
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    
@include('admin.script')
</body>

</html>