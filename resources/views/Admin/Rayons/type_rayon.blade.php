@extends('default')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Rayons
                <small>Panneau de controle</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Rayons</li>
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
                            {{Form::open(['method'=>'post','route'=>['type_rayon.store']])}}
                            <div class="form-group">
                                {!! Form::label('nom','Type du rayon') !!}
                                {!! Form::text('nom','',['class'=>'form-control','placeholder'=>'Type du rayon']) !!}
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
        </section><!-- /.content -->
        <!-- /.content -->
    </div>
@endsection