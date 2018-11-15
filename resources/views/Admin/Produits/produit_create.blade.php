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
                Produits
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="#">Produits</a></li>
                <li class="active">Ajouter</li>
            </ol>
        </section>

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
                            {{Form::open(['method'=>'post','route'=>['produit.store'],'files'=>'true'])}}
                            <div class="form-group">
                                {!! Form::label('nom','Nom du produit') !!}
                                {!! Form::text('nom','',['class'=>'form-control','placeholder'=>'nom du produit']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('prix_unit','Prix unitaire') !!}
                                {!! Form::number('prix_unit','',['class'=>'form-control','placeholder'=>'Prix unitaire','min'=>'1000']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('quantite','Quantité') !!}
                                {!! Form::number('quantite','',['class'=>'form-control','placeholder'=>'quantité','min'=>'0']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('taille','Taille') !!}
                                {!! Form::number('taille','',['class'=>'form-control','placeholder'=>'Taille ou pointure','min'=>'30']) !!}
                            </div>
                            <div class="form-group">
                                <!-- Color Picker -->
                                <div class="form-group">
                                    {!! Form::label('reduction','Reduction') !!}

                                    <div class="input-group ">
                                        {!! Form::number('reduction','',['class'=>'form-control','placeholder'=>'réduction e.g:10,0,5','min'=>'0']) !!}
                                        <div class="input-group-addon">
                                            <i class="fa fa-percent"></i>
                                        </div>
                                    </div>
                                    <!-- /.input group -->

                            </div>
                                <div class="form-group">
                                {!! Form::label('sous_categorie_id','Sous-Categorie') !!}
                                {!! Form::select('sous_categorie_id',$sous_categories,null,['class'=>'form-control','placeholder'=>'nom de la sous-catégorie']) !!}
                                </div>
                                <div class="form-group">
                                {!! Form::label('rayon_id','Rayon') !!}
                                {!! Form::select('rayon_id',$rayons,null,['class'=>'form-control','placeholder'=>'nom du rayon']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('type_rayon_id','Type') !!}
                                {!! Form::select('type_rayon_id',$types,null,['class'=>'form-control','multiple'=>'true']) !!}
                                </div>
                            <div class="form-group">
                                {!! Form::label('image','Image') !!}
                                {!! Form::file('image',['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('description','Description') !!}
                                {!! Form::textarea('description','',['class'=>'form-control','placeholder'=>'Description']) !!}
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

            </div>
        </section>
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