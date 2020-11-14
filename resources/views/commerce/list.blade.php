@extends('master')

@section('contenu')
<div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
</div>    
<table class="table table-striped">
  <thead>
    
      <th>ID</tH>
      <th>NOM</th>
      <th>IMAGE</th>
      <th>PRIX</th>
      <th>MARQUE</th>
      <th>QUANTITE</th>
      <th>DESCRIPTION</th>
      <th>ACTION</th>
  </thead>
  <tbody>
    {{--dump($commerces)--}}
@foreach($commerces as $et)
    <tr>
      <td>{{ $et->id }}</td>
      <td>{{ $et->nom }}</td>
      <td>{{ $et->src }}</td>
      <td>{{$et->prix}}</td>
      <td>{{ $et->marque }}</td>
      <td>{{ $et->quantite }}</td>
      <td>{{$et->description}}</td>
      <td>
      <div class="d-flex">
      {{--<a href="{{route('commerces.destroy',$et->id)}}" class="btn btn-danger">Suppression</a>--}}
        <form action="{{ route('commerces.destroy', $et->id) }}" method="POST" onsubmit="return confirm('êtes-vous sur de supprimer {{$et->nom}} !!!! ')">
           <input type="hidden" name="_method" value="DELETE">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1"> <i class="fas fa-trash-alt"></i> Supprimer</button>
         </form>
        <a href="{{route('commerces.show',$et->id)}}" class="btn btn-info m-1">Show</a>
        <a href="{{route('commerces.edit',$et->id)}}" class="btn btn-primary m-1">Modification</a>
      <div class="d-flex">
      </td>
    
    </tr>
    @endforeach
  </tbody>
</table>


@endsection