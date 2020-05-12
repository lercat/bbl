@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-4 offset-4"><!--ajout 6et3 dans le cours-->
                <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        </div><!--ajout fin de div-->
        <div class="row pt-2 pb-4"><!--ajout de cette div row je n'ai pas mis le /div ???-->
            <!--py-4 padding top and bottom-->
            <div class="col-4 offset-4">
                <div>
                
                    <p>
                        <span class="font-weight-bold"> 
                            <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark" >{{ $post->user->username }}</span>
                            </a>
                        </span>{{ $post->legende }}
                    </p>
                    <p>{{ $post->description }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection