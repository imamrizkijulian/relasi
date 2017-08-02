@extends ('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <center><h1>Edit Data Orang Tua</h1></center>
        <div class="panel panel-primary">
        <div class="panel-heading">Edit Data Author
          <div class="panel-title pull-right">
          <a href="{{ URL::previous() }}">Kembali</a></div>
        </div>

        <div class="panel-body">
          <form action="{{ route('book.show',$book->id)}}" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          {{csrf_field()}}
          <div class="form-group">
            <center><img src="{{asset('img/'.$book->cover.'')}}" height="200px" width="200px"></center>
          </div>

          <div class="form-group">
          <label class="control-lable">Title</label>
          <input type="text" name="title" class="form-control" required="" value="{{$book->title}}" readonly="">

          <div class="form-group">
            <label class="control-lable">Author</label>
            <input class="form-control" name="author" value="{{$book->authors->name}}" readonly="">
             
          <div class="form-group">
          <label class="control-lable">Amount</label>
          <input type="text" name="amount" class="form-control" required="" value="{{$book->amount}}" readonly="">
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection