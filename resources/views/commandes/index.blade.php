

<!DOCTYPE html>
<html lang="en">

<head>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h1 {
            font-size: 36px;
            color: #4031C2;
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
            background-color: #fff;
            border-radius: 15px;
        }

        table th, table td {
            padding: 8px 12px;
            text-align: left;
            border: 1px solid #ccc;
        }

        table th {
            background-color: #4031C2;
            color: #fff;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        ul li {
            margin-bottom: 4px;
        }
    </style>

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
    <h1>Liste des Commandes</h1>
    <table>
        <thead>
            <tr>
                <th>ID Client</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                <th>État</th>
               <th>Actions</th>

            </tr>
        </thead>
        <tbody>
        @if ($utilisateursAvecCommandes)
    @foreach ($utilisateursAvecCommandes as $client)
    
    <tr>
        <td>{{ $client->id }}</td>
        <td>{{ $client->name }}</td>
        <td>{{ $client->email }}</td>
        <td>{{ $client->adresse }}</td>
        <td>{{ $client->telephone }}</td>
        <td>{{ $client->etat }}</td>
        


        <!-- Notez que j'ai remplacé $commande par $client dans les liens -->
       <td><a href="{{ route('commandes.show', $client->id) }}" class="btn btn-info">Voir les détails</a></td>
        
        @if ($client->etat === 'En attente de validation')
           <td><a href="{{ route('commandes.valider', $client->id) }}" class="btn btn-success">Valider</a></td>
        @endif
    </tr>        
    @endforeach
@endif

      

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



    // js pour la gestions  de ces elements suivant CRUD.  
   

</body>

</html>
