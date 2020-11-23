@extends('master')
@section('contenu')
<form action={{ route('commerces.store')}} method="POST" class="col-10" enctype="multipart/form-data">
   @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nom</label>
        <input type="text" name="nom" class="form-control" id="inputEmail4" placeholder="Entrez votre nom">
      </div>
   <div class="form-group col-md-3">
        <label for="inputPassword4">Image</label>
        <input type="file"  class="form-control" id="inputPassword4" name="src">
      </div>
      
        
      
      <div class="form-group col-md-3">
        <label for="inputPassword7">Marque</label>
        <input type="text" name="marque" class="form-control" id="inputPassword7">
      </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">description</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAddress">Prix</label>
      <input type="number" name="prix" min=1 class="form-control" id="inputAddress" >
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2">quantite</label>
      <input type="number" min=0 name="quantite" class="form-control" id="inputAddress2">
      </div>
 
    </div>--}}
    
    <button type="submit" class="btn btn-primary">submit</button> 
  </form>

@endsection