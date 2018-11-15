<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/bower_components/admin-lte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Mike Tsebo</p>
                <a href="{{asset('/admin/profil')}}"><i class="fa fa-circle text-success"></i> En ligne</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">GESTIONNAIRE</li>
            <li class="active">
                <a href="{{route('admin.index')}}">
                    <i class="fa fa-dashboard"></i> <span>Tableau de bord</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-files-o"></i>
                    <span>Commandes</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i> Factures</a></li>
                    <li><a href="{{route('commande.index')}}"><i class="fa fa-circle-o"></i> Liste</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('categorie.index')}}">
                    <i class="fa fa-th"></i> <span>Categories</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-safari"></i>
                    <span>Sous-Categories</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('sous_categorie.index')}}"><i class="fa fa-circle-o"></i> Liste</a></li>
                    <li><a href="{{route('service.index')}}"><i class="fa fa-circle-o"></i> Services</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-laptop"></i>
                    <span>Rayons</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('rayon.index')}}"><i class="fa fa-circle-o"></i> Liste</a></li>
                    <li><a href="{{route('type_rayon.index')}}"><i class="fa fa-circle-o"></i> Type</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-table"></i> <span>Produits</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('produit.create')}}"><i class="fa fa-circle-o"></i> Ajouter</a></li>
                    <li><a href="{{route('produit.index')}}"><i class="fa fa-circle-o"></i> Liste</a></li>
                    <li><a href="{{route('couleur.index')}}"><i class="fa fa-circle-o"></i> Couleurs</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i> <span>Statistiques</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('stats.index')}}"><i class="fa fa-circle-o"></i> Ventes</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Clients</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-mail-reply"></i> <span>Mail</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="{{route('mail.index')}}">Inbox
                            <span class="pull-right-container">
                  <span class="label label-primary pull-right">13</span>
                </span>
                        </a>
                    </li>
                    <li><a href="{{route('mail.create')}}">Composer</a></li>
                    <li><a href="{{route('mail.index')}}">Lire</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-envelope"></i>
                    <span>Messagerie</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">8</span>
            </span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route("message.index")}}"><i class="fa fa-circle-o"></i> Messages<span class="label label-primary pull-right">4</span></a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> Notifications<span class="label label-primary pull-right">4</span></a></li>
                </ul>
            </li>
            <li class="header">MANAGER
                <span class="pull-right-container">
                <span class="fa fa-calendar"></span>
            </span>
            </li>
            <li><a href="{{route('tache.index')}}"><i class="fa fa-circle-o text-red"></i> Taches</a></li>
            <li><a href="{{route('evenement.index')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Evenements</span></a></li>
            <li><a href="{{asset('/admin/information')}}"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>