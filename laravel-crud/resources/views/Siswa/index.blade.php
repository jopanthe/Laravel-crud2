@extends('layouts.master')

@section('content')


             @if(session('sukses'))
                      <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
              @endif
         <div class="row">
             <div claass="cool-6">
                <h1>Data Siswa</h1>

             </div>
               <div claass="cool-6">
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">

                  Tambah Data Siswa
                  </button>

                  <!-- Modal -->


             </div>

               <table class="table table-hover">

            <tr>
                <th>NAMA DEPAN</th>
                <th>NAMA BELAKANG</th>
                <th>JENIS KELAMIN</th>
                <th>AGAMA</th>
                <th>ALAMAT</th>
                <th>AKSI/th>

            </tr>
            @foreach($data_siswa as $siswa)
            <tr>
                <td>{{$siswa->nama_depan}}</td>
                <td>{{$siswa->nama_belakang}}</td>
                <td>{{$siswa->jenis_kelamin}}</td>
                <td>{{$siswa->agama}}</td>
                <td>{{$siswa->alamat}}</td>
                <td>
                    <a href="/siswa/{{$siswa->id}}/edit" class="btn-warning btn-sn">Edit</a>
                    <a href="/siswa/{{$siswa->id}}/delete" class="btn-warning btn-sn" onclick="return confirm('yakin mau dihapus?')">Delete</a>

                </td>
            </tr>
                @endforeach
            </table>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                    <div class="modal-body">
                       <form action="/siswa/create"methode="POST">
                        {{csrf_field()}}
                           <div class="form-group">
                                  <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
                                 <input name="Nama_Depan" type="text" class="form-control" id="exampeinputEmaill" aria-describedby="emailHelp" placeholder="Nama Depan">

                          <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Nama Belakang</label>
                                    <input name="Nama_Belakang" type="text" class="form-control" id="exampeinputEmaill" aria-describedby="emailHelp" placeholder="Nama Belakang">

                          <div class="form-group">
                                   <label for="exampleForControlSelect">Pilih Jenis Kelamin</label>
                                   <select class="form-select" aria-label="Default select example">
                                   <option value="L">Laki Laki</option>
                                   <option vakue="P">Perempuan</option>
                             </select>
                          </div>

                          <div class="form-group">
                                  <label for="exampleInputEmail1" class="form-label">Agama</label>
                                  <input name="Agama" type="text" class="form-control" id="exampeinputEmaill" aria-describedby="emailHelp" placeholder="Agama">
                          </div>

                          <div class="form-group">
                                 <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                  <input name="Alamat" type="text" class="form-control" id="exampeinputEmaill" aria-describedby="emailHelp" placeholder="Alamat">
                          </div>




                    </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        </div>

@endsection


