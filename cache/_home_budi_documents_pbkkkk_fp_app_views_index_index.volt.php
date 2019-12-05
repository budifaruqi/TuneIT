<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
                <a class="navbar-brand" href="/">TuneIT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="/">Tuner</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href='<?= $this->url->get('lagu/listlagu') ?>'>Contoh Lagu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Chord</a>
                    </li>
                  </ul>
                </div>
        </nav>
        <div class="container-fluid">
            

<br><br>
<div class="row">
    <div class="col-3">
        <img src="https://stuff.fendergarage.com/images/x/Z/a/online-tuner-web-acoustic-headstock@2x.png" alt="">
        <a href="akustik/akustik" class="btn btn-secondary btn-block mt-3" role="button">Tune Acoustic</a>
    </div>
    <div class="col-3">
        <img src="https://stuff.fendergarage.com/images/4/u/I/online-tuner-web-electric-headstock.png" alt="">
        <a href="#" class="btn btn-secondary btn-block mt-3" role="button">Tune Electric</a>
    </div>
    <div class="col-3">
        <img src="https://stuff.fendergarage.com/images/4/1/f/online-tuner-web-bass-headstock.png" alt="">
        <a href="#" class="btn btn-secondary btn-block mt-3" role="button">Tune Bass</a>
    </div>
    <div class="col-3">
        <img src="https://stuff.fendergarage.com/images/4/w/v/online-tuner-web-ukulele-headstock.png" alt="">
        <a href="#" class="btn btn-secondary btn-block mt-3" role="button">Tune Ukulele</a>
    </div>
</div>


        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>