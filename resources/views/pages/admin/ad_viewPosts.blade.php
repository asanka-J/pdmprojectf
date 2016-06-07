@extends('pages.adminMasterPage')

@section('CONTENT')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead >
                <td>Title</td>
                <td>Post</td>
                <td>Publisher</td>
                <td></td>
                </thead>
                <tbody>
                @foreach ($post as $post)



                    <tr>
                        <td>{{$post->post_title}}</td>

                        <td>{{$post->content}}</td>
                        <td>{{$post->member_name}}</td>
                        <td><a href="#"><button class="btn btn-success">Accept</button></a>
                            <a href="{{ action('PostController@delete', $post->post_id)}}"><button class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop