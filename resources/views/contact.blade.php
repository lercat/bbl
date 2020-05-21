@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/contact" enctype="multipart/form-data" method="post">
      @csrf
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h3>Envoyez moi un message</h3>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Nom</label>
                            
                    <input id="name" 
                        type="text" 
                        class="form-control @error('name') is-invalid @enderror" 
                        name="name"
                        value="{{ old('name') }}" 
                        required autocomplete="name" autofocus>
                        
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>  

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label">Adresse E-mail</label>
                            
                    <input id="email" 
                        type="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        name="email"
                        value="{{ old('email') }}" 
                        required autocomplete="email" autofocus>
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>  

                <div class="form-group row">
                    <label for="message" class="col-md-4 col-form-label">Message</label>
                            
                    <input id="message" 
                        type="text" 
                        class="form-control @error('message') is-invalid @enderror" 
                        name="message"
                        value="{{ old('message') }}" 
                        required autocomplete="message" autofocus>
                        
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>  


                <div class="row pt-4">
                    <button type="submit" id="form-submit" class="btn btn-primary">Envoyez votre message
                    </button>
                </div>
            </div>
        </div>
   </form>
</div>
@endsection

