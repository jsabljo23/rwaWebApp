<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/app.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
    
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet"> 
    <title>Stranica</title>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="/" class="navbar-brand text-uppercase font-weight-bold">CarBuy</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="/" class="nav-link text-uppercase font-weight-bold">Pocetna</a></li>
                        <li class="nav-item"><a href="onama" class="nav-link text-uppercase font-weight-bold">O nama</a></li>
                        <li class="nav-item"><a href="https://docs.google.com/document/d/1DSJifga5j7AkIN5rYzvAvxdBvOSSvsPI/edit?usp=sharing&ouid=100757337465573431341&rtpof=true&sd=true" class="nav-link text-uppercase font-weight-bold">Vizija</a></li>
                        <li class="nav-item"><a href="info" class="nav-link text-uppercase font-weight-bold">Tehnologije</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <span class="text-muted">© 2021 CarBuy, Inc</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex footImg">
            <li class="ms-3"><a class="text-muted" href="#"><img src="../images/facebook.png" width="32px" height="32px" alt=""></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><img src="../images/instagram.png" width="32px" height="32px" alt=""></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><img src="../images/youtube.png" width="32px" height="32px" alt=""></a></li>
          </ul>
      </footer>
</body>
</html>