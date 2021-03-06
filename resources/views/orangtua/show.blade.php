@extends ('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <center><h1>Show Data Orang Tua</h1></center>
        <div class="panel panel-primary">
        <div class="panel-heading">Show Data Orangtua
          <div class="panel-title pull-right">
          <a href="{{ URL::previous() }}">Kembali</a></div>
        </div>

        <div class="panel-body">
          <form action="{{route('orangtua.update', $ortu->id)}}" method="POST">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          {{csrf_field()}}
          <div class="form-group">
            <label class="control-lable">Nama Ayah</label>
            <input type="text" name="a" class="form-control" required="" value="{{$ortu->nama_ayah}}" readonly="">
          
          <div class="form-group">
            <label class="control-lable">Nama Ibu</label>
            <input type="text" name="i" class="form-control" required="" value="{{$ortu->nama_ibu}}" readonly="">

          <div class="form-group">
            <label class="control-lable">Umur Ayah</label>
            <input type="text" name="ua" class="form-control" required="" value="{{$ortu->umur_ayah}}" readonly="">

          <div class="form-group">
            <label class="control-lable">Umur Ibu</label>
            <input type="text" name="ui" class="form-control" required=""
            value="{{$ortu->umur_ibu}}" readonly="">

          <div class="form-group">
            <label class="control-lable">Alamat</label>
            <textarea class="form-control" rows="10" name="al" required="" readonly="">{{$ortu->alamat}}</textarea>
          </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection