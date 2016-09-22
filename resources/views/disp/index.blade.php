@extends('layout.default')
@section('content')
{!! Form::open(array('route' => 'home.store', 'class' => 'form', 'files' => true)) !!}
 <div class ="container">
     <div class ="row">
     <div class ="col-xs-6">
     <div class="well bs-component">
      <!-- form field for user -->
      <div class="form-group">
        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control'])!!}
     </div>

     

     <div class="form-group">
         {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control'])!!}
     </div>
     
    
    

                            <!-- Submit field -->
                            <div class="form-group">
                                {!! Form::submit('Login', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
</div>

     <div class="form-group">

        

     </div>
     </div>
     </div>
     </div>
     </div>


<!---end carousel-->
@stop

