@extends('master')
@section('contenu')

<form action={{ route('commerces.update',$com->id)}} method="POST" class="col-10" >
   @csrf
   @method('PUT')
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nom</label>
        <input type="text" value="{{$com->nom}}" name="nom" class="form-control" id="inputEmail4" >
      </div>
      <div class="form-group col-md-3">
        <label for="inputPassword7">Nom</label>
        <input type="text" value="{{$com->nom}}" name="nom" class="form-control" id="inputPassword7">
      </div>

      <div class="form-group col-md-3">
        <label for="inputPassword4">Image</label>
        <input type="text" value="{{$com->src}}" name="src" class="form-control" id="inputPassword4">
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputAddress">Prix</label>
        <input type="number" value="{{$com->prix}}" name="prix" min=1 class="form-control" id="inputAddress" >
        </div>

      <div class="form-group col-md-3">
        <label for="inputPassword7">Marque</label>
        <input type="text" value="{{$com->marque}}" name="marque" class="form-control" id="inputPassword7">
      </div>

      <div class="form-group col-md-6">
        <label for="inputAddress2">Quantite</label>
      <input type="number" value="{{$com->quantite}}" min=0 name="quantite" class="form-control" id="inputAddress2">
      </div>    
      
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" value="{{$com->description}}" name="description" id="exampleFormControlTextarea1" rows="3">{{$com->description}}</textarea>
    </div>
          
    </div>
    
    <button type="submit" class="btn btn-primary">submit</button> 
  </form>

@endsection