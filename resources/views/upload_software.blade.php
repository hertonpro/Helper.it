<<<<<<< HEAD
<!DOCTYPE html>
<html>
<body>

<form action="{{URL::to('store')}}" method="post" enctype="multipart/form-data">
    Select software to upload:
    <input type="file" name="software" id="" method='post' action="URL::to('/store')" entype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
    

<br><br>
    Select icone to upload:
    <input type="file" name="icone" id="" method='post' action="URL::to('/store')" entype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"><br>
    <button type="submit" name="button">Upload file</button>
    
</form>

</body>
</html>
=======
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Helper.it</title>
    <style>
        html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

        </style>
  </head>
  
        <body class="text-center">
<form class="form-signin"action="{{URL::to('store')}}" method="post" enctype="multipart/form-data">
                  <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                  <h1 class="h3 mb-3 font-weight-normal">Helper.It</h1>
                  
                  <label  class="sr-only">Titre:</label>
                  <input type="text" id="inputEmail" name="titre" class="form-control" placeholder="Titre" required autofocus>
                  <label type="text" class="sr-only" >Version:</label>
                  <input type="text" id="inputPassword" name="version" class="form-control" placeholder="Version" required>
                  <label type="text" class="sr-only">Description:</label>
                  <input type="text" id="inputPassword" name="description" class="form-control" placeholder="Description" required>
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <input type="file" name="image" id="inputPassword" method='post' action="URL::to('/store')" entype="multipart/form-data">
                 
                  <tr>
                        <td>Category</td><br>
                        <td>
                        <select name="city_name">
                        <option value="bbsr">Bhubaneswar</option>
                        <option value="cuttack">Cuttack</option>
                        </select></td>
                        </tr>
                  <div class="checkbox mb-3">
                  
                  </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="button">Upload</button>
                  <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
                </form>
              
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
>>>>>>> f397c1d92b74e3d6bd0aee5aba3dd989c6ceb4de
