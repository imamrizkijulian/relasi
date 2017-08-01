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
          <form action="{{ route('anak.show', $anak->id) }}" method="post">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          {{csrf_field()}}
          <div class="form-group">
            <label class="control-lable">Nama</label>
            <input type="text" name="a" class="form-control" required="" value="{{$anak->nama}}" readonly="">

          <div class="form-group">
            <label class="control-lable">Nama Orangtua</label>
            <input class="form-control" type="text" name="o" readonly="" value="{{$anak->orangtua->nama_ayah}} & {{$anak->orangtua->nama_ibu}}">
              

          <div class="form-group">
            <label class="control-lable">Umur</label>
            <input type="text" name="u" class="form-control" required="" value="{{$anak->umur}}" readonly="">

          <div class="form-group">
            <label class="control-lable">Alamat</label>
            <textarea name="al" class="form-control" readonly="">{{$anak->alamat}}</textarea>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection