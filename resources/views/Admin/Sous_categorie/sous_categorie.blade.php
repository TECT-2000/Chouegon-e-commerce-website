@extends('default')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sous-Categories
                <small>Panneau de controle</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Sous-Categories</li>
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
                            {{Form::open(['method'=>'post','route'=>['sous_categorie.store']])}}
                            <div class="form-group">
                                {!! Form::label('nom','Nom de la catégorie') !!}
                                {!! Form::text('nom','',['class'=>'form-control','placeholder'=>'nom de la sous-catégorie']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('categorie_id','Nom de la sous-catégorie') !!}
                                {!! Form::select('categorie_id',$categories,null,['class'=>'form-control','placeholder'=>'nom de la sous-catégorie']) !!}
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
                            <h3 class="box-title">Sous-catégories</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Nom</th>
                                    <th>Categorie</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sous_categories as $sous_cat)
                                <tr>
                                    <td>{{$sous_cat->id}}</td>
                                    <td>{{$sous_cat->nom}}</td>
                                    <td>{{$sous_cat->categorie->nom}}</td>
                                    <td><a class="btn btn-warning"><i class="fa phpdebugbar-fa-pencil"></i></a>
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#deletemodal"><i class="fa phpdebugbar-fa-times"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Nom</th>
                                    <th>Categorie</th>
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
    <!-- COMPOSE MESSAGE MODAL -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog text-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title text-red"><i class="fa fa-times-circle"></i> Suppresion de sous-catégorie</h4>
                </div>
                <div class="modal-body">
                    <h1 class="">Voulez-vous vraiment supprimer {{$sous_cat->nom}} ?</h1>
                </div>

                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-success" data-dismiss="modal"> Oui</button>
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal"> Non</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection