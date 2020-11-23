<html lang="en">
<head>
  <title>Laravel 8 Newsletter Tutorial with Example - XpertPhp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
 <div class="row">
 <div class="col-lg-12">
 @if ($message = Session::get('success'))
 <div class="alert alert-success alert-block">
 <button type="button" class="close" data-dismiss="alert">×</button>
 <strong>{{ $message }}</strong>
 </div>
 @endif
 @if ($message = Session::get('error'))
 <div class="alert alert-danger alert-block">
 <button type="button" class="close" data-dismiss="alert">×</button>
 <strong>{{ $message }}</strong>
 </div>
 @endif
 </div>
 </div> 
  
        <form method="post" action="{{url('newsletter')}}">
        @csrf
 <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-2">
   <label for="Email">Email:</label>
   <input type="text" class="form-control" name="email">
 </div>
 </div>   
 <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-4">
 <button type="submit" class="btn btn-success">Submit</button>
 </div>
 </div>
      </form>
 </div>
</body>
</html>