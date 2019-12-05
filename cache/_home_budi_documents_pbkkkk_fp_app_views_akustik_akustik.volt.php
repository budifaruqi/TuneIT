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
            

<div class="row mb-4">
    <h1 class="uppercase">Acoustic Guitar Tuner</h1>
</div>

<?php if ($tanda == 'standard') { ?>
<div class="dropdown mb-2 offset-11">
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

<div class="row mb-2">
    <button class="lni-play" data-audio="e-0"></button>
    <button class="lni-reload" data-audio="e-0"></button>
    <button class="lni-stop" data-audio="e-0"></button>
    <span class="col-3">E</span>
    <audio id="e-0">
        <source src="/audio/e-0.mp3" type="audio/mpeg">
    </audio>
         
</div>
<div class="row mb-2">
    <button class="lni-play" data-audio="a-1"></button>
    <button class="lni-reload" data-audio="a-1"></button>
    <button class="lni-stop" data-audio="a-1"></button>
    <span class="col-3">A</span>
    <audio id="a-1">
        <source src="/audio/a-1.mp3" type="audio/mpeg">
    </audio>
</div>
<div class="row mb-2">
    <button class="lni-play" data-audio="d-2"></button>
    <button class="lni-reload" data-audio="d-2"></button>
    <button class="lni-stop" data-audio="d-2"></button>
    <span class="col-3">D</span>
    <audio id="d-2">
        <source src="/audio/d-2.mp3" type="audio/mpeg">
    </audio>
</div>
<div class="row mb-2">
    <button class="lni-play" data-audio="g-3"></button>
    <button class="lni-reload" data-audio="g-3"></button>
    <button class="lni-stop" data-audio="g-3"></button>
    <span class="col-3">G</span>
    <audio id="g-3">
    <source src="/audio/g-3.mp3" type="audio/mpeg">
    </audio>
</div>
<div class="row mb-2">
    <button class="lni-play" data-audio="b-4"></button>
    <button class="lni-reload" data-audio="b-4"></button>
    <button class="lni-stop" data-audio="b-4"></button>
    <span class="col-3">B</span>
    <audio id="b-4">
    <source src="/audio/b-4.mp3" type="audio/mpeg">
    </audio>
</div>
<div class="row mb-2">
    <button class="lni-play" data-audio="e-5"></button>
    <button class="lni-reload" data-audio="e-5"></button>
    <button class="lni-stop" data-audio="e-5"></button>
    <span class="col-3">A</span>
    <audio id="e-5">
    <source src="/audio/e-5.mp3" type="audio/mpeg">
    </audio>
</div>
<?php } ?>

<?php if ($tanda == 'half') { ?>
<div class="btn-group mb-2 offset-11">
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

<div class="row mb-2">
    <button class="lni-play" data-audio="d#0"></button>
    <button class="lni-reload" data-audio="d#0"></button>
    <button class="lni-stop" data-audio="d#0"></button>
    <span class="col-3">D#</span>
    <audio id="d#0">
    <source src="/audio/d-sharp-0.mp3" type="audio/mpeg">
    </audio>
</div>
<div class="row mb-2">
    <button class="lni-play" data-audio="g#1"></button>
    <button class="lni-reload" datg#audio="g#1"></button>
    <button class="lni-stop" data-audio="g#1"></button>
    <span class="col-3">G#</span>
    <audio id="g#1">
    <source src="/audio/g-sharp-1.mp3" type="audio/mpeg">
    </audio>
</div>
    <div class="row mb-2">
    <button class="lni-play" data-audio="c#2"></button>
    <button class="lni-reload" data-audio="c#2"></button>
    <button class="lni-stop" data-audio="c#2"></button>
    <span class="col-3">C#</span>
    <audio id="c#2">
    <source src="/audio/c-sharp-2.mp3" type="audio/mpeg">
    </audio>
</div>
<div class="row mb-2">
    <button class="lni-play" data-audio="f#3"></button>
    <button class="lni-reload" data-audio="f#3"></button>
    <button class="lni-stop" data-audio="f#3"></button>
    <span class="col-3">F#</span>
    <audio id="f#3">
    <source src="/audio/f-sharp-3.mp3" type="audio/mpeg">
    </audio>
</div>
    <div class="row mb-2">
    <button class="lni-play" data-audio="a#4"></button>
    <button class="lni-reload" data-audio="a#4"></button>
    <button class="lni-stop" data-audio="a#4"></button>
    <span class="col-3">A#</span>
    <audio id="a#4">
    <source src="/audio/a-sharp-4.mp3" type="audio/mpeg">
    </audio>
</div>
<div class="row mb-2">
    <button class="lni-play" data-audio="d#5"></button>
    <button class="lni-reload" data-audio="d#5"></button>
    <button class="lni-stop" data-audio="d#5"></button>
    <span class="col-3">D#</span>
    <audio id="d#5">
    <source src="/audio/d-sharp-5.mp3" type="audio/mpeg">
    </audio>
</div>
<?php } ?>

