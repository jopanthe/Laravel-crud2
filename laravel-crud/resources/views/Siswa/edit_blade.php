@extends('layouts.master')

@section('content')
                                <h1>Edit data siswa</h1>

                      @if(session('sukses'))
                               <div class="alert alert-success" role="alert">
                      {{session('sukses')}}

                    </div>
                         @endif
                               <div class="row">
                               <div class="col-lg-12"></div>
                               <form action="/siswa/{$siswa->}/update" methode="POST">
                     {{csrf_field()}}

                            <div class="form-group">
                                  <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                                 <input name="Nama_Depan" type="text" class="form-control" id="exampeinputEmaill" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">

                          <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                                    <input name="Nama_Belakang" type="text" class="form-control" id="exampeinputEmaill" aria-describedby="emailHelp" placeholder="Nama Belakang"value="{{$siswa->nama_belakang}}">

                          <div class="form-group">
                                   <label for="exampleForControlSelect">Pilih Jenis Kelamin</label>
                                   <select class="form-select" aria-label="Default select example">
                                   <option value="L"@if($siswa->jenis kelamin=='L')selected @endif>Laki Laki</option>
                                   <option vakue="P"@if($siswa->jenis kelamin=='P')selected @endif>Perempuan</option>
                             </select>
                          </div>

                          <div class="form-group">
                                  <label for="exampleInputEmail1" class="form-label">Agama</label>
                                  <input name="Agama" type="text" class="form-control" id="exampeinputEmaill" aria-describedby="emailHelp" placeholder="Agama"value="{{$siswa->agama}}">
                          </div>

                          <div class="form-group">
                                 <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                  <input name="Alamat" type="text" class="form-control" id="exampeinputEmaill" aria-describedby="emailHelp" placeholder="Alamat"required value="{{$siswa -> alamat}}">
                          </div>
                                  <button type="submit" class="btn btn-warning">Uptdate</button>
                        </form>




</div>
</div>


@endsection
