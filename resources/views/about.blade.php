@extends('layouts.main')

@section('container')
    <section id="about" class="about">
<div class="container" data-aos="zoom-in" data-aos-delay="100">
      <div class="section-title">
        <h2>About Me</h2>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <img src="images/{{ $gambar }}" alt="{{$nama }}" class="img-fluid" width="600px" weight="600px">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3>{{$nama}}</h3>
          <p>
            {{$isi}}
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$email}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$hp}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$lahir}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$kota}}</span></li>

            </ul>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection