@extends('bootsrap4sqm.layoutApp.master')
@section('isi')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-danger">
              <h4 class="card-title ">Tabel Create SQM</h4>
              <p class="card-category"> Harap dipakai dengan sebaik baiknya cuyyyyyyyy</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form action="sqmnew/post" method="POST">
                @csrf
                @if ($errors->any())
                  <div class="alert alert-warning" role="alert">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                @if (Session::has('success'))
                  <div class="alert alert-info" role="alert">
                      {{Session::get('success')}}
                  </div>
                @endif
                  <table class="table" id="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-group col-md-6">
                          <label for="inputCity">NCLI</label>
                          <input type="number" name="inputs[0][ncli]" class="form-control" id="inputCity">
                        </div>
                      </td>
                      <td>
                        <div class="form-group col-md-6">
                          <label for="inputCity">NO INET</label>
                          <input type="number" name="inputs[0][inet]" class="form-control" id="inputCity">
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-danger" id="add">Add</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <button type="submit" class="btn btn-success" id="add">SAVE</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
      var i = 0;
      $('#add').click(function(){
        ++i;
        $('#table').append(
              `
              <tr>
                      <td>
                        <div class="form-group col-md-6">
                          <label for="inputCity">NCLI</label>
                          <input type="number" name="inputs[`+i+`][inet]" class="form-control" id="inputCity">
                        </div>
                      </td>
                      <td>
                        <div class="form-group col-md-6">
                          <label for="inputCity">NO INET</label>
                          <input type="number" name="inputs[`+i+`][ncli]" class="form-control" id="inputCity">
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-info remove-table-row" id="add">Remove</button>
                      </td>
                    </tr>
              `
        );
      });

      $(document).on('click','.remove-table-row', function(){
          $(this).parents('tr').remove();
      });
  </script>
@endsection