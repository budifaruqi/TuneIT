{% extends 'layouts/default.volt' %}
{% block content %}

<div class="row mb-4">
    <h1 class="uppercase">Acoustic Guitar Tuner</h1>
</div>

{% if tanda == "standard" %}
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
{% endif %}

{% if tanda == "half" %}
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
{% endif %}

{% if tanda == "dropD" %}
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
{% endif %}

{% if tanda == "dagad" %}
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
{% endif %}

{% if tanda == "whole" %}
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
{% endif %}

{% if tanda == "openC" %}
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
{% endif %}

{% if tanda == "openD" %}
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
{% endif %}

{% if tanda == "openG" %}
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
{% endif %}

{% endblock %}