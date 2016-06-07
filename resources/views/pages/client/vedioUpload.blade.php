@extends('pages.adminMasterPage')

@section('CONTENT')

{{ Form::open(array('url'=>'vedioUpload','method' => 'post','files'=>true)) }}
        <p>
            {{ Form::label('Title:') }}
            {{ Form::text('title',null,array('class'=>'form-control')) }}
        </p>
        <p>
            {{ Form::label('Description:') }}
            {{ Form::text('description',null,array('class'=>'form-control')) }}
        </p>
        <p>
            {{ Form::label('image','Imagine:') }}
            {{ Form::file('image','',array('id'=>'','class'=>'')) }}
        </p>
        <p>
            {{ Form::label('video','Video:') }}
            {{ Form::file('video','',array('id'=>'','class'=>'')) }}
        </p>
            {{ Form::submit('Add',array('class'=>'btn btn-primary')) }}
            {{ Form::reset('Reset',array('class'=>'btn btn-success')) }}
            {{ Form::close() }}
@stop
