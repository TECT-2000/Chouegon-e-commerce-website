@extends('default')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Services
                <small>Panneau de controle</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Services</li>
            </ol>
        </section>

        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            <!-- SELECT2 EXAMPLE -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Formulaire</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            {{Form::open(['method'=>'post','route'=>['service.store']])}}
                            <div class="form-group">
                                {!! Form::label('nom','Nom du service') !!}
                                {!! Form::text('nom','',['class'=>'form-control','placeholder'=>'nom du service']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('prix_unit','Prix unitaire') !!}
                                {!! Form::text('prix_unit','',['class'=>'form-control','placeholder'=>'Prix unitaire']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('sous_categorie_id','Sous-Categorie') !!}
                                {!! Form::select('sous_categorie_id',$sous_categories,null,['class'=>'form-control','placeholder'=>'nom de la sous-catégorie']) !!}
                            </div>
                            {!! Form::submit('Enregistrer',['class'=>'btn btn-success btn-flat']) !!}
                            {{Form::close()}}
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Liste des services</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="mytable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Identifiant</th>
                                    <th>Nom du service</th>
                                    <th>Sous-catégorie</th>
                                    <th>prix unitaire</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{{$service->id}}</td>
                                    <td>{{$service->nom}}</td>
                                    <td>{{$service->sous_categorie->nom}}</td>
                                    <td>{{$service->prix_unit}}</td>
                                    <td><button class="btn btn-warning"><i class="fa phpdebugbar-fa-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="fa phpdebugbar-fa-times"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Nom du service</th>
                                    <th>Sous-catégorie</th>
                                    <th>prix unitaire</th>
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
@section('javascript')


@endsection