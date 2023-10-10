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
        <h1>Liste des Utilisateurs</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->adresse }}</td>
                        <td>{{ $user->telephone }}</td>
                        <td>
                            <a href="{{ url('/admin/edition/{id}/edit', $user->id) }}" class="btn btn-primary">Modifier</a>
                            <a href="{{ url('/admin/supression/{id}', $user->id) }}" class="btn btn-danger">Supprimer</a>
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

</html>