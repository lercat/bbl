@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/p" enctype="multipart/form-data" method="post">
      @csrf
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Ajoutez un Post</h1>
                </div>
                <div class="form-group row">
                    <label for="legende" class="col-md-4 col-form-label">Légende du post</label>
                            
                    <input id="legende" 
                        type="text" 
                        class="form-control @error('legende') is-invalid @enderror" 
                        name="legende"
                        value="{{ old('legende') }}" 
                        required autocomplete="legende" autofocus>
                        
                        @error('legende')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>  

                <div class="row">
                    <label for="description" class="col-md-4 col-form-label">Description du post</label>
                    <input type="text" class="form-control-file" id="description" name="description">
                    @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Image du post</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Ajoutez un nouveau Post
                    </button>
                </div>
            </div>
        </div>
   </form>
</div>
@endsection
