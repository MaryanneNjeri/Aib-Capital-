<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
<div class="container-fluid">
@if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif 
     <br>
     <br>
     <br> 
     <div class="form-group">
                 <a href="/export/xlsx" class="btn btn-success">Export to .xlsx</a>
                 <a href="/export/xls" class="btn btn-primary">Export to .xls</a>
             </div> 
             <br>
             <br>
     <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Telephone Number</th> 
        <th>Location</th>
        <th>Query</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($queries as $query)
     
      <tr>
        <td>{{$query['id']}}</td>
        <td>{{$query['name']}}</td>
        <td>{{$query['email']}}</td>
        <td>{{$query['telephone_number']}}</td>
        <td>{{$query['location']}}</td> 
        <td>{{$query['query']}}</td>
        
        
        <td>
        <div class="form-group">
        <a class="btn btn-danger" href='{{url ("/delete/query/{$query->id}") }}'>Delete</a>
        </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>