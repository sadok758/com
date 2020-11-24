@extends('master')
@section('title')
    welcome 
@endsection
@section('contenu')
<div class="card" style="width: 18rem;">
  <img src="{{asset($commerce->img) }}" class="card-img-top" alt="{{$commerce->nom}}">
  <div class="card-body">
    
    <h5 class="card-title">{{$commerce->nom}} </h5>
        <div><strong>Prix</strong> {{$commerce->prix}} </div>
        <div><strong>Marque</strong> {{$commerce->marque}} </div>
        <p class="card-text">{{$commerce->quantite}}</p>
        <p class="card-text">{{$commerce->description}}</p>
  <a href="{{route('commerces.index')}}" class="btn btn-primary">liste</a>
  </div>
</div>
@endsection