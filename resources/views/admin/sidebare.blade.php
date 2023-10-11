<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: blue;">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        
    </div>
    <div class="sidebar-brand-text mx-3"><strong>Gestion-Stock</strong><sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/administrator">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tableau de Bord</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Gesstion client
</div>


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <!-- <i class="fa-light fa-bars" style="color: #e2e614;"></i> -->
        <span style="font-size: 18px; font-weight:700; color:bolder">Gestion Commandes</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Commandes</h6>
            <a class="collapse-item" href="{{route('commandes.index')}}">Voir les commandes</a>
            <a class="collapse-item" href="#">Cards</a>
        </div>
    </div>
</li>
<hr class="sidebar-divider my-0">

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <!-- <i class="fas fa-fw fa-wrench"></i> -->
        <span style="font-size: 18px; font-weight:700; color:bolder" >Gestion Utilisateur</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion Utilisateurs:</h6> 
            <a class="collapse-item" href="{{url('produit') }}">Listes des Utilisateur</a>
            <a class="collapse-item" href="{{url('ajouterProduit') }}">Ajouter un produit</a>
            <a class="collapse-item" href="{{url('adminproduit')}}">Afficher Liste Produit</a>
            <!-- <a class="collapse-item" href="#">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a> -->
        </div>
    </div>

    
</li>

<hr class="sidebar-divider my-0">



</ul>
