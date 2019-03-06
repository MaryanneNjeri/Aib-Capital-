@extends ('layout') 
@section ('content')
 
<style>
  .uper {
    margin-top: 40px;
  }
</style> 

<div class="card uper">
<div class="card-header">
<h4>AIB Capital</h4> 
</div> 
<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br /> 
      @endif  
      <form method="post" action="">
      <div class="form-group">
      @csrf 
      <label for="name">Your Name </label>
      <input type="text" class="form-control" name="your_name"/>
      </div>

      <div class="form-group">
      <label for="number">Telephone Number </label>
      <input type="text" class="form-control" name="telphone_number"/>
      </div> 
      <div class="form-group">
      <label for="email">Email </label>
      <input type="email" class="form-control" name="email"/>
      </div> 
      <div class="form-group">
      <label for="location"> Location</label>
      <input type="text" class="form-control" name="location"/>
      </div> 
      <div class="form-group">
      <label for="query"> Query</label>
      <textarea class="form-control" name="query"></textarea>
      </div>
      </div>
      @endsection
</div>