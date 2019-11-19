<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student-Project</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Create</a>
                </li>
            </div>
          </nav>
    
    <hr>
    <div class="student-table">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Department Id</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Details</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($students as $studentOne)
              <tr>
                <th scope="row">#</th>
                <td>{{ $studentOne->registration_id }}</td>
                <td>{{ $studentOne->name }}</td>
                <td>{{ $studentOne->department }}</td>
                <td>{{ $studentOne->details }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>