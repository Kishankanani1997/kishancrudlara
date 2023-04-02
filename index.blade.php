<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <title>Crudlara</title>

    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">CRUDAPP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/">Add-Detail</a></li>
            <li><a class="dropdown-item" href="manageindex">Manage-Detail</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

  </head>
  <body>

  <div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">

        <!--validation message-->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!--success validation-->
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('status') }}
                    </div>
                @endif

            <form method="post">
              @csrf
                <div class="mb-3 form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Your Name*">
                </div>
                <div class="mb-3 form-group">
                  <label>phone</label>
                  <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone*">
                </div>
                <div class="mb-3 form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email*">
                </div>
                <div class="mb-3 form-group">
                  <label>Course</label>
                  <input type="text" name="course" class="form-control" placeholder="Enter Your Course*">
                </div>
                <div class="mb-3 form-group">
                  <label>Address</label>
                  <input type="text" name="address" class="form-control" placeholder="Enter Your Address*">
                </div>
                <div class="mb-3 form-group">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button type="submit" class="btn btn-danger" name="reset">Reset</button>
                </div>
              </form>
        </div>
    </div>
  </div>
  </body>
</html>
