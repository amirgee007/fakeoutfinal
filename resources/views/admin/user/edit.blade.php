@extends('admin/layout')

@section('title')
    Edit User
    @parent
@stop
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                User
                <small>Edit User</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">User</li>
            </ol>
        </section>
        @include('admin.alerts.alert')

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit User</h3>
                        </div>
                        <form role="form" method="post" action="{{route('category.update' , $category->id)}}">
                            <div class="box-body">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="tittle">User Tittle</label>
                                    <input type="text" class="form-control" id="tittle" name="title" value="{{$category->title}}" placeholder="Enter User Tittle">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Update New</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </section>

    </div>
@endsection

@section('footer_scripts')


@endsection

