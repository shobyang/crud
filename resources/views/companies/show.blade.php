<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <style>
        body{
            color: black;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .card-header{
            font-weight: bold;
            font-size: 25px;
        }
    </style>
</head>
<body>
<center>
    <div class="card">
         <div class="card-header">View Detials</div>
            <div class="card-body">
  
              <div class="card-body" style='font-weight: bold;'>
                  <p class="card-title">Company Name : {{ $company->name }}</p>
                  <p class="card-text">Company Email : {{ $company->email }}</p>
                  <p class="card-text">Company Address : {{ $company->address }}</p>
              </div>
      
          </hr>
  
        </div>
    </div>
    </center>
    </body>
<html>