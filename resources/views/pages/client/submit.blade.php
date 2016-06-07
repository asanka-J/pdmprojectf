@extends('pages.adminMasterPage')
<?php ?>

@section('css')
    <link rel="stylesheet" type="text/css" href={{asset('admin/dist/css/status.css')}}>
@stop

<body>

@section('CONTENT')
    @include('pages.message')

    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{route('post.create')}}" method= "post">

            <header><h3>Title</h3></header>
                <div class="form-group">
                    <textarea class="form-control" name="title" id="new-post" rows="1" placeholder="Your title" > </textarea>
                </div>

            <header><h3>What do you have to say?</h3></header>
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your post" > </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Create Post</button>
                <input type="hidden" value="{{Session::token()}}" name="_token">
            </form>
        </div>
    </section>



    @stop

</body>