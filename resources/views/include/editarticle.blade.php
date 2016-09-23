@extends('layout.default')
@section('content')
{!! Form::model($data, ['route'=>['article.update', $data->id], 'method'=> 'PATCH'])  !!}
<div class ="container">
     <div class ="row">
     <div class ="col-xs-6">
     <div class="well bs-component">
<div class="form-group">
    {!! Form::textarea('article', null, ['placeholder' => 'article here', 'class' => 'form-control', 'required' => 'required'])!!}

    {!! Form::submit('SubmitArticle', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
  </div>
  </div>
  </div>
  </div>
  </div>
@stop