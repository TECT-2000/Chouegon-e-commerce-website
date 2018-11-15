@extends('default')
@section('css')
    <!-- Bootstrap Color Picker -->
    <link href="{{asset('/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet"/>
    @endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Categories
                <small>Panneau de controle</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Categories</li>
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
                            {{Form::open(['method'=>'post','route'=>['couleur.store']])}}
                            <div class="form-group">
                                {!! Form::label('nom','Nom de la couleur') !!}
                                {!! Form::text('nom','',['class'=>'form-control','placeholder'=>'nom de la couleur']) !!}
                            </div>
                            <!-- Color Picker -->
                            <div class="form-group">
                                {!! Form::label('valeur','valeur en hexadécimal') !!}

                                <div class="input-group my-colorpicker2">
                                    {!! Form::text('valeur','',['class'=>'form-control','placeholder'=>'valeur en hexadécimal']) !!}

                                    <div class="input-group-addon">
                                        <i style="background-color: rgb(255, 128, 0);"></i>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
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
                            <h3 class="box-title">Liste des couleurs</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>numéro</th>
                                    <th>Nom</th>
                                    <th>valeur</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($couleurs as $couleur)
                                <tr>
                                    <td>{{$couleur->id}}</td>
                                    <td>{{$couleur->nom}}</td>
                                    <td>{{$couleur->valeur}}</td>
                                </tr>
                                    @endforeach
                               </tbody>
                                <tfoot>
                                <tr>
                                    <th>numéro</th>
                                    <th>Nom</th>
                                    <th>valeur</th>
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
    <!-- bootstrap color picker -->
    <script src="{{asset('/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
    <script>
        $(function(){
            $('.my-colorpicker2').colorpicker();
        })
    </script>
    @endsection