<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>On Boarding</title>
      <!-- Bootstrap CSS -->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <style>

        label {
            font-weight: 600;
            color: #666;
        }
        body {
        background: #f1f1f1;
        }
        .box8{
        box-shadow: 0px 0px 5px 1px #999;
        }
        .mx-t3{
        margin-top: -3rem;
        }
      </style>
      
   </head>
   <body>
        <div class="container mt-3">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('onbording.store') }}" method="POST">
            @csrf
            <div class="row jumbotron box8">
               <div class="col-sm-12 mx-t3 mb-4">
                  <h2 class="text-center text-info">Onbording</h2>
               </div>
               <div class="col-sm-6 form-group">
                  <label for="name-f">First Name</label>
                  <input type="text" class="form-control" name="name" id="name-f" placeholder="Enter your name." required>
               </div>
               
               <div class="col-sm-6 form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
               </div>
               <div class="col-sm-6 form-group">
                  <label for="address-1">Address </label>
                  <input type="address" class="form-control" name="address" id="address-1" placeholder="Address" required>
               </div>
               
               <div class="col-sm-4 form-group">
                  <label for="tel">Phone</label>
                  <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Your Contact Number." required>
               </div>

               <div class="col-sm-4 form-group">
                  <label for="tel">Project Name</label>
                  <input type="text" name="project_name" class="form-control" id="tel" placeholder="Enter Project Name." required>
               </div>
            
               <div class="col-sm-12 form-group mb-0">
                  <button class="btn btn-primary float-right">Register</button>
               </div>
            </div>
         </form>
      </div>
   </body>
</html>