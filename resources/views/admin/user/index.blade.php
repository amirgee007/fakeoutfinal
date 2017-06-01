@extends('admin/layout')

@section('title')
    All User
    @parent
@stop
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                User
                <small>Add User</small>
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
                            <h3 class="box-title">Add New User</h3>
                        </div>


                        <form role="form" method="post" action="{{route('user.add')}}">
                            <div class="box-body">
                                {{csrf_field()}}


                                <div class="form-group">
                                    <label for="tittle">First Name</label>
                                    {{--<input type="text" name="name" class="form-control" placeholder="Enter Name" required autofocus>--}}
                                    <input name="first_name" placeholder="First Name" class="form-control"  required type="text">
                                </div>


                                <div class="form-group">
                                    <label for="tittle">Last Name</label>
                                    <input name="last_name" placeholder="Last Name" class="form-control"  required type="text">
                                </div>



                                <div class="form-group">
                                    <label for="tittle">Department</label>
                                    <select name="department" class="form-control selectpicker" required>
                                        <option value="">Select your Office</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="tittle">User Name</label>
                                    <input  name="user_name" placeholder="Username" class="form-control"  required type="text">
                                </div>


                                <div class="form-group">
                                    <label for="tittle">Password</label>
                                    <input name="password" placeholder="Password" class="form-control"  required type="password">
                                </div>


                                <div class="form-group">
                                    <label for="tittle">Confirm Password</label>
                                    <input name="confirm_password" placeholder="Confirm Password" class="form-control" required type="password">

                                </div>


                                <div class="form-group">
                                    <label for="tittle">Email address</label>
                                    <input name="email" placeholder="E-Mail Address" class="form-control"  required type="email">

                                </div>


                                <div class="form-group">
                                    <label for="tittle">Phone</label>
                                    <input name="contact_no" placeholder="(639)" class="form-control" required type="text">

                                </div>


                                <div class="form-group">
                                    <input type="checkbox" value="" name="is_admin">
                                    <label for="is_admin">Is Admin</label>
                                </div>


                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Add New</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </section>

        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Users</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Contact</th>
                            <th>Last Email</th>
                            <th>Is Admin</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>


                            <td>{{$user->id}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->contact_no}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->is_admin==1 ? 'Yes' : 'No'}}</td>
                            <td>{!! isset($user->created_at) ? @$user->created_at->diffForHumans() : 'Not Set'!!}</td>
                            <td>

                                <a href="#"><i class="fa fa-fw fa-pencil text-warning"></i></a>

                                <a href="#"><i class="fa fa-fw fa-eye text-primary"></i></a>
                                @if($user->id!=1)
                                <a onclick="return confirm('Are you sure to delete ?')" href="{{route('user.delete' , $user->id)}}"><i class="fa fa-fw fa-times text-danger"></i></a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </div>
@endsection

@section('footer_scripts')

@endsection

