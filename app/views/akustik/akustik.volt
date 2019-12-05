{% extends 'layouts/default.volt' %}
{% block content %}

<div class="row mb-4">
    <h1 class="uppercase">Acoustic Guitar Tuner</h1>
</div>

{% if tanda == "standard" %}
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
{% endif %}

{% if tanda == "half" %}
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
{% endif %}

{% if tanda == "dropD" %}
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
{% endif %}

{% if tanda == "dagad" %}
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
{% endif %}

{% if tanda == "whole" %}
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
{% endif %}

{% if tanda == "openC" %}
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
{% endif %}

{% if tanda == "openD" %}
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
{% endif %}

{% if tanda == "openG" %}
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
{% endif %}
{% endblock %}

{% block script %}
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
{% endblock %}