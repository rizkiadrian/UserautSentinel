
{!! Form::open(array('route' => 'article.store', 'class' => 'form', 'files' => true)) !!}
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