@extends('master')

@section('contenu')
<table class="table table-striped">
  <thead>
    
  </thead>
  <tbody>
    {{dump($commerces)}}
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
      <a href="{{route('commerces.destroy',$et->id)}}" class="btn btn-danger">Suppression</a>
      <a href="{{route('commerces.show',$et->id)}}" class="btn btn-info">Show</a>
      <a href="{{route('commerces.edit',$et->id)}}" class="btn btn-primary">Modification</a>
      

      </td>
    
    </tr>
    @endforeach
  </tbody>
</table>


@endsection