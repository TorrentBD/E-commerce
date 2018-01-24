<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

  </head>
  <body>
    <div class="container">
        @include('partials.header')
    </div>

    <div class="container">
      <div class="page-header">
        <h1 align="center">Address Book </h1>
      </div>

      <div class="row">
        <div class="col-md-4">
         @include('Action.add')        
        </div>

        <div class="col-md-4">
          @include('Action.message')
        </div>

        <div class="col-md-4">
          <button class="btn btn-danger">Delete</button>
        </div>
      </div>

    </div>


    <div class="container">
       <hr>
        <footer>
          <p align="center" style="color: gray;"> 
              1820 E Ray Rd. Suite A213, Chandler,AZ 85225 <br>
                  Phone: 480-820-2797 | Fax: 480-963-7087 <br>
                <a href="www.farmersagent.com/abeyerle" target="_black">www.farmersagent.com/abeyerle</a> 
          </p>
        </footer>

    </div>
    </div>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>