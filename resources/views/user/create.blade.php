@extends('layout.default')
@section('content')


     <h1>Upload a Photo </h1>


     <hr/>

     <!-- @if (count($errors) > 0) 
     <div class="alert alert-danger">
     <strong>Whoops! </strong> There were some problems with your input. <br> <br>
     <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }} </li>
         @endforeach

         </ul>
         </div>

    @endif-->


     {!! Form::open(array('route' => 'users.store', 'class' => 'form', 'files' => true)) !!}

     <!-- image title Form Input -->
     <div class ="container">
     <div class ="row">
     <div class ="col-xs-6">
     <div class="well bs-component">
      <!-- form field for user -->
      <div class="form-group">
        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required'])!!}
     </div>
     <div class="form-group">
                                {!! Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control', 'required' => 'required'])!!}
                                
                            </div>

     <div class="form-group">
         {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required'])!!}
     </div>
     <div class="form-group">
         {!! Form::password('password_confirmation', ['placeholder' => 'Repeat Password', 'class' => 'form-control', 'required' => 'required'])!!}
     </div>
    
    

                            <!-- Submit field -->
                            <div class="form-group">
                                {!! Form::submit('Create Account', ['class' => 'btn btn-lg btn-primary btn-block']) !!}
</div>

     <div class="form-group">

        

     </div>
     </div>
     </div>
     </div>
     </div>


    {!! Form::close() !!}

@endsection