@extends('layout.master')
@section('isi')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Sqm Care</li>
        </ol>
      </nav>
      
    </div>
  </nav>
  
  <!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        @if(Session::has('message'))
                <div class="row">
                  <div class="col-12">
                    <div class=" p-0 py-2 px-4 mb-2 mt-n4">
                      <div class="alert alert-warning alert-dismissible text-white fade show" role="alert">
                        <span class="alert-icon align-middle">
                        <span class="material-icons text-md">
                        thumb_up_off_alt
                        </span>
                        </span>
                        <span class="alert-text"><strong>{{ Session::get('message') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    </div>
                  </div>
                </div>
            @endif
            @error('ncli')
            <div class="row">
              <div class="col-12">
                <div class=" p-0 py-2 px-4 mb-2 mt-n4">
                  <div class="alert alert-warning alert-dismissible text-white fade show" role="alert">
                    <span class="alert-icon align-middle">
                    <span class="material-icons text-md">
                    thumb_up_off_alt
                    </span>
                    </span>
                    <span class="alert-text"><strong>{{ $message }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>
              </div>
            </div>
            @enderror
            @error('inet')
            <div class="row">
              <div class="col-12">
                <div class=" p-0 py-2 px-4 mb-2 mt-n4">
                  <div class="alert alert-warning alert-dismissible text-white fade show" role="alert">
                    <span class="alert-icon align-middle">
                    <span class="material-icons text-md">
                    thumb_up_off_alt
                    </span>
                    </span>
                    <span class="alert-text"><strong>{{ $message }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>
              </div>
            </div>
            @enderror
        <div class="container">
           <div class="row">
              <div class="col-12">
                <div class=" p-0 py-2 px-4 mb-2 mt-n4">

                  <form action="{{route('sqm.store')}}" method="POST" >
                    @csrf
                    <div class="row">
                      <div class="col-md-3">
                        <div class="input-group input-group-outline my-3">
                          <label class="form-label">NCLI</label>
                          <input type="number" class="form-control @error('ncli') is-invalid @enderror" name="ncli" required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="input-group input-group-outline my-3">
                          <label class="form-label">NO INET</label>
                          <input type="number" class="form-control @error('inet') is-invalid @enderror" name="inet" required>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="input-group my-3">
                          {{-- <button class="btn btn-icon btn-3 btn-warning" data-toggle="tooltip" data-original-title="Edit user" type="button">
                            <span class="btn-inner--icon"><i class="material-icons">play_arrow</i></span>
                              <span class="btn-inner--text">
                                    
                              </span>
                          </button> --}}
                          <input type="submit" value="Simpan" class="btn btn-icon btn-3 btn-warning">
                          
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
           </div>
        </div>
        
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-warning shadow-warning border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Tabel Sqm Care</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <form action="" method="get">
              <div class="row">
                <div class="col-md-3">
                  <div class="ms-md-auto pe-md-3 d-flex align-items-center px-4 py-4">
                    <div class="input-group input-group-outline">
                      <label class="form-label">Type no inet...</label>
                      <input type="text" class="form-control" name="cari">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="ms-md-auto pe-md-3 d-flex align-items-center px-4 py-4">
                    <div class="input-group">
                      <input type="submit" value="Search" class="btn btn-icon btn-3 btn-warning">
                    </div>
                  </div>
                </div>
          </div>
            </form>
          </div>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0" id="sample_table">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NCLI</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO INET</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                  </tr>
                </thead>
                @foreach ($sqm as $dt)
                <tbody>
                  <tr>
                    {{-- <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">John Michael</h6>
                          <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                        </div>
                      </div>
                    </td> --}}
                    <td class="p-3">
                      <h6 class="mb-0 text-sm">{{$dt->ncli}}
                        @php
                            $waktu = date_diff($dt->created_at, now())-> h;
                          if (($waktu * 60) <= 5 ){
                                "<span class='badge bg-gradient-info'>new</span>";
                          }
                        @endphp
                      </h6>
                    </td>
                    <td>
                      <h6 class="mb-0 text-sm">{{$dt->inet}}</h6>
                    </td>
                    {{-- <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Online</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                    </td> --}}
                        <td class="align-middle">
                          <a href="https://ibooster.telkom.co.id/res/get_ukur_indikasi.php?serviceno%3D{{$dt->inet}}%26assetnum%3D{{$dt->ncli}}_{{$dt->inet}}_INTERNET" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" target="_blank">
                          <button class="btn btn-icon btn-3 btn-success"  type="button">
                            <span class="btn-inner--icon"><i class="material-icons">draw</i></span>
                            <span class="btn-inner--text">Create</span>
                          </button>
                          </a>
                            {{-- <button class="btn btn-icon btn-3 btn-info editbtn" data-toggle="tooltip" value="{{$dt->id}}" type="button" data-bs-toggle="modal" data-bs-target="#modal-form">
                              <button class="btn btn-icon btn-3 btn-info editbtn" data-toggle="tooltip" value="{{$dt->id}}" type="button">
                              <span class="btn-inner--icon"><i class="material-icons">display_settings</i></span>
                              <span class="btn-inner--text">Edit</span>
                            </button> --}}
                            {{-- <a href="{{route('sqm.edit',[$dt->id])}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" target="_blank">
                              <button class="btn btn-icon btn-3 btn-danger" data-toggle="tooltip" data-original-title="Edit user" type="button">
                                <span class="btn-inner--icon"><i class="material-icons">display_settings</i></span>
                                <span class="btn-inner--text">Edit</span>
                              </button>
                            </a> --}}
                          {{-- <form action="{{route('sqm.hapus',[$dt->id])}}" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-icon btn-3 btn-primary" data-toggle="tooltip" data-original-title="Edit user" type="submit">
                              <span class="btn-inner--icon"><i class="material-icons">delete_sweep</i></span>
                              <span class="btn-inner--text">Hapus</span>
                            </button>
                          </form> --}}
                          <a href="{{route('sqm.hapus',[$dt->id])}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <button class="btn btn-icon btn-3 btn-primary" data-toggle="tooltip" data-original-title="Edit user" type="button">
                              <span class="btn-inner--icon"><i class="material-icons">delete_sweep</i></span>
                              <span class="btn-inner--text">Hapus</span>
                            </button>
                          </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach  
              </table>
              <div class="row">
                <div class="col-12">
                  <div class=" p-0 py-2 px-4 mb-2 mt-n4">
                        {{$sqm->links()}} 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="footer py-4  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              Dibuat dengan <i class="fa fa-heart"></i> dari
              <a href="#" class="font-weight-bold" target="_blank">Ferdi Tim</a>
              Terimaksih.
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
</main>
@endsection
@section('script')
    {{-- <script>
      $(document).ready(function(){
      $(selector).on(events, function(){
          $(document).on('click','editbtn' function(){
            var id = $(this).val();
            alert(id);
            $('#modal-form').modal('show');

            $.ajax({
              type:"GET",
              url :"/sqm-edit"+id,
              success: function(response){
                $('#ncli').val(response.sqm.ncli);
                $('#inet').val(response.sqm.inet);             
              }

            });
          });
      });
    });
    </script> --}}
@endsection