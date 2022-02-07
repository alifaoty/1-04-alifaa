@extends('layouts.main')

@section('container')
    <div class="title-top mb-5">
        <h2 class="fw-bold">Contact Us</h2>
    <form>
        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputname" placeholder="Nama">
        <label for="inputname">Nama</label>
        </div>
        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputemail" placeholder="Email">
        <label for="inputemail">Email</label>
        </div>
        <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Tinggalkan Pesan Disini" id="floatingTextArea" style="height: 100px"></textarea>
        <label for="floatingTextArea">Pesan</label>
        </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection