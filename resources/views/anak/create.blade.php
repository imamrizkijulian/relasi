@extends ('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <center><h1>Data Anak</h1></center>
        <div class="panel panel-primary">
        <div class="panel-heading">Data Anak
          <div class="panel-title pull-right">
          <a href="{{ URL::previous() }}">Kembali</a></div>
        </div>

        <div class="panel-body">
          <form action="{{ route('anak.store') }}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label class="control-lable">Nama</label>
            <input type="text" name="a" class="form-control" required="">
          
          <div class="form-group">
            <label class="control-lable">Nama Orangtua</label>
            <select class="form-control" name="o">
                @foreach($ortu as $data)
              <option value="{{$data->id}}">{{$data->nama_ayah}} & {{$data->nama_ibu}}
              </option>
                @endforeach
            </select>

          <div class="form-group">
            <label class="control-lable">Umur</label>
            <input type="text" name="u" class="form-control" required="">

          <div class="form-group">
            <label class="control-lable">Alamat</label>
            <input type="text" name="al" class="form-control" required="">

          <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-success">Reset</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection