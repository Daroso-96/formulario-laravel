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
   .tituloh{
    text-align: center; 
   }
  </style>
</head>
<body> 

 
    <h1 class="tituloh" >User list</h1>
    <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
            <th class="th-sm">Name
            </th>
            <th class="th-sm">LastName
            </th>
            <th class="th-sm">Email
            </th>
            </tr>
        </thead>
        <tbody>
            @foreach($people as $person)
            <tr>
            <td>{{$person->name}}</td>
            <td>{{$person->lastname}}</td>
            <td>{{$person->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-success" href="{{ action('FormController@back') }}">Back</a>
</body>