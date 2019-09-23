
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>BV STUDIO</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <style>
   .error{ color:red; } 
  </style>
</head>
 
<body>
    <div class="container">
        <h2 style="margin-top: 10px;" class="text-center">BV Studio register </h2>
        <br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-8">
            
                <br><br>
            
                @if($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                <br>
                @endif

                <form id="captcha-form" method="post" action="{{action('FormController@store')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div> 
                    <div class="form-group">
                        <label for="formGroupExampleInput">Lastname</label>
                        <input type="text" name="lastName" class="form-control" id="formGroupExampleInput" placeholder="Please enter lastname">
                        <span class="text-danger">{{ $errors->first('lastname') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Id</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email ">
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>      
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-success" href="{{ action('FormController@showAll') }}">Go to the List</a>
                </form>
            </div>
        </div>
    <div>
</body>
</html>