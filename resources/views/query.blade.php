@extends ('layouts.app')
@section ('content') 
<style> 
body, html {
  height: 100%;
}
.card {
  background-color: orange;
  border-radius: 25px;
} 
.heading {
  padding: 10px;
} 
.content { 
  width: 600px;
  position: relative;
  background-color : rgb(240, 240 , 240);
  padding: 100px;
  font-size: 18px;
  opacity:0.7;
  font-weight: bold;
} 
.jumbotron-fluid {
  opacity :0.8;
  height: 200px;
} 
.paragraph{
  padding: 70px;
} 
.img {
  float:right;
} 
.col-md-5 {
  padding-left: 100px;
} 
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  height: 70px;
  width: 100%;
  background-color:black;
  color: white;
  text-align: center;
} 
.label {
    color: white;
}
</style>

   

    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br/>
    @endif 
    <br>
    <br>
   <div class="jumbotron jumbotron-fluid"> 
    <div class="row">
    <div class="col-md-5">
    <img src="images/aib_logo.png" height="120" width="200">
    </div>
    <div class="col-md-7">
    <br>
    <h3><b>Think Investment, Think *543#</b></h3>
    </div>
    </div>

   </div> 
    <div class="row">
        <div class="col-md-8"> 
        
        
        <div class="paragraph">
        <p class="content">
      The AIB Auto Account Opening Solution offers you the <br>

      <br>opportunity to invest in the Nairobi Securities Exchange <br>

     <br>straight from your mobile phone or computer.<br>

      <br>Sign up today and discover new possibilities! <br>

      <br>Sign up today,log on to  <a href="https://onlinetrading.nse.co.ke/TradeWeb101/login.aspx<">https://onlinetrading.nse.co.ke/TradeWeb101/login.aspx</a>
        </P> 
        </div>
        </div>
        <div class="col-md-4">
            <div class="card"> 
            <br>
            <p class="heading"><b>Please fill in the query in 
            the box below and we will get back to you
            </b></p>
              
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
                    <form method="post" action="{{url ('/create/query') }}">
                        <div class="form-group">
                            @csrf
                            <label  style="color:white;" for="name"><b>Your Name </b></label>
                            <input type="text" class="form-control" name="your_name" />
                        </div>

                        <div class="form-group">
                            <label  style="color:white;" for="number"><b>Telephone Number </b></label>
                            <input type="text" class="form-control" name="telephone_number" />
                        </div>

                        <div class="form-group">
                            <label style="color:white;" for="email"> <b>Email</b> </label>
                            <input type="email" class="form-control" name="email" />
                        </div>

                        <div class="form-group">
                            <label style="color:white;" for="location"><b> Location</b></label>
                            <input type="text" class="form-control" name="location" />
                        </div>

                        <div class="form-group">
                            <label style="color:white;"  for="query"><b> Query</b></label>
                            <textarea class="form-control" name="query"></textarea>
                        </div>

                        <button class="btn btn-warning" type="submit" onClick="changeClass()" id="myButton">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div> 
    <div class="footer">
  <p>@Copyright <a style="color:orange; align-items:center;" href="http://www.aibcapital.com/">aibcapital.com</a> 2019.All rights reserved</p>
</div> 
<script>
function changeClass() { 
                document.getElementById('myButton').className = "changedClass"; 
                var button_class = document.getElementById('myButton').className; 
                document.getElementById('myPara').innerHTML = "New class name: "  
                + button_class; 
            } 
</script>

@endsection