<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dash')}}">
        <div class="sidebar-brand-text mx-3">
            <img src="{{URL::to('frontend/images/Logo1.png')}}" alt="" style="width: 150px">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dash')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-chart-area"></i>
            <span>Sondage</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Avoir L'avis des internauts :</h6>
                <a class="collapse-item" href="{{route('dash.sondage')}}">Mes Sondages</a>
                <a class="collapse-item" href="{{route('add.sondage')}}">Nouveau sondage</a>
                <a class="collapse-item" href="{{route('participants')}}">Participants</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Blog</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Votre Blog:</h6>
                <a class="collapse-item" href="{{route('dash.blog')}}">Mes Articles</a>
                <a class="collapse-item" href="{{route('add.article')}}">Publier un article</a>
                <a class="collapse-item" href="{{route('add.article')}}">Commentaires</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Sliders</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('sliders')}}">Liste</a>
                <a class="collapse-item" href="{{route('add.slider')}}">Ajouter</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Offres</span>
        </a>
        <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('dash.offre')}}">Liste</a>
                <a class="collapse-item" href="{{route('add.offre')}}">Ajouter</a>
                <a class="collapse-item" href="{{route('cv')}}">Postulants</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Les pages du site</h6>
                <a class="collapse-item" href="{{route('dash.about')}}">Acceuil</a>
                <a class="collapse-item" href="{{route('dash.actualite')}}">Actualite</a>
                <a class="collapse-item" href="{{route('dash.about')}}">A propos</a>
                <a class="collapse-item" href="{{route('dash.contact')}}">Contact</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Les section du site</h6>
                <a class="collapse-item" href="{{route('dash.projet')}}">Projets</a>
                <a class="collapse-item" href="{{route('dash.service')}}">Service</a>
                <a class="collapse-item" href="{{route('partenaire.liste')}}">Partenaire</a>
                <a class="collapse-item" href="{{route('social.liste')}}">Reseaux Sociaux</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
