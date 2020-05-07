@extends('layouts.admin')

@section('content')

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <!-- TABLE: LATEST ORDERS -->
        <div class="col-12">
            <div class="card">
                <div class="card-header border-transparent">
                <h3 class="card-title">Editar proyecto
                    <a href="{{route('admin.portfolio.index')}}" class="ml-4 btn btn-sm btn-primary">Volver</a>
                </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                <!-- /.table-responsive -->
                    <form action="{{route('admin.portfolio.update', $project->id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="title" class="col-form-label">Título:</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-form-label">Descripción:</label>
                                    <textarea class="form-control" name="description" id="description">{{$project->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="featured" class="col-form-label">Imagen:</label> <br>
                                    <img src="{{asset('images/portfolio/'. $project->featured)}}" class="img-fluid img-rounded mb-3" width="120px">
                                    <input type="file" class="form-control" name="featured" id="featured">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Actaulizar</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection