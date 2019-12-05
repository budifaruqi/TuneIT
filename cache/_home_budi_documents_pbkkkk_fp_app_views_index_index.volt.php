<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?= $title ?></title>
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <div class="container">
            

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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        
      </body>
</html>