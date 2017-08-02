@extends ('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <center><h1>Edit Data Book</h1></center>
        <div class="panel panel-primary">
        <div class="panel-heading">Edit Data Book
          <div class="panel-title pull-right">
          <a href="{{ URL::previous() }}">Kembali</a></div>
        </div>

        <div class="panel-body">
          <form action="{{ route('book.update',$book->id)}}" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          {{csrf_field()}}
          <div class="form-group">
          <label class="control-lable">Title</label>
          <input type="text" name="title" class="form-control" required="" value="{{$book->title}}">

          <div class="form-group">
            <label class="control-lable">Author</label>
            <select class="form-control" name="author" value="{{$book->author}}">
                @foreach($author as $data)
              <option value="{{$data->id}}">{{$data->name}}
              </option>
                @endforeach
            </select>

          <div class="form-group">
          <label class="control-lable">Amount</label>
          <input type="text" name="amount" class="form-control" required="" value="{{$book->amount}}">

          <div class="form-group">
            <label class="control-lable">Cover</label>
            <input type="file" name="cover" class="form-control" required="" value="{{$book->cover}}"><br>


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