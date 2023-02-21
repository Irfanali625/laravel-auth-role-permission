<head>
    <title>Add Role</title>
</head>
@extends('theme.master')

@section('content')
    <div class="continer-fluid p-4">

        <div class="row m-0 p-0">
            <div class="col-md-12">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2 class="m-0 text-dark">Role Management</h2>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Role</li>
                        </ol>
                    </div><!-- /.col -->
                </div>
            </div>
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                </div>
            </div>
        </div>


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Create Role</strong>
                        <input type="text" name="name" class="form-control" placeholder="Role">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permission</strong>
                        @foreach ($permission as $value)
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input name="permission[]" type="checkbox" value="{{ $value->id }}"
                                        class="custom-control-input" id="per_{{ $value->id }}" />
                                    <label class="custom-control-label"
                                        for="per_{{ $value->id }}">{{ $value->name }}</label>
                                </div>
                            </td>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
