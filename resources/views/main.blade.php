<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="UTF-8">
    <title>Przychodnia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"></head>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Felipa|Gloria+Hallelujah" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
</head>
<body>
<div class="container-fluid text-white bg-primary" >
    <div class="row">
        <div class="col picture text-white">
            <h1 class="pt-3">INDYWIDUALNA PRAKTYKA LEKARSKA -przychodnia rodzinna</h1>
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <button class="navbar-toggler mx-5" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav">
                        <li class="nav-item  bg-primary">
                            <a class="nav-link text-white" target="_blank" href="/order">Zamawianie recept</a>
                        </li>
                        <li class="nav-item bg-primary">
                            <a target="_blank" class="nav-link color text-white" href="https://www.znanylekarz.pl/mariusz-selke/lekarz-rodzinny-pediatra/elblag">Opinie</a>
                        </li>
                        <li class="nav-item bg-primary">
                            <a class="nav-link text-white" href="#">Logowanie</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="conteianer">
@yield('content')
</div>
<footer id="footer" class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col bg-primary footer">
                <p class="mt-3 mb-0 footer text-white">© 2019 INDYWIDUALNA PRZYCHODNIA LEKARSKA</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script></body>

</body>
</html>