<?php if ($tanda == 'dropD') { ?>
<div class="btn-group mb-2 offset-11">
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

<div class="row mb-2">
<button class="lni-play" data-audio="e-0"></button>
<button class="lni-reload" data-audio="e-0"></button>
<button class="lni-stop" data-audio="e-0"></button>
<span class="col-3">D</span>
<audio id="e-0">
<source src="/audio/e-0.mp3" type="audio/mpeg">
</audio>

</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">A</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">D</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">G</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">B</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">E</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<?php } ?>

<?php if ($tanda == 'dagad') { ?>
<div class="btn-group mb-2 offset-11">
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

<div class="row mb-2">
<button class="lni-play" data-audio="e-0"></button>
<button class="lni-reload" data-audio="e-0"></button>
<button class="lni-stop" data-audio="e-0"></button>
<span class="col-3">D</span>
<audio id="e-0">
<source src="/audio/e-0.mp3" type="audio/mpeg">
</audio>

</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">A</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">D</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">G</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">A</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">D</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<?php } ?>

<?php if ($tanda == 'whole') { ?>
<div class="btn-group mb-2 offset-11">
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

<div class="row mb-2">
<button class="lni-play" data-audio="e-0"></button>
<button class="lni-reload" data-audio="e-0"></button>
<button class="lni-stop" data-audio="e-0"></button>
<span class="col-3">D</span>
<audio id="e-0">
<source src="/audio/e-0.mp3" type="audio/mpeg">
</audio>

</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">G</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">C</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">F</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">A</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">D</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<?php } ?>

<?php if ($tanda == 'openC') { ?>
<div class="btn-group mb-2 offset-11">
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

<div class="row mb-2">
<button class="lni-play" data-audio="e-0"></button>
<button class="lni-reload" data-audio="e-0"></button>
<button class="lni-stop" data-audio="e-0"></button>
<span class="col-3">C</span>
<audio id="e-0">
<source src="/audio/e-0.mp3" type="audio/mpeg">
</audio>

</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">G</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">C</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">G</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">C</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">E</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<?php } ?>

<?php if ($tanda == 'openD') { ?>
<div class="btn-group mb-2 offset-11">
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

<div class="row mb-2">
<button class="lni-play" data-audio="e-0"></button>
<button class="lni-reload" data-audio="e-0"></button>
<button class="lni-stop" data-audio="e-0"></button>
<span class="col-3">D</span>
<audio id="e-0">
<source src="/audio/e-0.mp3" type="audio/mpeg">
</audio>

</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">A</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">D</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">F#</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">A</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">D</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<?php } ?>

<?php if ($tanda == 'openG') { ?>
<div class="btn-group mb-2 offset-11">
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

<div class="row mb-2">
<button class="lni-play" data-audio="e-0"></button>
<button class="lni-reload" data-audio="e-0"></button>
<button class="lni-stop" data-audio="e-0"></button>
<span class="col-3">D</span>
<audio id="e-0">
<source src="/audio/e-0.mp3" type="audio/mpeg">
</audio>

</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">G</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">D</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">G</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">B</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<div class="row mb-2">
<button class="lni-play" data-audio="a-1"></button>
<button class="lni-reload" data-audio="a-1"></button>
<button class="lni-stop" data-audio="a-1"></button>
<span class="col-3">D</span>
<audio id="a-1">
<source src="/audio/a-1.mp3" type="audio/mpeg">
</audio>
</div>
<?php } ?>

        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
<script>
$('.lni-play').click(function(){
    audio = $(this).data('audio')
    // console.log(audio)
    test = $('#'+audio).get(0).play()
    console.log(test)
})
$('.lni-reload').click(function(){
    audio = $(this).data('audio')
    var sound = $('#'+audio)
    console.log(sound)
    // sound.addEventListener('ended', function(){
    //     this.currentTime = 0;
    //     this.play();
    // }, false);
    // console.log(audio)
    // test = $('#'+audio).get(0).play()
    sound.get(0).loop = true
    sound.get(0).play()
})
$('.lni-stop').click(function(){
    audio = $(this).data('audio')
    // console.log(audio)
    test = $('#'+audio).get(0).pause()
    this.currentTime = 0
    console.log(test)
})

</script>

      </body>
</html>