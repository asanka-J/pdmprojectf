@extends('pages.adminMasterPage')

@section('CONTENT')


    <head><!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        @if($errors->any())

                <script>
                    $(function () { $('#myModal').modal({
                       show: true
                    })});
            </script>

        @endif
    </head>






    <div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="row panel panel-profile">
                <div class="panel-heading col-md-3 col-lg-2">
                    <img src="{{ route('account.image', ['filename' => Auth::user()->name . '-' . Auth::user()->id . '.jpg']) }}" width="153" height="153" alt="" class="img-circle"><br>

                    <h3 class="profile-title">{{Auth::user()->name}}</h3>
                    <p class="profile-info">{{$data->occupation}}</p>
                </div>

                <div class="panel-body col-md-9 col-lg-10">
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success" role="alert"><strong>Well done!</strong> {{Session::get('flash_message')}}</div>
                    @endif
                    <a href="" data-toggle="modal" data-target="#myModal2"><h4 class="first">About Me</h4></a>
                    <p>
                    {{$data->about_me}}
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Contact Information</h4>
                            <dl class="dl-horizontal">
                                <dt>Email Address: </dt>
                                <dd>{{$data->email}}</dd>
                                <dt>Phone Number: </dt>
                                <dd>{{$data->phone}} </dd>
                                <dt>Address: </dt>
                                <dd>{{$data->address}} </dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <h4>Account Information</h4>
                            <dl class="dl-horizontal">
                                <dt>Username: </dt>
                                <dd>{{$data->username}}</dd>
                                <dt>Member Since: </dt>
                                <dd>{{Auth::user()->created_at}}</dd>
                                </br>
                                <dd>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">EDIT</button>
                                </dd>
                            </dl>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog" >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Profile</h4>
                </div>
                <div class="modal-body">



                    <form action="{{ route('update_profile') }}" method="post" class="form-horizontal" role="form"  enctype="multipart/form-data">
                        <div class="row">

                            <!-- left column -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="text-center">
                                    <img src="{{ route('account.image', ['filename' => Auth::user()->name . '-' . Auth::user()->id . '.jpg']) }}" class="avatar img-circle img-thumbnail" alt="avatar">
                                    <h6>Upload a different photo...</h6>

                                    <input type="file" name="image" class="form-control" id="image">
                                    @if ($errors->has('image')) <p class="help-block" style="color: red">{{ $errors->first('image') }}</p> @endif

                                </div>
                            </div>
                            <!-- edit form column -->
                            <div class="col-md-8 col-sm-6 col-xs-12 personal-info">

                                <h3>Personal info</h3>


                                <div class="form-horizontal" >
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">First name:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="first_name" id="first_name" value="{{$data->fname}}"  type="text">
                                            @if ($errors->has('first_name')) <p class="help-block" style="color: red">{{ $errors->first('first_name') }}</p> @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Last name:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="last_name" id="last_name" value="{{$data->lname}}" type="text">
                                            @if ($errors->has('last_name')) <p class="help-block" style="color: red">{{ $errors->first('last_name') }}</p> @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Occupation:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="occupation" value="{{$data->occupation}}" type="text">
                                            @if ($errors->has('occupation')) <p class="help-block" style="color: red">{{ $errors->first('company') }}</p> @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Email:</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" name="email" value="{{$data->email}}" type="text">
                                            @if ($errors->has('email')) <p class="help-block" style="color: red">{{ $errors->first('email') }}</p> @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Address:</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="address" name="address" value="{{$data->address}}" type="text">
                                            @if ($errors->has('address')) <p class="help-block" style="color: red">{{ $errors->first('address') }}</p> @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Phone No:</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="phone" name="phone" value="{{$data->phone}}" type="text">
                                            @if ($errors->has('phone')) <p class="help-block" style="color: red">{{ $errors->first('phone') }}</p> @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Username:</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="username" name="username" value="{{$data->username}}" type="text">
                                            @if ($errors->has('username')) <p class="help-block" style="color: red">{{ $errors->first('username') }}</p> @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" >Password:</label>

                                        <div class="col-md-8">
                                            <input class="form-control" id="password" name="password" value="ab111a" type="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Confirm password:</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="password_confirm" name="password_confirm" value="ab111a" type="password">
                                            @if ($errors->has('password_confirm')) <p class="help-block" style="color: red">{{ $errors->first('password_confirm') }}</p> @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"></label>
                                        <div class="col-md-8">
                                            <button class="btn btn-primary" id="save" type="submit" >Save Changes</button>
                                            <input type="hidden" value="{{Session::token()}}" name="_token">
                                            <span></span>
                                            <input class="btn btn-default" value="Cancel" type="reset">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal2" role="dialog" >
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">About Me</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('about_me') }}" method="post"  role="form" >
                    <textarea class="form-control"  id="about_me" name="about_me" cols="30" rows="23">
                                      {{$data->about_me}}</textarea><br>
                        @if ($errors->has('about_me')) <p class="help-block" style="color: red">{{ $errors->first('about_me') }}</p> @endif
                        <button class="btn btn-primary" id="save2" type="submit" >Save Changes</button>
                        <input type="hidden" value="{{Session::token()}}" name="_token">
                        </form>
                </div>
    </div>
    </div>
    </div>

@endsection