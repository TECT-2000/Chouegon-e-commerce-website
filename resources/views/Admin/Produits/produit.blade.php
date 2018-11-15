@extends('default')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Produits
                <small>Panneau de controle</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Produits</li>
            </ol>
        </section>

        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Liste des produits</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nom du produit</th>
                                    <th>Prix unitaire</th>
                                    <th>Type</th>
                                    <th>Quantité</th>
                                    <th>Taille</th>
                                    <th>Réduction possible</th>
                                    <th>Sous-Catégorie</th>
                                    <th>Rayons</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($produits as $produit)
                                <tr>
                                    <td><a href="{{route('produit.show',['id'=>$produit->id])}}">{{$produit->nom}}</a></td>
                                    <td><a href="{{route('produit.show',['id'=>$produit->id])}}">{{$produit->prix_unit}}</a></td>
                                    <td><a href="{{route('produit.show',['id'=>$produit->id])}}">{{$produit->type_rayon->nom}}</a></td>
                                    <td><a href="{{route('produit.show',['id'=>$produit->id])}}">{{$produit->quantite}}</a></td>
                                    <td><a href="{{route('produit.show',['id'=>$produit->id])}}">{{$produit->taille}}</a></td>
                                    <td><a href="{{route('produit.show',['id'=>$produit->id])}}">{{$produit->reduction}}</a></td>
                                    <td><a href="{{route('produit.show',['id'=>$produit->id])}}">{{$produit->sous_categorie->nom}}</a></td>
                                    <td><a href="{{route('produit.show',['id'=>$produit->id])}}">{{$produit->rayon->nom}}</a></td>
                                    <td><a href="{{route('produit.show',['id'=>$produit->id])}}">{{$produit->description}}</a></td>
                                    <td><a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletemodal"><i class="fa phpdebugbar-fa-times"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Nom du produit</th>
                                    <th>Prix unitaire</th>
                                    <th>Type</th>
                                    <th>Quantité</th>
                                    <th>Taille</th>
                                    <th>Réduction possible</th>
                                    <th>Sous-Catégorie</th>
                                    <th>Rayons</th>
                                    <th>Description</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
        <!-- /.content -->
    </div>
@endsection