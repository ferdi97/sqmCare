@extends('bootsrap4sqm.layoutApp.master')
@section('isi')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        @error('inet')
            
              <div class="col-12">
                <div class=" p-0 py-2 px-4 mb-2 mt-n4">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{$message}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                </div>
              </div>
            
            @enderror

            @error('ncli')
            
            <div class="col-12">
              <div class=" p-0 py-2 px-4 mb-2 mt-n4">
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>{{$message}}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
              </div>
            </div>
          
          @enderror
        @if (session('message'))
        <div class="col-md-12">
            <div class="alert alert-success">
                <span>{{session('message')}}</span>
              </div>
        </div>
        
        @endif
        <div class="col-md-12">
          <div class="card card-profile ">
            <div class="card-header card-header">
                <div class="container">
                    <div class="row">
                       <div class="col-12">
                         <div class=" p-0 py-2 px-4 mb-2 mt-n4">
                            <form action="{{route('keterusan.store')}}" method="POST" >
                                @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="bmd-label-floating">NCLI</label>
                                            <input type="number" name="ncli"   class="form-control @error('ncli') is-invalid @enderror"  >
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="bmd-label-floating">NO INET</label>
                                            <input type="number" name="inet"   class="form-control @error('inet') is-invalid @enderror"  >

                                            {{-- required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"
                                            required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" --}}
                                            </div>
                                            </div>
                                            </div>
                                            <button type="submit" class="btn btn-danger pull-right">Simpan</button>
                                            <div class="clearfix"></div>
                                            <a href="http://10.128.16.78/pcf/index.php" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" target="_blank">
                                              <button class="btn btn-icon btn-3 btn-success"  type="button">
                                                <span class="btn-inner--icon"><i class="material-icons">rocket_launch</i></span>
                                                <span class="btn-inner--text">Buka PCF</span>
                                              </button>
                                              </a>
                            </form>
         
                           {{-- <form action="{{route('keterusan.store')}}" method="POST" >
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
                                   
                                   <input type="submit" value="Simpan" class="btn btn-icon btn-3 btn-warning">
                                   
                                 </div>
                               </div>
                             </div>
                           </form> --}}
                         </div>
                       </div>
                    </div>
                 </div>
              </div>
            <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-shopping" id="data_users_reguler">
                        <thead>
                            <tr>
                                <th class="text-left">No</th>
                                <th class="text-left">NCLI</th>
                                <th class="text-left">NO INET</th>
                                <th class="text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sqm as $key =>$value)
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$value->ncli}}
                                    {{-- @php
                                    $waktu = date_diff($value->created_at, now())-> h;
                                  if (($waktu * 60) <= 24 ){
                                       echo "<span class='badge bg-gradient-info'>new</span>";
                                  }
                                @endphp --}}
                                  </td>
                                  <td>{{$value->inet}}</td>
                                  <td class="td-actions text-left">
                                    <a href="https://ibooster.telkom.co.id/res/get_ukur_indikasi.php?serviceno%3D{{$value->inet}}%26assetnum%3D{{$value->ncli}}_{{$value->inet}}_INTERNET" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" target="_blank">
                                        <button class="btn btn-icon btn-3 btn-success"  type="button">
                                          <span class="btn-inner--icon"><i class="material-icons">draw</i></span>
                                          <span class="btn-inner--text">create</span>
                                        </button>
                                        </a>
                                        <a href="{{route('keterusan.hapus',[$value->id])}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            <button class="btn btn-info"  >
                                              <i class="material-icons">delete_sweep</i> Delete
                                            </button>
                                            </a>  
                                  </td>
                              </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Data keterusan Masih Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function() {
                        $('#data_users_reguler').DataTable();
                    } );
                    </script>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection