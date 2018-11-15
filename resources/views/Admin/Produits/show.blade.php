@extends('default')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Produit - {{$produit->nom}}
                <small>consultation</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Produits</li>
                <li class="active">{{$produit->nom}}</li>
            </ol>
        </section>

        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Caractéristiques du produit</h3>
                </div>
                <div class="box-body">

                </div>
            </div>
                </div>
            </div>
        </section>
    </div>

@endsection