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
            

<div class="row mb-4">
    <h1 class="uppercase">Acoustic Guitar Tuner</h1>
</div>

<?php if ($tanda == 'standard') { ?>
<div class="btn-group mb-2 col-4">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Tuning
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item active" href="/akustik/akustik/standard">Standard</a>
      <a class="dropdown-item" href="/akustik/akustik/half">Half Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/dropD">Drop D</a>
      <a class="dropdown-item" href="/akustik/akustik/dagad">DADGAD</a>
      <a class="dropdown-item" href="/akustik/akustik/whole">Whole Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/openC">Open C</a>
      <a class="dropdown-item" href="/akustik/akustik/openD">Open D</a>
      <a class="dropdown-item" href="/akustik/akustik/openG">Open G</a>
    </div>
</div>

<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">E</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">A</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">G</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">B</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">E</span>
</div>
<?php } ?>

<?php if ($tanda == 'half') { ?>
<div class="btn-group mb-2 col-4">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Tuning
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/akustik/akustik">Standard</a>
      <a class="dropdown-item active" href="/akustik/akustik/half">Half Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/dropD">Drop D</a>
      <a class="dropdown-item" href="/akustik/akustik/dagad">DADGAD</a>
      <a class="dropdown-item" href="/akustik/akustik/whole">Whole Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/openC">Open C</a>
      <a class="dropdown-item" href="/akustik/akustik/openD">Open D</a>
      <a class="dropdown-item" href="/akustik/akustik/openG">Open G</a>
    </div>
</div>

<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D#</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">G#</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">C#</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">F#</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">A#</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D#</span>
</div>
<?php } ?>

<?php if ($tanda == 'dropD') { ?>
<div class="btn-group mb-2 col-4">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Tuning
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/akustik/akustik">Standard</a>
      <a class="dropdown-item" href="/akustik/akustik/half">Half Step Down</a>
      <a class="dropdown-item active" href="/akustik/akustik/dropD">Drop D</a>
      <a class="dropdown-item" href="/akustik/akustik/dagad">DADGAD</a>
      <a class="dropdown-item" href="/akustik/akustik/whole">Whole Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/openC">Open C</a>
      <a class="dropdown-item" href="/akustik/akustik/openD">Open D</a>
      <a class="dropdown-item" href="/akustik/akustik/openG">Open G</a>
    </div>
</div>

<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">A</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">G</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">B</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">E</span>
</div>
<?php } ?>

<?php if ($tanda == 'dagad') { ?>
<div class="btn-group mb-2 col-4">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Tuning
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/akustik/akustik">Standard</a>
      <a class="dropdown-item" href="/akustik/akustik/half">Half Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/dropD">Drop D</a>
      <a class="dropdown-item active" href="/akustik/akustik/dagad">DADGAD</a>
      <a class="dropdown-item" href="/akustik/akustik/whole">Whole Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/openC">Open C</a>
      <a class="dropdown-item" href="/akustik/akustik/openD">Open D</a>
      <a class="dropdown-item" href="/akustik/akustik/openG">Open G</a>
    </div>
</div>

<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">A</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">G</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">A</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<?php } ?>

<?php if ($tanda == 'whole') { ?>
<div class="btn-group mb-2 col-4">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Tuning
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/akustik/akustik">Standard</a>
      <a class="dropdown-item" href="/akustik/akustik/half">Half Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/dropD">Drop D</a>
      <a class="dropdown-item" href="/akustik/akustik/dagad">DADGAD</a>
      <a class="dropdown-item active" href="/akustik/akustik/whole">Whole Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/openC">Open C</a>
      <a class="dropdown-item" href="/akustik/akustik/openD">Open D</a>
      <a class="dropdown-item" href="/akustik/akustik/openG">Open G</a>
    </div>
</div>

<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">G</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">C</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">F</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">A</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<?php } ?>

<?php if ($tanda == 'openC') { ?>
<div class="btn-group mb-2 col-4">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Tuning
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/akustik/akustik">Standard</a>
      <a class="dropdown-item" href="/akustik/akustik/half">Half Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/dropD">Drop D</a>
      <a class="dropdown-item" href="/akustik/akustik/dagad">DADGAD</a>
      <a class="dropdown-item" href="/akustik/akustik/whole">Whole Step Down</a>
      <a class="dropdown-item active" href="/akustik/akustik/openC">Open C</a>
      <a class="dropdown-item" href="/akustik/akustik/openD">Open D</a>
      <a class="dropdown-item" href="/akustik/akustik/openG">Open G</a>
    </div>
</div>

<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">C</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">G</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">C</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">G</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">C</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">E</span>
</div>
<?php } ?>

<?php if ($tanda == 'openD') { ?>
<div class="btn-group mb-2 col-4">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Tuning
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/akustik/akustik">Standard</a>
      <a class="dropdown-item" href="/akustik/akustik/half">Half Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/dropD">Drop D</a>
      <a class="dropdown-item" href="/akustik/akustik/dagad">DADGAD</a>
      <a class="dropdown-item" href="/akustik/akustik/whole">Whole Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/openC">Open C</a>
      <a class="dropdown-item active" href="/akustik/akustik/openD">Open D</a>
      <a class="dropdown-item" href="/akustik/akustik/openG">Open G</a>
    </div>
</div>

<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">A</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">F#</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">A</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<?php } ?>

<?php if ($tanda == 'openG') { ?>
<div class="btn-group mb-2 col-4">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Tuning
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/akustik/akustik">Standard</a>
      <a class="dropdown-item" href="/akustik/akustik/half">Half Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/dropD">Drop D</a>
      <a class="dropdown-item" href="/akustik/akustik/dagad">DADGAD</a>
      <a class="dropdown-item" href="/akustik/akustik/whole">Whole Step Down</a>
      <a class="dropdown-item" href="/akustik/akustik/openC">Open C</a>
      <a class="dropdown-item" href="/akustik/akustik/openD">Open D</a>
      <a class="dropdown-item active" href="/akustik/akustik/openG">Open G</a>
    </div>
</div>

<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">G</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">G</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">B</span>
</div>
<div class="row">
    <button class="lni-play"></button>
    <button class="lni-reload"></button>
    <button class="lni-stop"></button>
    <span class="col-3">D</span>
</div>
<?php } ?>


        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>