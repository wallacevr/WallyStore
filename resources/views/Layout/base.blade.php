
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} :: @yield('titulo') </title>
 
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    @include('sweetalert::alert')
    
    <div class="logo" align='center'>
        <img src="{{ asset('img/logo.png')}}" alt="Wally" class="img-fluid mt-3 mb-3 ">

    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Eletronicos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Moda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Papelaria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Bolsas e Malas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Calçados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Utilidades</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cosméticos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>   
    <div class="container text-center">
        
        @yield('conteudo')
    </div>
    <footer>
            <p class="text-center">Criado por Wallace Aguiar</p>
           
    </footer>

    <script src="{{asset('js/app.js')}}></script>
  
</body>
</html>